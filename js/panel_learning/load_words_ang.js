// Słówka zostaną umieszczone w clasie '.id' '.ang' '.pl' -->

const loadRows = './../../php/panel_learning/load_rows.php';
console.log("Udało się załadować plik load_words_ang");
$(document).ready(function() {
    function loadData() {
      $.ajax({
        url: load_Rows,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          // wyświetlenie danych w klasach
          for (const i = 0; i < data.length; i++) {
            if(data[i]['flaga']===1){
              $('.ang' + i).removeClass('.ang' + i).addClass(".ang" + i + ".correct-answer");
              document.querySelector(".ang" + i + " " + "correct-answer").innerHTML = data[i]['ang'];
            }
            if(data[i]['flaga']===0){
              document.querySelector('.ang' + i).innerHTML = data[i]['ang'];
            }
            if (data[i]['flaga']===1){
              document.querySelector('.my_word').innerHTML = data[i]['pl'];
            };
          }
        },
        error: function(xhr, status, error) {
          console.log('Error: ' + error.message);
        }
      });
    }
  
    // Wywołanie funkcji Ajax po przeładowaniu strony
    loadData();

    for(const i = 0; i < 6; i++){
        // Sprawdzamy, czy istnieje element z klasą ".ang"+i+".correct-answer"
      if ($(".ang"+i+".correct-answer").length > 0) {
        console.log("Element z klasą "+".ang"+i+".correct"+" correct' istnieje na stronie.");
        // Wywołanie funkcji Ajax po kliknięciu na element z klasą ".ang"+i+".correct-answer"
          $(".ang"+i+".correct-answer").click(function() {
          loadData();
        });
      } else {
        
      }
    }

  });

// ".ang"+i+".correct-answer" to klasa z poprawną odpowiedzią-->
