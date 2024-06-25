<?php

include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";

$categoryCane = new Categoria("Per Cani");
$categoryGatto = new Categoria("Per Gatti");
// Da chiedere, Come posso fare per togliere quella ""? nel costruttore metto = null? ESATTO

$prodottoSingolo = [
    new Prodotto(
        "provaNome",
        $categoryCane,
        "12€"
    ),
    new Gioco(
        "PallaViva",
        $categoryGatto,
        "10€",
        "elettrico",
    ),

    new Cuccia(
        "Sleep",
        $categoryCane,
        "10€",
        "2 cani medi",
        "materiale comodo"
    )
];
