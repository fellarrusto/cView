<?php
// Definisci l'elenco delle pagine consentite con il loro path
$allowedPages = [
    '/' => 'views/home.php',
    '/home' => 'views/home.php',
];

$requestUri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$requestPath = parse_url($requestUri, PHP_URL_PATH);

// Controlla se la pagina richiesta è nell'elenco delle pagine consentite
if (array_key_exists($requestPath, $allowedPages)) {
    // Includi il file PHP corrispondente alla pagina richiesta
    include($allowedPages[$requestPath]);
} else {
    // Mostra una pagina di errore se la pagina richiesta non è valida o non è definita
    include('views/404.php');
}
