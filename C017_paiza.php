<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = explode(" ", trim(fgets(STDIN)));
    $a = $input[0];
    $b = $input[1];
    $n = trim(fgets(STDIN));

    $parent_array = array();

    for( $i = 0; $i < $n; $i++){
        $parent = explode(" ", trim(fgets(STDIN)));
        $parent_array[$i] = $parent;
    }
    for( $j = 0; $j < $n; $j++){
          if( $a > $parent_array[$j][0]){
            echo "High\n";
    }elseif( $a < $parent_array[$j][0]){
            echo "Low\n";
    }else{
        if($b > $parent_array[$j][1]){
            echo "Low\n";
        }else{
            echo "High\n";
        }
    }
}
?>
