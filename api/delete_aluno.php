<?php 
    require "./controller.php";
    $controller = new Controller();

    $id = $_POST['id'];

    $controller->removerAluno($id);
?>