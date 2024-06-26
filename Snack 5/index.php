<?php 
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.*/

$titleHeader= "Snack 5";

$paragrafo= "È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile. 
Lo scopo dell’utilizzo del Lorem Ipsum è che offre una normale distribuzione delle lettere 
(al contrario di quanto avviene se si utilizzano brevi frasi ripetute, ad esempio “testo qui”), 
apparendo come un normale blocco di testo leggibile. Molti software di impaginazione e di web design utilizzano Lorem Ipsum come testo modello. 
Molte versioni del testo sono state prodotte negli anni, a volte casualmente, a volte di proposito (ad esempio inserendo passaggi ironici).";

$pezzoParagrafo = explode(".", $paragrafo);

foreach ($pezzoParagrafo as $value){
    echo $value . "<br>";
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
            
        </p>
    </header>
</body>
</html>