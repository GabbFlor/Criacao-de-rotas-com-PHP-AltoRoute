<?php
    $msg = "<h1>Teste de link dinâmico com usuários</h1>";
    $page = "User";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php echo $msg; ?>

    <p>Página atual: <?php echo $page ?></p>

    <p>Usuário atual (segundo a url) = <span>User <?php echo $id ?></span></p>
    
    <br><p>Navegação:</p>
    <?php include_once 'components/navBar.php'; ?>
</body>
</html>
