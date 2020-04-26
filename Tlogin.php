<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery-3.3.1.min.js"></script>
  
<style type="text/css">
body{
	background-color: silver;
}
#log{
	 margin-top: 10%;
	margin-left: 40%;
}
#header{background-color:   #f53661  ;
           height: 100px; }
</style>

</head>

<body>
	<div class="container-fluid" id="header">
  <h1 style="text-align: center; text-shadow: 10px;color: black">MCA ATTENDANCE SYSTEM</h1>
  <h3 style="text-align: center; text-shadow: 10px;color: black">TEACHER LOGIN PORTAL</h3>
</div>

 
 <div id="log" class="container-fluid">
  <form action="tlogCheck.php" method="post">
 	<h1> Enter ID</h1>
 	<input type="text" name="id" style="align-content: center;">
   <h2>Enter Password</h2>
   <input type="Password" name="pass">
</br></br></br>
 <input type="SUBMIT" >
 </form> </div>
</body>

</html>