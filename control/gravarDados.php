<?php

require_once 'conexao/conexao.php';

    if($_POST['cxnome'] != "")
    {


        $Conn = new conectares();

        $query = "insert into tbdados(nome,numero,email)
        values
        (:nome,:numero,:email)";

        $cadastrar = $Conn->getConn()->prepare($query);

        $cadastrar->bindParam(':nome', $_POST["cxnome"], PDO::PARAM_STR);
        $cadastrar->bindParam(':numero', $_POST["cxnum"], PDO::PARAM_STR);
        $cadastrar->bindParam(':email', $_POST["cxemail"], PDO::PARAM_STR);

        $cadastrar->execute();


        if($cadastrar->rowCount()){
            echo "Cadastrado com sucesso";
        }
        else
        {
            echo "Dados não cadastrado";
        }


    }
    else
    {
        echo "Dados Incompleto!";
    }

    
?>