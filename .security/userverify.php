<?php

    $username = $_SESSION['username'];
    $passkey = $_SESSION['passkey'];

    $db_username = 'admin';
    $db_password = 'admin';

    if (!((isset($_SESSION['username']) || isset($_SESSION['passkey'])) && ($username == $db_username) && ($passkey == $db_password))){

        header('Location: ./.security/register.php');

    }

?>