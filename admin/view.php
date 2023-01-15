<?php 

session_start();

include "../database_connector.php";
if(!isset($_SESSION['nim'])) {
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View | ARCAVIDIA</title>
	<style>
		* {
			font-family: sans-serif;
	  		text-align:center;
		}
		.alert {
			padding: 20px;
			background-color: #f44336;
			float: left;
		}
		.warning {
			padding: 20px;
			background-color: #ff9800;
			float: left;
		}
		.info {
			padding: 10px;
			background-color: #2196f3;
			float: left;
			position: fixed;
		}
		input, .info a {
			font-size: 20px;
			margin-top: 10px;
			display: block;
			text-decoration: none;
		}
	</style>
</head>
<body>

<?php 


include "../database_connector.php";


$id = $_GET['id'];

$query = "SELECT * FROM peserta where id = '$id'";

echo "
	<div class='info'>
		<a href='dashboard_admin.php'>
			<input type='button' value='Kembali'>
		</a>
		<a href='update.php?id=$id'>
			<input type='button' value='Verifikasi'>
		</a>
	</div>
";

$result = mysqli_query($koneksi,$query);



if (mysqli_num_rows($result) > 0) {
	echo'<table border="1"
				style = " 
					margin-left: auto;  
					margin-right: auto;">
			<tr bgcolor=yellow>
				<td>Status</td>
				<td>Nama Lengkap</td>
				<td>Email</td>
				<td>KTM</td>
				<td>Created Date</td>
			</tr>
	';


	while($data=mysqli_fetch_array($result))
	{
		echo '
			<h1 align="center">Team : '.$data['teamname'].' | '.$data['competition'].'</h1>
		<tr>
			<td> Ketua </td>
			<td>'.$data['fullnameketua'].'</td>
			<td>'.$data['emailketua'].'</td>
			<td><img src="'.$data['kartuketua'].'" style="width:400px;"></td>
			<td>'.$data['date_created'].'</td>
		</tr>
		<tr>
			<td> Anggota 1 </td>
			<td>'.$data['fullnameang1'].'</td>
			<td>'.$data['emailang1'].'</td>
			<td><img src="'.$data['kartuang1'].'" style="width:400px;"></td>
			<td>'.$data['date_created'].'</td>
		</tr>
		<tr>
			<td> Anggota 2 </td>
			<td>'.$data['fullnameang2'].'</td>
			<td>'.$data['emailang2'].'</td>
			<td><img src="'.$data['kartuang2'].'" style="width:400px;"></td>
			<td>'.$data['date_created'].'</td>
		</tr>
		<tr>
			<td> Struk </td>
			<td colspan=4>'.$data['bukti'].'</td>
		</tr>
		';
	}
	echo'</table>';
}
else {
	echo"tidak ada data member";
}

?>
</body>
</html>