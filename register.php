
<!doctype html>
<html lang="en">
<head>
  <title> Register.:|:.Web Training </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="js/timer.js"></script>
 <script>
	function validateName(){
	var name = document.getElementById("CName");
	
	if(isNaN(name.value)){
		name.value = name.value.toUpperCase();
	}else{
		alert("Invalid Input Entered");
		name.value = "";
	}
  }
	function validateAddress(){
		var address = document.getElementById("CAdd");
	
	   if(isNaN(address.value)){
		address.value = address.value.toUpperCase();
	}else{
		alert("Invalid Input Entered");
		address.value = "";
	}	
  }
	function validatePhone(){
	var phone = document.getElementById("CPhone");
	
	if(isNaN(phone.value)){
		alert("Invalid Input Entered");
		phone.value = "";
		
	}else{
		phone.value = phone.value;
		
	}
  }
 </script>
</head>

<body>
	<div class="container-fluid" style="">
	<div class="row">
	<div class="col-lg-8 col-md-8 col-md-offset-2 col-lg-offset-2" style="margin-top:5%;border:3px solid #ccc;border-radius:2%;border-style:outset">
		<div class="row">
		<div class="col-lg-12 col-md-12" style="background:#ccc;margin-bottom:5%">
			<h2 style="text-align:center">Learn Web Programming with EASE</h2>
		</div>
		</div>
		
		<div class="row" style="margin-bottom:2%">
		<div class="col-lg-5 col-md-5">
			
		<h4 style="color:blue">NOTE:</h4>
		<ul style="list-style:none;text-align:justify;line-height:1.5;font-family:cambria">
		 <li>1. Complete this form with valid details.</li>
		 <li>2. Invalid details will not be accepted.</li>
		 <li>3. After your Registration, Click on "Print Form" to print your Training Form.</li>
		 <li>4. Your Training Form must be signed and bring it to the Training Center.</li>
		 <li>5. The Training Form is not transferrable.</li>
		 <li>6. Training Date: 30 May, 2016.</li>
		 <li>7. Wish you Best of Luck.</li>
		 </ul>
		 <a href="index.php" class="btn btn-success btn-sm" role="button" style="margin-top:2%;margin-left:10%"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>
			
		</div>
		
		<div class="col-lg-7 col-md-7">
		<span id="msg"></span>
			<?php include_once("include/regform.php"); ?>
		</div>
		</div>
		
		<div class="row" >
			<div class="col-lg-12 col-md-12" style="background:#bbb">
			<h5 style="text-align:center;color:#fff;font-weight:bold">Powered By: MSSN Computer Institute</h5>
		</div>
		</div>
	</div>
	</div>
	</div>

</body>

</html>