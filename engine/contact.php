<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  $email = $_POST["email"];
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $number = $_POST["number"];
  $text = $_POST["message"];
  if (!empty($email) && !empty($text) && !empty($name) && !empty($subject)  && !empty($number) ) {


  require '../PHPMailer/src/Exception.php';
  require '../PHPMailer/src/PHPMailer.php';
  require '../PHPMailer/src/SMTP.php';
  $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 1;
//Set the hostname of the mail server
$mail->Host = 'smtp.aol.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'SSL';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'csmibba@aol.com';
//Password to use for SMTP authentication
$mail->Password = 'mathinformatique2018';
//Set who the message is to be sent from
$mail->setFrom('csmibba@aol.com', 'support');
//Set an alternative reply-to address
$mail->addReplyTo('khoudoursofiane75@gmail.com', 'support');
//Set who the message is to be sent to
$mail->addAddress('walidvirwus@gmail.com', 'Moussaoui Boubaker');
//Set the subject line
$mail->Subject = $name.' Vous a envoyer un email avec ce sujet ' . $subject;
$mail->Body = $text;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually

//Attach an image file
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
  }else {
    echo "Please enter an email and the discription";
  }


 ?>
