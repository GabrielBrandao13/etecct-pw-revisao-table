<?php 
    require "./controller.php";
    $controller = new Controller();

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $controller->inserirAluno($nome, $nota1, $nota2, $nota3);
?>