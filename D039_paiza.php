<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
        if( $a == $b && $b == $c){
            echo "YES";
        }
        else{
            echo "NO";
        }
?>
