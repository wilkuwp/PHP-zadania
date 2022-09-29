<?php
$fruits = ['truskawka', 'jagoda', 'jabłko', 'gruszka','malina', ];
    echo '<b>cz.1 '. '<br>';
    echo 'Pierwszy owoc to: '. $fruits [0] . '<br>';
$length = count($fruits);
    echo '<br>';
    
    echo '<b>cz.2 '. '<br>';
    echo 'Ostatni owoc to: '. $fruits [$length-1];
    echo '<br><br>';
    
    echo '<b>cz.3 '. '<br>';
    for ($i = 0; $i < $length; $i++) {
    echo $fruits[$i].'<br>';
    }
?>