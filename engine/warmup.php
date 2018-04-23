<?php
$dir = scandir("../backups");
$date1 = str_replace(".zip","",$dir[2]);
$date2 = str_replace(".zip","",$dir[3]);
if (!empty($date1) && !empty($date2)) {
if (($date2 - $date1) > 86399) {
 unlink("../backups/".$date1.".zip");
 include_once("backup.php");
 zipData($_SERVER['DOCUMENT_ROOT'], '../backups/'.time().'.zip');
}else{
unlink("../backups/".$dir[2]);
}
}else{
  include_once("backup.php");
  zipData($_SERVER['DOCUMENT_ROOT'], '../backups/'.time().'.zip');
}


 ?>
