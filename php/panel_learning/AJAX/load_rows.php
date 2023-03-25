<?php 
require_once "../../../polaczeniePDO.php";

    // Zapytanie SELECT do pobrania danych z tabeli
    $query = "SELECT `ang`, `pl`, `flaga` FROM `slownik`";

    // Wykonaj zapytanie i pobierz dane
    try {
        $stmt = $pdo->query($query);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Błąd podczas pobierania danych: " . $e->getMessage();
    }

    // zamknięcie połączenia z bazą danych
    $conn = null;

    // Konwertuj dane na format JSON z polskim kodowaniem
    $data = json_encode($rows, JSON_UNESCAPED_UNICODE);

    // Ustaw nagłówek Content-Type, aby przeglądarka widziała, że to dane JSON
    header('Content-Type: application/json; charset=utf-8');

    // Wyślij dane JSON do przeglądarki
    echo $data;

?>