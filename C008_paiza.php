<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $length = trim(fgets(STDIN));
    $tag = explode(" ", $input_lines);

    $tag1_pos = strpos($length, $tag[0]);
    $tag1_len = strlen($tag[0]);

     while($tag1_pos !== FALSE){
        $tag1_end = $tag1_pos + $tag1_len;
        $tag2_pos = strpos($length, $tag[1], $tag1_end);

        $result = substr($length, $tag1_end, $tag2_pos - $tag1_end);
        if( empty($result) ){
            echo '<blank>' . "\n";
        }
        else{
            echo "$result" . "\n";
        }
        $tag2_len = strlen($tag[1]);
        $tag2_end = $tag2_pos + $tag2_len;
        $tag1_pos = strpos($length, $tag[0], $tag2_end);
     }
?>
