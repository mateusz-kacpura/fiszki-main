<?php
 // bTBPnBp9PFo4g1y1tvnqZ4fB require __DIR__ .'/vendor/mustache/mustache/src/Mustache/Autoloader.php';
// Mustache_Autoloader::register();
//  $m = new Mustache_Engine; echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello, World!"
include('baza.php');//sprawdzam połączenie
if(!$connect){
    header('location: index.php');//przekierowanie do logowania
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('html/header.php') ?>

<body>
<h2>NAUKA</h2>

<div class="select" >

<button class="fiszki" id="przycisk">NAUKA</button>
<button class="zestawy"  id="zestawy">ZARZĄDZAJ ZESTAWAMI</button>

</div>
<h2>AKTYWNE ZESTAWY</h2>
    <div class="select">
        <?php require_once "table_select.php" ?>
    </div>
    <div class="panel"><span></span><span></span>  </div>
     
        <center>
                <h2>Sound Information</h2>
                <div id="length">Duration:</div>
                <div id="source">Source:</div>
                <div id="status" style="color:red;">Status: Loading</div>
                <hr>
                <h2>Control Buttons</h2>
                <button id="play">Play</button>
                <button id="pause">Pause</button>
                <button id="restart">Restart</button>
                <hr>
                <h2>Playing Information</h2>
                <div id="currentTime">0</div>               
                                                     </center>
                
    <a class="log_out" href="table_settings/log_out.php">Wyloguj</a>
    <div class="random_button"><i class="icon-arrows-ccw"></i></div>
                
    <div class="menu">
        <div class="menubutton"><i class="icon-cog-alt"></i></div>
        <div class="menu-content"> 
            <div>
                <h1>Operacje na słówkach</h1>
                <?php include "name_table.php"; ?>
                <br>
                
                <div><br><h2>DODAĆ</h2><a href="wyswietl_tablice.php">Tablice</a>
                <br>
                <input type="text" name="add-v1" placeholder="Angielskie" style="width: 150px">
                <input type="text" name="add-v2" placeholder="Polskie" style="width: 150px">
                <input type="text" name="add-v3" placeholder="Zdanie" style="width: 550px">
                <button class="add">DODAJ</button>
                </div>
                 <div><br><h2>Zaktualizować</h2><br>
                       ID=<input type="text"  name="delete-id"  name="update-id"  placeholder="ID:">
                          <input type="text" name="update-v1"  placeholder="Angielskie:">
                          <input type="text" name="update-v2"  placeholder="Polskie">
                          <button class="update">Zaktualizować</button>
                          <button class="delete">Usunąć</button><br>
                    <div class="Button_on">Pokaż 
                        <?php include "name_table.php" ?>
                    </div>

                    <div class="Button_off">Ukryj 
                        <?php include "name_table.php" ?>
                    </div>
                  <div>
                    <div class="pokaz">                  


                        </div>
                    </div>
                </div><br>
                 <div>
                <h2>Pokazać</h2>
               ID=<input type="text" name="select-id">
                <button class="select">Pokaż</button>
                </div>
                <h2>Rezultat:</h2>
                <div class="result">   
                    
            </div>
            <div>
                <h1>Dodawanie nowej tabeli</h1>
                <form action="table_settings/add_db.php" method="post">
                Nazwa nowej tabeli:<input type="text" name="databasename">
                <input class="submit" type="submit" value="Wyślij">
                </form>
                </div><div>
                 <h1>Usuwanie tabel</h1>
                <form action="table_settings/delete_db.php" method="post">
                  <?php include "name_table.php" ?>
                    <input class="submit" type="submit" value="Wyślij">
                    </form>
                    <a href="table_settings/log_out.php">WYLOGUJ</a>
            </div>
        </div>
    </div>
</body>
<script>
    const menu_click = document.querySelector('.menubutton').addEventListener('click', (e) => {
        document.querySelector('.menu').classList.toggle('active');
    });

</script>

<script>
// ZWIJANIE I ROZWIJANIE //
$(document).ready(function(){
    //$('.Button_on').load("name_table.php");
    $('.pokaz-tabele').on('click',function(){
    var tabelka = $(this).val();
    $('.pokaz').show().load("table_settings/show_table.php?table="+tabelka);
    });
    $('.Button_off').click(function(){
    $('.pokaz').hide();
    });
})


// --------------------- //

    let array1=[]
    let array2=[]
    let weight=[]
    $(document).ready(function() {
        $('.select button').click(function(){
            $('.select button').removeClass('active')
            console.log(this.classList.add('active'))
            array1=[];
            array2=[];
            weight=[];
            const table=this.innerHTML
            $('.panel').load('php/panel_learning/load_table_fishcards.php',{
                table:table
            })
        })

// DODAWANIE //
        $('.add').click(function() {
           let select_database = $("input[name=word_operation]:checked").val()
           let value1 = $("input[name=add-v1]").val()
           let value2 = $("input[name=add-v2]").val()
           let value3 = $("input[name=add-v3]").val()
          if(value1&&value2){
              $('.result').load("table_settings/insert.php", {
            value1:value1,
            value2:value2,
            value3:value3,
            select_database:select_database
        });
          }
            else{
                console.log('error');
            }
        })
// Aktualizowanie //   
        $('.update').click(function() {
           let select_database = $("input[name=word_operation]:checked").val()
           let value1 = $("input[name=update-v1]").val()
           let value2 = $("input[name=update-v2]").val()
           let id = $("input[name=update-id]").val()
          if(value1&&value2&&id){
              $('.result').load("table_settings/update.php", {
                  id:id,
            value1:value1,
            value2:value2,
            select_database:select_database
        });
          }
            else{
                console.log('error')
            }
        })
// Usuwanie //   
        $('.delete').click(function() {
           let select_database = $("input[name=word_operation]:checked").val()
           let id = $("input[name=delete-id]").val()
          if(id){
              $('.result').load("table_settings/delete.php", {
                  id:id,
            select_database:select_database
        });
          }
            else{
                console.log('error')
            }
        })                 
                    
//Pokazywanie wybranego słowa//   
        $('.select').click(function() {
           let select_database = $("input[name=word_operation]:checked").val()
           let id = $("input[name=select-id]").val()
           if(id){
              $('.result').load("table_settings/select.php", {
                  id:id,
            select_database:select_database
        });
          }
            else{
                console.log('error')
            }
        })
     
    })
    let random_language= 0;
    let random_words= 0;
    let second_word = false;//sprawdza czy jest pokazane drugie słówko
    const panel = document.querySelector('.panel')
    
    const losuj =()=>{ 
    if(array1.length>0 && second_word == false){
        panel.classList.remove('active')
        random_language=Math.floor(Math.random()*2);
        random_words = Math.floor(Math.random()*array1.length)       
                       
                             let text = array1[random_words];
                             
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
                        
                        // audioElement.currentTime = 0;
                        $ ('audio').attr('src', 'https://www.diki.pl//images-common/en/mp3/'+text+'.mp3');
                        audioElement.setAttribute('src', 'https://www.diki.pl//images-common/en/mp3/'+text+'.mp3');
                        /*dodane oststnio */audioElement.play(); 
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
                        
                        $('#pause').click(function(atrybute) {
                            audioElement.pause();
                            $("#status").text("Status: Paused");
                        });
                        
                        $('#restart').click(function(atrybute) {
                            audioElement.currentTime = 0;
                        });

        if(random_language){
        panel.innerHTML=`<span>${array1[random_words]}</span><span>${array2[random_words]}</span>`
        }
        else{
        /*zamieniłem array*/panel.innerHTML=`<span>${array1[random_words]}</span><span>${array2[random_words]}</span>` 
        }
        second_word=!second_word
    }
        else if(array1.length>0 && second_word == true){
            panel.classList.add('active')
            second_word=!second_word
        }
    }
//Po kliknięciu w klawiature albo przycisk losuje słówko
    
document.addEventListener('keydown',losuj)
document.querySelector('.random_button').addEventListener('click',losuj)


// odtwarzanie fonetycznej wymowy słów

                  
$(document).ready(function(){
  $('#przycisk').click(function(){
    window.document.location.href="fiszki.php";
    return false;
  });
});

$(document).ready(function(){
  $('#zestawy').click(function(){
    window.document.location.href="tryb_wyboru.php";
    return false;
  });
});


    
//Wyświetlia tabelicę//
/* $(document).ready(function() {
        $('.button_on').click(function(){
            let select_database = $("input[name=word_operation]:checked").val()
            $('.button_on').load("show.table.php")
            $('.pokaz').load('table_settings/load_table_fiszki.php',{
                select_database:select_database
            })
        })
*/

</script>

</html>
