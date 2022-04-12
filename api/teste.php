<?php 
    require "./operacoes/insert_aluno.php";
    require "./operacoes/select_aluno.php";
    require "./conexao.php";

    insert_aluno("Gabriel", 4, 8, 9);
    $alunos = get_all_alunos();
    foreach($alunos as $aluno) {
        echo $aluno;
    }
?>