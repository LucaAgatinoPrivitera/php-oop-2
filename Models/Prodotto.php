<?php

include __DIR__ . "/Gioco.php";
include __DIR__ . "/Cuccia.php";

class Prodotto
{
    public $nome;
    public $categoria;
    public $prezzo;

    public function __construct($nome, Categoria $categoriaArgomento, $prezzo) {

        $this->nome = $nome;
        $this->categoria = $categoriaArgomento;
        $this->prezzo = $prezzo;
    }

    public function infoComplete()
    {
        return "$this->nome $this->categoria $this->prezzo";
    }

    public function getDescrizione() { //Da chiedere ma serve per forza?...Dopo essere quasi impazzito per 20 minuti ho capito che non posso stampare in pagina senza sto metodo

        return  $this->categoria->descrizione . "è un prodotto della categoria " . $this->categoria?->nome;
        //da chiedere questo categoria descrizione va messo così? nelle virgolette non funzionava l'if abbreviato

    }

}