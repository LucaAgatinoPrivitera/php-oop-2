<?php

include __DIR__ . "/Gioco.php";
include __DIR__ . "/Cuccia.php";

class Prodotto
{
    public $nome;
    public $categoria;
    public $prezzo;

    public function __construct($nome, $categoria, $prezzo) {

        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }

    public function infoComplete()
    {
        return "$this->nome $this->categoria $this->prezzo";
    }

}