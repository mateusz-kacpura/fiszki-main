// Usuwanie //   
$('.delete').click(function() {
    let select_database = $("input[name=word_operation]:checked").val()
    let id = $("input[name=delete-id]").val()
   if(id){
       $('.result').load("../../table_settings/delete.php", {
           id:id,
     select_database:select_database
 });
   }
     else{
         console.log('error')
     }
 })  