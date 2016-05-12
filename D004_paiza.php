<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input = trim(fgets(STDIN));
	for ($i = 0; $i < $input; $i++) {
		$members[] = trim(fgets(STDIN));
	}
	    $members = implode(",", $members);
	echo "Hello " . $members . ".";
 ?>
