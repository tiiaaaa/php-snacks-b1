<?php 
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

$casualNumber = [];

$index = 0;

while ($index < 15) {
    $number = rand(0, 100);
    if(!in_array($number, $casualNumber, true)) {
        $casualNumber[] = $number;
    } else{
        echo 'Numero gia presente';
    }

    $index++;
};

var_dump($casualNumber);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snak4</title>
</head>
<body>
    
</body>
</html>