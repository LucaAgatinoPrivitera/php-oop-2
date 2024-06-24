<?php

include __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- <?php //echo $prodottoSingolo[0]->nome ?> -->

    <div>
        <?php foreach ($prodottoSingolo as $prodotto) {
            echo "<div>" . "<span>" . $prodotto->nome . " </span>" . "<span>" . $prodotto->categoria . " </span>" . "<span>" . $prodotto->prezzo . " </span>" . "<span>" . $prodotto->gioco->nomeGioco  . " </span>" . "<span>" . $prodotto->cuccia->nomeCuccia ." </span>" . "<span>". $prodotto->cuccia->capienza . "</span>" . "</div>";
        } ?>
    </div>

    <h1>pre</h1>
    <pre>
        <?= var_dump($prodottoSingolo) ?>
    </pre>

</body>

</html>