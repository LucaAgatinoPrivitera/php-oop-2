<?php

class Categoria
{

    public $nome;
    public $descrizione;

    public function __construct($nomeCategoria, $descrizione = null)
    {
        $this->nome = $nomeCategoria;
        $this->descrizione = $descrizione;
    }
}
