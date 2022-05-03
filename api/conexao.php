<?php
    function create_connection(){
        $conn = new PDO("mysql:host=fdb25.awardspace.net;dbname=3451205_crud", "3451205_crud", "KL@Peters060504");
        return $conn;
    }
?>