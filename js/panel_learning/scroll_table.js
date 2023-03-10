// ZWIJANIE I ROZWIJANIE //
$(document).ready(function(){
    //$('.Button_on').load("name_table.php");
    $('.pokaz-tabele').on('click',function(){
    var tabelka = $(this).val();
    $('.pokaz').show().load("../../show_table.php?table="+tabelka);
    });
    $('.Button_off').click(function(){
    $('.pokaz').hide();
    });
})