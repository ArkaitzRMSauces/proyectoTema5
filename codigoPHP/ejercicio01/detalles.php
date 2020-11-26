<?php
    echo "Usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br>" . "<br>";
    echo "Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "<br>" . "<br>";
    echo "<a href='programa.php'><input type='button' name='volver' value='Volver'></a><br><br>";
    echo '<h1>$_SERVER</h1>';
    echo '<table>';
    foreach ($_SERVER as $apartado => $valor) {
        echo '<tr> <td>' . $apartado . '</td><td>' . $valor . '</td> </tr>';
    }
    echo '</table>';
    echo '<h1>PHPINFO()</h1>';
    phpinfo();
?>