<?php
    function get_all_alunos(){
        $conn = create_connection();
        $sql = "SELECT * FROM tbaluno";

        $resultados = [];
    
        $rs = $conn->query($sql);
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $aluno = new Aluno(
                $row->nome,
                $row->nota1,
                $row->nota2,
                $row->nota3,
            );
            array_push($resultados, $aluno);
        }
        return $resultados;
    }
?>