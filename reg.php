<?php


 if( $_POST['username']=="")
 {
	  reurl('reg.html');
	 
 }
include("config.php");	 
$username	=$_POST['username'];
$password	=$_POST['password'];
$email		=$_POST['email'];
$company	=$_POST['company'];
$tel		=$_POST['tel'];
$address	=$_POST['address'];
$info		=$_POST['info']; 
 
 $user_query=$db->prepare("select username from suppliers where username=:username");
 $user_query->bindValue(':username',$username);
 
 $user=$user_query->execute(); 
 $data=$user_query->fetch(); 
if(count($data)>1) 
      alert_back('用户名被使用');

$stmt =$db->prepare("INSERT INTO suppliers (username   ,
 							         password   ,
								     email    	,
				 				     company	,
								     tel		,
								     address	,
								     info		 ) VALUES (
									 :username   ,
									 :password   ,
									 :email    	,
									 :company	,
									 :tel		,
									 :address	,
									 :info		 	)");
 
$stmt->bindValue(':username'             ,$username	);
$stmt->bindValue(':password'   ,$password	);  
$stmt->bindValue( ':email'      ,$email		);
$stmt->bindValue(':company'	   ,$company	);
$stmt->bindValue(':tel'		  ,$tel			);
$stmt->bindValue(':address'	  ,$address		);
$stmt->bindValue(':info'	  ,$info	 );

				 


$result = $stmt->execute();
if($result){
	setcookie("username",$username );
	alert_and_reurl('注册成功,'.$username,'orders.php');
}else
	alert_and_reurl('注册失败','reg.html');

 ?>	