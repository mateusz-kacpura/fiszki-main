
<?php
include('baza.php');//sprawdzanie czy połączono do bazy
if(!isset($connect)){//jeśli tak przenieś do fiszki php
    header('location: fiszki.php');
}else if(!empty($_POST['login'])){//jeśli nie sprawdź czy formularz
$connect = mysqli_connect('localhost',$_POST['login'],$_POST['password']);
    if ($connect){
        $_SESSION['fiszki_login']=$_POST['login'];
        $_SESSION['fiszki_password']=$_POST['password'];
        header('location: fiszki.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

<body>
   <form action='index.php' method="post" class="login">
        <fieldset><legend>LOGIN DO BAZY Z FISZKAMI</legend><input type="text" name="login"></fieldset>
        <fieldset><legend>HASŁO DO BAZY Z FISZKAMI</legend><input type="password" name="password"></fieldset><br>
        <input type="submit" value="ZALOGUJ">
   </form>
</body>
</html>

