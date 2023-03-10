// DODAWANIE //
$('.add').click(function() {
    let select_database = $("input[name=word_operation]:checked").val()
    let value1 = $("input[name=add-v1]").val()
    let value2 = $("input[name=add-v2]").val()
    let value3 = $("input[name=add-v3]").val()
   if(value1&&value2){
       $('.result').load("../../table_settings/insert.php", {
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