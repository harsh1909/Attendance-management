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

$query ="SELECT * FROM teachers";
$result=mysqli_query($conn,$query);

if($_POST["id"] != NULL && $_POST["pass"] !=NULL)
{
if($result->num_rows >0)
 { $sql ="SELECT tid FROM teachers WHERE tid='$_POST[id]'AND tpass='$_POST[pass]'" ;
 	$result2 =mysqli_query($conn,$sql);
 	if($result2->num_rows>0)
 {	$_SESSION["image"] = 'assets/teacher/'."$_POST[id]".'.png';
    $_SESSION["uname"] = $_POST["id"];
 	header("Location:TLogged.php");
 
 }
   else
   	header("Location:Tlogin.php");
 } 
 
}
else
   	header("Location:Tlogin.php");
 ?> 