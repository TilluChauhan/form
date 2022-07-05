<?php

$servername='localhost';
$user='root';
$pass='';
$database='form';

$conn=mysqli_connect($servername,$user,$pass,$database);
if(!$conn){
		echo 'error';
	}


?>