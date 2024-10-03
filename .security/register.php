<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../.config/normalize.css">
    <link rel="stylesheet" href="../.config/animations.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center bg-primary" style="width: 100vw; height: 100vh;">
        <div class="d-flex flex-column p-3 bg-white rounded shadow" style="width: 50%; min-width:300px; max-width:500px; height: fit-content;">
            <form action="validateform.php" method="GET" class="d-flex flex-column justify-content-evenly">
                <div>
                    <h3 class="display-6 text-center">INICIAR SESSÃO</h3>
                    <p class="lead text-center">Faça o login para acessar sua página.</p>
                </div>
                <div class="m-2">
                    <label for="">Nickname:</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="m-2">
                    <label for="">Senha:</label>
                    <input type="password" name="passkey" id="passkey" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary p-3 m-2">LOGIN</button>
                <a href="#" class="btn btn-outline-primary p-3 m-2">CADASTRAR</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>