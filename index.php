<?php  

require "koneksi.php";

$query = "SELECT * FROM siswa";

$reslt = $conn->query($query);
$data = [];

while($row = $reslt->fetch_assoc()) {
	$data[] = $row;
}





?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Siswa</title>
</head>
<body>

	<h1>Data Siswa</h1>
	<table cellpadding="10" cellspacing="2" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>Jurusan Siswa</th>
				<th>Alamat Siswa</th>
			</tr>
		</thead>
		<tbody>
		<?php $nomor = 1; ?>
		<?php foreach($data as $dt) : ?>
			<tr>
				<td><?php echo $nomor ++; ?></td>
				<td><?php echo $dt['namasiswa']; ?></td>
				<td><?php echo $dt['jurusansiswa']; ?></td>
				<td><?php echo $dt['alamat']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>