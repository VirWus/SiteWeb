<?php
$titre=$_POST["titre"];
$annee=$_POST["annee"];
$module=$_POST["module"];
$type=$_POST["type"];
$resumer=$_POST["resumer"];
$lien=$_POST["lien"];
$directory = "../../../docs/";
$file =  $directory.basename($_FILES["file"]["name"]);
$pathparts = pathinfo($file);
$ext = $pathparts["extension"];
$nomfichier= basename($_FILES["file"]["name"]);
if(($ext == "pdf")||($ext == "PDF") || ($ext == "doc") || ($ext == "docx")|| ($ext == "pptx")  ) {
  move_uploaded_file($_FILES["file"]["tmp_name"], $file);
  echo $file;
//echo "<script>document.location='modactualite.php'</script>";
$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'INSERT INTO support(nomdoc,anneedoc,resumerdoc,typedoc,liendrivedoc,moduledoc,lienteledoc) VALUES ("'.$titre.'","'.$annee.'","'.$resumer.'","'.$type.'","'.$lien.'","'.$module.'","'.$nomfichier.'") ');
header("location: ../documents.php");
}else{
	$nomfichier="vide";
$conn=mysqli_connect('localhost','root','','siteweb');
mysqli_query($conn,'INSERT INTO support(nomdoc,anneedoc,resumerdoc,typedoc,liendrivedoc,moduledoc,lienteledoc) VALUES ("'.$titre.'","'.$annee.'","'.$resumer.'","'.$type.'","'.$lien.'","'.$module.'","'.$nomfichier.'") ');
header("location: ../documents.php");
}
?>