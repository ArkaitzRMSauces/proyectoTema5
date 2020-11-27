<?php
session_start(); //recupero la sesion creada en login.php

if (!isset($_SESSION['usuarioDAW205'])) {
    header('Location: ../../indexProyectoTema5.php');
}

if (isset($_POST["salir"])) {
    session_destroy();
    header('Location: ../../indexProyectoTema5.php');
}

if (isset($_POST["detalles"])) {
    header('Location: detalles.php');
    exit;
}
?>

<h3>Autenticacion correcta</h3>
<form action="<?php ?>" method="post">
    <input type="submit" name="salir" value="Cerrar Sesion">
    <input type="submit" name="detalles" value="Detalle">
</form>