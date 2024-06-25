<?php

class Cuccia extends Prodotto
{
    public $capienza;

    public function __construct($nome, $categoria, $prezzo, $capienza)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->capienza = $capienza;
    }
}
