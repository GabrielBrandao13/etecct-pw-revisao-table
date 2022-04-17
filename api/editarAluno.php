<?php 
    require "./controller.php";
    
    $controller = new Controller();

    $id = $_POST['id'];

    $novoNome = $_POST['nome'];
    $novaNota1 = $_POST['nota1'];
    $novaNota2 = $_POST['nota2'];
    $novaNota3 = $_POST['nota3'];

    $controller->editarAluno($id, $novoNome, $novaNota1, $novaNota2, $novaNota3);
?>