<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 5</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
             
$resultFor = 0; $resultWhile = 0;
		for ($i = 1; $i <= 10; $i++) {
			$resultFor += $i;
		}
		$i = 1;
		while ($i <= 10) {
			$resultWhile += $i;
			 $i++;
		}
		echo "Suma z pętli \"for\" to " .$resultFor. ".";
        echo'<br>';
		echo "Suma z pętli \"while\" to ". $resultWhile . ".";
        echo'<br>';
?>
<?php
echo'<br>';
echo '<B> Trochę inaczej rozwiązanie </b>';
echo'<br>';
echo'<br>';
    // troche inaczej
    $resultFor = 0; $resultWhile = 0;
    
       for($i =1; $i <10; $i++) {
        echo ($resultFor + $i).'+'.($i+1).'='.$i+($resultFor + $i + 1);
        echo '<br>';
        $resultFor += $i;
        echo 'aktualny wynik to: '.$resultFor+$i+1;
        echo '<br>';
    }
    echo'<br>';
    ?>
    
<!--Powyżej wpisz kod PHP-->
</body>
</html>