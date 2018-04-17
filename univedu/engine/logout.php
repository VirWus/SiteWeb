<?php
  session_start();
  $_SESSION['email'] = "";
  $_SESSION['pass'] = "";
  session_destroy();
header('Location:../index.html');
 ?>
