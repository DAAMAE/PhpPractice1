<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $last = 21 % $n;
        if($last != 0){
            echo $last;
        }
        else{
            echo $n;
        }

?>
