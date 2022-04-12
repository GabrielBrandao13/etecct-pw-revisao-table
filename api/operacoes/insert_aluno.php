<?php
    function insert_aluno($nome, $nota1, $nota2, $nota3){
        $conn = create_connection();
        $media = ($nota1+ $nota2+ $nota3)/3;
        $sql = "INSERT INTO tbaluno(nome, nota1, nota2, nota3, media) VALUES (:nome, :nota1, :nota2, :nota3, :media)";
        $sql = $conn->prepare($sql);

        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":nota1", $nota1);
        $sql->bindParam(":nota2", $nota2);
        $sql->bindParam(":nota3", $nota3);
        $sql->bindParam(":media", $media);

        $sql->execute();
    }
?>