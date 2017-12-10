<?php
session_start(); //memulai session
$error=''; //variabel untuk menyimpan pesan error
if (isset($_POST['tblogin'])) {
	if(empty($_POST['tuser']) || empty($_POST['tpassword'])){
	$error="username atau password tidak boleh kosong";
	echo"<script>alert('".$error."');</script>";
	}else{
		//variabel username dan password
		$username=$_POST['tuser'];
		$password=$_POST['tpassword'];
		//membangun koneksi ke database
		$koneksi=mysql_connect("localhost","root","");
		// seleksi database
		$db=mysql_select_db("dbmrksia10",$koneksi);
		//sql query untuk memeriksa apakah user terdapat di database
		$query=mysql_query("select * from admin where
							password='$tpassword' AND username='$tuser'",$koneksi);
		$rows=mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$tuser;//membuat session
			header("location:admin.php");//mengarahkan ke halaman admin
		} else {
			$error="Username atau Password belum terdaftar";
			echo ",<script>alert('".$error."');</script>";
		}
	mysql_close($connection); //menutup koneksi
	}
}
?>