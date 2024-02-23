<?php
// Definisci l'elenco delle pagine consentite
$allowedPages = [
    '' => 'views/home.php',
];

// Ottieni il parametro 'page' dall'URL
$page = isset($_GET['page']) ? $_GET['page'] : '';

// Controlla se la pagina richiesta è nell'elenco delle pagine consentite
if (array_key_exists($page, $allowedPages)) {
    // Includi il file PHP corrispondente alla pagina richiesta
    include($allowedPages[$page]);
} else {
    // Mostra una pagina di errore se la pagina richiesta non è valida o non è definita
    include('views/404.php');
}

