
<!doctype html>
<html lang="en">
<head>
  <title> Reg Details.:|:.Web Training </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="js/timer.js"></script>

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
		
		<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="jumbotron">
			<h4 style="text-align:center">Enter your Name to print your Training Form</h4>
				<form role="form" method="POST" action="printDetails.php" >
                    <div class="form-group">
                       <input class="form-control" placeholder="Candidate Name" name="Candidate_Name" maxlength="50" type="text" style="" required="required">
					</div>
				<button type="submit" name="printForm" class="btn btn-sm btn-success" >
				<span class="glyphicon glyphicon-print"></span>&nbsp;Proceed</button>
					
				<a href="register.php" class="btn btn-warning btn-sm" role="button" style="">
				Back &nbsp;<span class="glyphicon glyphicon-chevron-left"></span></a>	
				</form>
			</div>
		</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12 col-md-12" >
			<h5 style="text-align:center">Powered By: MSSN Computer Institute</h5>
		</div>
		</div>
	</div>
	</div>
	</div>

</body>

</html>