<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query ="SELECT * FROM students";
$result=mysqli_query($conn,$query);

if($_POST["id"] != NULL && $_POST["pass"] !=NULL)
{
if($result->num_rows >0)
 { $sql ="SELECT enum FROM students WHERE enum='$_POST[id]'AND spass='$_POST[pass]'" ;
 	$result2 =mysqli_query($conn,$sql);
 	if($result2->num_rows>0)
 {	$_SESSION["image"] = 'assets/student/'."$_POST[id]".'.png';
    $_SESSION["uname"] = $_POST["id"];
 	header("Location:Slogged.php");
 
 }
   else
   	header("Location:Slogin.php");
 } 
 
}
else
   	header("Location:Slogin.php");
 ?> 