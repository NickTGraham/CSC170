<?php

// set some variables - use YOUR email address as the From and the To
$emailFrom = "ngraham@u.rochester.edu";
$emailTo = "ngraham@u.rochester.edu";
$subject = "Lab 9 - HTML forms";

// grab the data being passed from the method="post" in the HTML form
// and hold each in a variable

// use the NAMEs you used in each HTML form element below...
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['tel']));

$checkFirefox = $_POST['firefox'];
$checkChrome = $_POST['chrome'];
$checkSafari = $_POST['safari'];
$checkIe = $_POST['ie'];

$browserSelect = $_POST['fav-browser'];

$message = Trim(stripslashes($_POST['comments'])); 

// prepare email body text
$body = ""; //initialize the variable

$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Phone: ";
$body .= $phone;
$body .= "\n\n";

$body .= "Browsers used: \n";
$body .= $checkFirefox;
$body .= "\n";

$body .= $checkChrome;
$body .= "\n";

$body .= $checkSafari;
$body .= "\n";

$body .= $checkIe;
$body .= "\n\n";

$body .= "Favorite browser: ";
$body .= $browserSelect;
$body .= "\n\n";

$body .= "Message: \n";
$body .= $message;
$body .= "\n";

// send email
mail($emailTo, $subject, $body, "From: <$emailFrom>");

// send the user to the thank you webpage
header("Location: contact-thanks.html");

?>
