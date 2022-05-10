<?php

require "./aluno.php";
require "./conexao.php";

class Controller {
    public $conn;
    function __construct(){
        $this->conn = create_connection();
    }
    public function listarAlunos(){
        $sql = "SELECT * FROM tbaluno";

        $resultados = [];

        $rs = $this->conn->query($sql);
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
        $media = ($nota1+ $nota2+ $nota3)/3;
        $sql = "INSERT INTO tbaluno(nome, nota1, nota2, nota3, media) VALUES (:nome, :nota1, :nota2, :nota3, :media)";
        $sql = $this->conn->prepare($sql);

        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":nota1", $nota1);
        $sql->bindParam(":nota2", $nota2);
        $sql->bindParam(":nota3", $nota3);
        $sql->bindParam(":media", $media);
        
        $sql->execute();
    }
    public function removerAluno($id){
        $sql = "DELETE FROM tbaluno WHERE id = :id";
        $sql = $this->conn->prepare($sql);

        $sql->bindParam(":id", $id);

        $sql->execute();
    }

    public function editarAluno($id, $nome, $nota1, $nota2, $nota3){
        $sql = "UPDATE tbaluno SET nome= :nome, nota1= :nota1, nota2= :nota2, nota3= :nota3, media= :media WHERE id= :id";
        $sql = $this->conn->prepare($sql);

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