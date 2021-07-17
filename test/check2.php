<?php

$db = require dirname(__DIR__) . '/koneksi.php';

$query = $db->prepare('SELECT * FROM tbl_artikel');
$query->execute();

$results = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Koneksi MySql Menggunakan PDO</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Isi</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $result) : ?>
				<tr>
					<td><?php echo $result['judul']; ?></td>
					<td><?php echo $result['isi']; ?></td>
					<td><?php echo $result['tanggal']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>