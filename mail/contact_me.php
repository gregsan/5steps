<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$сity = $_POST['city'];
$choose = $_POST['choose'];
$count = $_POST['count'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'd.zorin.v@gmail.com'; 
$email_subject = "Заявка на семинар:  $name";
$email_body = "Семинар 5 шагов для увеличения продаж\n\n"."Заявка:\n\nИмя: $name\n\nEmail: $email_address\n\nТел: $phone\n\nСеминар: $choose\n\nГород: $сity\n\nКоличество: $count";
$headers = "From: noreply@5steps.zorind.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

if ($сity == "Киев") {
	$to = 'divaschook@ukr.net'; 
	mail($to,$email_subject,$email_body,$headers);
}

if ($сity == "Одесса") {
	$to = 'jacknice@yandex.ru'; 
	mail($to,$email_subject,$email_body,$headers);
}

return true;			
?>