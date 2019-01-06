<?php
// Mang so nguyen
$array = [3, 4, 5, "abc", "xyz"];
// echo $array;
// var_dump($array[3]);
// sizeof($array);
// count($array);
for ($i = 0; $i < count($array); $i++) {
	var_dump($array[$i]);
}

$start = 0;
while ($start < count($array)) {
	echo "Gia tri mang o vi tri " . $start . " = " . $array[$start];
	echo "<br>";
	$start++;
}

// Mang ket hop
$post = [
	"title" => "Tieu de bai viet",
	"content" => "Noi dung bai viet",
];
var_dump($post["title"]);
echo "<br>";
foreach ($post as $key => $value) {
	echo $key . ' = ' . $value;
}

$posts = [
	[
		"title" => "Tieu de bai viet 1",
		"content" => "Noi dung bai viet 1",
	],
	[
		"title" => "Tieu de bai viet 2",
		"content" => "Noi dung bai viet 2",
	],
	[
		"title" => "Tieu de bai viet 3",
		"content" => "Noi dung bai viet 3",
	]
];
// var_dump($posts);
echo "<br>";
// foreach ($posts as $vitri => $baiViet) {
// 	echo $vitri . ": " . $baiViet;
// }
for ($i=0; $i < count($posts); $i++) { 
	foreach ($posts[$i] as $key => $value) {
		echo $key . ' = ' . $value;
	}
}