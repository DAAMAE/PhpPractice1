<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = trim(fgets(STDIN));
    $num = explode(" ", $input);
    $a = $num[0];
    $b = $num[1];
        if( $a > $b ){
            echo $a;
        }
        elseif( $a < $b ){
            echo $b;
        }
        else{
            echo "eq";
        }
?>
