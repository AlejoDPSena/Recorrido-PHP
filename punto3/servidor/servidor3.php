<?php

$valorNombre = $_POST['nombre'];
$valorEdad = $_POST['edad'];
$sexo = $_POST['sexo'];

if($valorEdad >= 18 && $sexo == "1"){
    echo "el nombre ingresado es:".$valorNombre."<br>"."el edad ingresado es:".$valorEdad;
}