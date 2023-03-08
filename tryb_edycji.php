<?php
include('baza.php');//sprawdzam połączenie
require_once('polaczeniePDO.php');
if(!$connect){
    header('location: index.php');//przekierowanie do logowania
}

function filtruj($zmienna) {
        $zmienna = stripslashes($zmienna); // usuwamy slashe

// usuwamy spacje, tagi html oraz niebezpieczne znaki
    return htmlspecialchars(trim($zmienna));
}

function formularz_dodaj($tabela){
      echo '<div class="nowe_slowo"><form method="post" action="tryb_edycji.php?zestaw='.$tabela.'&'.$tabela.'=dodaj">
            Wyrażenie polskie:
            <input type="text" name="dodaj_element1" style="width: 250px">
        </br>
            Wrażenie hiszpańskie:
            <input type="text" name="dodaj_element2" style="width: 250px">
        </br>
            Przykładowe zdanie:
            <input type="text" name="dodaj_element3" style="width: 250px">
        </br>
            <input type="submit" name="submit" value="Wyślij">&nbsp;
        <input type="reset" value="Wyczyść formularz"></form></br>
        
    </div><div class="nowe_slowo">
    <form method="post" action="tryb_edycji.php?zestaw='.$tabela.'&'.$tabela.'=wyszukaj">
    Wyszukaj słowo:
            <input type="text" name="slowo" style="width: 250px">
        </br>
            <input type="submit" name="submit" value="Wyślij">&nbsp;
            <input type="reset" value="Wyczyść formularz"></form>
    
    </div>';
}
  
function wyswietlam($tabela, $row){
$id = $row['id'];
    
   echo '<div class="arkusz">';
    
   echo '
         <div class="edytuj">
         <form method="post" action="tryb_edycji.php?zestaw='.$tabela.'&'.$tabela.'=edytuj&id='.$row['id'].'">
         <input type="text" name="a'.$id.'" placeholder="Wyrażenie polskie:" value="'.$row['v1'].'">
         <input type="text" name="b'.$id.'" placeholder="Wrażenie angielskie:"  value="'.$row['v2'].'">
         <input type="text" name="c'.$id.'" placeholder="Przykładowe zdanie" value="'.$row['zdanie'].'">
         <input type="submit" name="submit" class="przycisk przycisk1" value="Edytuj!"></form></div>';
		
   echo '   
         <div class="usun"><form method="post" action="tryb_edycji.php?zestaw='.$tabela.'&'.$tabela.'=usun&id='.$row['id'].'">
         <input type="submit" name="submit" class="przycisk przycisk3" value="Usuń!"></form></div>
                                                                                    ';
                                                                                    
   echo '
         </div>
                ';                                                                                    
}

function wyswietl_nazwe_zestawu($tabela, $pdo){                    
    try
    {
        $querty = "SELECT name_table, flaga FROM info_table WHERE name_table = '$tabela'";
        $flaga = $pdo ->query($querty) or die('Błąd zapytania SELECT');
        $row = $flaga->fetch();
        //echo $tabela. " zmodyfikowano na 0 czyli aktywny";
        if ($row['flaga'] == 1){
                echo '
                   <div class="nowe_slowo">
                   <div class="select_zestaw">
                   <div class="wybrany_zestaw_zielony"><h2>'.$tabela.'</h2>
                     </div>
                    </div> 
                   </div>
                    
                    ';
        } else if ($row['flaga'] == 0)   {
                echo '
                   <div class="nowe_slowo">
                   <div class="select_zestaw">
                   <div class="wybrany_zestaw_czerwony"><h2>'.$tabela.'</h2>
                     </div>
                    </div> 
                   </div>
                    
                    ';
        }      
        
       
    }
    catch(PDOException $e)
    {
       echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
       echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
    }
                    
}

function przyciski_aktywuj_deaktywuj($tabela){
        echo '
                   <div class="nowe_slowo">
                   <h2>'.$tabela.'</h2>
                   
                    <button id="aktywuj" name="aktywuj" class="przycisk przycisk1">Aktywuj</button>
                    <button id="deaktywuj" name"deaktywuj" class="przycisk przycisk3">Deaktywuj</button>
                   </div>
                    
                    '; 

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
    
wyswietl_nazwe_zestawu($tabela, $pdo); 

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
            formularz_dodaj($tabela);
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
 
// zarzadzanie zestawami
switch($_GET[$tabela]){

case 'dodaj':          
                   
        $dodaj_element1 = filtruj($_POST['dodaj_element1']);
        $dodaj_element2 = filtruj($_POST['dodaj_element2']);
        $dodaj_element3 = filtruj($_POST['dodaj_element3']); 

        if (empty($_POST['dodaj_element1']) || empty($_POST['dodaj_element2']))
        {
            exit(header("Location: tryb_edycji.php?zestaw=$tabela"));
        }                
                                                    
        //if ($_POST['dodaj_element1'] == $dodaj_element1  && $_POST['dodaj_element2'] == $dodaj_element2 && $_POST['dodaj_element3'] == $dodaj_element3) 
        //{
        //exit(header("Location: tryb_edycji.php?zestaw=$tabela"));
        //}
        
        try
        {
             $polecenie = "INSERT INTO $tabela ($angielski, $polski, $przyklad , $zdanie, $flaga_baza ) VALUES ('$dodaj_element1', '$dodaj_element2', '1', '$dodaj_element3', '0')";
             $liczba = $pdo ->exec($polecenie);
             exit(header("Location: tryb_edycji.php?zestaw=$tabela"));
        }
        catch(PDOException $e)
        {
           echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
           echo '</br><a href="tryb_edycji.php?zestaw='.$tabela.'">wróć</a>';
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
                              wyswietlam($tabela, $row);
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


    try
    {
        $liczba = $pdo -> query("SELECT * FROM $tabela"); 
                                          
            while($row = $liczba->fetch())
            {
                wyswietlam($tabela, $row);
            }
                  
    }
    catch(PDOException $e)
    {
        echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
    }
    
break;

} // koniec switcha

?>
</body>

<script>

const menu_click = document.querySelector('.menubutton').addEventListener('click', (e) => {
    document.querySelector('.menu').classList.toggle('active');
});

/* skrypty odpowiedzialne za przemieszczanie się między stronami*/

  $('#przycisk').click(function(){
    window.document.location.href="fiszki.php";
    return false;
  });



  $('#zestawy').click(function(){
    window.document.location.href="tryb_wyboru.php";
    return false;
  });


$(document).ready(function(){
  $('#aktywuj').click(function(){
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let zestaw = urlParams.get('zestaw');
    window.document.location.href="tryb_edycji.php?zestaw="+zestaw+"&"+zestaw+"=aktywuj";
    return false;
  });
});

$(document).ready(function(){
  $('#deaktywuj').click(function(){
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let zestaw = urlParams.get('zestaw');
    window.document.location.href="tryb_edycji.php?zestaw="+zestaw+"&"+zestaw+"=deaktywuj";
    return false;
  });
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
