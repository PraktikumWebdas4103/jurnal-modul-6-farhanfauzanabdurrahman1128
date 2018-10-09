<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>

<form action="prosesregris.php" method="POST">
	<table>
		<tr>
			<td><b>Masukan Data</b></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" size="60"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" size="60"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><ul style="list-style-type: none">
			<li><input type="radio" name="kelas" value="41-01">41-01</li>
			<li><input type="radio" name="kelas" value="41-02">41-02</li>
			<li><input type="radio" name="kelas" value="41-03">41-03</li>
			<li><input type="radio" name="kelas" value="41-04">41-04</li>
			</ul>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><ul style="list-style-type: none">
			<li><input type="radio" name="jk" value="Laki-laki" required>Laki-laki</li>
			<li><input type="radio" name="jk" value="Perempuan" required>Perempuan</li>
			</ul>
			</td>
		</tr>
		<tr>
		<td>Hobi</td>
		<td>:</td>	
		<td><input type="checkbox" name="hobi" value="Tidur">Tidur</td>
		<td><input type="checkbox" name="hobi" value="Main Game">Main Game</td>
		<td><input type="checkbox" name="hobi" value="Main Insturmen Musik">Main Insturmen Musik</td>
		<td><input type="checkbox" name="hobi" value="Main Bola">Main Bola</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="Pilih Fakultas">Pilih Fakultas</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Informatika">Fakultas Informatika</option>
				<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan/option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Daftar"></td>
		</tr>
	</table>
</form>

</body>
</html>
