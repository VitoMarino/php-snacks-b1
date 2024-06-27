<?php
/*Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

include_once __DIR__ . "/voti.php";

$alunni = [
    "nome" => "Gino",
    "cognome" => "Ginotti",

    "nome" => "Gina",
    "cognome" => "Ginassi",

    "nome" => "Giovy",
    "cognome" => "Giovanotti",
];

var_dump($alunni);

var_dump($votiAlunni);

?>