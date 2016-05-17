<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN)//命令個数
    $val1 = 10;
    $val2 = 20;

    for( $i = 0; $i < $n; $i++ ){
        $value = fgets(STDIN);
        $value = str_replace("\n", " ", $value );
        $a = explode(" ", $value );

    if( $a[0] === "SET" ){
        if( $a[1] === "1" ){
            $val1 = $a[2];
        }else{
            $val2 = $a[2];
        }
    }elseif( $a[0] === "ADD" ){
        $val2 = $val1 + $a[1];
    }elseif( $a[0] === "SUB" ){
        $val2 = $val2 - $a[1];
    }
}
    echo $val1 . " " . $val2
?>
    }
}
?>
