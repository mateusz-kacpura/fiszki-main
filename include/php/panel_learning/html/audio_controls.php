<div class="class_nav_contener">
<button  class="button_delete" id="przycisk">USUŃ WYRAŻENIE Z PLANU NAUKI</button>
<button  class="button_add" id="przycisk">DODAJ WYRAŻENIE DO ZESTAWU</button> 
</div>

<div class="class_audio_main">
                <h2>Ustawienia dzwięku</h2>
                <div class="class_audio_information">
                    <div id="length">Długość:</div>
                    <div id="source">Źródło:</div>
                    <div id="status" style="color:red;">Status: Ładowanie</div></div>
                <hr>
                <h2>Zarządzaj</h2>
                <div class="class_audio_contener">
                    <button class="button_audio" id="play">Odtwarzaj</button>
                    <button class="button_audio" id="pause">Zatrzymaj</button>
                    <button class="button_audio" id="restart">Jeszcze raz</button>
                </div>
                <hr>
                <h2>Informacje</h2>
                <div class="class_audio_contener">
                    <div id="Aktualny czas odtwarzania">0</div>
                </div>           
</div>
<style>
.class_audio_main {
    width: 100% !important;
    height: 100% !important;
}

.class_audio_information {
    margin-left: 2% !important;
    margin-right: 0% !important;
}

.class_audio_contener {
    display: flex;
    justify-content: center;
    margin: 0 auto;
    padding: 10px;
}

.class_nav_contener {
    flex-wrap: nowrap, wrap, wrap-reverse;
    width: 1100px;
    height: 90px;
    justify-content: center;
    margin: 0 auto;
    padding: 10px;
}

.button_delete {
    flex-wrap: nowrap, wrap, wrap-reverse;
    width: 500px;
    height: 50px;
    border: 0px;
    margin: 10px;
    text-align: center;
    font-size:xx-large;
    text-shadow:2ex;
    font-weight:900;
    font-stretch:wider;
    font-family: monospace;
    font-weight: bold;
    background-color: red;
    color: white;
}

.button_add {
    flex-wrap: nowrap, wrap, wrap-reverse;
    width: 500px;
    height: 50px;
    border: 0px;
    margin: 10px;
    text-align: center;
    font-size:xx-large;
    text-shadow:2ex;
    font-weight:900;
    font-stretch:wider;
    font-family: monospace;
    background-color: yellowgreen;
    color: white;
}

.button_audio {
    display:table-cell;
    width: 150px;
    height: 50px;
    border: 0px;
    margin: 10px;
    text-align: center;
    font-size: large;
    text-shadow:2ex;
    font-weight: bold;
}

  </style>