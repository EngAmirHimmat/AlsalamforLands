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
<p><h2>إضافة مستخدم جديد</h2></p>
<!---->
<form id="inputs" action="Add.php" method="post">
	<table  cellpadding="2" cellspacing="0"  width="100%;">
		<tr>
		<td><label style="width: 100px;">إسم المستخدم :</label></td>
		<td><input type="text" name="user_name"></td>
		</tr>
		<tr>
		<td><label>كلمة المرور :</label></td>
		<td><input type="password" name="user_dif"></td>
		</tr>
		<tr>
		<td><label>الصلاحية :</label></td>
			<td><select name="dvail_name">
				<option>إختر صلاحية المستخدم هنا</option>
				<?php
$query="SELECT * FROM degree_validity";

if ($result=mysqli_query($conn_link,$query)) 
        {
          while ($row=mysqli_fetch_assoc($result)) 
          {
				?>
				<option value="<?php echo $row['dvail_num'];?>"><?php echo $row['dvail_name'];?></option>
				<?php

}
    }
				?>
			</select></td>
		</tr>
		<tr>
			<td></td>

		<td><button type="submit" name="Save" value="SaveNewUser">حفظ</button></td>
	</tr>
	</table>	
</form>
</body>
</html>
<?php
mysqli_close($conn_link);
?>