<?php

include __DIR__ . "/animals.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        var_dump(array_filter($animals))  
        
        ?>
    </h1>
</body>
</html>