<?php
    if ($_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != 'paso') {
        header('WWW-Authenticate: Basic Realm="Login"');
        header('HTTP/1.0 401 Unauthorized');
        echo "Autenticacion incorrecta";
        exit;
    } else {
        header('Location: programa.php');
    }
?>
