<?php
$raizCuadrada = $_POST['absoluto'];
if($raizCuadrada < 0){
    echo "Tiene una raiz imaginaria".sqrt($raizCuadrada);
} 
else{
    echo sqrt($raizCuadrada);
};