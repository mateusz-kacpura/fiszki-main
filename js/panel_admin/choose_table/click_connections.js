$("button").on('click',function(){
    var zestaw = $( this ).text();
    window.document.location.href="tryb_edycji.php?zestaw="+zestaw;
    return false;
});

$('#przycisk').click(function(){
    window.document.location.href="fiszki.php";
    return false;
});

$('#zestawy').click(function(){
    window.document.location.href="tryb_wyboru.php";
    return false;
});