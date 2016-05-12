<?php
// 自分の得意な言語で
// Let's チャレンジ！！
	$input = fgets(STDIN);
	$input = explode(" ", $input);
	    $syokou = $input[0];
	        echo $syokou;
	    for ( $i = 0; $i < 9; $i++) {
		$syokou += $input[1];
		echo " " . $syokou;
	}
?>
