<?php

class Conexao
{
     public static function conectar()
     {
        $host = "localhost";    //servidor
        $port = "3306"; //porta
        $dbname= "Artigos"; //nome do banco de dados
        $user = "root"; //usuário do BD
        $pwd = ""; //senha do BD

        $con = new PDO("mysql:host=$host;
        port=$port;dbname=$dbname",$user, $pwd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;

     }
}