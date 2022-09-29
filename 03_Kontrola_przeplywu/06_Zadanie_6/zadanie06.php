<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 6</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->

 <?php

    for ($n = 0; $n <= 5; $n++) {
       
        if (($n % 2) == 0) {
        echo "$n - parzysta<br>";
        } 
            else {
            echo "$n - nieparzysta<br>";
            }
     }
     echo '<br>';

     $n = 0;
     while ($n <=5) {
         if (($n % 2) == 0) {
        echo "$n - parzysta<br>";
        } 
            else {
            echo "$n - nieparzysta<br>";
            }
            $n = $n + 1;
     }
    ?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>