<?php 
    require "./operacoes/insert_aluno.php";
    require "./operacoes/select_aluno.php";
    require "./operacoes/delete_aluno.php";
    require "./aluno.php";
    require "./conexao.php";

    // insert_aluno("Gabriel", 4, 8, 9);
    // deleteAlunoById(6);
    $alunos = get_all_alunos();
    foreach($alunos as $aluno) {
        var_dump($aluno);
    }
?>