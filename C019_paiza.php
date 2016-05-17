<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $count = (int)trim(fgets(STDIN));

    for( $i = 0; $i < $count; $i++){
        $input = (int)trim(fgets(STDIN));
        $yaku = array();//約数
    for( $j = 1; $j < $input; $j++){
        if( $input % $j == 0){
            $yaku[] = $j;
        }
    }
    $total = array_sum($yaku);//約数の合計
    $diff = ( $total - $input　);//合計と入力値差で判定
    switch($diff){
        case 0:
            echo "perfect";
            break;
        case -1:
        case 1:
            echo "nearly";
            break;
        default:
            echo "neither";
    }
    echo "\n";
    }
?>
    }
}
?>
