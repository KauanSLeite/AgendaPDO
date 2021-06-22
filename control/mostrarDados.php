<?php
include('conexao/conexao.php');
require_once 'conexao/conexao.php';




    $resul_msg = "SELECT * FROM tbdados";
    //$final = Conectar()->prepare($resul_msg);
    $resul_msg->execute;

    while($row_msg_cont = $resul_msg->fetch(PDO::FETCH_ASSOC)){
        echo $resul_msg['nome']. "<br>";
    };

?>