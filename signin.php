<?php

			$email_id=$_POST['eid'];
			$password=$_POST['pwd'];
if ($email_id && $password)
{
	$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysql_error());


	//$dbase_name="user";

	//mysqli_select_db($dbase_name) or die(mysqli_error()); 
	
	$data=mysqli_query($link,"select * from logup")or die(mysqli_error());
	$numrows = mysqli_num_rows($data);
	if($numrows!=0)
	{
		while($row = mysqli_fetch_assoc($data))
		{
		$dbemail=$row['email_id'];
		$dbpassword=$row['password'];
		}
		if($dbemail==$email_id && $dbpassword==$password)
		{
				header("Location: welcome.html");
				
		}
		else
		{
			print"<button type='submit'><a href='signin.html'> Go Back</a></button>";
				print"<br>";
			echo 'Incorrect Password/username';
		}
	}
	else
	{
		print"<button type='submit'><a href='signin.html'> Go Back</a></button>";
				print"<br>";
		die("That username doesnt exist");
	}
}
else
die("Please enter username and password");
mysqli_close($link);
?>