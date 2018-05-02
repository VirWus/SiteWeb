<?php
$directory = "../php/uploads/";
$file =  $directory.basename($_FILES["file"]["name"]);
$pathparts = pathinfo($file);
$ext =  $pathparts["extension"];

if($ext == "jpg" || $ext == "png" || $ext == "pdf" || $ext == "doc" || $ext == "docx" || $ext == "xls") {
	
	

  move_uploaded_file($_FILES["file"]["tmp_name"], $file);
  echo $file;
//echo "<script>document.location='modactualite.php'</script>";

}else{
  echo "Your file is not supported";
  echo "dkhalt l else ";
}
?>

