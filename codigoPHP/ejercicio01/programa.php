<h3>Usuario aceptado</h3>
<?php
    session_start();
    if (isset($_POST["salir"])) {
        session_destroy();
        header('Location: ../../indexProyectoTema5.php');
    }

    if (isset($_POST["detalles"])) {
        header('Location: detalles.php');
        exit;
    }
?>
<form action="<?php ?>" method="post">
    <input type="submit" name="salir" value="LogOut">
    <input type="submit" name="detalles" value="Detalles">
</form>