<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
	$s = fgets(STDIN);
    $t = fgets(STDIN);
        $n = $s . "@". $t;
        $n =   str_replace(array("\r\n" , "\n", "\r"), '', $n);
    echo $n;
//str_replace — 検索文字列に一致したすべての文字列を置換する
?>
