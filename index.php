<?php
// Definisci l'elenco delle pagine consentite con il loro path
$allowedPages = [
    '/' => 'views/home.php',
    '/home' => 'views/home.php',
];

// Ottieni il path dalla richiesta
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Controlla se la pagina richiesta è nell'elenco delle pagine consentite
if (array_key_exists($requestPath, $allowedPages)) {
    // Includi il file PHP corrispondente alla pagina richiesta
    include($allowedPages[$requestPath]);
} else {
    // Mostra una pagina di errore se la pagina richiesta non è valida o non è definita
    include('views/404.php');
}
