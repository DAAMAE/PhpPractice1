<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $recipe = fgets(STDIN);
    for( $i = 0; $i < $recipe; $i++){
        $n[$i] = explode(" ", trim(fgets(STDIN)));
        $m[$i] = 0;
    }
    $possession = fgets(STDIN);
    for( $i = 0; $i < $possession; $i++){
        $p[$i] = explode(" ", trim(fgets(STDIN)));
    }
    if($possession != 0){
        foreach($n as $key1 => $recipe){
        foreach($p as $key2 => $you){
            if($recipe[0] === $you[0]){
                $m[$key1] = (int)floor($you[1] / $recipe[1]);
                }
            }
        }
    }
    echo min($m);//min — 最小値を返す
?>
    }
}
?>
