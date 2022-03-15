<?php
 		$database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());
		
		?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>مشروع إدارة مكتب العقارات</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--header-->
<div class="header">
	<p >نظام إدارة محل العقارات</p>
	</div>
<!-- End header-->
<!---menu-->

	<div class="menuBar" >
		<ul>
			<li><a href="index.php" >الرئسية</a></li>
			<li><a href="selles.php">المبيعات</a></li>
			<li><a href="rents.php">الأيجارات</a></li>
			<li><a href="address.php">العنوانين</a></li>
			<li><a  href="#" class="select">العملاء</a></li>
			<li><a href="users.php">المستخدمين</a></li>
			<div  class="c"></div>
		</ul>
		<div></div>
	</div>
<!---menu-->
<!---menu2-->

	<div class="menuBar2" >
		<ul>
			<li><a href="AddNewCitizen.php">إضافة عميل جديد</a></li>
			<div  class="c"></div>
		</ul>
		<div></div>
	</div>
<!---menu2-->
<table width="100%;" border="2" cellpadding="2" cellspacing="0" style="color:darkblue;">
	<tr>
		
			<th>الرقم</th>
			<th>إسم العميل</th>
			<th>رقم الهاتف</th>
			<th>المحلية</th>
			<th>الوحدة الإدارية</th>
			<th>الحي</th>
			<th>حذف</th>
		
	</tr>
	<?php
	$query="SELECT * FROM local;";
	mysqli_query($conn_link,"SET NAMES 'utf8'");
if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
          	$local[$row['local_num']]=$row['local_name'];
          	}
    }
    
    mysqli_close($conn_link);

 		$database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());

	$query="SELECT * FROM adminstrative_unit;";
	mysqli_query($conn_link,"SET NAMES 'utf8'");
if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
          	$ad_unit[$row['adm_num']]=$row['adm_name'];
          	}
    }
    
    mysqli_close($conn_link);

 		$database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());	
 
$query="SELECT * FROM distric;";
	mysqli_query($conn_link,"SET NAMES 'utf8'");
if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
          	$dis_num[$row['dis_num']]=$row['dis_name'];
          	}
    }
    
    mysqli_close($conn_link);

 		$database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());


$query="SELECT * FROM citizens;";
mysqli_query($conn_link,"SET NAMES 'utf8'");
if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
				?>
	<tr>
		<td><?php echo $row['citizens_id'];?></td>
		<td><?php echo $row['citizens_name'];?></td>
		<td><?php echo $row['citizen_phone'];?></td>
		<td><?php echo $local[$row['local_num']];?></td>
		<td><?php echo $ad_unit[$row['adm_num']];?></td>
		<td><?php echo $dis_num[$row['dis_num']];?></td>
		<td>
			<form method="post" action="delete.php">
				<input type="hidden" name="id" value="<?php echo $row['citizens_id'];?>">
				<button type="submit" name="delete" value="citizens">حذف</button>	
			</form>	
		</td>
	</tr>
<?php

}
    }
   
    mysqli_close($conn_link);
				?>


			<button onclick="window.print();">طباعة الكل</button>

</table>

<!--scripts-->
<script type="text/javascript" src="js/scripts.js"></script>
<!--scripts-->
</body>
</html>
