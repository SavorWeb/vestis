<?php
// Get Data 
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);

$message = strip_tags($_POST['message']);

// Send Message
$success = mail( "rlipsker@vestissystems.com", "Vestis Webmail:",
"Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n",
"From: $name <$email>" );

// redirect to success page 
if ($success){
  header ("Location: thanks.php");
  exit;
}
else{
  header ("Location: error.php");
  exit;
}
?>

?>