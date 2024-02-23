<?php
    require_once __DIR__ . '/../core/CViewCore.php';
    require_once __DIR__ . '/../src/components/HeaderComponent.php';

    $title = "Benvenuto in cView!";

    $_header = new HeaderComponent();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

    <?php $_header->render(["logoPath" => "assets/img/logo.png"]); ?>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to Top</a>
            </p>
            <p>cView is an open source project. Visit the <a href="#">GitHub repository</a> to contribute or download the code.</p>
        </div>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
