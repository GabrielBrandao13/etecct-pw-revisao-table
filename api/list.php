<?php 
    require "./controller.php";

    $controller = new Controller();

    $alunos = $controller->listarAlunos();

    $json_alunos = json_encode($alunos);
    echo $json_alunos;
?>