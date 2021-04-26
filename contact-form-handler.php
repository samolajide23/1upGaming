<?php 

if (isset($_POST['submitContactForm'])){
	$name = $_POST['contactFormName'];
	$subject = $_POST['contactFormSubject'];
	$mailFrom = $_POST['contactFormMail'];
	$message = $_POST['contactFormMessage'];

	$mailTo = "d00231093@student.dkit.ie";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved a game request from ".$name. ".\n\n".$message;

	mail($mailTo,$subject,$txt,$headers);
	header('Location: contact.php?mailsend');
}






$errors = '';
$myemail = 'd00231093@student.dkit.ie';//<-----Put your DkIT email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['mail']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
 include('includes/header.php');
 include('includes/footer.php');
echo nl2br($errors);
?>

</body>
</html>