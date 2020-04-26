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
           height: 100px; }

  #pDet{background-color: gray;}
  #aDet{background-color: silver;
            height: 80vh;}   
  #form{text-align: center;
        margin-top: 40px;}  
  #tot{text-align: center;
        margin-top: 120px;	}   
       </style>

<script type="text/javascript">
  $(document).ready(function(){
    
    $("#btn1").click(function(){
    	window.location.href="Stotal.php";
    	return false;
    }); });
</script>

<?php session_start();?>
</head>
<body>
<div class="container-fluid" id="header">
  <h1 style="text-align: center; text-shadow: 10px;color: black">MCA ATTENDANCE SYSTEM</h1>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4" id="pDet">
			<h1 style="text-align: center;">PERSONAL DETAILS</h1>
<img src="<?php echo $_SESSION["image"]; ?>" style="height: 50%; width: 50%;">	
<h3><?php 

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT stname FROM students WHERE enum='$_SESSION[uname]'";
$result =mysqli_query($conn,$sql);
while ($row = $result->fetch_assoc()) {
    echo "NAME"."<br>";
    echo $row['stname']."<br><br>";
}
echo "ENROLLMENT NO"."<br>";
echo $_SESSION["uname"];
?></h3>	
</div>
		<div class="col-lg-8" id="aDet">
			<h1 style="text-align: center;">ATTENDANCE DETAILS</h1>

			 <form id="form" action="Ssub.php" method="post">
				<h3>SUBJECT WISE</h3>
				<select name="OP">
					<option>IT656</option>
				<option>IT606</option>
					<option>IT604</option>
					<option>BA610</option>
          <option>MS608</option>
          <option>IT654</option>
          <option>IT656</option>
          <option>IT652</option>
				</select>
			</br></br>
				<input type="SUBMIT">
			</form>
			<div id="tot">
	<h3>TOTAL ATTENDANCE</h3>
	<button id="btn1">SHOW</button>
</div>
		</div>
	</div>
</div>

<div class="container-fluid" style="height: 34px; background-color: black;">
</div>
</body>
</html>