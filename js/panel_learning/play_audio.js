// Utwórz nowy obiekt Audio
const word = 'capitan';
word.replace(/\s+/g, '+');
const fileName = word+'.jpg';
const audio = new Audio(fileName);

// Zdefiniuj funkcję, która będzie odtwarzać dźwięk
function playAudio() {
  audio.play();
}

// Zdefiniuj funkcję, która zatrzyma odtwarzanie dźwięku
function stopAudio() {
  audio.pause();
  audio.currentTime = 0;
}

// Funkcja obsługi zdarzeń, która będzie reagować na naciśnięcia klawiszy i kliknięcia na elementy o klasie ".word_select"
function handleEvent(event) {
  if (event.type === "keydown") {
    if (event.key === "p") {
      playAudio();
    } else if (event.key === "s") {
      stopAudio();
    } else if (event.key === "r") {
      stopAudio();
      playAudio();
    }
  } else if (event.type === "click" && event.target.classList.contains("word_select")) { // funkcja, która będzie ragowała na naciśnięcie na element klasy word_select
    playAudio();
  }
}

// Dodaj nasłuchiwanie zdarzeń na cały dokument
document.addEventListener("keydown", handleEvent);
document.addEventListener("click", handleEvent);