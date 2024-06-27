<?php
/*Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

include_once __DIR__ . "/voti.php";

$alunni = [
    "nome" => "Gino",
    "cognome" => "Ginotti",
    $votiAlunni['votoUno'],

    "nome" => "Gina",
    "cognome" => "Ginassi",
    $votiAlunni['votoDue'],

    "nome" => "Giovy",
    "cognome" => "Giovanotti",
    $votiAlunni['votoTre']
];

var_dump($alunni);

?>