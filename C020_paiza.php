<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = fgets(STDIN);
    $input = str_replace("\n", " ", $input);

    $food = explode(" ", $input);
    $food2 = $food[0] * ((100 - $food[1]) * 0.01 );
    $food3 = $food2 * ((100 - $food[2]) * 0.01 );

    echo $food3;
?>
