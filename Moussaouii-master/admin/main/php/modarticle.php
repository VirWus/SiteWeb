<?php
$id=$_GET["id"];
$titre=$_POST["titre"];
$resumer=$_POST["resumer"];
$lien=$_POST["lien"];
$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,"UPDATE article set titreart='$titre' ,resumeart='$resumer',lienart='$lien' WHERE id_article=".$id);
header("location: ../articles.php");
?>
