<?php
    $first = true; $second = false;
    $isFirstEqualSecond = ($first == $second);
    var_dump ($isFirstEqualSecond);
    echo '<br>';

    $first = true; $second = false;
    $isFirstEqualSecond = ($first == !$second);
    var_dump ($isFirstEqualSecond);
    echo '<br>';
    
    $first = false; $second = false;
    $isFirstEqualSecond = ($first == !$second);
    var_dump ($isFirstEqualSecond);
    
?>