<?php
$id=$_GET["id"];
$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'DELETE FROM article WHERE id_article='.$id);
header("location: ../articles.php");
?>
