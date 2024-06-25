<?php

include __DIR__ . "/models/Prodotto.php";

$prodottoSingolo = [
    new Prodotto(
        "provaNome",
        "Cane",
        "12€"
    ),
    new Gioco(
        "PallaViva",
        "Gatti",
        "10€",
        "elettrico",
    ),

    new Cuccia(
        "Sleep",
        "Cani",
        "10€",
        "2 cani medi"
    )
];
