<?php

if(!isset($_SESSION))      
{         
     session_start();      
} 
if(isset($_SESSION['fiszki_login'])&&isset($_SESSION['fiszki_password'])){
$connect = mysqli_connect('localhost',$_SESSION['fiszki_login'],$_SESSION['fiszki_password']);
    if (!$connect){
    unset($_SESSION['fiszki_login']);
    unset($_SESSION['fiszki_password']);
    header('location: index.php');
    }
if(!$table=mysqli_select_db($connect,'fiszki_nauka_slowek')){
    $query = 'CREATE DATABASE fiszki_nauka_slowek';
    $result=mysqli_query($connect,$query);
}
}
else{
    $connect=false;
}



/* JAKIE JEST PRZEWIDZIANE WYNAGRODZENIE DLA OSOBY W WIEKU 26 LAT?
/* W JAKI SPOSÓB NALEŻY SIĘ ZACHOWAĆ JEŚLI W DANEJ CHWILI NIE MA TELEFONÓW, CZY JEST MOŻLIWOŚĆ POROBIENIA SOBIE CZEGOŚ NA TELEFONIE LUB LAPTOPIE?
/* KIEDY PRZEWIDZIANE JEST PODPISANIE UMOWY Z FIRMĄ?
/* JAKA TO BĘDZIE UMOWA ZLECENIE CZY O PRACĘ?
/* CZY MOŻNA ZROBIĆ SOBIE PRZERWĘ OD PRACY NA OKRES 2 MIESIĘCY I POTEM WRÓCIĆ BEZ ODBYCIA SZKOLENIA?
/* KIEDY NALEY ODBY SZKOLENIE JESZCZE RAZ?

/* KIEDY JEST WYPŁACANE WYNAGRODZENIE?
/* W JAKI SPOSÓB PRZEKAZAĆ DANE DON PODPISANIA UMOWY?
/* CZY MOŻNA PODCZAS PRACY POPIJAĆ KAWĘ?
¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡
191 GODZIN ' 400 ZL PREMII
250 GODZIN ' 600 ZL GODZIN
¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡
UMOWA B2B
''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
SYSTEM POLECEN
500 ZL DODATKOWE WYNAGRODZENIE PRZEPRACUJE 3 MIESICE ZE SREDNIA GODZIN 130

WYNAGRODZENIE PROWIZYJNE OD SPRZEDAZY
15ñ00 ¡ 20Ñ00
20ñ00 ¡ 

51 GODZIN 'SZKOLENIE'  ''' PLAN SZKOLENIA, SKRYPT SZKOLENIONIOWY' MOZLIWE PREDYSPOZYCJE INDYWIDUALNE
SYSTEM OPIEKUN

BLOK SZKOLENIOWY OD PONIEDZIALKU

B2B
JEDNOOSOBOWA DZIALALNOSC GOSPODARCZA
PRZEZ PIERWSZE 6 MIESIECY ULGA NA START SKLADKA 300 ZL
PREFERENCYJNY ZUS
700-800 ZŁ ZUSU
KUPIC KSIEGOWĄ 
KWOTA WOLNA OD PODATKU 30 TYS. ZL
MOZNA WRZUCIC KOSZTY PALIWA, KOSZTY ZWIAZANE Z ZAKUPEM SPRZETU ZOBOWIAZANIA PODATKOWE
KWESTIE DOCHODOWE
ROZNICE W STAWCE 25,50 ZŁ
2 GRUPY GRAFIKOWE CYKLE 12 DNIOWE
8:00 - 22:00 - 4 ZMIANY I 6 DNI WOLNEGO

-2-
2 ZMIANY CAŁE 
4 DNI WOLNE

DZIALANOSC ZAKLADA SIE PO ZAKONCZENIU BLOKU SZKOLENIOWEGO

13 MARCA O GODZINIE 8:00

POKÓJ 311 - *//*
---------------------------------------------------------------- */
?>


