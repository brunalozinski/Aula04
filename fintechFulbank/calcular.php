<link rel="stylesheet" href="style.css">

<?php

if (isset ($_POST["nome"]) && isset($_POST["salarioAtual"])
    && isset($_POST["cargo"]))
{
    $nome = $_POST["nome"];
    $salarioAtual = $_POST["salarioAtual"];
    $cargo = $_POST["cargo"];

    $novoSalario = $_POST["novoSalario"];
} else {
    echo "Campos não preenchidos";
} 

if {

}