<?php
include('../baza.php');
if(!$connect){
    header('location: ../index.php');
}
if(!empty($_POST['databasename'])){
    global $connect;
    $db_name=$_POST['databasename'];   
    echo '<script>console.log("'.$db_name.'")</script>';
    $query = "CREATE TABLE $db_name ( id INT NOT NULL AUTO_INCREMENT ,  v1 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  v2 VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  weight INT NOT NULL ,    PRIMARY KEY  (id)) ENGINE = InnoDB";
    $db = mysqli_select_db($connect,'fiszki_nauka_slowek');
    $result=mysqli_query($connect,$query);
    $query = "CREATE TABLE info_table ( id INT NOT NULL AUTO_INCREMENT ,  name_table VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  flaga VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,  zlicz_slowa INT NOT NULL ,    PRIMARY KEY  (id)) ENGINE = InnoDB";
    $db = mysqli_select_db($connect,'fiszki_nauka_slowek');
    $result=mysqli_query($connect,$query);
}
header('location: ../fiszki.php');
?>
