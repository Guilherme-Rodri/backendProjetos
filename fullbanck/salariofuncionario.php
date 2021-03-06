<?php

$funcionario = $_GET['funcionario'];
$salario = $_GET['salario'];

$aumento10 = $salario * 0.1 ;
$aumento20 = $salario * 0.2 ;

$calculoAumento10 = $salario + $aumento10;
$calculoAumento20 = $salario + $aumento20;

if($salario > 5000){
 echo " $funcionario passará a receber $calculoAumento10";
}else if ($salario <= 5000){
    echo " $funcionario passará a receber $calculoAumento20";
}

?>