<?php

require "./aluno.php";
require "./conexao.php";

class Controller {
    public function listarAlunos(){
        $conn = create_connection();
        $sql = "SELECT * FROM tbaluno";

        $resultados = [];

        $rs = $conn->query($sql);
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $aluno = new Aluno(
                $row->id,
                $row->nome,
                $row->nota1,
                $row->nota2,
                $row->nota3,
            );
            array_push($resultados, $aluno);
        }
        return $resultados;
    }
    public function inserirAluno($nome, $nota1, $nota2, $nota3){
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
    public function removerAluno($id){
        $conn = create_connection();
        $sql = "DELETE FROM tbaluno WHERE id = :id";
        $sql = $conn->prepare($sql);

        $sql->bindParam(":id", $id);

        $sql->execute();
    }

    public function editarAluno($id, $nome, $nota1, $nota2, $nota3){
        $conn = create_connection();
        $sql = "UPDATE tbaluno SET nome= :nome, nota1= :nota1, nota2= :nota2, nota3= :nota3, media= :media WHERE id= :id";
        $sql = $conn->prepare($sql);

        $media = ($nota1+$nota2+$nota3)/3;

        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":id", $id);
        $sql->bindParam(":nota1", $nota1);
        $sql->bindParam(":nota2", $nota2);
        $sql->bindParam(":nota3", $nota3);
        $sql->bindParam(":media", $media);

        $sql->execute();
    }

}

?>