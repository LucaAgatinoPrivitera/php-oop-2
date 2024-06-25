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

    <!-- <?php //echo $prodottoSingolo[0]->nome 
            ?> -->
<!-- <img src="/img/cane.jpg" alt=""> da chiedere perché non va? -->
    <div class="container">
        <?php foreach ($prodottoSingolo as $prodotto) {
            // echo "<div>" . "<span>" . $prodotto->nome . " </span>" . "<span>" . $prodotto->categoria . " </span>" . "<span>" . $prodotto->prezzo . " </span>" . "<span>" . $prodotto->nome  . " </span>" . "<span>" . $cuccia->nomeCuccia ." </span>" . "<span>". $cuccia->capienza . "</span>" . "</div>";

            echo "<div class='cards'>";
            if (isset($prodotto->categoria) && $prodotto->categoria == $categoryCane) /* Da chiedere spiegazione su questo if perché non l'ho capito, modificandolo funziona come lo farei io però è sempre meglio sapere */  {
                echo "<img src='https://www.veterinarimatera.it/wp-content/uploads/2021/03/cane-1.jpg'>";
            }
            else
            {
                echo "<img src='https://www.elite-pet.it/media/k2/items/cache/a786836489dab4f04d53706ec376ba50_L.jpg'>";
            }
            echo "<span class='nome'>" . $prodotto->nome . " </span>" . "<span class='descrizione'>" . $prodotto->getDescrizione() . " </span>" ;
            if (isset($prodotto->elettrico)) {
                echo "<span>" .  $prodotto->elettrico . " </span>";
            }
            if (isset($prodotto->capienza)) {
                echo "<span>" .  $prodotto->capienza . " </span>";
            }
            if (isset($prodotto->materiale)) {
                echo "<span>" .  $prodotto->materiale . " </span>";
            }

            echo "<span class='prezzo'>" .  $prodotto->prezzo . " </span>";
            echo "</div>"; // Rimuovi il punto prima della stringa
        }?>
    </div>

    <h1>pre</h1>
    <pre>
        <?= var_dump($prodottoSingolo) ?>
    </pre>

</body>

</html>