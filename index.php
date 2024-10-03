<?php
    session_start();

    $_SESSION['navbar_links'] = array(
        "./" => "Home",
        "./um.php" => "Blog",
        "./dois.php" => "Products",
        "./tres.php" => "About Us",
        "./quatro.php" => "Contact Us"
    );

    require_once "./.security/userverify.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Business | Databook</title>
    <link rel="stylesheet" href="./.config/normalize.css">
    <link rel="stylesheet" href="./.config/animations.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once "./_blocks/header.php";
        require_once "./_blocks/portal.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>