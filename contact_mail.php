<?php

$userName = $_POST["userName"];
$userEmail = $_POST["userEmail"];
$subject = $_POST["subject"];
$content = $_POST["content"];


$EmailTo = "khadafikhadafi0@gmail.com";

// prepare email body text
$Body .= "Name: ";
$Body .= $userName;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $userEmail;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $content;
$Body .= "\n";

// send email
$success = mail($EmailTo, $subject, $Body, "From:".$userEmail);
 
// redirect to success page
if ($success){
   print "<p class='success'>Contact Mail Sent.</p>";
}else{
    print "<p class='Error'>Problem in Sending Mail.</p>";
}
