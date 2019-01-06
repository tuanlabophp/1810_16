<?php
// pt bac 2 $ax^2 + $bx + $c = 0
$a = 3;
$b = 5;
$c = 0;
// Kiem tra do co phai la pt bac 2 khong
if ($a != 0) {
	$delta = $b*$b - 4*$a*$c;
	if ($delta >= 0) {
		echo "La phuong trinh bac 2";
	} else {
		echo "Khong phai pt bac 2";
	}
} else {
	echo "Khong phai pt b2";
}
?>