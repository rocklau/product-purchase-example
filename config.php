<?php
 
 
$db = new PDO( 
    'sqlite:purchase.db', 
    null, 
    null, 
    array(PDO::ATTR_PERSISTENT => false) 
); 
function reurl($url){ 
	echo "<script>";
	echo " location='".$url."';";
	echo "</script>";
	exit();
}
function alert_and_reurl($msg,$url){ 
	echo "<script>";
	echo " alert('".$msg."');";
	echo " location='".$url."';";
	echo "</script>";
	exit();
}
function alert_back($msg){ 
	echo "<script>";
	echo " alert('".$msg."');";
	echo " history.go(-1);";
	echo "</script>";
	exit();
} 

 ?>	