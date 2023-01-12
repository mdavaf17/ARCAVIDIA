<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db = "arcavidia_1.0";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db);

if (!$koneksi) {
	echo "
	<script>
		alert('Gagal Terhubung Database');
	</script>";
}

?>