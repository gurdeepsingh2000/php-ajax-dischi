<?php

require_once __DIR__ . "/../db/database.php";

$genre = $_GET['genre'];

$filterGenreType = function($item) use ($genre) {
    return $item['genre'] === $genre;
}; 

$result = array_filter($disks, $filterGenreType);

header('Content-Type: application/json');
echo json_encode($result);

?>