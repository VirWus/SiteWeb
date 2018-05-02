<?php
$link = $_GET["q"];
$pices = explode(":",$link);

if((strpos($pices[0],"http") === false )||(strpos($pices[0],"https") === false) ){
include_once("connect/connection.php");
$link = base64_encode("../".$link);

$query = mysqli_query($connect,"UPDATE support SET count = count + 1  WHERE lien = '$link'");
$li = base64_decode($link);
$li =  substr($li,3);
header("Location:http://localhost/finale/$li");
}else{
    echo "yes";
    header("Location:$link");
    //echo '<meta http-equiv="refresh" content=5;url='.$link.' / >';
}

 ?>
