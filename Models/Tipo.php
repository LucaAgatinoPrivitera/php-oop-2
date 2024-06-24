<?php

class Tipo extends Prodotto
{
    public function __construct($nome, $categoria, $prezzo, $tipologia)
    {
        $this->nome = $tipologia;
    }
}
