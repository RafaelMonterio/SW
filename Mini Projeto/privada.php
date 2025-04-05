<?php
$nome = $_GET['nome'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css">
    <title>Página Privada</title>
</head>
<body>
    <div class="container">
        <h2>BEM VINDO, <?php echo htmlspecialchars($nome); ?>!</h2>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>