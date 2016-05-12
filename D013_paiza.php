<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
	$m = trim(fgets(STDIN));
    	$n = explode(" ", $m);
    	echo floor($m[0] / $n[1]);
    	echo " " . ($m[0] % $n[1]);
?>
