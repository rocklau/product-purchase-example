<?php
include("config.php");

if( $_POST['username']=="" || $_POST['password']=="")
{
 alert_back('请填写登录信息'); 
}
	 
$username	=$_POST['username'];
$password	=$_POST['password'];

$user_query=$db->prepare("select username from suppliers where username=:username and password=:password");
$user_query->bindValue(':username',$username);
$user_query->bindValue(':password',$password);
$user=$user_query->execute(); 
$data=$user_query->fetch(); 
if(count($data)>1 )
{
	setcookie("username",$username );
	alert_and_reurl('登录成功!','orders.php');
}else
	alert_back('用户名或密码错误'); 
 
 ?>	