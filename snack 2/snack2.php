//* Snack 2
//* Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
//* Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"


<?php
    $name= $_GET["name"];
    
    if (strlen($name) >= 3){
        echo "Acceso corretto";
    } else {
        echo "Non valido";
    };
    
    $mail= $_GET["mail"];
    $age= $_GET["age"];

?>

<!DOCTYPE html>
<html lang="ita">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="./snack2.php" methods="GET">
        <input type="text" name="name" id="input">
        <input type="text" name="mail" id="input">
        <input type="text" name="age" id="input">
        <button type="submit">Invia</button>
    </form>

    <h1>
        <?php echo $name; ?>
    </h1>
    <h2>
        <?php echo $mail; ?>
    </h2>
    <h3>
        <?php echo $age; ?>
    </h3>
</body>
</html>
