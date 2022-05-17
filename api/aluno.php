<?php

class Aluno {
    public $id;
    public $nome;
    public $nota1;
    public $nota2;
    public $nota3;
    public $media;

    public function __construct(string $id, string $nome, int $nota1, int $nota2, int $nota3){
        $this->id = $id;
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;

        $this->media = ($nota1+ $nota2+ $nota3)/3;
    }

}

?>