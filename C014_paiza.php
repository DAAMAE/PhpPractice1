<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = explode(" ", trim(fgets(STDIN)));
        $n = $input[0];
        $r = $input[1];
    $hako_array = array();

    for( $i = 0; $i < $n; $i++){
        $hako = explode(" ", trim(fgets(STDIN)));
        $h_i = $hako[0];
        $w_i = $hako[1];
        $d_i = $hako[2];
    $hako_array[$i] = $hako;
    }
    foreach( $hako_array as $key => $hako_array2){
        sort( $hako_array2 );
    if( $hako_array2[0] >= $r * 2 ){
            echo $key + 1 . "\n";
        }
    }
?>
