<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N =fgets(STDIN);
    $day = explode(" ", $N);
    $holiday = $N[0];
    $travel = $N[1];

    $ave = array();
    $start = array();
    $end = array();

    for( $i = 0; $i < $holiday; $i++ ){
        $N = trim(fgets(STDIN));
        $day = explode(" ", $N);
        $day[] = $day[0];
        $rain[] = $day[1];
    }
    for( $i = 0; $i <= $holiday - $travel; $i++ ){
        $ave[$i] = 0;
    }
    for( $i = 0; $i <= $holiday - $travel; $i++ ){
        for( $j = 0; $j < $travel; $j++ ){
            $ave[$i] += $rain[$i + $j];
        }
        $ave[$i] = $ave[$i] / $travel;
        $start[$i] = $day[$i];
        $end[$i] = $day[$i + $travel - 1];
    }

    $min = min($ave);

    foreach( $ave as $key => $value ){
        if( $min === $value ){

            echo $start[$key] . " " . $end[$key] . "\n";
            break;
        }
    }
?>
