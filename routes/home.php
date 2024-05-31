<?php
    $msg = "<h1>Bem vindo ao nosso site</h1>";
    $page = "Home";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php echo $msg; ?>

    <p>Página atual: <?php echo $page ?></p>
    
    <br><p>Navegação:</p>
    <?php include_once 'components/navBar.php'; ?>
</body>
</html>
