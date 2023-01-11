<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Jumlah Data Pada Table</title>
</head>
<body>

	<h2>Menghitung Jumlah Data Pada Table</h2>

	<style>
		body{
			font-family: 'Roboto';
		}
		table {
			border-collapse: collapse;
		}

		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}
	</style>


	<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include 'koneksi.php';

	// mengambil data barang
	$data_barang = mysqli_query($koneksi,"SELECT * FROM barang");

	// menghitung data barang
	$jumlah_barang = mysqli_num_rows($data_barang);
	?>

	<p>Jumlah data barang : <b><?php echo $jumlah_barang; ?></b></p>

	<table border="1">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$barang = mysqli_query($koneksi,"SELECT * FROM barang");
			while($b = mysqli_fetch_array($barang)){
				?>
				<tr>
					<td><?php echo $b['kode']; ?></td>
					<td><?php echo $b['nama_barang']; ?></td>
					<td><?php echo $b['jumlah']; ?></td>
					<td><?php echo "Rp. ".number_format($b['harga'])." ,-"; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>

</body>
</html>