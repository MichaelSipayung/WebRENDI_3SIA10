<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> -->
<title>Dropdown Menu</title>

<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./setting/style-mn.css"  rel="stylesheet" type="text/css"/>
<style type="text/css">
 body {
   
		background-color:  #16a085 ;
		margin :0px;
 } h3{
	/* border-bottom-left-radius: 150px; */
	/* border-top-right-radius: 150px; */

	font-family:"Abel" , sans-serif;

	 color:white;
	 text-align:center;
	 padding :4%;
	 background-color :#34495e;
margin:0px auto;

font-size:17px;

   
 }
 #slideshow { 
    /* margin: 50px auto;  */
    position: relative; 
    width: 100%; 
    height: 200px; 
    padding: 0px; 
    /* box-shadow: 0 0 20px rgba(0,0,0,0.4);  */
}


#slideshow > div { 
    position: absolute; 
    top: 0px; 
    left: 0px; 
    right: 0px; 
    bottom: 0px auto; 
}
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
</script>
	<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);


	</script>
</head>


<body >

<table  width="100%"  height="100%"   style=" border-spacing:0";  >
  <tr>
    <td colspan="2" height="160" >
		<div id="slideshow">
   <div>
     <img src="slide.jpg" width="100%"  >
   </div>
   <div>
 
		<img src="slide1.jpg" alt="clik" width="100%"  height="170%"></td>
		</div>
</div>
  </tr>
  <tr  bgcolor="white">
    <td  >
		<ul class="dropmenu">
			<li ><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Utama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
			<li><a href="#">Form Input Data &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
				</a>
			  <ul>
					<li><a href="#">Input Data Dosen</a></li>
					<li><a href="#">Input data Mahasiswa</a></li>
					<li><a href="#">Input Data Mata Kuliah</a></li>
					<li><a href="#">Input Data Nilai Mahasiswa</a></li>
			  </ul>
		  </li>
			<li> <a href="#">Agenda Kerja &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
				</a>
			  <ul>
					<li><a href="#">Agenda Harian</a></li>
					<li><a href="#">Agenda Mingguan</a></li>
					<li><a href="#">Agenda Bulanan</a></li>
					<li><a href="#">Agenda Tahunan</a></li>
			  </ul>			
		  </li>
			<li><a href="config/logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
		</ul>
	</td>
    <td bgcolor="#34495e" width="30%"  style ="font-family:Abel , sans-serif;"><marquee  behavior="alternate"><font size="+2" color="#ffffff" ><strong>Make dream come true    </strong></marquee></td>
	</tr>
	
</table><?php  include "isi.php" ?> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3>Powered By : Michael  Sipayung  &copy; 2017</h3> 

</body>
</html>
