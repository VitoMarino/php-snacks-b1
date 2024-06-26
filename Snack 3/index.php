<?php
/*Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.*/

$titleHeader= "Snack 3";

$posts = [
    "01-01-2024" => [
        "titolo" => "Post 1",
        "autore" => "Riccardo Petricca",
        "testo" => "Mi chiamo Riccardo e il mio slogano è: 'Non è così banale' ",
    ],
    "01-02-2024" => [
        "titolo" => "Post 2",
        "autore" => "Tony Stark",
        "testo" => "Io sono Iron-man",
    ],
    "01-03-2024" => [
        "titolo" => "Post 3",
        "autore" => "Steve Rogers",
        "testo" => "Avengers, Assemble!",
    ],
    ];

    foreach ($posts as $key => $post){
            echo $key;
        foreach ($post as $singlePost) {
            echo $singlePost;
        }
    }
?>

<!DOCTYPE html>
<html lang="ita">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <header>
        <h1>
            <?php echo $titleHeader ?>
        </h1>
    </header>
</body>
</html>