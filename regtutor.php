<?php
$link = mysqli_connect('localhost','root','','tutorq');
if(!$link){
	die('Koneksi gagal');
}
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$uname = $_POST['username'];
$pass  = $_POST['password'];
$email = $_POST['email'];
$jenjang = $_POST['jenjang'];
$alamat = $_POST['alamat'];
$matpel = $_POST['matpel'];
$tarif = $_POST['tarif'];
$hp = $_POST['hp'];
$domisili = $_POST['domisili'];

$query = "INSERT INTO tutor (nama, jk, username, password, email, matpel, alamat, tarif, hp, domisili, jenjang) VALUES ('$nama','$jk', '$uname','$pass','$email','$matpel','$alamat', '$tarif','$hp','$domisili','$jenjang')";

if(mysqli_query($link,$query) ){
	$out = 'Data berhasil ditambahkan';
}
else{
	$out = 'Data gagal ditambahkan';
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tutor-Q</title>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body style="background-image:url(back2.png)">
  <div class="container">
	<article>
		<div class="row">
			<div class="col-md-3" id="cont=center"></div>
			<div class="col-md-6" id="form-box" style="height:auto;margin-top:100px;text-align:center">
				<h2><?php echo $out ?></h2><br>
				<form action="index.php">
					<input type="submit" value="Kembali" class="btn btn-success">
				</form>
			</div>
		</div>
    </article>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>
?>