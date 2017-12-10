<?php
session_start ();
if(session_destroy()) //menghapus session
{
	header("location:../index.php");//langsung mengarah ke home index.php
}
?>
