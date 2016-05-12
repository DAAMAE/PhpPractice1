<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    define("COUNT" , 5 );
        for( $i = 0; $i < COUNT; $i++){
            $n[] = fgets(STDIN);
            $n[$i] = (int)$n[$i];
        }
        echo max($n) ."\n";
        echo min($n);
?>
