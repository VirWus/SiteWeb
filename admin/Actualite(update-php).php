<?php
if($_GET){
$id = $_GET['id'];
	include_once("../engine/connect/connection.php");
		$sql = "SELECT * FROM actuallite WHERE id =  ".$id;
			$r=mysqli_query($connect, $sql);

			}
			?>
<?php
$directory = "../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/";
$file =  $directory.basename($_FILES["fileto"]["name"]);
$titre = base64_encode($_POST["titre"]);
$contenu = base64_encode($_POST["contenu"]);
$date = $_POST["date"];
$link = base64_encode($_POST["lien"]);
$pathparts = pathinfo($file);

if(!empty($titre) && !empty($contenu) && !empty($date) ) {
        if(!empty($lien)){
          echo "enter1";
            include_once("../engine/connect/connection.php");
            $query = mysqli_query($connect,"UPDATE actuallite set VALUES(NULL,'$titre','$date','$contenu','$lien')");
               }else{
                echo "enter2";
                    $ext =  $pathparts["extension"];
                if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
                  move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
                  echo "enter3";
                  include_once("../engine/connect/connection.php");
                  $query = mysqli_query($connect,"UPDATE actuallite set VALUES(NULL,'$titre','$date','$contenu','$file')");
            }else{
            echo "Your file is not supported";
            }   
            }
}else {
  echo "ERROR ! , try again";
}
?>
