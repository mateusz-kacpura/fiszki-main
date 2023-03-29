/* let text = array1[random_words];
        
text = text.replace(/\s/g, "_");
text = text.replace("a_", "");
text = text.replace("an_", "");
text = text.replace("?", "");
text = text.replace("!", "");
console.log(text);

if(typeof(audioElement) != "undefined" && audioElement !== null) { 

        audioElement.pause();

} else {

        audioElement = document.createElement('audio'); 

}

audioElement.currentTime = 0;
$ ('audio').attr('src', 'https://www.diki.pl//images-common/en/mp3/'+text+'.mp3');
audioElement.setAttribute('src', 'https://www.diki.pl//images-common/en/mp3/'+text+'.mp3');
/*dodane oststnio */

/* audioElement.play(); 
audioElement.addEventListener('ended', function() {
    this.play();
}, false);

audioElement.addEventListener("canplay",function(){
    $("#length").text("Duration:" + audioElement.duration + " seconds");
    $("#source").text("Source:" + audioElement.src);
    $("#status").text("Status: Ready to play").css("color","green");
});

audioElement.addEventListener("timeupdate",function(){
    $("#currentTime").text("Current second:" + audioElement.currentTime);
});
                                      
$('#play').click(function(atrybute) {
    audioElement.play();                            
    $("#status").text("Status: Playing");
});

var audio = 
audio.play();


$("#.choices item highlighted")
$(".choices.item.highlighted").find("p").text()

new Audio('https://www.diki.pl//images-common/en/mp3/'+$(".choices.item.highlighted").find(".word").replace(/\s+/g, "+").text()+'.mp3').play();
replace(searchText.charAt(0), '');


console.log($(".choices.item.highlighted").find("p").text()).replace(searchText.charAt(0), '');

console.log.replace($(".choices.item.highlighted").find("p").text().charAt(0), '');

// znajdź element z klasą "choices.item.highlighted"
const highlightedItem = document.querySelector('.choices.item.highlighted');

// pobierz element paragrafu z klasą "word"
const wordElement = highlightedItem.querySelector('.word');

// pobierz tekst z elementu paragrafu
const wordText = wordElement.textContent;

// usuń pierwszy znak z tekstu
const modifiedText = wordText.substring(1);

// wypisz zmodyfikowany tekst w konsoli
console.log(modifiedText);

// odtwórz dzwięk pobrany z serisu diki
new Audio('https://www.diki.pl//images-common/en/mp3/'+modifiedText+'.mp3').play();



var result = text.substr(text.indexOf(" ") + 1); // usuwamy wszystko przed spacja i zapisujemy wynik

console.log(result); // wyświetlamy wynik w konsoli

$(".choices.item.highlighted").find("p").substr($(".choices.item.highlighted").find("p").indexOf(" ") + 1);

console.log($(".choices.item.highlighted").find(".word").text());

new Audio('https://www.diki.pl//images-common/en/mp3/'+$(".choices.item.highlighted").find(".word").text()+'.mp3').play();

$(".choices.item.highlighted").click(function() {
    new Audio('https://www.diki.pl//images-common/en/mp3/'+$(this).find(".word").text()+'.mp3').play();
  });
click(new Audio('https://www.diki.pl//images-common/en/mp3/'+$(this).find(".word").text()+'.mp3').play());



document.querySelectorAll('.choices.item.highlighted').forEach(function(item) {
    item.addEventListener('click', function() {
      var word = this.querySelector('.word').textContent;
      var audioSrc = 'https://www.diki.pl//images-common/en/mp3/' + word.replace(/\s+/g, '+') + '.mp3';
      var audio = new Audio(audioSrc);
      audio.play();
    });
  });
  
  document.addEventListener('keydown', function(event) {
    if (event.key === 'p') {
      document.querySelectorAll('.choices.item.highlighted').forEach(function(item) {
        item.addEventListener('click', function() {
          var word = this.querySelector('.word').textContent;
          var audioSrc = 'https://www.diki.pl//images-common/en/mp3/' + word.replace(/\s+/g, '+') + '.mp3';
          var audio = new Audio(audioSrc);
          console.log(audioSrc);
          audio.play();
        });
      });
    }
  });


  // ten kod znajduje odpowiednie zdjęcie na stronie odpowiadającefo odpowiedniemu słówku i pobiera je do wskazanego folderu strony ./word/img
  const fs = require('fs');
  const https = require('https');
  const path = require('path');

  const word = "capitan"; // tutaj powinna zostać pobrane słówko z odpowiedniego sleketora
  word.replace(/\s+/g, '+'); // jeśli znajdzie spację zamieni na +
  const fileName = word+'.jpg';
  const folderPath = './words/img';
  const filePath = path.join(folderPath, fileName);
  const fileUrl = 'https://www.ang.pl/img/slownik/'+word+'.jpg';
  
  fs.access(filePath, (err) => {
    if (err) {
      console.log(`Plik ${fileName} nie istnieje.`);
  
      // pobieramy plik z adresu URL i zapisujemy go w folderze "./words/img"
      const file = fs.createWriteStream(filePath);
      https.get(fileUrl, (res) => {
        if (res.statusCode === 200) {
          res.pipe(file);
          console.log(`Pobieranie pliku ${fileName}...`);
        } else {
          console.log(`Nie można pobrać pliku ${fileName}. Kod odpowiedzi: ${res.statusCode}`);
        }
      });
    } else {
      console.log(`Plik ${fileName} istnieje.`);
    }
  });
  
  // obsługujemy błędy pobierania pliku
  https.on('error', (err) => {
    console.error(`Błąd pobierania pliku: ${err.message}`);
  });

  */



