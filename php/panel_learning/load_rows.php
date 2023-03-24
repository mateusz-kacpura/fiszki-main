<?php

require_once "../../polaczeniePDO.php";
require_once "../panel_admin/inside_table/load_table_name.php";

$table = json_decode($_GET['data']);

function rand_numbers() {
  // Tworzenie listy z liczbami od 1 do 6
  $numery = range(0, 5);

  // Losowe przemieszanie listy
  shuffle($numery);

  // Zwrócenie listy wylosowanych liczb
  return $numery;
}

if(!isset($_SESSION))      
  {         
      session_start();      
  }

  $flaga = 1;

  if (!isset($_GET['data']))
  {
      echo "Zabezpieczenie przed nadużyciem load_word_fishcards.php";
      $flaga = 0;
  }

  if(load_isset_table_not_return($table, $pdo) != $table){
      echo "Nie udało się załadować fiszek";
      $flaga = 0;
  }

  if($flaga == 1){
      try {
      
      // utworzenie tablicy do przechowywania już wylosowanych wartości "id"
      $used_ids = array(1000);

      // utworzenie tablicy na przechowuywanie wartości flagi
      $rand_flag = array();
      $rand_num =  rand_numbers();

      // utworzenie tablicy na wylosowane wiersze
      $rows = array();

      // losowanie 6 wierszy z bazy danych
      for ($i = 0; $i < 6; $i++) {
        // zapytanie SQL
        $stmt = $pdo->prepare("SELECT * FROM $table WHERE id NOT IN (" . implode(",", $used_ids) . ") ORDER BY RAND() LIMIT 1");
        $stmt->execute();
        // przypisanie wartości do zmiennych
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $id = $row["id"];
          $ang = $row["v1"];
          $pl = $row["v2"];

          // dodanie wylosowanego "id" do tablicy
          $used_ids[] = $id;
          
          // oznaczenie za pomocą flagi 1 poprawnej odpowiedzi, resztę oznaczam jako 0

          if ($rand_num[1] === $i){
            $flaga = 1;
          }
          else {
            $flaga = 0;
          }

          // dodawanie stanu flagi do tablicy
          $rand_flag[] = $flaga;

          // dodanie wiersza do tablicy
          $rows[] = array("id" => $id, "ang" => $ang, "pl" => $pl, "flaga" => $flaga);
        }
      }
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    // zamknięcie połączenia z bazą danych
    $conn = null;

    // przekazanie danych do kodu JavaScript
    echo json_encode($rows, JSON_UNESCAPED_UNICODE); //dekoduje polskie znaki
  }

?>

