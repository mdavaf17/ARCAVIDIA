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
	<title>Delete | ARCAVIDIA</title>
	<style>
		* {
			font-family: sans-serif;
	  		text-align:center;
		}
		.warning {
			padding: 10px;
			background-color: red;
			float: left;
			position: fixed;
		}
		input, .warning a {
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
$result = mysqli_query($koneksi,$query);

if(isset($_POST['delete']))
{
	$delete_query = "delete from peserta where id = $id";
	$result_delete = mysqli_query($koneksi, $delete_query);
	
	$data=mysqli_fetch_array($result);

	$kartuketua = $data['kartuketua'];
	$kartuang1 = $data['kartuang1'];
	$kartuang2 = $data['kartuang2'];;
	$struk = $data['bukti'];

	if($result_delete)
	{
		unlink($kartuketua);
		unlink($kartuang1);
		unlink($kartuang2);
		unlink($struk);
		header("Location:dashboard_admin.php");
	}
	else
	{
		echo "GAGAl TOTAL";
	}
}
?>
<div class='warning'>
	<form method='POST'>
		<a href='dashboard_admin.php'>
			<input type='button' name='kembali' value='Kembali'>
		</a>
			<input name="delete" type="submit" value="Delete" onclick="return confirm('Apakah anda yakin ingin mendelete data tim ini?')">
	</form>
</div>

<?php 

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
		';
	}
	echo'</table>';
}
	
else
{
	echo"tidak ada data member";
}