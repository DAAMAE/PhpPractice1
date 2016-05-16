<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
$N = fgets(STDIN);
    for( $i = 0; $i < $N; $i++){
        $ip[$i] = fgets(STDIN);
    }
    for( $i = 0; $i < $N; $i++){
        $ok = 0;
        $M = explode(".", $ip[$i]);
        if(count($M) == 4){
    for( $j = 0; $j < 4; $j++){
        if(is_numeric($M[$j])){
        if($M[$j] >= 0 && $M[$j] <= 255){

        $ok = 1;
        }
            }
                }
        }
        if($ok == 1){
                echo "True\n";
        }
        else{
                echo "False\n";
        }
    }
?>
