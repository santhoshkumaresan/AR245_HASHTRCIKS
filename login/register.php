<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="regdb.php">
					<span class="login100-form-title p-b-43">
					Hashtrack Registration
					</span>
					
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Organisation name is required">
						<input class="input100" type="text" name="org" required="true">
						<span class="label-input100">Name of the Organization</span>
					</div>
					
					<div class="wrap-input100 rs2 validate-input" data-validate = "Incharge name is required">
						<input class="input100" type="text" name="incharge" required="true">
						<span class="label-input100">Incharge</span>
					</div>
					
					<div class="wrap-input100 rs3 validate-input" data-validate = "phone is required">
						<input class="input100" type="text" name="phone" required="true">
						<span class="label-input100">Phone</span>
					</div>
					
					<div class="wrap-input100 rs4 validate-input" data-validate = "email is required">
						<input class="input100" type="text" name="email" required="true">
						<span class="label-input100">Email</span>
					</div>
					
			
					
			    	<div class="wrap-input100 rs5 validate-input" data-validate = "select one">
						<select name="idtype" id="idtype" class="input100" style="border:none;outline:none;" required="true">
						    <option disabled selected value> </option>
  <option value="registration certificate">Register Certificate</option>
  <option value="gst certificate">GST Certificate</option>
  <option value="udyog aadhar">Udyog Aadhar</option>
</select>
	<span class="label-input100">Select ID Type</span>
						
					</div>
					
					<div class="wrap-input100 rs6 validate-input" data-validate = "Id no is required" >
						<input class="input100" type="text" name="idno" required="true">
						<span class="label-input100">ID No</span>
					</div>
					
					<div class="wrap-input100 rs7 validate-input" data-validate = "select a file to upload" onclick="getfile()">
						 
						<input  type="file" name="idproof" id="idproof" class="input100" style="display:none;" required="true"/>
						<span class="label-input100">Upload ID Proof</span>
					</div>
					
					<div class="wrap-input100 rs8 validate-input" data-validate = "address is required">
						<input class="input100" type="text" name="address" required="true">
						<span class="label-input100">Address</span>
					</div>
					
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register" id="register">
						Register
						</button>
					</div>
				
				<div class="text-center w-full p-t-23">
						<a href="../index.html" class="txt1">
							Back to Home
						</a>
					</div>
				</form>
				
			</div>
		</div>
	</div>



	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
    function getfile(){
     document.getElementById("idproof").click();
}
</script>
</body>
</html>