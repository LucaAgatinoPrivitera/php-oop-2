<?php

class Gioco extends Prodotto
{
    public $nomeGioco;
    public $elettrico;

    public function __construct($nomeGioco, $elettrico)
    {
        $this->nomeGioco = $nomeGioco;
        $this->elettrico = $elettrico;
    }
}
