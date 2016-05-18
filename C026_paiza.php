<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = trim(fgets(STDIN));
    $carrot = explode(" ", $input);
    $N = $carrot[0];  //個数
    $S = $carrot[1];  //目安の糖分
    $P = $carrot[2];  //許容誤差

    $display = 0;//番号変数
    $keep = 0;　　//質量変数

    for( $i = 0; $i < $N; $i++){
        $input = trim(fgets(STDIN));
        $carrot = explode(" ", $input);
        $weight = $carrot[0]; //質量
        $suger = $carrot[1];

        if( $suger >= $S - $P && $suger <= $S + $P ){  //許容範囲内か判定
            if( $keep < $weight ){
                $display = $i + 1;
                $keep = $weight;
            }
        }
    }
        if( $display === 0){  //人参が無い場合の出力
            echo "not found" ."\n";
    }else{
            echo $display."\n";
    }
?>
