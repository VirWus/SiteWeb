<?php
function warmup($date){
$dir = scandir("../backups");
if(!empty($dir[2])){
  $fileN = str_replace(".zip","",$dir[2]);
  if(($date - $fileN) > 86378 )
  {
  unlink("../backups/".$dir[2]);
  include_once("backup.php");
  zipData($_SERVER['DOCUMENT_ROOT'], '../backups/'.time().'.zip');
}else{
  echo "Complete";
}
}else {
  include_once("backup.php");
  zipData($_SERVER['DOCUMENT_ROOT'], '../backups/'.time().'.zip');
}


}

 ?>
