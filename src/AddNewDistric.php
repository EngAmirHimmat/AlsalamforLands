<?php
 $database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());
		mysqli_query($conn_link,"SET NAMES 'utf8'");
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
			<li><a href="index.php">الرئسية</a></li>
			<li><a href="selles.php">المبيعات</a></li>
			<li><a href="rents.php">الأيجارات</a></li>
			<li><a href="address.php">العنوانين</a></li>
			<li><a href="citizens.php">العملاء</a></li>
			<li><a href="users.php">المستخدمين</a></li>
			<div  class="c"></div>
		</ul>
		<div></div>
	</div>
<!---menu-->
<!--  الرجوع الى الأسماء -->
<p><h2>إضافة عنوان جديد</h2></p>
<!---->
<form id="inputs" action="Add.php" method="post">
	<table  cellpadding="2" cellspacing="0"  width="100%;">
		<tr>
		<td><label style="width: 100px;">إسم المنطقة :</label></td>
		<td><input type="text" name="dis_name"></td>
		</tr>
		<tr>
		<td><label>المحلية</label></td>
			<td><select name="local_num">
				<option>إختر المحلية هنا</option>


				<?php
$query="SELECT * FROM local;";

if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
				?>
				<option value="<?php echo $row['local_num'];?>"><?php echo $row['local_name'];?></option>
				<?php

}
    }
				?>
			</select></td>
		</tr>
		<tr>
		<td><label>الوحدة الإدارية</label></td>
			<td><select name="adm_num">
				<option>إختر الوحدة الإدارية هنا :</option>


				<?php
$query="SELECT * FROM adminstrative_unit";

if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
				?>
				<option value="<?php echo $row['adm_num'];?>"><?php echo $row['adm_name'];?></option>
				<?php

}
    }
				?>
			</select></td>
		</tr>
		<tr>
			<td></td>

		<td><button type="submit" name="Save" value="SaveNewDistric">حفظ</button></td>
	</tr>
	</table>	
</form>




<!--Admin Unit-->
<!--  الرجوع الى الأسماء -->
<p><h2>إضافة وحدة إدارية جديدة</h2></p>
<!---->
<form id="inputs" action="Add.php" method="post">
	<table  cellpadding="2" cellspacing="0"  width="100%;">
		<tr>
		<td><label style="width: 100px;">إسم الوحدة الإدارية :</label></td>
		<td><input type="text" name="adm_name"></td>
		</tr>
		<tr>
		<td><label>المحلية :</label></td>
			<td><select name="local_num">
				<option>إختر المحلية من هنا</option>
				<?php
$query="SELECT * FROM local";

if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
				?>
				<option value="<?php echo $row['local_num'];?>"><?php echo $row['local_name'];?></option>
				<?php

}
    }
				?>
			</select></td>
		</tr>
		<tr>
			<td></td>

		<td><button type="submit" name="Save" value="SaveNewAdminstrative_unitHide">حفظ</button></td>
	</tr>
	</table>	
</form>
<!--End admin Unit-->




<!--Local-->
<!--  الرجوع الى الأسماء -->
<p><h2>إضافة محلية جديدة</h2></p>
<!---->
<form id="inputs" action="Add.php" method="post">
	<table  cellpadding="2" cellspacing="0"  width="100%;">
		<tr>
		<td><label style="width: 100px;">إسم الوحدة الإدارية :</label></td>
		<td><input type="text" name="local_name"></td>
		</tr>
		<tr>
			<td></td>

		<td><button type="submit" name="Save" value="SaveNewLocal">حفظ</button></td>
	</tr>
	</table>	
</form>
<!--End Local-->
</body>
</html>
<?php
mysqli_close($conn_link);
?>