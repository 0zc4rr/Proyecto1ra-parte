<?php

if (isset($_POST['submit'])) {

    // Incluir el archivo del modelo
    require "../modelo/modelo.php";

    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Realizar la consulta en la base de datos
    $results = $_DB->select(
        "SELECT nombre, id FROM usuario WHERE password ='" . $password . "' AND email ='" . $email . "'"
    );

    if (count($results) > 0) {
        // Si se encuentra un usuario con las credenciales proporcionadas
        foreach ($results as $res) {
            $Nombre = $res['nombre'];
            $id = $res['id'];
        }

        // Iniciar sesión y almacenar información del usuario
        session_start();
        $_SESSION['nombre'] = $Nombre;
        $_SESSION['id'] = $id;
        $_SESSION['valido'] = 1;

        // Redirigir a la página de inicio
        header('Location: http://localhost/Proyecto-camisetas/sidebars/index.php');
        exit;
    } else {
        // Si no se encuentran coincidencias, redirigir a la página de inicio de sesión con un mensaje de error
        header('Location: http://localhost/login/index.html?error=1');
        exit;
    }
}
?>
