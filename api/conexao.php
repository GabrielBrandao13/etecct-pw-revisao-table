<?php
    function create_connection(){
        $conn = new PDO("mysql:host=localhost;dbname=bdalunos", "gabirel");
        return $conn;
    }
?>