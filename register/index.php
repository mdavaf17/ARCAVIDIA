<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register | ARCAVIDIA</title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body onload="disableSubmit()" style="background-color: #394153;">
<div class="main_frame">

	&nbsp;<br>
	<div class="container">
    <h1></h1>
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	
	<form id="myForm" novalidate method="post" action="save.php" autocomplete="off" onsubmit="return validateForm()" enctype="multipart/form-data">
    
    <!-- START PAGE 1 -->
		<fieldset>
			<hr>
			<h2>Step 1 : Competition</h2>
			<hr>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-4 form-control-label" for="competition">Competition</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-4">
					<select class="form-control" name="competition" id="competition" required>
						<option value="">--- Choose ---</option>
						<option value="Competitive Programming">Competitive Programming</option>
						<option value="Data Science">Data Science</option>
						<option value="Capture The Flag">Capture The Flag</option>
						<option value="UI/UX Design">UI/UX Design</option>
					</select>
				</div>
			</div>
					
		
			&nbsp;<br><input type="button" name="data[password]" class="next btn btn-success btn-block" value="Next" />
		</fieldset>
		<!-- END PAGE 1 -->
		
		
		<!-- START PAGE 2 -->
		<fieldset>
			<hr>
			<h2>Step 2 : KETUA</h2>
			<hr>
			
			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="teamname">Nama Tim</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="teamname" name="teamname">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="fullnameketua">Nama Lengkap</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="fullnameketua" name="fullnameketua">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="emailketua">Email</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="emailketua" name="emailketua" placeholder="XXXXXXX@gmail.com">
				</div>
			</div>
					
			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="campus">Universitas</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6"> 
					<input type="text" class="form-control" id="campus" name="campus" placeholder="Institut Teknologi Bandung">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="Line">ID LINE</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="Line" name="Line" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="kartuketua">Kartu Tanda Mahasiswa/KTP<br>(FILE GAMBAR)</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="file" class="form-control" id="kartuketua" name="kartuketua">
				</div>
			</div>
			
			&nbsp;<br><input type="button" name="previous" class="previous btn btn-default" value="Back" style="width: 49%"/>
			<input type="button" name="next" class="next btn btn-success" value="Next" style="width: 49%"/>
		</fieldset>
		<!-- END PAGE 2 -->
		
		<!-- START PAGE 3-->
		<fieldset>
			<hr>
			<h2>Step 3 : ANGGOTA 1</h2>
			<hr>
			
			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="fullnameang1">Nama Lengkap</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="fullnameang1" name="fullnameang1">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="emailang1">Email</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="emailang1" name="emailang1" placeholder="XXXXXXX@gmail.com">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="kartuang1">Kartu Tanda Mahasiswa/KTP<br>(FILE GAMBAR)</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="file" class="form-control" id="kartuang1" name="kartuang1">
				</div>
			</div>
			
			&nbsp;<br><input type="button" name="previous" class="previous btn btn-default" value="Back" style="width: 49%"/>
			<input type="button" name="next" class="next btn btn-success" value="Next" style="width: 49%"/>
		</fieldset>
		<!-- END PAGE 3-->

		<!-- END PAGE 4-->
		<fieldset>
			<hr>
			<h2>Step 4 : ANGGOTA 2</h2>
			<hr>
			
			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="fullnameang2">Nama Lengkap</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="fullnameang2" name="fullnameang2">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="emailang2">Email</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="text" class="form-control" id="emailang2" name="emailang2" placeholder="XXXXXXX@gmail.com">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-5 col-sm-5 form-control-label" for="kartuang2">Kartu Tanda Mahasiswa/KTP<br>(FILE GAMBAR)</label>
				<label class="col-xs-5 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-6">
					<input type="file" class="form-control" id="kartuang2" name="kartuang2">
				</div>
			</div>
			
			&nbsp;<br><input type="button" name="previous" class="previous btn btn-default" value="Back" style="width: 49%"/>
			<input type="button" name="next" class="next btn btn-success" value="Next" style="width: 49%"/>
		</fieldset>
		<!-- END PAGE 4-->

		
		<!-- START PAGE 5 -->
		<fieldset>
			<h2>Final Step : Register Account</h2>
			
			<div class="form-group row">
				<label class="col-xs-4 col-sm-4 form-control-label" for="emailteam">Email Team</label>
				<label class="col-xs-1 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-8 col-sm-6">
					<input type="text" class="form-control" id="emailteam" name="emailteam" placeholder="XXXXXXX@gmail.com" autocomplete="on">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-4 col-sm-4 form-control-label" for="password">Password</label>
				<label class="col-xs-1 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-4">
					<input type="password" class="form-control" id="password" name="password">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-xs-4 col-sm-4 form-control-label" for="repassword">Re-enter Password</label>
				<label class="col-xs-1 col-sm-1 titik form-control-label">:</label>
				<div class="col-xs-7 col-sm-4">
					<input type="password" class="form-control" id="repassword" name="repassword">
				</div>
			</div>

			<div class="form-group row form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" name="syaratketentuan" value="setuju" onchange="activateButton(this)">
				<label class="form-check-label" for="exampleCheck1">Saya setuju dengan <a href="#" target="_blank">syarat dan ketentuan</a></label>
			</div>
			
			&nbsp;<br><input type="button" name="previous" class="previous btn btn-default" value="Back" style="width: 49%"/>
			<input type="submit" name="submit" class="btn btn-success" value="Submit" id="submit_data" style="width: 49%"/>
		</fieldset>
		<!-- END PAGE 5 -->
    
	</form>
  </div>
</div>

<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
<script src="main.js"></script>

</body>
</html>