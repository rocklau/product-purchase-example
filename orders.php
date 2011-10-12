<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>订单列表</title>
</head>

<body>
 <?php
 include("menu.php");
 
 ?>
  
<table width="600" border="1">
  <caption>
    可投标订单列表
  </caption>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">订单名称</th>
    <th scope="col">文档下载</th>
    <th scope="col">最低限价</th> 
    <th scope="col">供应商最低报价</th>
    <th scope="col">操作</th>
  </tr>
  <?php
    $sql = 'SELECT * FROM orders ORDER BY id desc';
    foreach ($db->query($sql) as $row) {
  
 
	
  
	echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["title"]."</td>";
	echo "<td>&nbsp;</td>";
    echo " <td>".$row["lowprice"]."</td>";
    echo "<td>&nbsp;</td>";
    echo "<td><a href='bid.html'>竞标</a></td>";
  echo "</tr>";
  
	}
  ?>
 
   
</table>
</body>
</html>
