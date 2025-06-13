<?php

// Mailer starter
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

require __DIR__ . '/vendor/autoload.php';

// Send Mails
function SENDMAILS($Subject, $Title, $Sendto, $MAIL_MSG, $die = false, $ReplyTo = null, array $Attachment = [null])
{
  $mail = new PHPMailer(true);

  // Server settings
  if ($die == true) {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
  }

  $mail->isSMTP(); // Send using SMTP
  $mail->Host       = 'smtp.hostinger.com'; // Set the SMTP server to send through
  $mail->SMTPAuth   = true; // Enable SMTP authentication
  $mail->Username   = 'noreply@shashwatdental.com'; // SMTP username
  $mail->Password   = 'Pooja@2024'; // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
  $mail->Port       = 465; // TCP port to connect to

  // Recipients
  $mail->setFrom('noreply@shashwatdental.com', "New Appointment");
  $mail->addAddress("$Sendto"); // Add a recipient

  // Content
  $mail->isHTML(true); // Set email format to HTML
  $mail->Subject = $Subject;

  // Prepare the body
  // Ensure that the MESSAGE contains safe HTML content

  $mail->Body = '
    <body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f5f5;">
        <div style="max-width: 600px; margin: auto; background-color: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <header style="background-color: #007BFF; padding: 20px; text-align: center; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <img src="https://shaswat-dental-clinic.navix.in/assets/img/logo.png" alt="Shashwat Dental Clinic" style="width: 100px; margin: 0;"/>
                <h1 style="color: #fff; margin: 10px 0;">Shashwat Dental Clinic</h1>
            </header>
            <div style="padding: 20px;">
                <h2 style="color: #333;">' . htmlspecialchars($Title) . '</h2>
                <p style="color: #555; font-size: 16px;">An enquiry has been received. Please find the details below:</p>
                <p style="color: #555; font-size: 16px;">' . $MAIL_MSG . '</p> <!-- Insert the formatted message -->
            </div>
            <footer style="padding: 10px; text-align: center; font-size: 12px; color: #777; border-top: 1px solid #eee;">
                <p><b>Note:</b> This is an auto-generated email. Please do not reply.</p>
            </footer>
        </div>
    </body>';

  // Send response
  if ($mail->send() == true) {
    return true;
  } else {
    return false;
  }
}
