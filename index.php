<?php
include ('Persona.php');

// creacion de un objeto o instancia de  la clase 
$esperanzagomez = new Persona();

echo($esperanzagomez->nombre);

$esperanzagomez->nombre="esperancita";
echo("<br>");
echo($esperanzagomez->nombre);
echo("<br>");

$nombres=array("juan","ana");
echo $nombres[0];

echo("<br>");

$esperanzagomez->saludar($nombres[0]);



?>