<?php
/* ----------------------------------------------------------------

       TWORZENIE BAZY DANYCH DLA DOMYŚLNEGO UŻYTKOWNIKA ROOT

   ----------------------------------------------------------------  */

if(!isset($_SESSION)){         
    session_start();      
} 
$flaga = 1;
$host = '127.0.0.1';
$databasename = 'fiszki_nauka_slowek';
$login=$_SESSION['fiszki_login']=$_POST['login'];
$password=$_SESSION['fiszki_password']=$_POST['password'];
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

if(!isset($_SESSION['fiszki_login'])&&!isset($_SESSION['fiszki_password'])){
    $flaga = 0;
    unset($_SESSION['fiszki_login']);
    unset($_SESSION['fiszki_password']);
    header('location: ../../index.php');
}

if(empty($_SESSION['fiszki_login'])&&empty($_SESSION['fiszki_password'])){
    $flaga = 0;
    header('location: ../../index.php');
}

if($flaga==1){
    try {
        $pdo = new PDO("mysql:host=$host", $login, $password);
        $conn = new PDO("mysql:host=$host;dbname=$databasename;charset=UTF8", $login, $password, $options);
        if (!isset($pdo)){ // zwraca 0 gdy nie uda się utworzyć połączenia z bazą danych
            $flaga = 0;            
            unset($_SESSION['fiszki_login']);
            unset($_SESSION['fiszki_password']);
            header('location: ../../index.php');
        }
        if(isset($conn)){ // zwraca 0 gdy baza danych już istnieje
            $flaga = 0;            
            header('location: ../../fiszki.php');
        }
        if($flaga==1){
            $pdo->exec("CREATE DATABASE `$databasename`")
            or die(print_r($pdo->errorInfo(), true));
            header('location: ../../fiszki.php');
        }
    }
    catch (PDOException $e) {
        die("NIE MA TAKIEGO UŻYTKOWNIKA LUB HASŁO JEST NIEPRAWIDŁOWE</BR>" . $e->getMessage());
    }
}
?>