
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Banner.png" width="1270" height="270" /><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body style="background-color:PeachPuff;">
			   <head>
               <link rel="stylesheet" type="text/css" href="css.css">
               <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFF;
	font-weight: bold;
}
.style4 {
	font-size: 18px;
	font-family: Aharoni;
}
.style5 {color: #000}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<ul id="MenuBar1" class="MenuBarHorizontal" style="alignment-adjust:central">
 <li><a  href="home.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
  </li>
  <li><a href="donate.html">&nbsp;&nbsp;&nbsp;&nbsp;Donate</a></li>
  </li>
  <li><a href="adopt.html">&nbsp;&nbsp;&nbsp;Adopt</a></li>
 <li><a href="informus.html">&nbsp;&nbsp;&nbsp;Rescue</a></li>
  <li><a href="shelter.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shelter</a></li>
  <li><a href="contributors.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contributors</a></li>
  <li><a href="aboutus.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a></li>
</ul> 
<br>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'seecs@123';
   $dbname = 'SAS';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT Animal_ID , gender,age,color,breed FROM ANIMAL WHERE type = "Cat" AND Animal_ID = 4 AND Adopter_ID is null';
  
  
   $retval = mysqli_query( $conn, $sql );
    $num_rows = mysqli_num_rows($retval);
   if($num_rows == 0)
   {
   echo "<br><br><br><br><br>Animal Found A Home";
   }
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   ?>
   <div style="width:300px; margin:auto;  ">
	  <?php
   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
      
	  echo
	  "<br><br><br><br><br> Animal_ID :{$row['Animal_ID']}  <br> ".
         "Gender : {$row['gender']} <br> ".
         "Age : {$row['age']} <br> ".
		 "Color : {$row['color']} <br> ".
		 "Breed : {$row['breed']} <br> ".
         "--------------------------------";
   }
  
   ?>
   <img src="kitten2.jpg" alt="cat" width="200" height= "200" style="position:absolute; TOP:350px; LEFT:800px">
   </div>
 
    
    
   <?php
if($num_rows != 0) {
?>
 <br><br><br> <h2  align=center>Kindly Fill This Adoption Form To Register</h2>
<form action="insertc2.php" method="post" align = center>
	<p>
    	<label for="fname">First Name:</label><br>
        <input type="text" name="fname" id="fname">
    </p>
    <p>
    	<label for="lname">Last Name:</label><br>
        <input type="text" name="lname" id="lname">
    </p>
	 <p>
    	<label for="a_ID">CNIC:</label><br>
        <input type="text" name="a_ID" id="a_ID">
    </p>
    <p>
    	<label for="gender">Gender:</label><br>
        <input type="text" name="gender" id="gender">
    </p>
	 <p>
    	<label for="ph_no">Phone Number:</label><br>
        <input type="text" name="ph_no" id="ph_no">
    </p>
	 <p>
    	<label for="city">City:</label><br>
        <input type="text" name="city" id="city">
    </p>
	 
	 <p>
    	<label for="colony">Colony:</label><br>
        <input type="text" name="colony" id="colony">
    </p>
	<p>
    	<label for="street">Street:</label><br>
        <input type="text" name="street" id="street">
    </p>
    <input type="submit" value="Submit">
</form>
 <?php
}
?>
  <?php mysqli_close($conn); ?>
  <table align="center">
<tr><td><strong><marquee behavior="scroll">FOLLOW US</marquee></strong></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><a href="https://www.linkedin.com/company/edible-arrangements"><img src="linkedin.png" width="110" height="102" /></a></td><td><a href="https://plus.google.com/+EdibleArrangements"><img src="googleplus.png" width="103" height="84" /></a></td><td><a href="https://twitter.com/edible?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="twitter.png" width="86" height="86" /></a></td><td><img src="Dtafalonso-Android-Lollipop-Downloads.ico" width="144" height="108"/></td></tr></table>


</body>
</html>