<?php
$servername="localhost";
$username="username";
$password="password";
$db="mueni2";

//Create database connection
$conn=new mysqli($servername,$username,$password,$db);
//check connection

$fullname=$_POST['First name'];
$secondname=$_POST['Last name'];
$email=$_POST['Email Address'];
$phonenumber=$_POST['Phone Number'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$city=$_POST['city'];
$sql="INSERT INTO mobisa ( First_name,Last_name,Email _Address,Phone_Number, Gender,Age,city
 VALUES('  $fullname','$secondname','$email','$phonenumber'$gender','$age','$city')";
 if ($conn->query($sql)===TRUE){
echo "Table Created succesfuly";
 } else{
echo "Error creating table:".$conn->error;

 }
 $conn->close();








?>
