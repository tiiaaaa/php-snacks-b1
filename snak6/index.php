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

/* Dall' array princibale DB estrapolo i le due chiavi 'teachers' e 'pm' che a loro volta 
sono Array e le salvo in due variabili */
$teachers = $db['teachers'];
$pm = $db['pm'];


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
        <ul>
            <!-- Ciclo poi per la lunghezza della variabile teachers e stampo il valore 'name' e 'lastname' all'indice 'i'-->
            <?php for($i = 0; $i < count($teachers); $i++) { ?>
                <li>
                    <?php echo $teachers[$i]['name'] . ' ' . $teachers[$i]['lastname']; ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    
    <h2>pm</h2>
    <div class="green">
        <ul>
            <!-- Ciclo poi per la lunghezza della variabile pm e stampo il valore 'name' e 'lastname' all'indice 'i'-->
            <?php for($i = 0; $i < count($pm); $i++) { ?>
                <li>
                    <?php echo $pm[$i]['name'] . ' ' . $pm[$i]['lastname']; ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    
</body>
</html>