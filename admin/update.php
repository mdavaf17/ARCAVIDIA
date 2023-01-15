<?php 

session_start();

include "../database_connector.php";
if(!isset($_SESSION['nim'])) {
	header('Location: index.php');
}

include "../database_connector.php";

$id = $_GET['id'];
$query = "SELECT * FROM peserta where id = '$id'";
$result = mysqli_query($koneksi,$query);

while($data = mysqli_fetch_array($result))
{

	$competition = $data['competition'];
	$teamname = $data['teamname'];
	$fullnameketua = $data['fullnameketua'];
	$emailketua = $data['emailketua'];
	$campus = $data['campus'];
	$Line = $data['Line'];
	$fullnameang1 = $data['fullnameang1'];
	$emailang1 = $data['emailang1'];
	$fullnameang2 = $data['fullnameang2'];
	$emailang2 = $data['emailang2'];
	$emailteam = $data['emailteam'];
	$status = $data['status'];

}

if(isset($_POST['update']))
{
	$id = $_GET['id'];
	$query = "update peserta set 
		competition = '".$_POST['competition']."',
		teamname = '".$_POST['teamname']."',
		campus = '".$_POST['campus']."',
		emailteam = '".$_POST['emailteam']."',
		status = '".$_POST['status']."',
		fullnameketua = '".$_POST['fullnameketua']."',
		emailketua = '".$_POST['emailketua']."',
		Line = '".$_POST['Line']."',
		fullnameang1 = '".$_POST['fullnameang1']."',
		emailang1 = '".$_POST['emailang1']."',
		fullnameang2 = '".$_POST['fullnameang2']."',
		emailang2 = '".$_POST['emailang2']."'
		where id = $id
	";

	$result_update = mysqli_query($koneksi, $query);
	if($result_update) {
		header("Location:dashboard_admin.php");
	}
	else {
		echo "GAGAL";
	}
}
?>

<style type="text/css">
	* {
		font-family: sans-serif;
	}
	.info {
		border: 3px solid red;
		padding: 10px;
		background-color: #ffff00;
		float: left;
		position: fixed;
	}
	.info a, .info input {
		background-color: transparent;
		border: none;
		font-size: 20px;
		display: block;
		text-decoration: none;
	}
	table {
		margin-left: auto;
		margin-right: auto;
		table-layout: fixed;
		border-collapse: collapse;
		border-color: #ccc;
	}
	td {
		border: none;
		height: 30px;
		padding: 10px;
		font-size: 20px;
	}

	td:nth-child(1) {
		padding-left:5px;
	}

	td:nth-child(2) {
		text-align:center;
	}

	td:nth-child(3) {
		padding-left:20px;
	}

	tr:nth-child(even){
		background-color: #ededed;
	}
	input, select {
		font-size: 20px;
		border: 1px inset #ccc;
	}
	.update, .reset {
		padding: 5px;
		background-color: #ffff00;
		border: 2px groove red;
	}
</style>

<div class='info'>
	<a href='dashboard_admin.php'>
		<input type='button' value='KEMBALI'>
	</a>
</div>

<form method="POST">
<table border="1">
	<tr>
		<td>Competition</td>
		<td>&#8594;</td>
		<td>				
		<?php
				$cp = ($competition == "Competitive Programming" ? "selected" : "");
				$ds = ($competition == "Data Science" ? "selected" : "");
				$ctf = ($competition == "Capture The Flag" ? "selected" : "");
				$uiux = ($competition == "UI/UX Design" ? "selected" : "");
				?>

				<select name="competition">
					<option value=""> --- Pilih ---
					<option value="Competitive Programming" <?=$cp?> > Competitive Programming
					<option value ="Data Science" <?=$ds?> > Data Science
					<option value ="Capture The Flag" <?=$ctf?> > Capture The Flag
					<option value ="UI/UX Design" <?=$uiux?> > UI/UX Design
				</select>
		</td>
	</tr>
	<tr>
		<td>Nama Tim</td>
		<td>&#8594;</td>
		<td> <input type="text" name="teamname" value="<?=$teamname?>"> </td>
	</tr>
	<tr>
		<td>Universitas</td>
		<td>&#8594;</td>
		<td> <input type="text" name="campus" value="<?=$campus?>"> </td>
	</tr>
	<tr>
		<td>Email Tim</td>
		<td>&#8594;</td>
		<td> <input type="text" name="emailteam" value="<?=$emailteam?>"> </td>
	</tr>
	<tr>
		<td>Status Pembayaran</td>
		<td>&#8594;</td>
		<td> 
			<?php
				$yet = ($status == "0" ? "selected" : "");
				$wait = ($status == "1" ? "selected" : "");
				$verif = ($status == "2" ? "selected" : "");
				?>

				<select name="status">
					<option value=""> --- Pilih ---
					<option value="0" <?=$yet?> > 0 (Belum Mengupload Bukti) 
					<option value ="1" <?=$wait?> > 1 (Menunggu Verifikasi Bukti)
					<option value="2" <?=$verif?> > 2 (Verifikasi Bukti) 
				</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Nama Lengkap Ketua</td>
		<td>&#8594;</td>
		<td> <input type="text" name="fullnameketua" value="<?=$fullnameketua?>"> </td>
	</tr>
	<tr>
		<td>Email Ketua</td>
		<td>&#8594;</td>
		<td> <input type="text" name="emailketua" value="<?=$emailketua?>"> </td>
	</tr>
	<tr>
		<td>ID Line</td>
		<td>&#8594;</td>
		<td> <input type="text" name="Line" value="<?=$Line?>"> </td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Nama Lengkap Anggota 1</td>
		<td>&#8594;</td>
		<td> <input type="text" name="fullnameang1" value="<?=$fullnameang1?>"> </td>
	</tr>
	<tr>
		<td>Email Anggota 1</td>
		<td>&#8594;</td>
		<td> <input type="text" name="emailang1" value="<?=$emailang1?>"> </td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Nama Lengkap Anggota 2</td>
		<td>&#8594;</td>
		<td> <input type="text" name="fullnameang2" value="<?=$fullnameang2?>"> </td>
	</tr>
	<tr>
		<td>Email Anggota 2</td>
		<td>&#8594;</td>
		<td> <input type="text" name="emailang2" value="<?=$emailang2?>"> </td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td style="text-align:center;">
			<input class="update" type="submit" name = "update" value="UPDATE">
			<input class="reset" type="reset" value="RESET">
		</td>
	</tr>
</table>
</form>