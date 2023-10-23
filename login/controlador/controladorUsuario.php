<?php
  
  if(isset($_POST['submit']))
  {
    //Verificar 
    require "../modelo/modelo.php";
    $email =    $_POST['email'];
    $password = $_POST['password'];
    //$usuario = new Usuario($email,$password);

    //verificando credenciales
    $results = $_DB->select(
      "SELECT nombre,id FROM usuario WHERE password ='".$password. "' AND email ='".$email."'",
    );
    
    //var_dump($results); usuario existe 
    if(count($results)>0){;
        foreach ($results as $res) {
          $nombre= $res['nombre'] ;
          $id = $res['id'] ; 
      }

        session_start();
        $_SESSION['nombre'] =$nombre;
        $_SESSION['id'] =$id;
        $_SESSION['valido'] =1;

        //header('Location: http://localhost/h3/sign-in/controlador/header.php');

        //header('Location: http://localhost/h3/sidebars/index.php?usuario='.$nombre.'&id='.$id);

        header('Location: http://localhost/Proyecto-camisetas/sidebars/index.php');

    } else {
      header('Location: http://localhost/login/index.html');
      exit;
    }

  }

?>