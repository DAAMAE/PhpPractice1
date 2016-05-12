<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $count = 0;
    for( $i = 0; $i < 7; $i++){
        $a[$i] = trim(fgets(STDIN));
        if( $a[$i] === 'no' ){
            $count++;
    }
}
        echo $count;
?>
