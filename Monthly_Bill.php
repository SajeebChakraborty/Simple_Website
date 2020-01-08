<!DOCTYPE html>
<html>

	<head>
		
		<title>
		
				Monthly Bill
		
		</title>
		<link rel = "icon" href =  "" type = "image/x-icon">

		<link rel="stylesheet" type="text/css" href="Style6.css">
	<div class="topnav">
		 <a class="active" href="Monthly_Bill.php">Monthly Bill</a>
 
 
    <a id="logout" href="Member_Login.php">Log out</a>
   
  
</div>
		
		<body>
			
			<br>
			
			<form>
			<fieldset>

			<LEGEND><b>Bill number</b></LEGEND>
		
			<font color="">Press the button to get bill number</font><br>
			<input type="button" onclick="apply()" name="Apply" value="Submit">

 
			</fieldset>
		</form>
			<script type="text/javascript">
			
			

				function apply() {
						var fourdigitsrandom = Math.floor(1000 + Math.random() * 9000);
						//document.getElementById("fourdigit").innerHTML=fourdigitsrandom;
						document.write(fourdigitsrandom);
					}

				

		
			
			</script>
			<br>
			<form method="post" action="https://docs.google.com/forms/d/1iPPzC4tHyboLcIhYxivOSUy93079s24J59oe0V5NG6E/edit?usp=sharing">
			<fieldset>

			<LEGEND><b>Complete payment</b></LEGEND>
		
			<font color="">Press the button to complete the payment</font><br>
			<input type="Submit" name="Submit" value="Go">

 
			</fieldset>
		</form>
			<body bgcolor="#FFFF14">


		
		</body>
		
	
	</head>







</html>