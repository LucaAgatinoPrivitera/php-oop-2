<?php

class Cuccia extends Prodotto
{
    public $capienza;
    public $materiale;

    public function __construct($nome, $categoria, $prezzo, $capienza, $materiale)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->capienza = $capienza;
        $this->materiale = $materiale;
    }
}
