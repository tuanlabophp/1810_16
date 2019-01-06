<?php
	$post = [
		"title" => "Tieu de bai viet (update_code)",
		"content" => "Noi dung bai viet (update_code)",
	];
?>
<table border="1">
	<thead>
		<th>Title</th>
		<th>Content</th>
	</thead>
	<tbody>
		<?php
			echo "<tr>";
			foreach ($post as $key => $value) {
				echo "<td>$value</td>";
			}
			echo "</tr>";
		?>
	</tbody>
</table>