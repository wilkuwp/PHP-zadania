<?php
$numbers = [7,4,3,10,20,40,15,10,9,1];   
$sumOdd = 0;
        for ($i=0; $i<count($numbers); $i++) {
            if (($numbers[$i]  % 2) == 0) {
                echo "$numbers[$i] - parzysta<br>";
            } 
                elseif (($numbers[$i]  % 2) != 0) { 
                    echo "$numbers[$i] - nieparzysta<br>";
                    $sumOdd+=$numbers[$i];
                }
        }
echo '<br>';
echo 'Suma liczb nieparzystych to: <b>' . $sumOdd.'</b>.';   
 ?>