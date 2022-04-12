<?php

class Aluno {
    public string $nome;
    public int $nota1;
    public int $nota2;
    public int $nota3;
    public float $media;

    public function __construct(string $nome, int $nota1, int $nota2, int $nota3){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;

        $this->media = ($nota1+ $nota2+ $nota3)/3;
    }

}

?>