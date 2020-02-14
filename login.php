<?php
$link = mysqli_connect("localhost","root","","tutorq");



if (!$link) {
  	die('ada error');
}
$uname = $_POST['username'];
$pass  = $_POST['password'];

$query = " SELECT * FROM siswa WHERE username = '$uname' AND password = '$pass' ";
$query2 = " SELECT * FROM tutor WHERE username = '$uname' AND password = '$pass' ";

//trim($query);

$result = mysqli_query($link,$query);
$result2 = mysqli_query($link,$query2);

if(mysqli_num_rows($result2))
{
	$nama = mysqli_fetch_assoc($result2);
    session_start();
	$_SESSION['nama'] = $nama['nama'];
	$_SESSION['foto'] = $nama['foto'];
	$_SESSION['status'] = "login";
	header("location:tutorindex.php");
}else if(mysqli_num_rows($result)){
	$nama = mysqli_fetch_assoc($result);
    session_start();
	$_SESSION['nama'] = $nama['nama'];
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.html");
}

mysqli_close($link);
?>