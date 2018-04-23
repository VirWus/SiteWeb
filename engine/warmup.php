<?php
function warmup($date){
$dir = scandir("../backups");
if(!empty($dir[2])){
  $fileN = str_replace(".zip","",$dir[2]);
  if(($fileN -$date) > 86399 )
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
