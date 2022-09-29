<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 13</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$points = 60;

    if ($points < 0) {
        echo("ilość punktów mniejsza niż 0.");
    } elseif ($points > 100) {
        echo("Ilość punktów większa niż 100.");
    } elseif ($points < 40) {
        echo("Ocena niedostateczna");
    } elseif ($points < 55) {
        echo("Ocena dopuszczajaca");
    } elseif ($points < 70) {
        echo("Ocena dostateczna");
    } elseif ($points < 85) {
         echo("Ocena dobra");
    } elseif ($points < 99) {
        echo("Ocena bardzo dobra");
    }   else {
        echo("Ocena celujaca");
    }
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>