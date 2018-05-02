 <?php 
$errors = '';
$myemail = 'azimo34@gmail.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))

$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['message']; 


if( empty($errors))
{
    $to = $myemail; 
    $email_subject = "Website Query: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name: $name \n Email: $email \n Message \n $message"; 

    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email";

    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: index.php');
} 
?>