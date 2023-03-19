$(document).ready(function(){
    $('#usun_fiszki_z_planu_nauki').click(function(){
      let queryString = window.location.search;
      let urlParams = new URLSearchParams(queryString);
      let zestaw = urlParams.get('zestaw');
      window.document.location.href="tryb_edycji.php?zestaw="+zestaw+"&"+zestaw+"=edit_flag_all_on_0";
      return false;
    });
  });
  