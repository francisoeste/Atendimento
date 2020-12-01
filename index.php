<!DOCTYPE html>
<?php
require_once("config.php");

$cliente = new Cliente();

$cliente->loadById(1);

echo $cliente;

?>

<html>
    <head>
        <meta lang="pt">
        <meta charset="utf-8">
        <title>Atendimento</title>
    </head>
</html>