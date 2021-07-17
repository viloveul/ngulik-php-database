<?php

$db = require dirname(__DIR__) . '/koneksi.php';

$query = $db->prepare('SELECT * FROM tbl_artikel');
$query->execute();

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
			<?php while ($result = $query->fetch()) : ?>
				<tr>
					<td><?php echo $result['judul']; ?></td>
					<td><?php echo $result['isi']; ?></td>
					<td><?php echo $result['tanggal']; ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>