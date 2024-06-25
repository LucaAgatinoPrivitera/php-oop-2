<?php

class Gioco extends Prodotto
{
    public $elettrico;

    public function __construct($nome, $categoria, $prezzo, $elettrico) {

        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->elettrico = $elettrico;
    }
}
