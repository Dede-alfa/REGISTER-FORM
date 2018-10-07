<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$tanggal=$_POST['tanggal'];
		$bulan=$_POST['bulan'];
		$tahun=$_POST['tahun'];
	?>
		<table align="center" border="3">
			<th colspan="3" align="center">STUDENT DATA</th>
			<tr>
				<td align="center">Name</td>
				<td>:</td>
				<td>
					<?php
					echo "$nama";
					?>
				</td>
			</tr>
			<tr>
				<td align="center">Address</td>
				<td>:</td>
				<td>
					<?php
					echo "$alamat";
					?>
				</td>
			</tr>		
			<tr>
					<td align="center">Gender</td>
					<td>:</td>
					<td>
					<?php
					if (isset($_POST['jk'])) {
						echo $_POST['jk'];
					}
					?>
				</td>
			</tr>		
			<tr>
				<td align="center">Born Date</td>
				<td>:</td>
				<td>
					<?php
						if ($tanggal==1&&$bulan==1&&$tahun==1980) {
							echo "";
						}else{
						echo "$tanggal - $bulan - $tahun";
						}
					?>
				</td>
			</tr>
			<tr>
				<td align="center">Hobbies</td>
				<td>:</td>
				<td>
					<?php
					if (isset($_POST['hobby1'])) {
						echo $_POST['hobby1']."<br>";
					}
					if (isset($_POST['hobby2'])) {
						echo $_POST['hobby2']."<br>";
					}
					if(isset($_POST['hobby3'])){
						echo $_POST['hobby3']."<br>";
					}
					if(isset($_POST['hobby4'])){
						echo $_POST['hobby4']."<br>";
					}
					if(isset($_POST['hobby5'])){
						echo $_POST['hobby5']."<br>";
					}
					?>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<a href="latihan1.2.php">REGISTER AGAIN</a>
				</td>
			</tr>
		</table>
</body>
</html>