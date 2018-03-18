<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "seecs@123", "sas");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['fname']);
$last_name = mysqli_real_escape_string($link, $_POST['lname']);
$cnic = mysqli_real_escape_string($link, $_POST['a_ID']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$phone_no = mysqli_real_escape_string($link, $_POST['ph_no']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$street = mysqli_real_escape_string($link, $_POST['street']);
$colony = mysqli_real_escape_string($link, $_POST['colony']);
$ddate = date('Y-m-d H:i:s');
 
// attempt insert query execution
$sql = "INSERT INTO adopter(a_ID,fname, lname, ph_no, gender ,city,street ,colony) VALUES ('$cnic','$first_name', '$last_name', '$phone_no' ,'$gender','$city','$colony','$street')";
$sql1 = "INSERT INTO adoption(a_id , adoption_date) VALUES ('$cnic','$ddate')";
$sql2 = "UPDATE ANIMAL SET Adopter_ID = '$cnic' WHERE Animal_ID = 1";

// Execute multi query

if(mysqli_query($link, $sql) and mysqli_query($link, $sql1) and mysqli_query($link, $sql2) ){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// close connection
mysqli_close($link);
?>