<?php


 if( $_POST['title']=="")
 {
	  reurl('add_order.html');
	 
 }
include("menu.php");	 
$title	 =$_POST['title'];
$info	 =$_POST['info'];
$lowprice=$_POST['lowprice'];
 
   
 

$stmt =$db->prepare("insert into orders (title,info,lowprice) values (:title,:info,:lowprice)"); 
 
$stmt->bindValue(':title',$title);
$stmt->bindValue(':info',$info);
$stmt->bindValue(':lowprice',$lowprice);
$result=$stmt->execute(); 
if($result>0) 
	alert_and_reurl('发布成功','orders.php'); 
 reurl('add_order.html');

 ?>	