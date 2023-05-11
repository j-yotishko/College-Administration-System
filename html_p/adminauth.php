<?php
 include("connect.php");
 if(isset($_POST['submit'])) 
 {
 	$uname=$_POST['userName'];
	$pass=$_POST['password'];

	$sql="select * from adminuser where username='".$uname."' and password='".$pass."' limit 1";
	
	  $result=mysqli_query($conn,$sql);
 }               
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*.modal-dialog{
                background-color: red;
                width: 70%; /* desired relative width */
                left: 5%; /* (100%-width)/2 */
                /* place center */
                margin-left:auto;
                margin-right:auto; 
                }*/
        </style>
</head>

<title>Admin Page</title>

<body>


    <nav class="navbar navbar-default">
	

	
        <div class="container">
            <button type="button" class="navbar-toggle" name="button" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Tooglenavigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
          </button>
            <a href="index.php" class="pull-left"><img src="https://www.rcciit.org/ia/assets/img/RCC_LOGO.png" height=80px align="left"/><h2>RCCIIT</h2></a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-center"> 
				
					<!-- Home Button -->
                    <li class="active"><a href="HomeAdmin.php"><button type="button" class="btn btn-info btn-lg">Dashboard</button></a></li>
					<!-- Home Button End Here -->
					
					
					<!-- Canteen Feedback Button -->
					 <li class="active"><a href=""><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">XYZ</button></a></li> 
					<!-- Canteen FeedbackButton End here -->
					
					
					<!-- Transport Feedback Button -->
					 <li class="active"><a href=""> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Course Updation</button></a></li> 
					<!-- Transport Feedback Button End here -->
					
					
					<!-- Faculty Feedback button -->
                    <li class="active"><a href="FacultyFeedback.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Faculty Feedbacks</button></a></li> 
				<!-- Faculty Feedback button End here -->
					
				<!-- logout button -->
                    <li class="active"><a href="ADMINLOGIN.html"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Logout</button></a></li> 
				<!-- logout button End here -->
				
				<!-- change password button -->
                    <li class="active"><a href="StaffRegistration.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Staff Registration</button></a></li> 
				<!-- change password button End here -->
				
                </ul>
            </div>
        </div>
    </nav>



        <div class="jumbotron text-center">
            <h1>Welcome Admin</h1>
			
        </div>
        
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="container">
    <div class="navbar navbar-inverse">
        
            <div class="navbar-text pull-left">
                <p></p>
            </div>
            <div class="navbar-text pull-right">
                <a href="https://www.google.com"><img src="img/google.png" height = "20px" alt="google.png"></a>
                <a href="https://www.twitter.com"><img src="img/twitter.png" height = "20px" alt="twitter.png"></a>
                <a href="https://www.facebook.com"><img src="img/facebook.png" height = "20px"  alt="facebook.png"></a>
               
            </div>
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <?php
     
     ?>
</body>

</html>

