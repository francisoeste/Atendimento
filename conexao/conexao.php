<?php 
    $ip      = "localhost";
    $usuario = "root";
    $senha   = "";
    $banco   = "atendimento";
    
    $conecta = mysqli_connect($ip, $usuario, $senha, $banco);

    if ( mysqli_connect_error() ) {
        die("Erro ao Conectar no Servidor" . mysqli_connect_error());
    }
?>