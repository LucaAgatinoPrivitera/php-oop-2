<?php

class Cuccia extends Prodotto
{
    public $nomeCuccia;
    public $capienza;

    public function __construct($nomeCuccia, $capienza)
    {
        $this->nomeCuccia = $nomeCuccia;
        $this->capienza = $capienza;
    }
}
