<?php
$directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
$file =  $directory.basename($_FILES["file"]["name"]);
$imageExt = strtolower(pathinfo($file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  move_uploaded_file($_FILES["file"]["tmp_name"], $file);
}
?>
