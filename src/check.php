<?php
$database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());

/////////////////////////////////////////////////////////////////////
if (isset($_POST['username']) and isset($_POST['pass'])) {
	 $username=$_POST['username'];
	 $password=$_POST['pass'];

	$query = "SELECT * FROM users WHERE user_name='$username' and
user_dif='$password'";
mysqli_query($conn_link,"SET NAMES 'utf8'");
if ($result = mysqli_query($conn_link,$query))
{
			if(mysqli_num_rows($result) == '1')
			{
				setcookie('name', $username);
				header('Location: index.php');

			}
			else
			{
				header('Location: index.php');
			}
	}
	else
	{
		header('Location: index.php');
	}
////////////////////////////////////////////////////////////////////	
mysqli_close($conn_link);
}
?>