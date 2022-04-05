<?php

require "./aluno.php";

$aluno1 = new Aluno("Criosvaldo Daniel", 4, 5, 9);
$aluno2 = new Aluno("Mary", 10, 9, 9);

$listaAlunos = [$aluno1, $aluno2, $aluno1];

$json = json_encode($listaAlunos);
var_dump($json);


?>