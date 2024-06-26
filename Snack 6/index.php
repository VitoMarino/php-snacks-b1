<?php 
/*Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.*/

$titleHeader= "Snack 6";

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

foreach ($db as $dbClass){
    foreach ($dbClass as $singleClass){
        echo $singleClass;
    }
    }

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
        <p>
            <?php  ?>
        </p>

        <p>
            <?php  ?>
        </p>
    </header>
</body>
</html>