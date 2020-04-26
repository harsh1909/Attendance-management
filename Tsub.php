<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>Ssub</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="jquery-3.3.1.min.js"></script>
  
  <style type="text/css">
    #header{background-color:   #f53661  ;
           height: 100px; }
  </style>
</head>
<body>
<div class="container-fluid" id="header">
  <h1 style="text-align: center; text-shadow: 10px;color: black">MCA ATTENDANCE SYSTEM</h1>
</div>
<div id="att">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT stname, scode, count(attend) as total FROM mca_attendance WHERE scode='$_POST[OP]' AND enum='$_SESSION[uname]'";
$result =mysqli_query($conn,$sql);
echo "NAME"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
echo "PERIOD"."&nbsp";
echo "SUBJECT"."&nbsp";
echo "TOTAL ATTENDANCE"."&nbsp";
echo "</br>";


while ($row = $result->fetch_assoc()) {
    echo $row['stname']."&nbsp"."&nbsp";
  echo $row['scode']."&nbsp";
  echo $row['total']."&nbsp";
  echo "</br>";
}
?>
</body>
</html>