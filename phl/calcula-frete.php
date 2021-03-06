<?php

$cidadeOrigem = $_GET['cidadeOrigem'];
$cidadeDestino = $_GET['cidadeDestino'];


$distancia = $_GET['distancia'];
$pedagio = $_GET['pedagio'];

$valorDistancia = $distancia * 6.00;
$valorPedagio = $pedagio * 9.40;

$valorTotal = $valorDistancia + $valorPedagio;



echo "A viagem de $cidadeOrigem até $cidadeDestino irá custar $valorTotal";

