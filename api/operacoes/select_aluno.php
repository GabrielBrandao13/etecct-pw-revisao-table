<?php
    function get_all_alunos(){
        $conn = create_connection();
        $sql = "SELECT * FROM tbaluno";

        $resultados = [];
    
        $rs = $conn->query($sql);
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            array_push($resultados, $row->nome);
        }
        return $resultados;
    }
?>