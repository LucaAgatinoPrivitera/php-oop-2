<?php

include __DIR__ . "/Gioco.php";
include __DIR__ . "/Cuccia.php";

class Prodotto
{
    public $nome;
    public $categoria;
    public $prezzo;
    public $gioco;
    public $cuccia;

    public function __construct($nome, $categoria, $prezzo, Gioco $gioco = null, Cuccia $cuccia = null) {

        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->gioco = $gioco;
        $this->cuccia = $cuccia;
    }

    public function infoComplete()
    {
        return "$this->nome $this->categoria $this->prezzo";
    }

}