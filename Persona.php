<?php

class  Persona{


    // artibutos 
    public $nombre;
    public $apellido;


    // constructor 
     public function __construct(){

        $this->nombre="hola";

     }


    // metodos 

    public function saludar($nombre){
        echo("hola como estas del virus?".$nombre);
    }
}



?>