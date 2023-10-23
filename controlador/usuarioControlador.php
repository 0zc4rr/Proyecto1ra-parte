<?php
require_once '../modelo/modelo.php';

class usuarioControlador{

  function  getdata(){
       $_DB = new DB();

       $results = $_DB->select(
           "SELECT * FROM `usuario`",
         );
         
         $usuario= json_encode(count($results)==0 ? null : $results);

         $data = json_decode($usuario,false);
         return $data;
   }

   function insertdata($email,$name){

    $_DB = new DB();

    $results = $_DB->insert("INSERT INTO usuario(email,name) VALUES('".$email."','".$name."')",);
   }
 }
    
     
?>
