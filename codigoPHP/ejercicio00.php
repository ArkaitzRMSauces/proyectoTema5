<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title>Ejercicio 00 - Arkaitz Rodriguez Martinez</title>        
    </head>
    <body>
        <?php
            echo '<h1>$_SERVER</h1>';
            echo '<table>';
            foreach ($_SERVER as $apartado => $valor) {
                echo '<tr> <td>' . $apartado . '</td><td>' . $valor . '</td> </tr>';
            }
            phpinfo();
        ?>
    </body>
</html>

