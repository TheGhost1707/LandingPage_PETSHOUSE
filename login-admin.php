<?php 
$koneksi = mysqli_connect("localhost","root","","db_petshouse");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$error="";

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
 
	$cek = mysqli_fetch_assoc($login);
 
	if($cek['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:Dashboard-admin.php?pesan=sukses");
	}else{
    $error = "Username atau Password tidak ditemukan !";
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman login</title>
	<link rel="stylesheet" href="style-login.css" type="text/css">
  <!-- Vendor CSS Files -->
</head>
<body>
<h2>Login</h2>
<form action="" method="POST">
  <div class="imgcontainer">
    <img src="img/icon/paws.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Masukkan Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" name="password" required>
        
    <button type="submit" name="submit">Masuk</button>
    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
  </div>
  <div class="container" style="background-color:rgba(58, 57, 57);">
  <a href="index.php"><button type="button" class="kembalibtn">Kembali</button></a>
    <span class="psw"><a href="#">Lupa password?</a></span>
  </div>
</form>

</body>
</html>
