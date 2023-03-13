
    const menu_click = document.querySelector('.menubutton').addEventListener('click', (e) => {
        document.querySelector('.menu').classList.toggle('active');
    });

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
        $('.panel').load('././php/panel_learning/load_table_fishcards.php',{
            table:table
        })
    })
})

//Pokazywanie wybranego słowa//   

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
        
        audioElement.currentTime = 0;
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

