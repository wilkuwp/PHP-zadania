<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 1</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
    <?php
        $nr1 = 5 ; $nr2 = 9 ;
        if ($nr1>$nr2) {
            echo 'Większa liczba to: ' . $nr1 . '.';
        }
        elseif ($nr1<$nr2) {
            echo 'Większa liczba to: ' . $nr2 . '.';
        }
        else {echo 'liczby są równe';
        }

    ?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>