<?php
     include("connect.php");
				if(isset($_POST['submit']))
				{
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$faname=$_POST['father'];
					$mname=$_POST['mother'];
					$gender=$_POST['gender'];
					$phno=$_POST['phone'];
					$altno=$_POST['alternate'];
					$dob=$_POST['date'];
					$email=$_POST['email'];
					$rel=$_POST['religion'];
			     	$caste=$_POST['caste'];
					$nation=$_POST['nation'];
					$rtype=$_POST['rtype'];
					$jrank=$_POST['marks'];
					$board1=$_POST['board1'];
					$year1=$_POST['yr1'];
					$marks1=$_POST['hsmarks'];
					$board2=$_POST['board2'];
					$year2=$_POST['yr2'];
					$marks2=$_POST['smarks'];
					$board3=$_POST['board3'];
					$year3=$_POST['yr3'];
					$marks3=$_POST['gmarks'];
					$course=$_POST['Course'];
					$country=$_POST['country'];
					$state=$_POST['state'];
					$haddr=$_POST['hadd'];
					$zip=$_POST['zip'];
					$photo=$_POST['photo'];
					$sign=$_POST['sig'];
					$rc=$_POST['rc'];
					$ten=$_POST['ten'];
					$twel=$_POST['twel'];

					$sql="INSERT INTO studentdetails VALUES('$fname','$lname','$faname','$mname','$gender','$phno','$altno','$dob','$email','$rel','$caste','$nation','$rtype','$jrank','$board1','$year1','$marks1','$board2','$year2','$marks2','$board3','$year3','$marks3','$course','$country','$state','$haddr','$zip','$photo','$sign','$rc','$ten','$twel')";
					
                     $result=mysqli_query($conn,$sql);
                     
                    if ($result)
                    {
                       //echo "1 filter added";
                    }
                    else
                    	
                         echo "Failed";
                          
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="https://www.rcciit.org/ia/assets/img/RCC_LOGO.png">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>RCC Institute of Information Technology - Kolkata</title>
</head>
<body>
    <center><h1>Your application Submitted Sucessfully</h1></center>
    <center><button><a href="index.html">Back to Home</a></button></center>
</body>
</html>