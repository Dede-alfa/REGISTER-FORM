<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA MAHASISWA</title>
</head>
<body>
	<table align="center" border="3" >
	<form method="POST" action="kirim.php">
				<th colspan="3">STUDENT DATA</th>
			<tr>
				<td align="center">Name</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td align="center">Address</td>
				<td>:</td>
				<td align="center"><textarea name="alamat" cols="21" rows="4"></textarea></td>
			</tr>
			<tr>
				<td align="center">Gender</td>
				<td>:</td>
				<td align="center">
					<input type="radio" name="jk" value="Male">Male
					<input type="radio" name="jk" value="Female">Female
				</td>
			</tr>
			<tr align="center">
				<td>Born Date</td>
				<td>:</td>
				<td>
					<select name="tanggal">
						<?php
						for ($i=1; $i <32 ; $i++) { 
							echo "<option value=".$i."> $i</option>";
						}
						?>
					</select>
					<select name="bulan">
						<?php
						for ($i=1; $i <13 ; $i++) { 
							echo "<option value=".$i."> $i</option>";
						}
						?>
					</select>
					<select name="tahun">
						<?php 
							for ($i=1980; $i <=2018; $i++) { 
								echo "<option value=".$i."> $i</option>";
							}
						?> 
					</select>
				</td>
			</tr>
			<tr>
				<td align="center">Hobbies</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobby1" value="Membaca">Membaca<br>
					<input type="checkbox" name="hobby2" value="Bermain game">Bermain game<br>
					<input type="checkbox" name="hobby3" value="Olahraga">Olahraga<br>
					<input type="checkbox" name="hobby4" value="Makan">Makan<br>
					<input type="checkbox" name="hobby5" value="Menulis">Menulis<br>
				</td>
			</tr>
			<form method="POST" action="kirim.php">
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="submit" value="Kirim">
					<input type="reset" name="reset" value="Hapus">
				</td>
			</tr>
		</form>
	</form>
	</table>
</body>
</html>