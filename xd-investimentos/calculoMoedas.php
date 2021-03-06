<?php

$moedaConvertida = $_GET['Moeda'];
$moedaReal = $_GET['moedaReal'];

$dolar = 5.41;
$euro = 6.57;


$conversaoDolar = $moedaReal / $dolar;
$conversaoEuro = $moedaReal / $euro;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xd-investimentos</title>
</head>
<body>
    <?php
        if($moedaConvertida == "D"){
    ?>
    <h1>O valor total em dolar será de: $<?=$conversaoDolar?></h1>
    <?php
        }else{
    ?>
    <h1>O valor total em Euro será de: £<?=$conversaoEuro ?></h1>
    <?php
        }
    ?>

</body>
</html>