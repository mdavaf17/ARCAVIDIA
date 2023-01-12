<?php
//Include file koneksi ke database
include "../database_connector.php";


//menerima nilai dari kiriman form input-barang
$competition = $_POST['competition'];
$teamname = $_POST['teamname'];
$fullnameketua = $_POST['fullnameketua'];
$emailketua = $_POST['emailketua'];
$campus = $_POST['campus'];
$Line = $_POST['Line'];
$fullnameang1 = $_POST['fullnameang1'];
$emailang1 = $_POST['emailang1'];
$fullnameang2 = $_POST['fullnameang2'];
$emailang2 = $_POST['emailang2'];
$emailteam = $_POST['emailteam'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$repassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
$syaratketentuan = $_POST['syaratketentuan'];

if ($competition == 'Competitive Programming') {
	$direktoricp = "kartu_peserta/cp/";
	$kartuketua= '../register/kartu_peserta/cp/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/cp/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/cp/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

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
	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktoricp.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktoricp.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktoricp.$pkartuang2);
}

if ($competition == 'Data Science') {
	$direktorids = "kartu_peserta/ds/";
	$kartuketua= '../register/kartu_peserta/ds/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/ds/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/ds/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

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
	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktorids.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktorids.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktorids.$pkartuang2);
}

if ($competition == 'Capture The Flag') {
	$direktorictf = "kartu_peserta/ctf/";
	$kartuketua= '../register/kartu_peserta/ctf/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/ctf/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/ctf/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

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
	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktorictf.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktorictf.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktorictf.$pkartuang2);
}

if ($competition == 'UI/UX Design') {
	$direktoriuiux = "kartu_peserta/uiux/";
	$kartuketua= '../register/kartu_peserta/uiux/'.$teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$kartuang1= '../register/kartu_peserta/uiux/'.$teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$kartuang2= '../register/kartu_peserta/uiux/'.$teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$pkartuketua= $teamname.'-ketua-'.$_FILES['kartuketua']['name'];
	$pkartuang1= $teamname.'-ang1-'.$_FILES['kartuang1']['name'];
	$pkartuang2= $teamname.'-ang2-'.$_FILES['kartuang2']['name'];

	$ektensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ektensiGambar1 = explode('.', $_FILES['kartuketua']['name']);
	$ektensiGambar1 = strtolower(end($ektensiGambar1));

	$ektensiGambar2 = explode('.', $_FILES['kartuang1']['name']);
	$ektensiGambar2 = strtolower(end($ektensiGambar2));

	$ektensiGambar3 = explode('.', $_FILES['kartuang2']['name']);
	$ektensiGambar3 = strtolower(end($ektensiGambar3));

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
	move_uploaded_file($_FILES['kartuketua']['tmp_name'], $direktoriuiux.$pkartuketua);
	move_uploaded_file($_FILES['kartuang1']['tmp_name'], $direktoriuiux.$pkartuang1);
	move_uploaded_file($_FILES['kartuang2']['tmp_name'], $direktoriuiux.$pkartuang2);
}


$result = mysqli_query($koneksi, "SELECT emailteam FROM peserta WHERE emailteam = '$emailteam'");

if (mysqli_fetch_assoc($result)) {
	echo "
	<script>
		alert('Email telah terdaftar');
		window.location.href='index.php';
	</script>";
	return false;
}

//Query input menginput data kedalam tabel peserta
$query="insert into peserta (competition,teamname,fullnameketua,emailketua,campus,Line,kartuketua,fullnameang1,emailang1,kartuang1,fullnameang2,emailang2,kartuang2,emailteam,password,syaratketentuan) values
	('$competition','$teamname','$fullnameketua','$emailketua','$campus','$Line','$kartuketua','$fullnameang1','$emailang1','$kartuang1','$fullnameang2','$emailang2','$kartuang2','$emailteam','$password','$syaratketentuan')";


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