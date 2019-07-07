<?php
   
  $name = $_REQUEST['Candidate_Name'];
  
  $db_name = "training";
  $tb_name = "user_tb";
  
  if(isset($_REQUEST['printForm'])){
    $connect = mysql_connect("localhost","root") or die ("Unable to connect to database server");
	$db = mysql_select_db("$db_name");
	
	$fetchInfo =  mysql_query("SELECT * FROM $tb_name WHERE Candidate_Name='$name' ") or die("Unable to fetch Record");
	if(mysql_num_rows($fetchInfo)==0){
		echo "<script> alert('Record Not Found'); window.open('regDetails.php','_self')</script>";
	}else{
		echo "<ul style=\"list-style:none;font-size:12pt;font-weight:bold;line-height:1.5;border-bottom:1px dotted\">";
	while($row = mysql_fetch_assoc($fetchInfo)){
		
		$sn = $row['sn'];
		$CName = $row['Candidate_Name'];
		$CAddress = $row['Home_Address'];
		$phoneNum = $row['Phone_Number'];
		$gender = $row['Gender'];
		
		echo "<li>Candidate ID: $sn</li>";
		echo "<li>Full Name: $CName</li>";
		echo "<li>Address: $CAddress</li>";
		echo "<li>Phone Number: $phoneNum</li>";
		echo "<li>Gender: $gender</li>";
	}
	echo "</ul>";
	}
}else{
      header("location: regDetails.php");	 
	 }
	
	
?>	