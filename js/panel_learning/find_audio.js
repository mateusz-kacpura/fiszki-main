  // ten kod znajduje odpowiednie zdjęcie na stronie odpowiadającefo odpowiedniemu słówku i pobiera je do wskazanego folderu strony ./word/img
  const fs = require('fs');
  const https = require('https');
  const path = require('path');

  for(const i = 0; i < 6; i++){
      // Sprawdzamy, czy istnieje element z klasą ".ang"+i+".correct-answer"
    if ($(".ang"+i+".correct-answer").length > 0) {
      console.log("Element z klasą "+".ang"+i+".correct"+" correct' istnieje na stronie.");
      const word = $(".ang"+i+".correct-answer").text(); // tutaj powinna zostać pobrane słówko z odpowiedniego sleketora
      word.replace(/\s+/g, '+'); // jeśli znajdzie spację zamieni na +
        const fileName = word+'.jpg';
        const folderPath = './words/audio/mp3';
        const filePath = path.join(folderPath, fileName);
        const fileUrl = 'https://www.ang.pl/sound/dict/'+word+'.mp3';
        
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


    } else {
      
    }
  }

  