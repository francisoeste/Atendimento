<!DOCTYPE html>
<?php
require_once("config.php");

$cliente = new Cliente();

$cliente->setNome("teste23");

echo $cliente->getNome();

$cliente->insertCliente();

?>

<html>
    <head>
        <meta lang="pt">
        <meta charset="utf-8">
        <title>Atendimento</title>
    </head>
</html>