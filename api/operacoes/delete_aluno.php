<?php 
    function deleteAlunoById($id){
        $conn = create_connection();

        $sql = "DELETE FROM tbaluno WHERE id = :id";
        $sql = $conn->prepare($sql);

        $sql->bindParam(":id", $id);

        $sql->execute();
    }
?>