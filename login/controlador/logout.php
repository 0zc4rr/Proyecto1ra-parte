<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['nombre']);
    unset($_SESSION['id']);

    session_destroy();

    header('Location: http://localhost/Proyecto-camisetas/login/index.html');

?>