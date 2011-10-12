<?php
include("config.php");
 
if($_COOKIE[ "username"]=="")
    reurl('login.html');  
 echo "欢迎回来,".$_COOKIE[ "username"].".<br/>"
  ?>	 
 <a  href="logout.php">退出</a>
 
 