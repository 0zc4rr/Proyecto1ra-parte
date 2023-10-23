<?php
class Cliente{
    public $id;
    public $nombre;
    public $apellidos;
    public $direccion;
    public $nit;
    public $email;
    public $telefono;
    public $activo;
  
    function __construct($id,$nombre,$apellidos,$direccion,$nit,$email,$telefono,$activo) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->direccion=$direccion;
        $this->nit=$nit;
        $this->email=$email;
        $this->telefono=$telefono;
        $this->activo=$activo;
    }
   
  }
?>