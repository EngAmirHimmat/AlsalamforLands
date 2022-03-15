<?php
 $database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());
		mysqli_query($conn_link,"SET NAMES 'utf8'");


if ($_POST['Save']=="SaveNewUser") {
	//Start query
		$query = "INSERT INTO users(user_dif, user_name,dvail_num) VALUES ('{$_POST['user_dif']}','{$_POST['user_name']}',{$_POST['dvail_name']})";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: users.php');
				//echo '<h3>Success</h3>';
				}
		else
				{
				header('Location: users.php');
				}
//End query
}

elseif ($_POST['Save']=="SaveNewDistric") {
	$dis_name=$_POST['dis_name'];
	$local_num=$_POST['local_num'];
	$adm_num=$_POST['adm_num'];
	//Start query
		$query = "INSERT INTO distric(local_num,adm_num,dis_name) VALUES ($local_num,$adm_num,'$dis_name')";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: address.php');
				//echo '<h3>Success</h3>';
				}
		else
				{
				header('Location: address.php');
				}
//End query
}



elseif ($_POST['Save']=="SaveNewAdminstrative_unitHide") {
	$adm_name=$_POST['adm_name'];
	$local_num=$_POST['local_num'];
	//Start query
		$query = "INSERT INTO adminstrative_unit(adm_name,local_num) VALUES ('$adm_name',$local_num)";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: AddNewDistric.php');
				//echo '<h3>Success</h3>';
				}
		else
				{
				header('Location: AddNewDistric.php');;
				}
//End query
}


elseif ($_POST['Save']=="SaveNewLocal") {
	$local_name=$_POST['local_name'];
	//Start query
		$query = "INSERT INTO local(local_name) VALUES ('$local_name');";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: AddNewDistric.php');
				}
		else
				{
				header('Location: AddNewDistric.php');
				}
//End query
}
elseif ($_POST['Save']=="SaveNewCitizens") {
	echo $citizens_name=$_POST['citizens_name'];
	echo $citizen_phone=$_POST['citizen_phone'];
	echo $local_num=$_POST['local_num'];
	echo $adm_num=$_POST['adm_num'];
	echo $dis_num=$_POST['dis_num'];
	//Start query
		$query = "INSERT INTO citizens(citizens_name,citizen_phone,local_num,adm_num,dis_num) VALUES ('$citizens_name',$citizen_phone,$local_num,$adm_num,$dis_num)";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: citizens.php');
				}
		else
				{
				header('Location: citizens.php');
				}
//End query
}



elseif ($_POST['Save']=="SaveNewFamrRent") {
	$local_num=$_POST['local_num'];
	$adm_num=$_POST['adm_num'];
	 $farm_num=$_POST['farm_num'];
	 $citi_idr=$_POST['citi_idr'];
	 $area=$_POST['area'];
	 $data_rent=$_POST['data_rent'];
	 $date_enter=$_POST['date_enter'];
	//Start query
		$query = "INSERT INTO famr_rent_hits(local_num,adm_num, farm_num,citi_idr,area,data_rent, date_enter) VALUES ($local_num,$adm_num,$farm_num,$citi_idr,$area,'$data_rent','$date_enter')";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: rents.php');
				}
		else
				{
				header('Location: rents.php');
				}
//End query
}


elseif ($_POST['Save']=="SaveNewFarmComponant") {
	$farm_name=$_POST['farm_name'];
	//Start query
		$query = "INSERT INTO farm_componant(farm_name) VALUES ('$farm_name')";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: AddNewRent.php');
				}
		else
				{
				header('Location: AddNewRent.php');
				}
//End query
}
	
elseif ($_POST['Save']=="SaveNewSelles") {
	$local_num=$_POST['local_num'];
	$adm_num=$_POST['adm_num'];
	$farm_num=$_POST['farm_num'];
	$citi_idr=$_POST['citi_idr'];
	$price_sell=$_POST['price_sell'];
	$date_sell=$_POST['date_sell'];
	$date_enter=$_POST['date_enter'];
	$areay=$_POST['areay'];
	//Start query
		$query = "INSERT INTO sell_hist(local_num, adm_num, farm_num, citi_id, price_sell, date_sell, date_enter,areay) VALUES ($local_num,$adm_num,$farm_num,$citi_idr,$price_sell,'$date_sell','$date_enter',$areay)";
		if (mysqli_query($conn_link,$query) === true)
				{
					header('Location: selles.php');
				}
		else
				{
				header('Location: selles.php');
				}
//End query
}


		//error_reporting(0);
mysqli_close($conn_link);
?>