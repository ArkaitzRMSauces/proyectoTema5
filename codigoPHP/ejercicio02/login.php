 <?php

require_once('../../config/confDB.php');
session_start();

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Contenido restringido"');
    header("HTTP/1.0 401 Unauthorized");
    echo "<h3>INICIO DE SESIÓN CANCELADO</h3>";
    echo "<a href='../../indexProyectoTema5.php'><input type='button' name='salir' value='Salir'></a>";
} else {
    $usuario = $_SERVER["PHP_AUTH_USER"];
    $password = $_SERVER["PHP_AUTH_PW"];

    try {
        // Datos de la conexión a la base de datos
        $miDB = new PDO(DNS, USER, PASSWORD);
        $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Cómo capturar las excepciones y muestre los errores

        $consultaSQL = "SELECT * FROM Usuario WHERE CodUsuario = :codUsuario and Password = :password";
        $resultadoSQL = $miDB->prepare($consultaSQL);
        $resultadoSQL->bindValue("codUsuario", $usuario);
        $resultadoSQL->bindValue(':password', hash('sha256', $usuario . $password));
        $resultadoSQL->execute();

        if ($resultadoSQL->rowCount() == 1) { //te recorre todas las campos de la base, y si uno es como dice el query pues se ejecuta el if
            $_SESSION['usuarioDAW205'] = $usuario; //te crea la sesion identificado por el usuario
            header('Location: programa.php');
        } else {
            header('WWW-Authenticate: Basic Realm="Autenticacion fallida"');
            header('HTTP/1.0 401 Unauthorized');
        }
    } catch (PDOException $mensajeError) { //Cuando se produce una excepcion se corta el programa y salta la excepción con el mensaje de error
        echo "<h3>Mensaje de ERROR</h3>";
        echo "Error: " . $mensajeError->getMessage() . "<br>";
        echo "Código de error: " . $mensajeError->getCode();
    } finally {
        unset($miDB);
    }
}
?> 