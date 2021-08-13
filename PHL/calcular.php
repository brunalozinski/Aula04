<link rel= "stylesheet" href="style.css">

<?php

if (isset($_POST["cidadeOrigem"]) && isset($_POST["cidadeDestino"]) 
   && isset($_POST["distanciaKM"]) && isset($_POST["pedagios"])){

    $cidadeOrigem = $_POST["cidadeOrigem"];
    $cidadeDestino = $_POST["cidadeDestino"];
    $distanciaKM = $_POST["distanciaKM"];
    $pedagios = $_POST["pedagios"];

    $calculo = ($distanciaKM * 6) + ($pedagios * 9.40);

    echo "A viagem de ". $cidadeOrigem . " à " . $cidadeDestino . 
    "irá custar o valor total de R$" . $calculo;
}
