<?php 
$titre=$_POST["titre"];
$date=$_POST["date"];
$contenu=$_POST["contenu"];
$lien=$_POST["lien"];
$conn = mysqli_connect('localhost','root','','univedu'); 
mysqli_query ($conn,'SELECT * FROM actuallite WHERE (titre,date,contenu,lien) value("'.$titre.'","'.$date.'","'.$contenu.'","'$lien'")');

 ?>