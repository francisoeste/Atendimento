<!DOCTYPE html>
<?php
require_once("config.php");

$cliente = new Cliente("francis");

$cliente->insertCliente();

?>

<html>
    <head>
        <meta lang="pt">
        <meta charset="utf-8">
        <title>Atendimento</title>
    </head>
</html>