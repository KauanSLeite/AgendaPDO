<?php

class conectares{

    public static $usuario = "root";
    public static $senha = "";
    private static $Connect = null;


    private static function Conectar(){

        try{

            if(self::$Connect == null)
            {
                self::$Connect = new PDO('mysql:host=localhost:3308;dbname=agenda;',
                self::$usuario,self::$senha);

            }

        } catch (Exception $ex) {
            echo 'Mensagem: ' .$ex->getMessage();

            die;
        }
        return self::$Connect;
    }
    public function getConn()
    {
        return self::Conectar();
    }
}


?>