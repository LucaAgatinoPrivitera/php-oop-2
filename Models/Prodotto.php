<?php

include __DIR__ . "/Tipo.php";

class Prodotto
{


    public function __construct(public $nome, public $categoria, public $prezzo) {

        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }

    public function infoComplete()
    {
        return "$this->nome $this->categoria $this->prezzo";
    }

}