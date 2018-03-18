
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
   
   $sql = 'SELECT fname,lname FROM employee ';
  $sql1 = 'SELECT fname,lname FROM adopter ';
  $sql2 =  'SELECT fname,lname FROM donor ';
  $sql3 =  'SELECT fname,lname FROM informer ';
  
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   ?>
  
   <br><br><h2 align = center>The People - The Eyes, Ears and the Mouth of the SAS Rescue Center</h2>
    <div style="width:300px; margin:auto;  ">
   <br><h3>Our Workers</h3><br>
	  <?php
   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
      
	  echo
	  " Name :{$row['fname']}"."  {$row['lname']} <br> ";
         
   }
   echo  "--------------------------------";
   ?>
   
   </div>
   <?php
 $retval1 = mysqli_query( $conn, $sql1 );

   
   if(! $retval1 ) {
      die('Could not get data: ' . mysql_error());
   }
   ?>
   <div style="width:300px; margin:auto;  ">
   
   <br><h3>Our Adopters:</h3><br>
	  <?php
   while($row = mysqli_fetch_array($retval1, MYSQL_ASSOC)) {
      
	  echo
	  " Name :{$row['fname']}"."  {$row['lname']} <br> ";
        
   }
   echo  "--------------------------------";
   ?>
    
 

 </div>

   <?php
 $retval2 = mysqli_query( $conn, $sql2 );

   
   if(! $retval2 ) {
      die('Could not get data: ' . mysql_error());
   }
   ?>
   <div style="width:300px; margin:auto;  ">
   
   <br><h3>Our Donors:</h3>
	  <?php
   while($row = mysqli_fetch_array($retval2, MYSQL_ASSOC)) {
      
	  echo
	  " Name :{$row['fname']}"."  {$row['lname']} <br> ";
         
   }
   echo "--------------------------------";
  
   ?>
   <?php
     $retval3 = mysqli_query( $conn, $sql3 );
   
   if(! $retval3 ) {
      die('Could not get data: ' . mysql_error());
   }
   ?>
   <div style="width:300px; margin:auto;  ">
   
   <br><h3>Our Informers</h3><br>
	  <?php
   while($row = mysqli_fetch_array($retval3, MYSQL_ASSOC)) {
      
	  echo
	  " Name :{$row['fname']}"."  {$row['lname']} <br> ";
         
   }
   echo  "--------------------------------";
   ?>
   
   
    <?php mysqli_close($conn); ?>
<table align="center">
<tr><td><strong><marquee behavior="scroll">FOLLOW US</marquee></strong></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><a href="https://www.linkedin.com/company/edible-arrangements"><img src="linkedin.png" width="110" height="102" /></a></td><td><a href="https://plus.google.com/+EdibleArrangements"><img src="googleplus.png" width="103" height="84" /></a></td><td><a href="https://twitter.com/edible?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="twitter.png" width="86" height="86" /></a></td><td><img src="Dtafalonso-Android-Lollipop-Downloads.ico" width="144" height="108"/></td></tr></table>


</body>
</html>