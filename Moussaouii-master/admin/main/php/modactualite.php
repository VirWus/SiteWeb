<?php

$id=$_GET["id"];

$titre = $_POST["titre"];
$contenu = $_POST["contenu"];
$date = $_POST["date"];


$conn = mysqli_connect('localhost','root','','siteweb');

mysqli_query($conn," UPDATE actuallite set titre='$titre', contenu='$contenu', date='$date' WHERE id= ".$id);



header("location: ../actualites.php");

?>
