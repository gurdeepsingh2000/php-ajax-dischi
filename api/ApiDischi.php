<?php

//richiamo il database per una volta
require_once __DIR__ . "/../db/database.php";
//usiamo __DIR__(costante magica) per ottenere il path del file su cui stiamo lavorando

//richiamo la funzione printJson per mostrare in pagina il risultato generato dall' dell'api
require_once __DIR__ . "/../functions/printJson.php";

//dopo aver richiamato il file JsonShow contenente la funzione la eseguo allo'interno di questo file passando come argomento l'array $Disks (accesso ottenuto attraverso il richiamo del file del database)
JsonShow($disks);
?>