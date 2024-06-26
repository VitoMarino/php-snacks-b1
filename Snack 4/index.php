<?php 
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/

$titleHeader= "Snack 4";

$numeriArray = [ ];

$blackNumber = [ ];

for ($i = 0; $i <= 15; $i++) {
    $numeriRandom = rand(1, 100) . " ";
    array_push($numeriArray, $numeriRandom);
    echo $numeriArray[$i];

    if (in_array($numeriRandom, $numeriArray)){
        echo array_push($blackNumber, $numeriRandom);
    }
};

?>

<!DOCTYPE html>
<html lang="ita">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <header>
        <h1>
            <?php echo $titleHeader ?>
        </h1>
    </header>
</body>
</html>