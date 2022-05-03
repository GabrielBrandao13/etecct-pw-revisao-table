<?php
    function create_connection(){
        $DSN = "mysql:host=fdb25.awardspace.net;dbname=3451205_crud;charset=utf8";
        $usuario = "3451205_crud";
        $senha = "KL@Peters060504";
        
        $conn = new PDO($DSN, $usuario, $senha);;
        return $conn;
    }
?>