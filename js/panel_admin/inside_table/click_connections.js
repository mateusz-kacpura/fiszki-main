/* skrypty odpowiedzialne za przemieszczanie się między stronami*/

$('#przycisk').click(function(){
    window.document.location.href="fiszki.php";
    return false;
  });

$('#zestawy').click(function(){
    window.document.location.href="tryb_wyboru.php";
    return false;
  });