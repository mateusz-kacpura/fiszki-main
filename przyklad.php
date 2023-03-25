
<style>

/* Styl dla diva "my_word" */
.my_word {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
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
.word0, .word1, .word2, .word3, .word4, .word5  {
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
  width: 400px;
  height: 267px;
  background-color: #ccc; /* ustawienie koloru tła */
  border-radius: 2%; /* ustawienie zaokrąglenia krawędzi */
}

/* Style dla div-ów "ang" */
.ang0, .ang1, .ang2, .ang3, .ang4, .ang5 {
  width: 200px;
  height: 50px;
  text-align: center;
}

/* Style dla div-ów "word" */
.word0.checked, .word1.checked, .word2.checked, .word3.checked, .word4.checked, .word5.checked  {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 10px;
  background-color: greenyellow; 
}

/* Style dla div-ów "word" */
.word0.wrong, .word1.wrong, .word2.wrong, .word3.wrong, .word4.wrong, .word5.wrong  {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 10px;
  background-color: red; 
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
    <div class="word0" id="myAudio">
        <div class="top">
            <div class="img0"><img scr=""></div>
        </div>
        <div class="bottom">
            <div class="ang0"></div>  
        </div>
    </div>
    <div class="word1" id="myAudio">
        <div class="top">
            <div class="img1"><img scr=""></div>
        </div>
        <div class="bottom">
            <div class="ang1"></div>  
        </div>
    </div>
    <div class="word2" id="myAudio">
        <div class="top">
            <div class="img2"><img scr=""></div>
        </div>
        <div class="bottom">
            <div class="ang2"></div>  
        </div>
    </div>
 </div>
 <div class="row">
    <div class="word3" id="myAudio">
        <div class="top">
            <div class="img3"><img scr=""></div>
        </div>
        <div class="bottom">
            <div class="ang3"></div>  
        </div>
    </div>
    <div class="word4" id="myAudio">
        <div class="top">
            <div class="img4"><img scr=""></div>
        </div>
        <div class="bottom">
            <div class="ang4"></div>  
        </div>
    </div>
    <div class="word5" id="myAudio">
        <div class="top">
            <div class="img5"><img scr=""></div>
        </div>
        <div class="bottom">
            <div class="ang5"></div>  
        </div>
    </div>
 </div>
</div>


<?php require_once "php/panel_learning/html/audio_controls.php" ?>
             

<?php require_once "php/panel_learning/html/tryby_nauki.php"; ?>

</body>
<?php include('js\panel_learning\__scripts_routes.php') ?>



</html>
<script>
$(document).ready(function() {
// funkcja opóźniajaca czas wykonywania kodu
    function delayExecution() {
    setTimeout(function() {
        // kod do wykonania z opóźnieniem
    }, 5000); // czas opóźnienia w milisekundach
    }
    
function replaceImg(PATH, i) {
  const imgDiv = document.querySelector('.img'+i); // pobieramy div z klasą img
  const img1 = document.querySelector('.img'+i+' img'); // pobieramy element img1 za pomocą selektora classy div
  const img2 = document.createElement('img'); // tworzymy nowy element img
  img2.src = PATH; // ustawiamy jego źródło
  imgDiv.replaceChild(img2, img1); // zamieniamy img1 na img2
}

let audio = null; // deklarujemy zmienną, w której będziemy przechowywać obiekt Audio

function playSoundOnce(path) {
  //audio = document.getElementById("myAudio"); // pobranie starym obiektu audio
  //audio.pause(); // zatrzymanie odtwarzania
  //audio.src = path;   
  // funkcja przyjmuje ścieżkę do dźwięku jako argument
  // audio = document.getElementById("myAudio"); 
  if (audio !== null) { // sprawdzamy, czy dźwięk jest już odtwarzany
    audio.pause(); // jeśli tak, przerywamy odtwarzanie
    audio.currentTime = 0; // ustawiamy czas odtwarzania na początek
  }

  audio = new Audio(path); // tworzymy nowy obiekt Audio z podaną ścieżką
  audio.src = path;
  audio.load();
  audio.pause();
  audio.currentTime = 0;
  audio.play(); // odtwarzamy dźwięk
  audio.remove();
}

// funkcja wysyła i odbiera ścieżki z pliku load_img.php
function load_audio() {
        let word = "";
        for (let i = 0; i < 5; i++) {
            word = $('.ang0').html();
                $.ajax({
                    url: 'php/panel_learning/AJAX/load_audio.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {data: JSON.stringify(word)}, // koduje zmienną table na format JSON, abym mógł ją przesłać za pomocą AJAX do PHP
                    success: function(data) {
                    // wyświetlenie danych w klasach
                    for (let i = 0; i < 6; i++) {
                      let audioPath = data[i];
                      $('.word'+i).each(function() {
                          $(this).removeAttr('data-audio-path');
                          $(this).attr('data-audio-path', audioPath);
                      });
                      $('.word'+i).click(function() {
                        // let audioPath = $(this).data('data-audio-path');
                        // console.log('audioPath');
                        playSoundOnce(audioPath);
                      });
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
    }

// funkcja wysyła i odbiera ścieżki z pliku load_img.php
function load_img() {
  delayExecution();
        let word = "";
        for (let i = 0; i < 5; i++) {
            word = $('.ang0').html();
            console.log(i);
            console.log(word);
                $.ajax({
                    url: 'php/panel_learning/AJAX/load_img.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {data: JSON.stringify(word)}, // koduje zmienną table na format JSON, abym mógł ją przesłać za pomocą AJAX do PHP
                    success: function(data) {
                    // wyświetlenie danych w klasach
                    for (let i = 0; i < 6; i++) {
                      let PATH = data[i];
                      replaceImg(PATH, i);
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
    }

function randData() {
      // pobieram zawartość elementu z klasą "active"
      const table = $('.active').html();
      // wyświetl zawartość w konsoli
      console.log(table);
      $.ajax({
        url: 'php/panel_learning/AJAX/rand_rows.php',
        type: 'GET',
        dataType: 'json',
        data: {data: JSON.stringify(table)}, // koduje zmienną table na format JSON, abym mógł ją przesłać za pomocą AJAX do PHP
        success: function() {

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
        loadData();
        load_img();
        load_audio();
        }
        console.log(errorMessage);
        }
    }); 
}

function replaceAngContent(newContent, i) {
  let angDivs = document.querySelectorAll(".ang"+i);
  for (let i = 0; i < angDivs.length; i++) {
    let angDiv = angDivs[i];
    while (angDiv.firstChild) {
      angDiv.removeChild(angDiv.firstChild);
    }
    angDiv.appendChild(document.createTextNode(newContent));
  }
}

function replaceAngContentMyWord(newContent) {
  let angDivs = document.querySelectorAll(".my_word");
  for (let i = 0; i < angDivs.length; i++) {
    let angDiv = angDivs[i];
    while (angDiv.firstChild) {
      angDiv.removeChild(angDiv.firstChild);
    }
    angDiv.appendChild(document.createTextNode(newContent));
  }
}

function loadData() {
  delayExecution();
      $.ajax({
        url: 'php/panel_learning/AJAX/load_rows.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          // wyświetlenie danych w klasach
          for (let i = 0; i < 6; i++) {
            if(data[i].flaga===0){
              let word = data[i].ang;
              $('.ang'+i+'.correct-answer').removeClass('correct-answer').addClass('ang'+i); // działa poprawnie
              $('.word'+i+'.checked').removeClass('checked').addClass('word'+i); // działa poprawnie
              $('.word'+i+'.wrong').removeClass('wrong').addClass('word'+i); // działa poprawnie
              replaceAngContent(word, i);
            }
            if (data[i].flaga===1){
              $('.word'+i+'.checked').removeClass('checked').addClass('word'+i); // działa poprawnie

              // znajdujemy element z klasą "ang"
              let element = document.querySelector(".ang" + i);

              // dodajemy klasę "ang.correct"
              element.classList.add("correct-answer");

              // wypełniam zawartością klasę "ang" + i correct-answer
              document.querySelector(".ang" + i + ".correct-answer").innerHTML = data[i].ang;

              let word = data[i].pl;
              replaceAngContentMyWord(word);
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
    randData();
    });

    for(let i = 0; i < 6; i++){
      // znajdź wszystkie elementy o klasie 'word'
      const wordEls = document.querySelectorAll('.word'+i);

      // dodaj nasłuchiwanie na kliknięcie dla każdego elementu 'word'
        wordEls.forEach(function(wordEl) {
        wordEl.addEventListener('click', handleClick);
      });
    }

    // funkcja, która będzie wywoływana po kliknięciu
    function handleClick() {
      const correctEl = this.querySelector('.correct-answer');
      if (correctEl) {
        if (this.classList.contains('checked')) {
          // jeśli kliknięty element ma już klasę 'checked' i zawiera element o klasie 'correct-answer',
          // to wywołaj funkcję randData()
          randData();
        } else {
          // jeśli kliknięty element zawiera element o klasie 'correct-answer',
          // to dodaj klasę 'checked'
          this.classList.add('checked');
        }
      } else {
        // jeśli kliknięty element nie zawiera elementu o klasie 'correct-answer',
        // to dodaj klasę 'wrong'
        this.classList.add('wrong');
      }
    }

});
</script>



<script>

</script>