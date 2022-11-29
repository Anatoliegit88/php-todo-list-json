<?php

$string = file_get_contents("to-do-list.json");
$todos = json_decode($string, true);

// Controllo se nel post c'è la chiave newTodo
if (isset($_POST["newTodo"])) {
    // Siamo nel caso di salvataggio del nuovo dato
    $new_todo = $_POST["newTodo"];
    $todos[] = $new_todo;
    // Scrittura nel file
    file_put_contents("todo-list.json", json_encode($todos));
}

// Parte di invio dei dati
header("Content-Type: application/json");
echo json_encode($todos);