<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = trim(fgets(STDIN));
    $n = explode(" ", $n );
        $s = $n[0];
        $n = $n[1] - 1;

    echo $s[$n];
?>
