<?php
 $database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());
//Delete User		
if ($_POST['delete']=="User") {
					$id= $_POST['id'];
					
		//Start query
				$query = "DELETE FROM users WHERE user_num=$id";
				mysqli_query($conn_link,"SET NAMES 'utf8'");
				if (mysqli_query($conn_link,$query) === true)
						{
							
						header('Location: users.php');
						}
				else
						{
						header('Location: users.php');
						}
		//End query
}	
//End Delete User	


//Delete distric		
if ($_POST['delete']=="distric") {
					$id= $_POST['id'];
					
		//Start query
				$query = "DELETE FROM distric WHERE dis_num=$id";
				mysqli_query($conn_link,"SET NAMES 'utf8'");
				if (mysqli_query($conn_link,$query) === true)
						{
						header('Location: address.php');
						}
				else
						{
						header('Location: address.php');
						}
		//End query
}	
//End Delete distric	


//Delete citizens		
if ($_POST['delete']=="citizens") {
					$id= $_POST['id'];
					
		//Start query
				$query = "DELETE FROM citizens WHERE citizens_id=$id";
				mysqli_query($conn_link,"SET NAMES 'utf8'");
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
//End Delete citizens	
//Delete Rent		
if ($_POST['delete']=="Rent") {
		$id= $_POST['id'];
					
		//Start query
				$query = "DELETE FROM famr_rent_hits WHERE enter_id=$id";
				mysqli_query($conn_link,"SET NAMES 'utf8'");
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
//End Delete Rent



//Delete selles		
if ($_POST['delete']=="selles") {
		$id= $_POST['id'];
		//Start query
				$query = "DELETE FROM sell_hist WHERE enter_num=$id";
				mysqli_query($conn_link,"SET NAMES 'utf8'");
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
//End Delete selles		
		error_reporting(0);
mysqli_close($conn_link);
	
?>