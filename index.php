<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="jquery-3.3.1.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
    
    $("#tcbox").click(function(){
        window.location.href = 'Tlogin.php';
    return false;
    });
    
    $("#stbox").click(function(){
        window.location.href = 'Slogin.php';
    return false;
    });


}); 
 </script>
  <style type="text/css">
  	.student{opacity: 0;}
    .teacher{opacity: 0;}
    #stbox:hover  { 
  		background-color: silver ;}
     #stbox:hover .student{opacity: 1;}
  	#tcbox:hover{background-color:  silver; ;}
    #tcbox:hover .teacher{opacity: 1;}
    #header{background-color:   #f53661  ;
           height: 100px; }
  </style>


</head>

<body>
<div class="container-fluid" id="header">
  <h1 style="text-align: center; text-shadow: 10px;color: black">MCA ATTENDANCE SYSTEM</h1>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col" id="stbox" style="height: 80vh;">
       
        <img class="img-responsive" src="assets/student.png" style="height=100px;margin-left: 200px; margin-top: 150px;">
        <div class="student">
        <h1 style="text-align: center;">Student login</h1>
       </div>
		</div>
		<div class="col" id="tcbox" style="height:80vh;" >
     
        <img class="img-responsive" src="assets/login.png" style=" width:300px; max-width: 80%; max-height: 80%;margin-left: 200px; margin-top: 140px;">
         <div class="teacher">
              <h1 style="text-align: center;">Teacher login</h1>
           </div>    
    </div>
		</div>
	</div>
<div class="container-fluid" style="height: 34px; background-color: black;">
</div>
</body>
</html> 