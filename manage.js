<script>
// ZWIJANIE I ROZWIJANIE //

$('.Button_on').click(function(){
$('.pokaz').show();
});
$('.Button_off').click(function(){
$('.pokaz').hide();
});

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
            $('.panel').load('table_settings/load_table_fiszki.php',{
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
                console.log('error')
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
          //Pokazać//   
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
        if(random_language){
        panel.innerHTML=`<span>${array1[random_words]}</span><span>${array2[random_words]}</span>`
        }
        else{
        panel.innerHTML=`<span>${array2[random_words]}</span><span>${array1[random_words]}</span>` 
        }
        second_word=!second_word
    }
        else if(array1.length>0 && second_word == true){
            panel.classList.add('active')
            second_word=!second_word
        }
    }
// opisanie przycisków aktywnych na które raguje program //
    
document.addEventListener('keydown',losuj)
document.querySelector('.random_button').addEventListener('click',losuj)
    
</script>

