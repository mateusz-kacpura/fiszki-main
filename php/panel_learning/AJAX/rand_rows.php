<?php

require_once "../../../polaczeniePDO.php";
require_once "../../panel_admin/inside_table/load_table_name.php";

$table =  json_decode($_GET['data']); // 'word_of_day';

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
          $sentence = $row["zdanie"];

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
          $rows[] = array("id" => $id, "ang" => $ang, "pl" => $pl, "flaga" => $flaga, "sentence" => $sentence);

        }
      }
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

// tworze miejsce do przechowywania pobranych wartości w tabeli slownik

    // Sprawdzenie czy tabela "slownik" już istnieje
    $tableExists = false;
    try {
        $result = $pdo->query("SELECT 1 FROM slownik LIMIT 1");
        if ($result !== false) {
            $tableExists = true;
        }
    } catch (PDOException $e) {
        // Tabela nie istnieje lub wystąpił błąd podczas zapytania
    }

    if ($tableExists) {
        $i = 1;
        foreach ($rows as $row) {
          $id = $i;
          $ang = $row['ang'];
          $pl = $row['pl'];
          $flaga = $row['flaga'];
          $sentence = $row['sentence'];
          $i++;
          $query = "REPLACE INTO slownik (id, ang, pl, flaga, sentence) VALUES (:id, :ang, :pl, :flaga, :sentence)";
      
          try {
              $stmt = $pdo->prepare($query);
              $stmt->bindParam(':id', $id, PDO::PARAM_INT);
              $stmt->bindParam(':ang', $ang, PDO::PARAM_STR);
              $stmt->bindParam(':pl', $pl, PDO::PARAM_STR);
              $stmt->bindParam(':flaga', $flaga, PDO::PARAM_INT);
              $stmt->bindParam(':sentence', $sentence, PDO::PARAM_STR);
              $stmt->execute();
          } catch(PDOException $e) {
              echo "Błąd podczas wypełniania tabeli: " . $e->getMessage();
          }
      }
    } else {
        // Tworzenie tabeli "slownik"
        $sql = "CREATE TABLE slownik (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            ang VARCHAR(255) NOT NULL,
            pl VARCHAR(255) NOT NULL,
            flaga INT(11) NOT NULL,
            sentence VARCHAR(255) NOT NULL,
        )";
        try {
            $pdo->exec($sql);
            $i = 1;
            foreach ($rows as $row) {
              $id = $i;
              $ang = $row['ang'];
              $pl = $row['pl'];
              $flaga = $row['flaga'];
              $sentence = $row['sentence'];
              $i++;
              $stmt = $pdo->prepare("INSERT INTO slownik (id, ang, pl, flaga, sentence) VALUES (:id, :ang, :pl, :flaga, :sentence)");
              $stmt->bindParam(':id', $id, PDO::PARAM_INT);
              $stmt->bindParam(':ang', $ang, PDO::PARAM_STR);
              $stmt->bindParam(':pl', $pl, PDO::PARAM_STR);
              $stmt->bindParam(':flaga', $flaga, PDO::PARAM_INT);
              $stmt->bindParam(':sentence', $sentence, PDO::PARAM_STR);
              $stmt->execute();
            }
        } catch(PDOException $e) {
            echo "Błąd podczas tworzenia tabeli: " . $e->getMessage();
        }
    }
  }

  $data = json_encode($rows, JSON_UNESCAPED_UNICODE);

  // Ustaw nagłówek Content-Type, aby przeglądarka widziała, że to dane JSON
  header('Content-Type: application/json; charset=utf-8');

  // Wyślij dane JSON do przeglądarki
  echo $data;
?>

