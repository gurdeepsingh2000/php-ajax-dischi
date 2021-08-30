<?php
//creo la funzione per mostrare il data dell'API
function JsonShow($diskElement){

    //la funzione header ci permette di inviare un dato sottoforma di RAW HTTP e non in formato default(HTML)
    header('Content-Type: application/json');
    echo json_encode($diskElement);
}
?>