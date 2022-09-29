<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 14</title>
 <!-- zamiast pliku CSS-->
    <style type="text/css">
    td {
        border:1px solid black;
        padding: 5px;
    }
</style>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
    $n = 3;

    echo "<table>";
    for ($i = 1; $i < $n + 1; $i++) {
        echo "<tr>";
            for ($j = 1; $j < $n + 1; $j++) {
            echo "<td>$i x $j = " . $i * $j . "</td>";
            }
        echo "</tr>";
    }
    echo "<table>";
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>