<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Tlogged</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery-3.3.1.min.js"></script>
  
  <style>
  #header{background-color:   #f53661  ;
           height: 100px; }}   
       </style>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
?>
</head>
<body>
<div class="container-fluid" id="header">
  <h1 style="text-align: center; text-shadow: 10px;color: black">MCA ATTENDANCE SYSTEM</h1>
</div>
<?php
$sql = "SELECT * FROM students ORDER BY enum";
$result =mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$rowcount=mysqli_num_rows($result);
$array =array();
for($i=0;$i<$rowcount;$i++)
    { 
        $array[$i]= $row['enum'];
        $row=mysqli_fetch_array($result);
    }
foreach($array as $value1)
{ $sql= "SELECT stname from students WHERE enum=$value1"; 
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result);
$darray =array();
        $darray[$i]= $row['stname'];
 $ap='';
 if($_POST["$value1"]=='p')
 $ap=1;
 else 
    $ap=0;
$dt1=date("Y-m-d");
 $sql2="INSERT INTO mca_attendance(enum,stname,date,scode,period,attend)
 VALUES('$value1','$darray[$i]','$dt1','{$_SESSION['sub']}',1,$ap)";
  $conn->query($sql2);
  header("Location:Tlogged.php");
}
?>

</body>
</html>