<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 15</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
 <?php
    $x = 3;
    for($i =0; $i <$x; $i++) {
        echo 'Hello World';
        echo '<br>';

    }
    $response = $i;
        echo 'wynik: <b>' . $response . '</b>';
?>   

<?php    
echo'<br>';

    $x = 3;

    $i = 0;
    while ($i < $x) {
        echo 'Hello World <br>';
            $i = $i + 1;
    }
        $response = $i;
        echo 'wynik: <b>' . $response . '</b>';
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>