<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prework PHP - zadanie 4</title>
</head>
<body>
<?php
// punkt 1
// echo("Hello World");//ta linijka powinna zostać odkomentowana
  #wyświetla prawidłowo Wello WOrld

// punkt 2
// echo(Hello World); //ta linijka powinna zostać odkomentowana
    # bład składki nieoczekiwany identyfikator world w 17 linii

// punkt 3
// echo("Hello World);//ta linijka powinna zostać odkomentowana
    # bład składki nieoczekiwany identyfikator hello w 21 linii

//punkt 4
// echoo("Hello World");//ta linijka powinna zostać odkomentowana
    # jakiś bład krytyczny wWywołania niezdefiniowanej funkcji echoo

//punkt 5
// echo("Hello 1")//ta linijka powinna zostać odkomentowana
// echo("Hello 2");//ta linijka powinna zostać odkomentowana
    /* odkomentowane pojedyńczo działąja poprawnie, 
    odkomentowane razem pokazuja bład składni
    sugeruje uzycie "," lub ";" zamiast echo w 30 lini
    */
?>
</body>

    <!-- tyilko punkt 1 działa-->

</html>