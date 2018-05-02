<?php 

$id=$_GET["id"];
$conn=mysqli_connect("localhost","root","","siteweb");
mysqli_query($conn,'DELETE FROM module WHERE id_module='.$id);
header("location: ../module.php");

?>