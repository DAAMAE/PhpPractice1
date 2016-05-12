<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $s = trim(fgets(STDIN));
        $numOfA = preg_match_all('/A/', $s);
        echo $numOfA;
?>
