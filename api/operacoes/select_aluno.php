<?php 
    require "../conexao.php";
    $conn = create_connection();
    $sql = "SELECT * FROM tbaluno";
    // $sql = $conn->prepare($sql);

    $rs = $conn->query($sql);
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
        echo $row->nome;
    }
?>