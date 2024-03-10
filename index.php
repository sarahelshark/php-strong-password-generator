<?php
/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
-Creare un form che invii in GET la lunghezza della password.
-Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
-Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
-Spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
-Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
-Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). 
-Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
 */
session_start();

$passwordLength = $_GET['passwordLength'];
include_once __DIR__ . '/functions.php';


$newPassword = passwordGenerator($passwordLength);
var_dump($newPassword);

$_SESSION['newPassword'] = $newPassword;
if (isset($_SESSION['newPassword']) && $_SESSION['newPassword'] != '') {
    header('Location: ./results.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>

    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container mt-3">
        <h1 class="text-white">Password generator</h1>
        <form action="" method="get">
            <label class="d-block text-white" for="passwordLength">Lunghezza password desiderata</label>
            <input type="number" name="passwordLength" id="passwordLength">
            <button type="submit">Crea</button>
        </form>
    </div>
</body>

</html>