<?php
    $numbers = [5,2,3,10,20,40,15,10,9,1];   
    $sum = 0;
        for ($i=0; $i<count($numbers); $i++) {
            $sum += $numbers[$i];
        }
        echo 'Suma elementów tablicy to: ' . $sum;

?>