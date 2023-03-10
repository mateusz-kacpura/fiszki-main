<?php
/* ----------------------------------------------------------------

           TWORZENIE BAZY DANYCH DLA DANEGO UŻYTKOWNIKA
           (WCZEŚNIEJ NALEŻY PRZYGOTOWAĆ FORMULARZ POD TEN KOD
           KTÓRY ZAWIERAŁBY POLA
                                :1: BAZA DANYCH
                                :2: LOGIN
                                :3: HASŁO
            )

            NAZWA BAZY DANYCH MOŻE TEŻ BYĆ NAZWĄ UŻYTKOWNIKA

   ----------------------------------------------------------------  */

if(!isset($_SESSION)){         
    session_start();      
} 

$host = '127.0.0.1';
$db = $_SESSION['register_databasename']=$_POST['register_databasename']; // zmienne w przypadku utworzenia panelu rejestracji // baza danych dla użytkownika
$user = $_SESSION['register_login']=$_POST['register_login']; // zmienne w przypadku utworzenia panelu rejestracji // login użytkonika zezwala na dostęp do bazy danych $db
$pass = $_SESSION['register_password']=$_POST['register_password']; // zmienne aktywne w przypadku utworzenia panelu rejestracji // hasło użytkonika zezwala na dostęp do bazy danych $db
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$flaga = 1;

if(!isset($_SESSION['register_databasename'])&&!isset($_SESSION['register_login'])&&!isset($_SESSION['register_password'])){
    $flaga = 0;
    unset($_SESSION['register_login']);
    unset($_SESSION['register_password']);
    unset($_SESSION['databasename']);
    header('location: index.php');
}

if(empty($_SESSION['register_databasename'])&&empty($_SESSION['register_login'])&&empty($_SESSION['register_password'])){
    $flaga = 0;
    header('location: index.php');
}

if($flaga==1){
    try {
        $pdo = new PDO("mysql:host=$host", $login, $password);
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $login, $pass, $options);

        if (!isset($pdo)){ // zwraca 0 gdy nie uda się utworzyć połączenia z bazą danych
            $flaga = 0;
            unset($_SESSION['register_login']);
            unset($_SESSION['register_password']);
            unset($_SESSION['databasename']);
            header('location: index.php');
        }
        if (isset($conn)){ // zwraca 0 gdy taka bazadanych już istnieje
            $flaga = 0;
            header('location: fiszki.php');
        }
        if($flaga == 1){
        $pdo->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'$host' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'$host';
                FLUSH PRIVILEGES;")
        or die(print_r($pdo->errorInfo(), true));
            header('location: fiszki.php');
        }
    }
    catch (PDOException $e) {
        die("NIE MA TAKIEGO UŻYTKOWNIKA LUB HASŁO JEST NIEPRAWIDŁOWE</BR>" . $e->getMessage());
    }
}
?>