<?php
$titre=$_POST["titre"];
$resumer=$_POST["resumer"];
$lien=$_POST["lien"];
$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'INSERT INTO article(titreart,resumeart,lienart) VALUES ("'.$titre.'","'.$resumer.'","'.$lien.'") ');
header("location: ../articles.php");
?>
