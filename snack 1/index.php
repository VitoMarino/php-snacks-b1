<?php
/*Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60*/

$partite =  [
    [
        "squadraCasa" => "Inter ",
        "squadraOspite" => "Milan ",
        "puntiCasa" => 0,
        "puntiOspite" => 0
    ],

    [
        "squadraCasa" => "Lazio ",
        "squadraOspite" => "Juventus ",
        "puntiCasa" => 0,
        "puntiOspite" => 0
    ],

    [
        "squadraCasa" => "Napoli ",
        "squadraOspite" => "Roma ",
        "puntiCasa" => 0,
        "puntiOspite" => 0
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
        <?php 
        
        foreach ($partite as $squadra){
            echo $squadra["squadraCasa"];
        }
        
        ?>
    </h1>

    <h2>
        <?php 
            foreach ($partite as $squadraOspite){
                echo $squadraOspite["squadraOspite"];
            }
        ?>
        
    </h2>
    
    <h3>
    <?php 
        foreach ($partite as $punti){
            echo $punti["puntiCasa"] = rand(1, 60) . " ";
        }
        ?>
    </h3>

    <h3>
        <?php 
        foreach ($partite as $punti){
            echo $punti["puntiOspite"] = rand(1, 60) . " ";
        }
        ?>
    </h3>
</body>
</html>