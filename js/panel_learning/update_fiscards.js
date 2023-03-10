// Aktualizowanie //   
$('.update').click(function() {
    let select_database = $("input[name=word_operation]:checked").val()
    let value1 = $("input[name=update-v1]").val()
    let value2 = $("input[name=update-v2]").val()
    let id = $("input[name=update-id]").val()
   if(value1&&value2&&id){
       $('.result').load("../../table_settings/update.php", {
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