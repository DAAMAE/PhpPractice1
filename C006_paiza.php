<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $rank = trim(fgets(STDIN));
    $N = explode(" ", $rank);

    $rank = trim(fgets(STDIN));
    $ci = explode(" ", $rank);
    $sum = array();
    
    for( $i = 0; $i < $N[1]; $i++){
        $sum[$i] = 0;
    }
    for( $i = 0; $i < $N[1]; $i++){
        $rank = trim(fgets(STDIN));
        $xi = explode(" ", $rank);
    for( $A = 0; $A < $N[0]; $A++){
        $sum[$i] += $xi[$A] * $ci[$A] . " ";
        }
        $sum[$i] = round($sum[$i]);
    }
    rsort($sum);
    for( $i = 0; $i < $N[2]; $i++){
        echo $sum[$i] . "\n";
    }
?>
