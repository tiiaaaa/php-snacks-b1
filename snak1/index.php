<?php
/**
 * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
 * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 * Stampiamo a schermo tutte le partite con questo schema.
 * Olimpia Milano - Cantù | 55-60
 *
 */

$matches = [
    [
        'team1' => 'Cairo',
        'team2' => 'Venezia',
        'point_team_1' => '80',
        'point_team_2' => '45',
    ],

    [
        'team1' => 'Cipro',
        'team2' => 'Ginevra',
        'point_team_1' => '56',
        'point_team_2' => '67',
    ],

    [
        'team1' => 'LasVegas',
        'team2' => 'LasPalmas',
        'point_team_1' => '33',
        'point_team_2' => '18',
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- Ciclo per la lunghezza dell' array $matches e per ogni subarray all' inice 'i' stampo il team1, il team2 
        i punti del team1 e i punti del team2 -->
        <?php for($i = 0; $i < count($matches); $i++) { ?>
            <li>
                <?php echo $matches[$i]['team1'] . ' - ' . $matches[$i]['team2']; ?> |
                <?php echo $matches[$i]['point_team_1'] . ' - ' . $matches[$i]['point_team_2']; ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>