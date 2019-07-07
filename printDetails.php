<!doctype html>
<html lang="en">
<head>
  <title> print Details.:|:.Web Programming </title>
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
	<div class="col-lg-8 col-md-8 col-md-offset-2 col-lg-offset-2" style="margin-top:3%;border:1px solid">
		<div class="row">
		<div class="col-lg-4 col-md-4" style="margin-bottom:2%">
			<img src="images/logo.png" class="img-responsive">
		</div>
		</div>
		
		<div class="row">
		<div class="col-lg-12 col-md-12" style="background:#ccc;margin-bottom:1%">
			<h4 style="text-align:center;font-weight:bold">Training Registration Form</h4>
			<p style="font-weight:bold">Candidate Information</p>
		</div>
		</div>
		
		<div class="row">
		<div class="col-lg-12 col-md-12" style="background:;margin-bottom:2%">
			<?php include_once("printFormProcess.php");?>
		</div>
		</div>
		
		<div class="row" style="margin-bottom:-2%;margin-top:2%">
		<div class="col-lg-6 col-md-6" style="">
			<img src="images/signature.png" class="img-responsive">
			<p>&nbsp;&nbsp;&nbsp;Tutor's Signature</p>
		</div>
		<div class="col-lg-6 col-md-6" style="">
			<p>--------------------------------------------</p>
			<p>&nbsp;&nbsp;Candidate's Signature and Date</p>
		</div>
		</div>
		
		<div class="row">
		<div class="col-lg-6 col-md-6 col-md-offset-5" style="margin-bottom:-3%">
		<ul class="pagination">
		<li><a href="regDetails.php">Close</a></li>
		<li><a href="javascript:window.print();">Print</a></li>
		</ul>
		</div>
		</div>
		
		
	</div>
    </div>
	</div>	