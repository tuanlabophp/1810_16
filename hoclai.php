<?php
// Kiem tra sinh vien co qua mon khong
// diem 10% > 1, <= 10
// diem 40% > 1, <= 10
// diem 50% > 1, <= 10
// So buoi hoc > 5
// Diem trung binh > 4
$diem10 = 4;
$diem40 = 3;
$diem50 = 2;
$soBuoiHoc = 9;

if (
	(1 < $diem10 && $diem10 <= 10)
	&& (1 < $diem40 && $diem40 <= 10)
	&& (1 < $diem50 && $diem50 <= 10)
	&& ($soBuoiHoc > 5)
) {
	$diemTB = $diem10*0.1 + $diem40*0.4 + $diem50*0.5;

	// if ($diemTB > 4) {
	// 	echo "Qua mon";
	// } else {
	// 	echo "Tach";
	// }
	echo ($diemTB > 4) ? "Qua mon" : "Tach";
} else {
	echo "Khong duoc di thi";
}

// Cach 2
// Gan gia tri de su dung lam dieu kien kiem tra
$duocDiHoc = (1 < $diem10 && $diem10 <= 10)
	&& (1 < $diem40 && $diem40 <= 10)
	&& (1 < $diem50 && $diem50 <= 10)
	&& ($soBuoiHoc > 5);
$diemTB = $diem10*0.1 + $diem40*0.4 + $diem50*0.5;
echo ($duocDiHoc)
	? ($diemTB > 4) ? "Qua mon" : "Tach"
	: "Khong duoc di thi";
?>