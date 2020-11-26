<?php
session_start(); //recupero la sesion creada en login.php

if (!isset($_SESSION['usuarioDAW205'])) {
    header('location: ../../indexProyectoTema5.php');
}

echo "Usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br>" . "<br>";
echo "Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "<br>" . "<br>";
echo "<a href='programa.php'><input type='button' name='volver' value='Volver'></a><br><br>";
?>

<h3>$_COOKIE con foreach</h3>
<table border="1">
    <tr>
        <th>Variable</th>
        <th>Valor</th>
    </tr>
    <?php
    foreach ($_COOKIE as $codigoIndice => $valor) { //Con el foreach recorremos el array
        ?>
        <tr>
            <td><?php echo '<b>$_COOKIE[' . "'" . $codigoIndice . "'" . "]</b>"; ?></td>
            <td><?php echo "$valor"; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h3>$_SESSION con foreach</h3>
<table border="1">
    <tr>
        <th>Variable</th>
        <th>Valor</th>
    </tr>
    <?php
    foreach ($_SESSION as $codigoIndice => $valor) { //Con el foreach recorremos el array
        ?>
        <tr>
            <td><?php echo '<b>$_SESSION[' . "'" . $codigoIndice . "'" . "]</b>"; ?></td>
            <td><?php echo "$valor"; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h3>$_SERVER con foreach</h3>
<table border="1">
    <tr>
        <th>Variable</th>
        <th>Valor</th>
    </tr>
    <?php
    foreach ($_SERVER as $codigoIndice => $valor) { //Con el foreach recorremos el array
        ?>
        <tr>
            <td><?php echo '<b>$_SERVER[' . "'" . $codigoIndice . "'" . "]</b>"; ?></td>
            <td><?php echo "$valor"; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h3>$_ENV con foreach</h3>
<table border="1">
    <tr>
        <th>Variable</th>
        <th>Valor</th>
    </tr>
    <?php
    foreach ($_ENV as $codigoIndice => $valor) { //Con el foreach recorremos el array
        ?>
        <tr>
            <td><?php echo '<b>$_ENV[' . "'" . $codigoIndice . "'" . "]</b>"; ?></td>
            <td><?php echo "$valor"; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h3>$_FILE con foreach</h3>
<table border="1">
    <tr>
        <th>Variable</th>
        <th>Valor</th>
    </tr>
    <?php
    foreach ($_FILES as $codigoIndice => $valor) { //Con el foreach recorremos el array
        ?>
        <tr>
            <td><?php echo '<b>$_FILES[' . "'" . $codigoIndice . "'" . "]</b>"; ?></td>
            <td><?php echo "$valor"; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<?php
echo phpinfo();
?>

<html>
    <head>
        <meta charset="UTF-8">        
        <title>Ejercicio 02 - Arkaitz Rodriguez Martinez</title>
    </head>
    <body>

    </body>
</html>
