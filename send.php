<?php
include "mailer.php";
include 'config/index.php';

if (isset($_POST['sendEnquiry'])) {
	// Sanitize and validate user input
	$name = htmlspecialchars(trim($_POST['name']));
	$phone = htmlspecialchars(trim($_POST['phone']));
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	$message1 = htmlspecialchars(trim($_POST['message']));
	$date = htmlspecialchars(trim($_POST['date']));

	// Check if services or subject is provided
	if (isset($_POST['services']) && !empty($_POST['services'])) {
		$service = htmlspecialchars(trim($_POST['services']));
		$subject = null; // Clear subject if services are provided
	} else {
		$service = null; // Clear service if subject is provided
		$subject = htmlspecialchars(trim($_POST['subject']));
	}

	// Construct the email body
	$Title = "Dear Admin,";
	$Message = "<p>An enquiry has been received. Please find the details below:</p>";
	$Message .= "<p>";
	$Message .= "<span style='color:grey;'>Name:</span><br>" . $name . "<br><br>";
	$Message .= "<span style='color:grey;'>Phone Number:</span><br>" . $phone . "<br><br>";
	$Message .= "<span style='color:grey;'>Email ID:</span><br>" . $email . "<br><br>";

	if ($service) {
		$Message .= "<span style='color:grey;'>Service:</span><br>" . $service . "<br><br>";
		$Message .= "<span style='color:grey;'>Appointment Time:</span><br>" . $date . "<br><br>";
	} else if ($subject) {
		$Message .= "<span style='color:grey;'>Subject:</span><br>" . $subject . "<br><br>";
	}

	$Message .= "<span style='color:grey;'>Message:</span><br>" . nl2br($message1) . "<br><br>";
	$Message .= "</p>";

	// Email subject and recipient
	$Subject = "Enquiry Received @ " . date("d M, Y");
	$SentTo = PRIMARY_EMAIL;

	// Send the email
	$status = SENDMAILS($Subject, $Title, $SentTo, $Message, false, $email);

	// Return success or error message
	if ($status) {
		echo "Your enquiry has been successfully sent. Thank you!";
	} else {
		echo "There was an error sending your enquiry. Please try again later.";
	}
}
