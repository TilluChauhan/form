<?php
$to="chauhantushar282@gmail.com";
$subject="test email";
$message="Hello";
$from="tillurajput8368@gmail.com";
$header="From:$from";
mail($to,$subject,$message,$header);

echo "mail sent";

?>