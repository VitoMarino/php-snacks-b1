// *Snack 1
// *Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
//* Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
// *Olimpia Milano - Cantù | 55-60

<?php

$partite =  [
    [
        "squadraCasa" => "Inter",
        "squadraOspite" => "Milan",
    ],

    [
        "squadraCasa" => "Lazio",
        "squadraOspite" => "Juventus",
    ],

    [
        "squadraCasa" => "Napoli",
        "squadraOspite" => "Roma",
    ]
        ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <h1>
        <?php echo $partite["puntiCasa"] = rand(1, 60);
        ?>
    </h1>

    <h1>
        <?php echo $partite["puntiOspite"] = rand(1, 60); ?>
    </h1>
</body>
</html>