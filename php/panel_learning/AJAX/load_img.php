<?php
require_once "../../../polaczeniePDO.php";

$pathJSON = array();

// Zapytanie SELECT do pobrania danych z tabeli
$query = "SELECT ang FROM slownik";

// Wykonaj zapytanie i pobierz dane
try {
    $stmt = $pdo->query($query);
    $ang_values = $stmt->fetchAll(PDO::FETCH_COLUMN);
} catch(PDOException $e) {
    echo "Błąd podczas pobierania danych: " . $e->getMessage();
}

// Wyświetl dane w postaci tabeli HTML

for ($i = 0; $i < count($ang_values); $i++) {
    $filename = $ang_values[$i];
    $folderPath = '../../../files/words/img/';

    $default = 'default.jpg';

    // Szukaj pliku w folderze
    $path = $folderPath . $filename . ".jpg";
    if (file_exists($path)) {
        $pathJSON[] = $path;
    } else {
        $url = 'https://www.ang.pl/img/slownik/' . $filename . '.jpg';
        $content = @file_get_contents($url);
        if ($content !== false) {
            if (file_put_contents($folderPath . $filename . '.jpg', $content) !== false) {
                $pathJSON[] = $folderPath . $filename . '.jpg';
            } else {
                if (!file_exists($folderPath)) {
                    $pathJSON[] = "Folder nie istnieje.";
                } elseif (!is_writable($folderPath)) {
                    $pathJSON[] = "Brak uprawnień do zapisu pliku.";
                } elseif (disk_free_space($folderPath) < strlen($content)) {
                    $pathJSON[] = "Brak miejsca na dysku.";
                } else {
                    $pathJSON[] = "Nieznany błąd podczas zapisu pliku.";
                }
            }
        } else {
            $pathJSON[] = $folderPath . $default;
        }
    }
}

// zamknięcie połączenia z bazą danych
$conn = null;

$newpathJSON = array();
foreach ($pathJSON as $path) {
    $newpathJSON[] = str_replace("../", "", $path);
}

    // Konwertuj dane na format JSON z polskim kodowaniem
    $data = json_encode($newpathJSON, JSON_UNESCAPED_UNICODE);

    // Ustaw nagłówek Content-Type, aby przeglądarka widziała, że to dane JSON
    header('Content-Type: application/json; charset=utf-8');

    // Wyślij dane JSON do przeglądarki
    echo $data;
?>
