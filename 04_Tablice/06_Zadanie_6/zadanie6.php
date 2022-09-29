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
 $numbers = [7,4,3,10,20,40,15,10,9,1]; 
 $length = count($numbers); 
 for ($i = 0; $i < $length; $i++) {
     echo $numbers[$length-1-$i].'<br>';
 }
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>