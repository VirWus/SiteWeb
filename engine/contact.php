<?php
if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $text = $_POST["textC"];
  if (!empty($email) && !empty($text)) {
    $recipient="khoudoursofiane75@gmail.com";
    $subject="Test Email";
    $mail_body="Nobody is going to get this email but me.";
    mail($recipient, $subject, $mail_body);
  }else {
    echo "Please enter an email and the discription";
  }
}

 ?>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>

  <form action="#" method="post" >
<table>
  <th>** Bienvenu **</th>
  <tr><td>Votre email pour que l'ensegnient peut vous contacter </td> <td><input type="email" name="email" placeholder="votre email" </td></tr>
  <tr><td><textarea name="textC" placeholder="votre message"> </textarea> </td> </tr>
  <tr> <td><input type="submit" name="submit" value="envoyer" /> </td></tr>
</table>
  </form>
</body>
</html>
