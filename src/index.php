<?php
if(isset($_COOKIE['name']))
{
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
			<li><a href="#" class="select">الرئسية</a></li>
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

	<div  >
	<ul class="carts" style="list-style: none;">
			<li style="float: right; padding: 50px 50px;margin: 5px; background-color: green; border-radius: 20px;">
				<div class="cart1">
					<a href="selles.php" style="text-decoration: none; color:white; font-size: 50px; font-family: tahoma;">المبيعات</a>
				</div>
			</li>
			<li style="float: right; padding: 50px 50px;margin: 5px; background-color: #bdbd46; border-radius: 20px;">
				<div class="cart1">
					<a href="rents.php" style="text-decoration: none; color:white; font-size: 50px; font-family: tahoma;">الإيجارات</a>
				</div>
			</li>
			<li style="float: right; padding: 50px 50px;margin: 5px; background-color: #ee2727; border-radius: 20px;">
				<div class="cart1">
					<a href="address.php" style="text-decoration: none; color:white; font-size: 50px; font-family: tahoma;">العناوين</a>
				</div>
			</li>
			<li style="float: right; padding: 50px 50px;margin: 5px; background-color: blue; border-radius: 20px;">
				<div class="cart1">
					<a href="citizens.php" style="text-decoration: none; color:white; font-size: 50px; font-family: tahoma;">العملاء</a>
				</div>
			</li>
			<li style="float: right; padding: 50px 50px;margin: 5px; background-color: darkgray; border-radius: 20px;">
				<div class="cart1">
					<a href="users.php" style="text-decoration: none; color:white; font-size: 50px; font-family: tahoma;">المستخدمين</a>
				</div>
			</li>
			<li style="float: right; padding: 50px 50px;margin: 5px; background-color: black; border-radius: 20px;">
				<div class="cart1">
					<a href="singin.php" style="text-decoration: none; color:white; font-size: 50px; font-family: tahoma;">تسجيل الخروج</a>
				</div>
			</li>
		</ul>
		<div></div>
	</div>

<!--scripts-->
<script type="text/javascript" src="js/scripts.js">
	
</script>
<!--scripts-->
</body>
</html>
<?php
}
else{
	header('Location: singin.php');
}
?>