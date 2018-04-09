<?php
function logout(){
  session_start();
  $_SESSION['email'] = "";
  $_SESSION['pass'] = "";
  session_destroy();
}
 ?>
