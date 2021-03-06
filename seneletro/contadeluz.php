<?php

$nome_completo = $_GET['nome_completo'];
$endereco = $_GET['endereco'];
$consumo = $_GET['consumo'];

$valorconta1 = $consumo * 0.42;
$valordaconta2 = $consumo * 0.32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro</title>
</head>
<body>
    <?php
    
    if($consumo > 120){
    ?>
    <h1 style="color: red;"><?=$consumo ?>kWh (Busque economizar!!!)</h1>
    <h1>O valor total a pagar é R$ <?=$valorconta1?>. </h1>
    <?php
    }else{
    ?>
    <h1 style="color: blue;" > <?=$consumo?>kWh (Obrigado por economizar!!!) </h1>
    <h1>O valor total a pagar é R$<?=$valordaconta2 ?>. </h1>

    <?php
    }
    ?>
</body>
</html>