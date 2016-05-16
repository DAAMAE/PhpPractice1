<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $str_main = fgets(STDIN);
   $Alphabet = array( "A" => 4, "E" => 3, "G" => 6, "I" => 1, "O" => 0, "S" =>5, "Z" => 2);
   $str_Alphabet = strtr( $str_main, $Alphabet);

   echo $str_Alphabet;
?>
