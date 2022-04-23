<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if($num1 > 0 || $num2 > 0){
    echo "Numeros positivos:".$num1."<br>".$num2;
} 
else{
    echo "no es positivo".$num1."<br>".$num2;
};