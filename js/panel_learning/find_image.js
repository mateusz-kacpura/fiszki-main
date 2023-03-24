  // ten kod szuka zdjęcia ilustracyjnego słowka w folderze aplikacji 
  // jeśli nie znajdzie podejmuję próbę znalezienia go w internecie
  // jeśli znajdzie to zapisze go do folderu zawierającego ilustracje
  // na koniec wyświetli zdjęcia na stronie

  // te operacje są podejmowane dla 6 słówek równocześnie przy odświerzeniu

  const fs = require('fs');
  const https = require('https');
  const path = require('path');

  const word = "";
  const angClasses = ["ang0", "ang1", "ang2", "ang3", "ang4", "ang5"]; // stąd pobieram słówko
  const imgClasses = ["img0", "img1", "img2", "img3", "img4", "img5"]; // tutaj wyświetlam zdjęcie na stronie
  const urlPath = 'https://www.ang.pl/img/slownik/'; // internetowa ścieżka zdjęcia jeśli istnieje pobierze do folderu folderPath
  const folderPath = './words/img'; // ścieżka zdjęcia na dysku

  for (const i = 0; i < angClasses.length; i++) {
    const angElements = $("." + angClasses[i]);
    const imgElements = $("." + imgClasses[i]);
    angElements.each(function() {
      word += $(this).html();
      word.replace(/\s+/g, '+'); // jeśli znajdzie spację zamieni na +
      const fileName = word+'.jpg';
      const filePath = path.join(folderPath, fileName);
      const fileUrl = urlPath+word+'.jpg';
      
      fs.access(filePath, (err) => {
        if (err) {
          console.log(`Plik ${fileName} nie istnieje.`);
      
          // pobieramy plik z adresu URL i zapisujemy go w folderze "./words/img"
          const file = fs.createWriteStream(filePath);
          https.get(fileUrl, (res) => {
            if (res.statusCode === 200) {
              res.pipe(file);
              $(imgElements).prepend("<img src='" + folderPath + fileName + "'>"); // dodaje do elementu .img+i element img
              console.log(`Pobieranie pliku ${fileName}...`);
            } else {
              console.log(`Nie można pobrać pliku ${fileName}. Kod odpowiedzi: ${res.statusCode}`);
            }
          });
        } else {
          $(imgElements).prepend("<img src='" + folderPath + fileName + "'>");
          console.log(`Plik ${fileName} istnieje.`);
        }
      });
      
      // obsługujemy błędy pobierania pliku
      https.on('error', (err) => {
        console.error(`Błąd pobierania pliku: ${err.message}`);
      });
    });
  }

