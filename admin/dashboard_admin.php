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
	<title>Dashboard Admin | ARCAVIDIA</title>
	<style>
		table {
			font-size: 18px;
			text-align: center;
		}
		a {
			text-decoration: none;
			color: red;
		}
	</style>
</head>
<body>

<h1 align="center">Peserta ARCAVIDIA 2023</h1>

<?php 

include "../database_connector.php";

$query = "SELECT * FROM peserta ORDER BY status DESC" ;
$result = mysqli_query($koneksi,$query);

if (mysqli_num_rows($result) > 0)
{
	echo'<table border=1
				style = " 
					margin-left: auto;  
					margin-right: auto;">
			<tr bgcolor=yellow>
				<td>No</td>
				<td>Competition</td>
				<td>Nama Tim</td>
				<td>Nama Lengkap Ketua</td>
				<td>ID Line Ketua</td>
				<td>Universitas</td>
				<td>Email</td>
				<td>Status</td>
				<td>Created Date</td>
				<td>Action</td>
			</tr>

	';

	$no = 1;
	while($data=mysqli_fetch_array($result))
	{
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['competition'].'</td>
			<td>'.$data['teamname'].'</td>
			<td>'.$data['fullnameketua'].'</td>
			<td>'.$data['Line'].'</td>
			<td>'.$data['campus'].'</td>
			<td>'.$data['emailteam'].'</td>
		';
	
		if ($data['status'] == 2) {
			echo '<td bgcolor=#34eb40>';
		}
		elseif ($data['status'] == 1) {
			echo '<td bgcolor=yellow>';
		}
		else {
			echo '<td bgcolor=red>';
		}
			
		echo '
			'.$data['status'].'</td>';

		echo '
			<td>'.$data['date_created'].'</td>
			<td>
				<a href="view.php?id='.$data['id'].'">View</a> | 
				<a href="update.php?id='.$data['id'].'">Update</a> | 
				<a href="delete.php?id='.$data['id'].'">Delete</a> 
		</tr>
		';

		$no++;
	}
	echo'</table>';
}
	
	else
{
	echo"tidak ada data member";
}

?>
</body>
</html>