<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Harjutused</title>
</head>
<body>
    <h1>Harjutus 01</h1>
<p>
    <?php
    // Haiko Palkov
    // harjutus 01
    $nimi = "Haiko";
    $aasta = 2008;
    $kuju = "rott";

    echo $nimi."<br>".$aasta."<br>".$kuju;
    echo "<br>";
    echo "\"It's My Life\" - Dr.Alban<br>";
    echo '(\(\<br>( -.-)<br>o_(")(")';
    ?>
</p>
<h2>Harjutus 02</h2>
<?php
    $arv1 = 5;
    $arv2 = 6;

    echo $arv1." + ".$arv2." = ".$arv1+$arv2.
    "<br>";
    echo $arv1." - ".$arv2." = ".$arv1+$arv2.
    "<br>";
    echo $arv1." * ".$arv2." = ".$arv1+$arv2.
    "<br>";
    echo $arv1." / ".$arv2." = ".$arv1+$arv2.
    "<br>";

?>
</body>
</html>