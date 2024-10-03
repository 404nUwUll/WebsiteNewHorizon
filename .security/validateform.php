<?php

    session_start();

    $current_username = $_GET['username'];
    $current_passkey = $_GET['passkey'];

    echo $current_username;
    echo $current_passkey;

    $_SESSION['username'] = $current_username;
    $_SESSION['passkey'] = $current_passkey;

    $settedUser = isset($_SESSION['username']) && isset($_SESSION['passkey']);
    
    if (true){
        header('Location: ../index.php');
    }

?>