<?php
    $coordinate = explode(" ", trim(fgets(STDIN)));
    $coordinate1 = pow($coordinate[2], 2);//pow — 指数表現
    $coordinate2 = pow($coordinate[3], 2);

    $n = fgets(STDIN);

    for( $i = 0;  $i < $n; $i++){
        $people = explode(" ", trim(fgets(STDIN)));
        $peoples =  pow($coordinate[0] - $people[0], 2) + pow($coordinate[1] - $people[1], 2);
        if( $peoples <= $coordinate2 ){
        if( $peoples >= $coordinate1 ){
                echo "yes\n";
        }else{
                echo "no\n";
            　}
        }else{
                echo "no\n";
        }
    }
?>
