<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = fgets(STDIN);
    $point = 0;

    for( $i = 0; $i < $N; $i++){
        $receipt[$i] = fgets(STDIN);
    }
    for( $i = 0; $i < $N; $i++){
        $num = explode(" ", $receipt[$i]);
        if( $num[0] == '3' || $num[0] == '13' || $num[0] =='23' || $num[0] == '30' || $num[0] == '31'){
            $point += floor( $num[1] / 100 * 3);
        }
        else if( $num[0] == '5' || $num[0] == '15' || $num[0] == '25'){
            $point += floor( $num[1] / 100 * 5);
        }
        else{
            $point += floor( $num[1] / 100);
        }
    }
    echo $point;
?>
