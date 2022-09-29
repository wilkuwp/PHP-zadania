<?php
    $x = 16 ; $y = 15 ;
    $x_y = $x < $y ;
        var_dump ($x_y);
        echo '<br>';

    $t = true ; $f = false ;
    $t_f = $t || $f ;
        var_dump ($t_f);
        echo '<br>';

    $last = $x_y && $t_f;
        var_dump ($last);     //udało się :)
?>