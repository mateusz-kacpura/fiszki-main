$(document).ready(function(){
    $('#deaktywuj').click(function(){
      let queryString = window.location.search;
      let urlParams = new URLSearchParams(queryString);
      let zestaw = urlParams.get('zestaw');
      window.document.location.href="tryb_edycji.php?zestaw="+zestaw+"&"+zestaw+"=deaktywuj";
      return false;
    });
  });