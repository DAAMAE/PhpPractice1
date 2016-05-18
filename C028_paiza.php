<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));                        //問題数格納
    $spell = array();

    for( $i = 0; $i < $N; $i++ ){                   //問題数分繰り返し
    $spell[$i] = explode(" ", trim(fgets(STDIN)));
}
    $sum = 0;                                       //合計

    foreach($spell as $s){                           //失点カウント初期化
    $count = 0;
    if(strlen($s[0]) == strlen($s[1])){
        for( $j = 0; $j < strlen($s[0]); $j++ ){
            if(substr($s[0], $j, 1) == substr($s[1], $j, 1)){
                $count++;
            }
        }
        if($count == strlen($s[0])){
            $sum = $sum + 2;
        }elseif($count == strlen($s[0]) - 1){
            $sum = $sum + 1;
        }
    }
}
        echo $sum;
?>
