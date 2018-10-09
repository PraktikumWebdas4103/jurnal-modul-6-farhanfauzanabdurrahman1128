<?php
$host = "localhost"; //host server
$user = "root"; //user login phpmyadmin 
$pass = ""; //user login phpmyadmin
$db = "data_client"; //nama database

if (isset($_POST["submit"])) {
	
			$nama = $_POST["nama"];
			$nim = $_POST["nim"];
			$kelas = $_POST["kelas"];
			$jk = $_POST["jk"];
			$hobi = $_POST["hobi"];
			$fakultas = $_POST["fakultas"];
			$alamat = $_POST["alamat"];

			$conn = mysqli_connect($host, $user, $pass,$db);
			$mysqli = "INSERT INTO mahasiswa (Nama, NIM, Kelas, Jenis_Kelamin, Hobi, Fakultas, Alamat) 
					  VALUES ('$nama', '$nim', '$kelas', '$jk', '$hobi', '$fakultas','$alamat')";	

if (strlen($nim) > 10 && is_string($nim)) {
		echo "Karakter NIM Jangan Lebih Dari 10 dan harus angka<br>";
		echo " ";
	}

	if (strlen($nama) > 35) {
		echo "Karakter Nama Jangan Lebih Dari 25 Boss<br>";
		echo " ";
	}

if ($fakultas == "Pilih Fakultas") {
	empty($fakultas);
}

	if (empty($fakultas) || empty($nim) || empty($nama) || empty($hobi) || empty($jk)) || empty($alamat){
				echo "Data Harus Diisi Semua Joww<br>";
				echo " ";
			}

			if (strlen($nim) <= 10 && strlen($nama) <= 25 && (!empty($nim) &&  !empty($nama) && !empty($fakultas) && !empty($jk) && !empty($hobi)
		&& !empty($hobi))) {
			$result = mysqli_query($conn, $mysqli);
			echo "<h1>Mashhookk Pa Eko!!!!</h1>";
				}

	else{
					die("<h1>Gagal Pa Eko!!!</h1>");
			
	}


		}


?>
