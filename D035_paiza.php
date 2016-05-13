<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $time = trim(fgets(STDIN));
    $num = explode(" ", $time);
    $y = $num[0];
    $m = $num[1];
    $d = $num[2];
        echo $y . "/" . $m . "/" . $d;
?>
