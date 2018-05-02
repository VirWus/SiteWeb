<?php
	session_start();
	$user = $_POST["username"];
	$password = $_POST["pass"];
	$conn = mysqli_connect("localhost", "root", "", "siteweb");
	if($conn){
	//$sql = ;
	$resul = mysqli_query($conn, " SELECT * FROM admin WHERE username='$user' AND mdp = '$password' ");
  $result = mysqli_num_rows($resul);
	if($result == 1){
		  echo"welcome";
			$_SESSION["username"]=$user;
			header("location: ../index.php");
  }else {
	    header("location: ../login/index.php");
    }
}
	//
?>
