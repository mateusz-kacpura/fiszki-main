
<style>

/* Styl dla diva "my_word" */
.my_word {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  background-color: #ccc;
  margin-bottom: 10px;
}

    /* Style dla div-a głównego */
.test {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
}

/* Style dla div-ów "wiersz" */
.row {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 100%;
}

/* Style dla div-ów "word" */
.word {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 10px;
}

/* Styl dla górnego div-a "word" */
.top {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

/* Styl dla dolnego div-a "word" */
.bottom {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 10px; /* dodajemy trochę odstępu od górnego div-a "word" */
}

/* Style dla div-ów "img" */
.img0, .img1, .img2, .img3, .img4, .img5 {
  width: 200px;
  height: 200px;
  background-color: #ccc; /* ustawienie koloru tła */
  border-radius: 2%; /* ustawienie zaokrąglenia krawędzi */
}

/* Style dla div-ów "ang" */
.ang0, .ang1, .ang2, .ang3, .ang4, .ang5 {
  width: 200px;
  height: 50px;
  text-align: center;
}

.ang0correct-answer .ang1correct-answer .ang2correct-answer .ang3correct-answer .ang4correct-answer .ang5correct-answer{
  width: 200px;
  height: 50px;
  text-align: center;
}



</style>

<?php
 // bTBPnBp9PFo4g1y1tvnqZ4fB require __DIR__ .'/vendor/mustache/mustache/src/Mustache/Autoloader.php';
// Mustache_Autoloader::register();
//  $m = new Mustache_Engine; echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello, World!"
require_once "polaczeniePDO.php";
if(!$pdo){
    header('location: index.php');//przekierowanie do logowania
}
require_once "php\panel_admin\choose_table\select_table_by_flag.php";
require_once "php/__navigate_page.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include('html/header.php') ?>

<body>

<?php 
$file_name = basename(__FILE__);
navigate_page($file_name);
select_table_by_flag_true($pdo);        
?>
	<div id="output"></div>
<div class="test">
  <div class="my_word">Przykład</div>
  <div class="row">
    <div class="word">
        <div class="top">
            <div class="img0"></div>
        </div>
        <div class="bottom">
            <div class="ang0"></div>  
        </div>
    </div>
    <div class="word">
        <div class="top">
            <div class="img1"></div>
        </div>
        <div class="bottom">
            <div class="ang1"></div>  
        </div>
    </div>
    <div class="word">
        <div class="top">
            <div class="img2"></div>
        </div>
        <div class="bottom">
            <div class="ang2"></div>  
        </div>
    </div>
 </div>
 <div class="row">
    <div class="word">
        <div class="top">
            <div class="img3"></div>
        </div>
        <div class="bottom">
            <div class="ang3"></div>  
        </div>
    </div>
    <div class="word">
        <div class="top">
            <div class="img4"></div>
        </div>
        <div class="bottom">
            <div class="ang4"></div>  
        </div>
    </div>
    <div class="word">
        <div class="top">
            <div class="img5"></div>
        </div>
        <div class="bottom">
            <div class="ang5"></div>  
        </div>
    </div>
 </div>
</div>


<?php require_once "php/panel_learning/html/audio_controls.php" ?>
             
<div class="random_button"><i class="icon-arrows-ccw"></i></div>

<?php require_once "php/panel_learning/html/tryby_nauki.php"; ?>

</body>
<?php include('js\panel_learning\__scripts_routes.php') ?>



</html>
<script>

// Słówka zostaną umieszczone w clasie '.id' '.ang' '.pl' -->
console.log("Udało się załadować plik load_words_ang");
$(document).ready(function() {
    function loadData() {
      // pobieram zawartość elementu z klasą "active"
      const table = $('.active').html();
      // wyświetl zawartość w konsoli
      console.log(table);
      $.ajax({
        url: 'php/panel_learning/load_rows.php',
        type: 'GET',
        dataType: 'json',
        data: {data: JSON.stringify(table)}, // koduje zmienną table na format JSON, abym mógł ją przesłać za pomocą AJAX do PHP
        success: function(data) {
          // wyświetlenie danych w klasach
          for (var i = 0; i < data.length; i++) {
            if(data[i].flaga===1){
                // znajdujemy element z klasą "ang"
                var element = document.querySelector(".ang" + i);

                // dodajemy klasę "ang.correct"
                element.classList.add("correct-answer");

                // wypełniam zawartością klasę "ang" + i correct-answer
                document.querySelector(".ang" + i + ".correct-answer").innerHTML = data[i].ang;
            }
            if(data[i].flaga===0){
              document.querySelector('.ang' + i).innerHTML = data[i].ang;
            }
            if (data[i].flaga===1){
              document.querySelector('.my_word').innerHTML = data[i].pl;
            };
          }
        },
        error: function(xhr, status, error) {
        var errorMessage = 'Wystąpił błąd: ';
        if (xhr.status === 0) {
        errorMessage += 'Nie można połączyć się z serwerem.';
        } else if (xhr.status === 404) {
        errorMessage += 'Nie znaleziono żądanego pliku.';
        } else if (xhr.status === 500) {
        errorMessage += 'Wewnętrzny błąd serwera.';
        } else if (error === 'parsererror') {
        errorMessage += 'Nie można przetworzyć odpowiedzi JSON.';
        } else if (error === 'timeout') {
        errorMessage += 'Przekroczono czas oczekiwania na odpowiedź serwera.';
        } else if (error === 'abort') {
        errorMessage += 'Anulowano żądanie.';
        } else {
        errorMessage += 'Nieznany błąd: ' + xhr.responseText;
        }
        console.log(errorMessage);
        }
    });
    }
  
    // Wywołanie funkcji Ajax po kliknieciu
    $('.select').on('click', function() {
    // Kod, który ma się wykonać po kliknięciu w element o klasie "select"
    console.log('Kliknięto w element o klasie "select"');
    loadData();    
    });


    for(var i = 0; i < 6; i++){
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
</script>