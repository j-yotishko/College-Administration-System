<?php include("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="https://www.rcciit.org/ia/assets/img/RCC_LOGO.png">
	<meta charset="UTF-8">
	<title>Registration</title>
	<style type="text/css">
		body{
			margin:10px 300px;
			background: #dbceeb;
		}
	</style>
	<script type="text/javascript" src="registration.js"></script>
</head>
<!--https://www.youtube.com/watch?v=UNFdrhu_5GU-->
<body>
	<div style="background: whitesmoke;">
	<fieldset>
		<center><h1></h1>
		<h3><!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Form with 30+ fields</title>
				<style type="text/css">
					body{
						margin:10px 300px;
						background: #dbceeb;
					}
				</style>
			</head>
			<body>
				<div style="background: whitesmoke;">
				<fieldset>
					<center><h1></h1>
						<img src="https://www.rcciit.org/ia/assets/img/RCC_LOGO.png" align="left" height="110px">
					<h3>Application Form</h3>
					<p>RCC Institute of Information Technology</p>
						<p> Canal S Rd, Beleghata, Kolkata, West Bengal 700015.
					Phone: 062908 21297
					</p>

					</center>
				<hr>
				</fieldset>
				<fieldset>
					<legend>Personal Info</legend>
					<form action="check.php" method="POST" >
						<table>
							<tr>
								<td>First Name</td>
								<td><input type="text" id="Firstname" placeholder="Enter Your First Name" class="text" name="fname"></td>
							</tr>
							<tr>
								<td>Last Name</td>
								<td><input type="text" placeholder="Enter Your Last Name" class="text" name="lname"></td>
							</tr>
							<tr>
								<td>Father's Name</td>
								<td><input type="text" placeholder="Enter Your Father's Name" class="text" name="father"> </td>
							</tr>
							<tr>
								<td>Mother's Name</td>
								<td><input type="text" placeholder="Enter Your Mother's Name" class="text" name="mother"></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>
									<select name="gender" id="">
										<option values="">--Select--</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Phone Number</td>
								<td><input type="number" placeholder="Enter Your Phone Number" name="phone"></td>
							</tr>
							<tr>
								<td>Alternate Number</td>
								<td><input type="number" placeholder="Enter Your Alternate Number" name="alternate"></td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td><input type="date" name="date" ></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="email" placeholder="Enter Your Email" name="email"></td>
							</tr>
							<!--
							<tr>
								<td>Password</td>
								<td><input type="password" placeholder="**********"></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td><input type="password" placeholder="**********"></td>
							</tr>-->
							<tr>
								<td>Religion</td>
								<td>
									<select name="religion" id="">
										<option values="">--Select--</option>
										<option value="Hindu">Hindu</option>
										<option value="Muslim">Muslim</option>
										<option value="Sikh">Sikh</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Caste</td>
								<td>
									<select name="caste" id="">
										<option values="">--Select--</option>
										<option value="General">General</option>
										<option value="SC">SC</option>
										<option value="ST">ST</option>
										<option value="OBC">OBC</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Nationality</td>
								<td>
									<select name="nation" id="">
										<option values="">--Select--</option>
										<option value="Indian">Indian</option>
										<option value="Other">Other</option>
										
										
									</select>
								</td>
							</tr>
						</table>
						</fieldset>
						<fieldset>
							<legend>Qualifications</legend>
							<table>
								<tr>
									<td>Rank</td>
									<label>Exam Type</label><select name="rtype" id="">
										<option values="">--Select--</option>
										<option value="cet">CET </option>
										<option value="gate">GATE</option>
										<option value="joint">JOINT</option>
										<option value="jeca">JECA</option>
										
										
									</select>

									<td><input type="number" name="marks"></td>
								</tr>
								<tr>
									<td>Class</td>
									<td>Board/Uni</td>
									<td>Year</td>
									<td>Mark(%)</td>
								</tr>
								<tr>
									<td>Higher Secondary</td>
									<td><input type="text" name="board1"></td>
									<td><input type="number"  name="yr1"></td>
									<td><input type="number" name="hsmarks"></td>
								</tr>
								<tr>
									<td>Secondary</td>
									<td><input type="text" name="board2"></td>
									<td><input type="number" name="yr2"></td>
									<td><input type="number" name="smarks"></td>
								</tr>
								<tr>
									<td>Graduation</td>
									<td><input type="text" name="board3"></td>
									<td><input type="number" name="yr3"></td>
									<td><input type="number" name="gmarks"></td>
								</tr>
								
							</table>
						</fieldset>
						<fieldset>
							<legend>Course</legend>
							<table>
								
								<td>
									<select name="Course" id="">
										<option values="">--Select--</option>
										<option value="BTECH">B.Tech </option>
										<option value="MTECH">M.Tech</option>
										<option value="BCA">BCA</option>
										<option value="MCA">MCA</option>
									</select>
									
								
								</td>
								

							</table>
							
						</fieldset>
						<fieldset>
	 						<legend>Address</legend>
							<table>
								<tr>
									<td>Country</td>
									<td><input type="text" name="country"></td>
									<td>State</td>
									<td><input type="text" name="state"></td>
								</tr>
								<tr>
									<td>Home address</td>
									<td>
										<input type="text" name="hadd">
									</td>
									<td>Zip Code</td>
									<td>
										<input type="number" name="zip">
									</td>
								</tr>
							</table>
						</fieldset>
						
						<fieldset>
							<legend>Upload Documents</legend>
							
							<td >Photograph.
					        (Upload Photo)<input type="file" name="photo" id="img"></td> <br>
							<td >Signature
					        (Upload Photo)<input type="file" name="sig" id="img"></td><br>
					        <td>JECA rank card
							(Upload Photo)<input type="file" name="rc" id="img"></td> <br>
					        <td >Class X
					        (Upload Photo)<input type="file" name="ten" id="img"></td><br>
					        <td >Class XII
					        (Upload Photo)<input type="file" name="twel" id="img"></td><br>
						</fieldset>
						<fieldset>
							<input type="checkbox">I hereby declare that all the information given above is true to the best of my knowledge and belief. <br>
							<center>  
								<input type="submit" name="submit" value="Register" class="btn btn-dark btn-lg btn-block">
								<input type="reset" value="Reset">
							</center>
							<center>
								<button><a href="index.html">Back To Home</a></button>
							</center>
						</fieldset>
					</form>
			</div>

			</body>
			</html>
			