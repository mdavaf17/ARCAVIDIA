<?php
//Include file koneksi ke database
include "../database_connector.php";


//menerima nilai dari kiriman form input-barang
$game = $_POST['game'];
$teamname = $_POST['teamname'];
$idAkun = $_POST['idAkun'];
$fullnameketua = $_POST['fullnameketua'];
$ttlketua = $_POST['ttlketua'];
$jkketua = $_POST['jkketua'];
$sekolahketua = $_POST['sekolahketua'];
$kontakketua = $_POST['kontakketua'];
$fullnameang1 = $_POST['fullnameang1'];
$ttlang1 = $_POST['ttlang1'];
$jkang1 = $_POST['jkang1'];
$sekolahang1 = $_POST['sekolahang1'];
$fullnameang2 = $_POST['fullnameang2'];
$ttlang2 = $_POST['ttlang2'];
$jkang2 = $_POST['jkang2'];
$sekolahang2 = $_POST['sekolahang2'];
$fullnameang3 = $_POST['fullnameang3'];
$ttlang3 = $_POST['ttlang3'];
$jkang3 = $_POST['jkang3'];
$sekolahang3 = $_POST['sekolahang3'];
$fullnameang4 = $_POST['fullnameang4'];
$ttlang4 = $_POST['ttlang4'];
$jkang4 = $_POST['jkang4'];
$sekolahang4 = $_POST['sekolahang4'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$repassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
$syaratketentuan = $_POST['syaratketentuan'];

if ($game == 'Valorant') {
	$direktorivalo = "kartu_peserta/valorant/";
	$kartuketua= '../register/kartu_peserta/valorant/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/valorant/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/valorant/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$kartuang3= '../register/kartu_peserta/valorant/'.$teamname.'-ang3-'.$_FILES['kartuang3']['name'];
	$kartuang4= '../register/kartu_peserta/valorant/'.$teamname.'-ang4-'.$_FILES['kartuang4']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$pkartuang3= $teamname.'-ang3-'.$_FILES['kartuang3']['name'];
	$pkartuang4= $teamname.'-ang4-'.$_FILES['kartuang4']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

	$ektensiGambar4 = explode('.', $_FILES['kartuang3']['name']);
	$ektensiGambar4 = strtolower(end($ektensiGambar4));

	$ektensiGambar5 = explode('.', $_FILES['kartuang4']['name']);
	$ektensiGambar5 = strtolower(end($ektensiGambar5));

	if (!in_array($ektensiGambar1, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar2, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar3, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar4, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar5, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktorivalo.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktorivalo.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktorivalo.$pkartuang2);
	move_uploaded_file($_FILES['kartuang3']['tmp_name'], $direktorivalo.$pkartuang3);
	move_uploaded_file($_FILES['kartuang4']['tmp_name'], $direktorivalo.$pkartuang4);
}

if ($game == 'CS : GO') {
	$direktoricsgo = "kartu_peserta/csgo/";
	$kartuketua= '../register/kartu_peserta/csgo/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/csgo/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/csgo/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$kartuang3= '../register/kartu_peserta/csgo/'.$teamname.'-ang3-'.$_FILES['kartuang3']['name'];
	$kartuang4= '../register/kartu_peserta/csgo/'.$teamname.'-ang4-'.$_FILES['kartuang4']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$pkartuang3= $teamname.'-ang3-'.$_FILES['kartuang3']['name'];
	$pkartuang4= $teamname.'-ang4-'.$_FILES['kartuang4']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

	$ektensiGambar4 = explode('.', $_FILES['kartuang3']['name']);
	$ektensiGambar4 = strtolower(end($ektensiGambar4));

	$ektensiGambar5 = explode('.', $_FILES['kartuang4']['name']);
	$ektensiGambar5 = strtolower(end($ektensiGambar5));

	if (!in_array($ektensiGambar1, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar2, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar3, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar4, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar5, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}

	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktoricsgo.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktoricsgo.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktoricsgo.$pkartuang2);
	move_uploaded_file($_FILES['kartuang3']['tmp_name'], $direktoricsgo.$pkartuang3);
	move_uploaded_file($_FILES['kartuang4']['tmp_name'], $direktoricsgo.$pkartuang4);
}

if ($game == 'Mobile Legends') {
	$direktoriml = "kartu_peserta/mobile_legends/";
	$kartuketua= '../register/kartu_peserta/mobile_legends/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/mobile_legends/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/mobile_legends/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$kartuang3= '../register/kartu_peserta/mobile_legends/'.$teamname.'-ang3-'.$_FILES['kartuang3']['name'];
	$kartuang4= '../register/kartu_peserta/mobile_legends/'.$teamname.'-ang4-'.$_FILES['kartuang4']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$pkartuang3= $teamname.'-ang3-'.$_FILES['kartuang3']['name'];
	$pkartuang4= $teamname.'-ang4-'.$_FILES['kartuang4']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

	$ektensiGambar4 = explode('.', $_FILES['kartuang3']['name']);
	$ektensiGambar4 = strtolower(end($ektensiGambar4));

	$ektensiGambar5 = explode('.', $_FILES['kartuang4']['name']);
	$ektensiGambar5 = strtolower(end($ektensiGambar5));

	if (!in_array($ektensiGambar1, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar2, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar3, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar4, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar5, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}

	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktoriml.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktoriml.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktoriml.$pkartuang2);
	move_uploaded_file($_FILES['kartuang3']['tmp_name'], $direktoriml.$pkartuang3);
	move_uploaded_file($_FILES['kartuang4']['tmp_name'], $direktoriml.$pkartuang4);
}
if ($game == 'PUBG') {
	$direktoripubg = "kartu_peserta/pubg/";
	$kartuketua= '../register/kartu_peserta/pubg/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/pubg/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/pubg/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$kartuang3= '../register/kartu_peserta/pubg/'.$teamname.'-ang3-'.$_FILES['kartuang3']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];
	$pkartuang3= $teamname.'-ang3-'.$_FILES['kartuang3']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

	$ektensiGambar4 = explode('.', $_FILES['kartuang3']['name']);
	$ektensiGambar4 = strtolower(end($ektensiGambar4));

	if (!in_array($ektensiGambar1, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar2, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar3, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	if (!in_array($ektensiGambar4, $ektensiGambarValid)) {
		echo "
			<script>
				alert('Format File Bukan Gambar\\nKirim dengan Ekstensi .png, .jpg, atau .jpeg!');
				window.location.href = 'index.php';
			</script>
		";
		return false;
	}
	
	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktoripubg.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktoripubg.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktoripubg.$pkartuang2);
	move_uploaded_file($_FILES['kartuang3']['tmp_name'], $direktoripubg.$pkartuang3);
}


$result = mysqli_query($koneksi, "SELECT email FROM peserta WHERE email = '$email'");

if (mysqli_fetch_assoc($result)) {
	echo "
	<script>
		alert('Email telah terdaftar');
		window.location.href='index.php';
	</script>";
	return false;
}

//Query input menginput data kedalam tabel peserta
$query="insert into peserta (game,teamname,idAkun,fullnameketua,ttlketua,jkketua,sekolahketua,kontakketua,kartuketua,fullnameang1,ttlang1,jkang1,sekolahang1,kartuang1,fullnameang2,ttlang2,jkang2,sekolahang2,kartuang2,fullnameang3,ttlang3,jkang3,sekolahang3,kartuang3,fullnameang4,ttlang4,jkang4,sekolahang4,kartuang4,email,password,syaratketentuan) values
	('$game','$teamname','$idAkun','$fullnameketua','$ttlketua','$jkketua','$sekolahketua','$kontakketua','$kartuketua','$fullnameang1','$ttlang1','$jkang1','$sekolahang1','$kartuang1','$fullnameang2','$ttlang2','$jkang2','$sekolahang2','$kartuang2','$fullnameang3','$ttlang3','$jkang3','$sekolahang3','$kartuang3','$fullnameang4','$ttlang4','$jkang4','$sekolahang4','$kartuang4','$email','$password','$syaratketentuan')";


//Kondisi apakah berhasil atau tidak
if (isset($_POST['submit'])) {
	$insert=mysqli_query($koneksi,$query);

	echo "
	<script>
		alert('Selamat! Registrasi Berhasil');
		window.location.href='../login/index.php';
	</script>";
}
else {
	echo "
	<script>
		alert('Gagal Memasukkan Data');
	</script>";
}

?>