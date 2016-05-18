<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = fgets(STDIN);
    $var = array(0, 0);

    for( $i = 0 ; $i < $n ; $i++){
        $tmp = trim( fgets(STDIN) );
        $n2 = explode(" ", $tmp);

        if( $n2[0] === "SET"){
        if( $n2[1] === "1"){
                $var[0] = $n2[2];
            }else{
                $var[1] = $n2[2];
            }

        }elseif( $n2[0] === "ADD" ){
            $var[1]  = $var[0] + $n2[1];
        }else{
            $var[1]  = $var[0] - $n2[1];
        }
    }
    echo $var[0] . " " . $var[1] . "\n";
?>
    }
}
?>
