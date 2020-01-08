<!DOCTYPE html>
<html>

	<head>
		
		<title>
		
				Member Login
		
		</title>
		
		<link rel = "icon" href =  "" type = "image/x-icon">

		<link rel="stylesheet" type="text/css" href="Style4.css">
	<div class="topnav">
 
   <a  href="Home.php">Home</a>
   <a href="Notice.php">Notice</a>
   <a  href="Complain_us.php">Contact</a>
  <a href="Seat_Available.php">Seat Available</a>
  <a class="active" href="Member_Login.php">Member Login</a>
  <a href="Admin.php">Admin Panel</a>
   <input type="text" placeholder="Search..">
</div>
		
		<body>
			<br>
			<CENTER>
				<fieldset>
					<LEGEND>Member Login Panel</LEGEND>
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
				if(roll =="sajeeb" && pass =="123456789"){

				
				window.location = "Sajeeb_Profile.php";

				}
				else if(roll =="jewel" && pass =="123456789"){

				
				window.location = "jewel_Profile.php";

				}
				else if(roll =="sumon" && pass =="123456789"){

				
				window.location = "sumon_Profile.php";

				}
				else if(roll =="joytirmoy" && pass =="123456789"){

				
				window.location = "joytirmoy_Profile.php";

				}
				else if(roll =="davashis" && pass =="123456789"){

				
				window.location = "davashis_Profile.php";

				}
				else if(roll =="sarwar" && pass =="123456789"){

				
				window.location = "sarwar_Profile.php";

				}
				else if(roll =="shuvo" && pass =="123456789"){

				
				window.location = "shuvo_Profile.php";

				}
				else if(roll =="dipto" && pass =="123456789"){

				
				window.location = "dipto_Profile.php";

				}
				else{

					window.alert("Invalid User ID or Password!");
				}
				


			}
			
			</script>
			<br>


	<br><center>
	<i><p> POWERED BY </p></i>
	<b><p>Sajeeb Chakraborty </p></b>
	</center>
			<body bgcolor="#527E7F">
		
		</body>
		
	
	</head>







</html>