<?php
	include "config/login.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Login</title>
<link href="setting/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="formlogin">
<div class="utama">
	<form action="" method="post">
		<h1>.::Input Data Login::.</h1>
		<hr />
			<label> Username : </label><input type="text" name="tuser" />
			<label> Password : </label><input type="password" name="tpassword" />
			 <input type="submit" name="tblogin" value="L O G I N"/>
		<h2> </h2>
		<hr />
	</form>
</div>
</div>
</center>
</body>
</html>
