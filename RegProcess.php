
	
<?php

   
  $name = $_REQUEST['Candidate_Name'];
  $address = $_REQUEST['Home_Address'];
  $phonenum = $_REQUEST['Phone_Number'];
  $gender = $_REQUEST['Gender'];
  
  
  $db_name = "training";
  $tb_name = "user_tb";
  
     if(isset($_REQUEST['reg'])){
    $connect = mysql_connect("localhost","root") or die ("Unable to connect to database server");
	$db = mysql_select_db("$db_name");
	
	$checkInfo =  mysql_query("SELECT * FROM $tb_name WHERE Candidate_Name='$name' ");
	
  if(mysql_num_rows($checkInfo)>0){	  
	  echo "<script> alert('You have Already Registered'); window.open('register.php','_self');</script>"; 
  }
  else{ 
	 $result = "INSERT INTO $tb_name(Candidate_Name,Home_Address,Phone_Number,Gender) VALUES ('$name','$address','$phonenum','$gender')";
	  $query = mysql_query($result, $connect);
	 
	 if($query){
		 echo "<script> alert('You are Registered');window.open('register.php','_self');</script>";  
	 }
	 else{
		 	  echo "<script> alert('Not Yet Registered');window.open('register.php','_self');</script>";
	 }
	 
  }  
  }
else{
	echo "<script> window.open('register.php','_self');</script> ";
}







?>