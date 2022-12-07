<?php

class Movie {
    public $nome;
    public $genere;
    public $voto;

    
    function __construct($nome, $genere, $voto)
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->voto = $voto;

    }
    public function printMovie(){
        return "nome: $this->nome; Genere: $this->genere; voto: $this->voto";
    }
}