<?php
$searchQ = $_POST["q"];
include_once("connect/connection.php");
$query = mysqli_query($connect,"SELECT * FROM support");
while($row = mysqli_fetch_assoc($query)){

$titre = explode(" ",base64_decode($row["nom"]));
$resumer = explode(" ",base64_decode($row["resumer"]));
$type = $row["type"];
foreach ($resumer as $key => $value) {
if ($searchQ === $value) {
 echo base64_decode($row["lien"])."\n";

}
}
}

 ?>
