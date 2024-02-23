<?php
    require_once __DIR__ . '/../core/CViewCore.php';
    $title = "404 Page not found :(";
    $welcome = "404 Page not found :(";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php rnd($title)?></title>
</head>
<body>
    <?php rnd($welcome)?>
</body>
</html>