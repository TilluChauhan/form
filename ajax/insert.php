<?php
include '../config/config.php';
 $cat=$_POST['T_cat'];
  $name=$_POST['T_name'];
   $age=$_POST['T_age'];
    $email=$_POST['T_email'];
	$mobile=$_POST['T_mobile'];
	$country=$_POST['T_country'];
	$city=$_POST['T_city'];
 print_r($cat);
  print_r($name);
   print_r($age);
    print_r($email);
    print_r($mobile);
	 print_r($country);
	  print_r($city);
	  
	  
	  
	  $sql="insert into enquiry(id,gender,name,age,email,mobile,country,city) VALUE ('', '".$cat."', '".$name."','".$age."','".$email."','".$mobile."','".$country."','".$city."')";
	  $result=mysqli_query($conn,$sql);
	  if($result){
		  echo 1;
	  }else{
		  echo 0;
	  }

?>