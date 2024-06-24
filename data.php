<?php

include __DIR__ . "/models/Prodotto.php";

$prodottoSingolo = [
    new Prodotto(
        "PallaViva", "Gatti", "10€",
        new Gioco("Pallina", "elettrico")),
        
        new Prodotto(
            "Sleep", "Cani", "10€",
            new Gioco("", ""),
            new Cuccia("CucciaSleep", "2 cani medi"))
];