<?php
    //recibir con el metodo post

   echo  $email=$_POST['email'];
   echo $name=$_POST['name'];

   require_once './controlador/usuarioControlador.php';

   $adduser=new usuarioControlador();
   $adduser->insertdata($email,$name);


?>