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
session_start();
?>
</head>
<body>
<div class="container-fluid" id="header">
  <h1 style="text-align: center; text-shadow: 10px;color: black">MCA ATTENDANCE SYSTEM</h1>
</div>

<div class="container-fluid">
	<?php 

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>
<form action="Aadd.php" method="post" style="text-align: center;">
      <h3>Mark Attendance</h3>
      <?php 
$_SESSION["sub"]=$_POST["OP"];
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
               ?>
     
        <?php 

    foreach($array as $value)
     {
      
 echo $value; ?>
     <input type="radio" name="<?php  echo $value; ?>" value='p'>P  
     <input type="radio" name="<?php echo $value;?>" value ='a'>A 
     <?php
        echo "</br>"; }
        ?>  
        </br>
      
      <input type="submit" name="submit">
    </form>
?>
</body>
</html>