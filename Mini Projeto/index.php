<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="processa.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Usuário</label>
                <br>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <br>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>