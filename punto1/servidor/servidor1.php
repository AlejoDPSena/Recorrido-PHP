<?php

$valorNombre = $_POST['nombre'];
$valorEdad = $_POST['edad'];

if($valorEdad >= 18){
    echo "el nombre ingresado es:".$valorNombre."<br>"."el edad ingresado es:".$valorEdad;
}; 