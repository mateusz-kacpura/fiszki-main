
<?php
include('baza.php');//sprawdzam połączenie
require_once('polaczeniePDO.php');
require_once "php/__function_routes.php";

if(!$connect){
    header('location: index.php');//przekierowanie do logowania
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

<body>
<h2>PANEL ADMINISTRACYJNY</h2>

<div class="select" >

<button  id="przycisk">NAUKA</button>
<button  id="zestawy">ZARZĄDZAJ ZESTAWAMI</button>

</div>

<h2>TRYB EDYCJI</h2>
<?php

// typ pierwszy angielsko - poslki i polsko - angielski
$tabela = filtruj($_GET['zestaw']);    

    if(!isset($tabela)) { 
          header("Location: tryb_wyboru.php");
    }
    if(!isset($pdo)){
         echo "<h1>Nie można zrealizować połączenia z żadną bazą danych</h1>";
    }
    
load_table_name($_GET['zestaw'], $pdo); 

// menu 
echo '
<div class="menu">
   <div class="menubutton"><i class="icon-cog-alt"></i>
   </div>
   <div class="menu-content"> 
           <div>
            <h1>Operacje na słówkach</h1>'
;
            przyciski_aktywuj_deaktywuj($tabela);
            add_form($tabela);
echo '
           </div>
   </div>
</div>'
;
// kolumny tabeli bazy danych

$angielski = 'v1';
$polski = 'v2';
$przyklad = 'weight';
$zdanie = 'zdanie';
$flaga_baza = 'flaga';

// poruszanie sie po stronie
if(!isset($_GET[$tabela]))   {

    $_GET[$tabela] = 'panel_administracyjny';
 
 }
 
function filtruj($zmienna) {
    $zmienna = stripslashes($zmienna); // usuwamy slashe

// usuwamy spacje, tagi html oraz niebezpieczne znaki
return htmlspecialchars(trim($zmienna));
}

// zarzadzanie zestawami
switch($_GET[$tabela]){

case 'dodaj':          
                   
    $dodaj_element1 = filtruj($_POST['dodaj_element1']);
    $dodaj_element2 = filtruj($_POST['dodaj_element2']);
    $dodaj_element3 = filtruj($_POST['dodaj_element3']); 

    if (empty($_POST['dodaj_element1']) || empty($_POST['dodaj_element2']))
    {
        exit(header("Location: tryb_edycji.php?zestaw=$table"));
    }                
                                                
    //if ($_POST['dodaj_element1'] == $dodaj_element1  && $_POST['dodaj_element2'] == $dodaj_element2 && $_POST['dodaj_element3'] == $dodaj_element3) 
    //{
    //exit(header("Location: tryb_edycji.php?zestaw=$tabela"));
    //}
    
    try
    {
         $polecenie = "INSERT INTO $tabela ($angielski, $polski, $przyklad , $zdanie, $flaga_baza ) VALUES ('$dodaj_element1', '$dodaj_element2', '1', '$dodaj_element3', '0')";
         $liczba = $pdo ->exec($polecenie);
         exit(header("Location: tryb_edycji.php?zestaw=$table"));
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$table.'">wróć</a>';
    }

break;
                                  
case 'edytuj':

$id = filtruj($_GET['id']);
$edytuj_element1 = filtruj($_POST['a'.$id.'']);
$edytuj_element2 = filtruj($_POST['b'.$id.'']);
$edytuj_element3 = filtruj($_POST['c'.$id.'']);

     if (empty($id)){
         echo"Wystąpił następujący błąd: Nieprawidłowy numer 'id'";
     }
          
     if (empty($_POST['a'.$id.'']) || empty($_POST['b'.$id.''])){
         header("Location: tryb_edycji.php?zestaw=$tabela");
     }

     if ($_POST['a'.$id.''] == $edytuj_element1  && $_POST['b'.$id.''] == $edytuj_element2 && $_POST['c'.$id.''] == $edytuj_element3){
         header("Location: tryb_edycji.php?zestaw=$tabela");    
     }

     try
     {
          $polecenie = ("UPDATE $tabela SET  v1 = '$edytuj_element1' , v2 = '$edytuj_element2', weight = '1'  , zdanie = '$edytuj_element3' WHERE id = '$id' ");
          echo $polecenie;
          $liczba = $pdo ->exec($polecenie);
          header("Location: tryb_edycji.php?zestaw=$tabela");
       
     }
     catch(PDOException $e)
     {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
     } 

break;
                          
case 'usun':

$id = filtruj($_GET['id']);

    if (empty($id)){
        echo "Numer ID nie istnieje";
    }
     
    try
    {
    $pdo ->exec("DELETE FROM $tabela WHERE id = '$id' ") or die('Błąd zapytania');
    header("Location: tryb_edycji.php?zestaw=$tabela");
      
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }

  break;
                                  
case 'wyszukaj':

$slowo = filtruj($_POST['slowo']);

    if (empty($slowo)){
        echo "Nie można wyszukać słowa";
      //header("Location: tryb_edycji.php?zestaw=$tabela");
    }

    try
    {
    $zapytanie = "SELECT * FROM $tabela WHERE $angielski LIKE '$slowo' OR $polski LIKE '$slowo'";
    echo $zapytanie;              
    $liczba = $pdo ->query($zapytanie) or die('Błąd zapytania');
    $wykonanie = $pdo->prepare($zapytanie);
    $wykonanie->execute();
    $licznik_id=$wykonanie->rowCount();
        if ($licznik_id == 0)
        { 
            header("Location: tryb_edycji.php?zestaw=$tabela");
        }
        else 
        {
            while($row = $liczba->fetch())
                            {                 
                            load_word_by_id($tabela, $row);
                            }
        }                                                          
    }
    catch(PDOException $e)
    {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
        echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }

break;

case 'aktywuj':
    /* :: tutaj zmieniam flagę w bazie danych
        ---------------------------
       - id - name_table - flaga -
       ---------------------------
       -  1 -   Unit_1   -   1   -  
       -    -            -       -
       ---------------------------  */
       
    try
    {
        $querty = "UPDATE info_table SET flaga = '1' WHERE name_table = '$tabela' ";
        $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
        //echo $tabela. " zmodyfikowano na 1 czyli aktywny";
    header("Location: tryb_edycji.php?zestaw=$tabela");
      
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }
     
break;

case 'deaktywuj':
    try
    {
        $querty = "UPDATE info_table SET flaga = '0' WHERE name_table = '$tabela' ";
        $pdo ->exec($querty) or die('Błąd zapytania UPDATE');
        //echo $tabela. " zmodyfikowano na 0 czyli aktywny";
    header("Location: tryb_edycji.php?zestaw=$tabela");
      
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }
    
break;
                              
default:

load_fishcards_all($tabela, $pdo);
    
break;

} // koniec switcha

?>
</body>
<script src="js/activate_the_word_set.js"></script>
<script src="js/deactivate_the_word_set.js"></script>
<script src="js/routes.js"></script>


<script>

const menu_click = document.querySelector('.menubutton').addEventListener('click', (e) => {
    document.querySelector('.menu').classList.toggle('active');
});




//----------Funkcje obslugujące zestaw - jeszcze nie działają i powodują błędy ---------//

$(document).ready(function() {
    $('.wybrany_zestaw').click(function(){
        $('.wybrany_zestaw').removeClass('active')
        console.log(this.classList.add('active'))
    })
})

// usun_zestaw
</script>