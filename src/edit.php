<?php
 $database['host'] = 'localhost';
		$database['username'] = 'root';
		$database['userpass'] = '';
		$database['name'] = 'AlsalamForLands';
		$conn_link = mysqli_connect($database['host'],
		$database['username'],$database['userpass'],$database['name']) or
		die(mysqli_connect_error());

		 $query="";
             if ($result=mysqli_query($conn_link,$query)) 
            {
                 while ($row=mysqli_fetch_assoc($result)) 
                    {
                        echo $row['services_name'];
                    }
            }
	mysqli_query($conn_link,"SET NAMES 'utf8'");
	error_reporting(0);
	mysqli_close($conn_link);
?>                           