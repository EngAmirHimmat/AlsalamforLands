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
<p><h2>إضافة إسم جديد</h2><a href="#">كل الأسماء</a></p>
<!---->
<form id="inputs">
	<table  cellpadding="2" cellspacing="0"  width="100%;">
		<tr>
		<td><label style="width: 100px;">الإسم الاول:</label></td>
		<td><input type="text" name="firstName"></td>
		</tr>
		<tr>
		<td><label>الإسم الاخير:</label></td>
		<td><input type="text" name="lastName"></td>
		</tr>
		<tr>
		<td><label>العمر:</label></td>
		<td><input type="number" name="age"></td>
	</tr>
		<tr>
		<td><label>النوع:</label></td>
			<td><select name="gender">
				<option>إختر النوع من هنا</option>
				<option value="M">ذكر</option>
				<option value="F">أنثى</option>
			</select></td>
		</tr>
		<tr>
		<td><label>البريد الإلكتروني:</label></td>
		<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td></td>
		<td><input type="submit" name="save" value="حفظ البيانات"></td>
	</tr>
	</table>	
</form>
</body>
</html>