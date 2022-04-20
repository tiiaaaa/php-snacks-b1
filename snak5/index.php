<?php 
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos expedita, esse magni deserunt maiores doloremque aliquam officiis ipsa. Qui est animi, quae non atque dicta culpa dolorum laudantium eum!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia atque sint ullam explicabo? Fugiat et, inventore quia quae illum asperiores! Asperiores reiciendis hic, repudiandae incidunt tenetur possimus fugit sequi laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cupiditate error atque aut quia, iste, fugiat exercitationem beatae iusto et nobis assumenda odit, accusantium ab itaque consequatur iure nesciunt minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quos officia at reiciendis vitae! Repellendus culpa voluptate ullam rem, quia magnam impedit mollitia? Ipsam facere id ipsum vero quaerat assumenda. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quod nesciunt fuga eaque consequuntur, distinctio ipsa iure asperiores exercitationem pariatur molestias porro optio ipsum repudiandae necessitatibus corrupti quos hic nam! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores inventore dolor ipsa expedita eius, dolorum ipsum saepe, veritatis cupiditate consequatur numquam blanditiis cumque nobis possimus odio sit repellendus, officiis alias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus nulla amet eos nemo repudiandae natus aut sequi voluptatibus veritatis aspernatur voluptatum aliquid officiis incidunt totam ex, asperiores numquam unde voluptatem';

/* Utilizzo la funzione 'explode' per dividere la stringa pricipale ($patragraph) in tante sotto stringhe quanti sono i punti (.)*/
$subStrings = explode('.', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snak 5</title>
</head>
<body>
    <!-- Ciclo per la lunghezza di $subStrings e stampo ogni volta una stringa all' indice 'i' -->
    <?php for($i = 0; $i < count($subStrings); $i++) { ?>
    <p>
        <?php echo $subStrings[$i]. ' . '; ?>
    </p>

    <?php } ?>
</body>
</html>