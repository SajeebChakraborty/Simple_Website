<!DOCTYPE html>
<html>

	<head>
		
		<title>
		
				Admin Panel
		
		</title>
		
		<link rel = "icon" href =  "" type = "image/x-icon">

		<link rel="stylesheet" type="text/css" href="Style3.css">
			<div class="topnav">
  <a  href="Home.php">Home</a>
   <a  href="Notice.php">Notice</a>
   <a href="Complain_us.php">Contact</a>
  <a href="Seat_Available.php">Seat Available</a>
  <a href="Member_Login.php">Member Login</a>
  <a  class="active" href="Admin.php">Admin Panel</a>
  <input type="text" placeholder="Search..">
</div>
		
		<body>
			<br>
			<CENTER>
				<fieldset>
					<LEGEND>Admin Panel</LEGEND>
			<form action="">
  			<h2>User ID  </h2>
  			<input type="text" name="Student_ID" size="20" align="center" id="roll" required><br>
  			<h2>Password  </h2> 	
  			<input type="password" name="Password" size="20" id="pass" required><br><br>
  			<b><input type="button" value="Login" size="40" onclick="validate()"></b>
  			<input type="reset" value="Reset">
			</form>
			</frameset>
			</CENTER>
			

			<script type="text/javascript">
			
			function validate(){


				var roll = document.getElementById("roll").value;
				var pass = document.getElementById("pass").value;
				if(roll =="admin" && pass =="admin"){

				
				window.location = "After_Admin.php";

				}
				else{

					window.alert("Invalid User ID or Password!");
				}
				


			}
			
			</script>
			<br>
<br>
<br>
	<br><center>
	<i><p> POWERED BY </p></i>
	<b><p>Sajeeb Chakraborty </p></b>
	</center>
			<body bgcolor="#C28E8A">
		
		</body>
		
	
	</head>







</html>