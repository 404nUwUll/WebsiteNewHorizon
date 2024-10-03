<?php
    http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Business | Databook</title>
    <link rel="stylesheet" href="../.config/normalize.css">
    <link rel="stylesheet" href="../.config/animations.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 text-center" style="height: 100vh;">
        <div class="d-flex flex-row position-absolute top-50 left-50 translate-middle-x translate-middle-y">
            <div class="d-flex m-3">
                <img src="../imgs/annoyed.png" alt="" class="object-fit-contain" width="200">
            </div>
            <div class="d-block m-3">
                <h1 class="display-2 text-primary">Erro 404</h1>
                <p class="lead text-primary">"Hmm, gah! It was a fake png?!!"</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>