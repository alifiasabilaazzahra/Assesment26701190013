<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai</title>
</head>
<body>

	
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			
			<th>Semester</th>
			<th>IP</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
	
		$data = mysqli_query($koneksi,"select * from ipk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['ipk']; ?></td>
				
				<td>
					<a href="edit.php?semester=<?php echo $d['semester']; ?>">EDIT</a>
					<a href="hapus.php?semester=<?php echo $d['semester']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>