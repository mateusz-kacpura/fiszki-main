<?php

require_once "../../../polaczeniePDO.php";

// przygotowujemy zapytanie SQL
$sql = "SELECT `ang`, `sentence` FROM `slownik` WHERE `flaga` = 1";

// wykonujemy zapytanie przy użyciu PDO
$stmt = $pdo->prepare($sql);
$stmt->execute();

// pobieramy wynik zapytania
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$ang = $result['ang'];
$replacement = '______'; 
$sentence = replaceCaseInsensitive($ang, $replacement, $result['sentence']);

// konwertujemy wynik na format JSON
$json_result = json_encode($sentence, JSON_UNESCAPED_UNICODE);

// wysyłamy wynik do JavaScript za pomocą odpowiedzi AJAX
echo $json_result;


function replaceCaseInsensitive($search, $replacement, $text) {
    // wyrażenie regularne dopasowujące szukany ciąg znaków
    $regex = "/(?<!\w)(" . preg_quote($search) . "|". preg_quote($search) . "['](?:(?:s|re|d|ve)\b|(?!\w))s?)/i";
    $text = preg_replace($regex, $replacement, $text);
    
    return $text;
}

?>
