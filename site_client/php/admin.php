<?php 
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date=$_POST["date"];
$lieu_de_n=$_POST["lieu_de_n"];
$titre=$_POST["titre"];
$secteur=$_POST["secteur"];
$univ=$_POST["univ"];
$grade=$_POST["grade"];
$email=$_POST["email"];
$uername=$_POST["username"]; 
$mdp=$_POST["mdp"];
$bio=$_POST["bio"];
$conn=msylqi_connect('localhost','root','','univedu') ;
mysqli_query ($conn,'SELECT * FROM admin WHERE (nom,prenom,date,lieu_de_n,titre,secteur,univ,grade,email,username,mdp,bio) value("'.nom.'","'.prenom.'","'.date.'","'.lieu_de_n.'","'.titre.'","'.secteur.'","'.univ.'","'.grade.'","'.email.'","'.username.'","'.mdp.'","'.bio.'")');
 ?>