<?php

$id=$_GET["id"];

$conn=mysqli_connect('localhost','root','','siteweb');

mysqli_query($conn,'DELETE FROM support WHERE id='.$id);

header("location: ../documents.php");


?>
