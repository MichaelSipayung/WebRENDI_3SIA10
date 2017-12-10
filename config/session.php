<?php
//membuat halaman session.php berikut perintahnya
//diawali dengan membangun koneksi ke server 
$koneksi=mysql_connect("localhost","root","");
//seleksi database
$db=mysql_select_db("dbmrksia10",$koneksi);
//memulai sesi
session_start();
//menyimpan sesi 
$user_check=$_SESSION['login_user'];
//mengambil status user dengan perintah mysql_fetch_assoc
$ses_sql=mysql_query("select status from admin where username='$user_check'",$koneksi);
$row=mysql_fetch_assoc($ses_sql);
$login_session=$row['status'];
//menggunakan kondisi if (jika) tidak tercatat sesi
if(!isset($login_session)){
mysql_close($koneksi);//menutup koneksi
header('location:index.php');//mengarah kembali ke form login
}
?>
