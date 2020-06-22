<?php

$address=$_POST['address'];
$bedrooms=$_POST['bedrooms'];
$bathrooms=$_POST['bathrooms'];
$city=$_POST['city'];
$code=$_POST['code'];
$comments=$_POST['comments'];
$details=$_POST['details'];
$email=$_POST['email'];
$extras=$_POST['extras'];
$hours=$_POST['hours'];
$lastName=$_POST['lastName'];
$name=$_POST['name'];
$often=$_POST['often'];
$phone=$_POST['phone'];
$preferedDay=$_POST['preferedDay'];
$preferedTime=$_POST['preferedTime'];
$street=$_POST['street'];
$typeClean=$_POST['typeClean'];

$destiny='jcharris.villa@gmail.com';

$content="Name: $name  $lastName <br/><br/>".
"Email: $email <br/><br/>".
"Phone: $phone <br/><br/>".
"Street: $street <br/><br/>".
"Address: $address <br/><br/>".
"Postal Code: $code <br/><br/>".
"Type Clean: $typeClean <br/><br/>".
"Hours por Clean: $hours <br/><br/>".
"How Often?: $often <br/><br/>".
"Bedrooms: $bedrooms <br/><br/>".
"Extras: $extras <br/><br/>".
"Prefered Day: $preferedDay <br/><br/>".
"Prefered Time: $preferedTime <br/><br/>".
"Comments: $comments <br/><br/>".
"Details to the areas: $details \n\n";

mail($destiny,'Message: ', $content);


?>