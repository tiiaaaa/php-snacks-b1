<?php
/*Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde.*/

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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snak6</title>
</head>
<body>
    <h2>teachers</h2>
    <div class="grey">

    </div>
    
    <h2>pm</h2>
    <div class="green">

    </div>
    
</body>
</html>