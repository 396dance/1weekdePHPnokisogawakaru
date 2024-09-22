<?php
    $n = [5,3,2,9,6];
    $size = count($n);
    $sum = 0;
    
    for ( $i = 0; $i < $size; $i++) {
        $sum += $n[$i];
        echo $sum;
        echo "\$n[{$i}]=$n[$i]<br>";
    }

    $avg = $sum / $size;
    echo "合計: {$sum} 平均: {$avg}";
?>