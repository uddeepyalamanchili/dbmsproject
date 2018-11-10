<?php
session_start();
?>

<?php
	$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysqli_error()); 
	$pnr=$_POST["pnr"];
	$tnm=$_POST["train_no"];
	$dbase_name="user";

	//mysqli_select_db($dbase_name) or die(mysqli_error()); 
	$sel=mysqli_query($link,"select * from details where pnr = $pnr ")or die(mysqli_error());

while($info1=mysqli_fetch_array($sel))
			{
				$re=$info1['pnr'];
			}
			if($re==$pnr)
			{
	$query="delete from details where pnr ='$pnr'";
	mysqli_query($link,$query) or die (mysqli_error());  
	
	$data=mysqli_query($link,"select * from trains where Train_no = $tnm ")or die(mysqli_error());
	$j=1;
			while($info=mysqli_fetch_array($data))
			{
				$tn=$info['Train_no'];
				if($tn==$tnm)
				{
				$no=$info['available'] + $j;
				
				$query1="update trains set available='$no' where Train_no='$tnm'";
				mysqli_query($link,$query1) or die(mysqli_error());
				echo "<script>alert('Ticket Cancelled')</script>";
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=welcome.html">';
				}
				else{
					print"<button type='submit'><a href='welcome.html'> Go Back</a></button>";
				print"<br>";
					die("That Train no. doesnt exist");
				}
			}
			}
			else
			{
				
				print"<button type='submit'><a href='welcome.html'> Go Back</a></button>";
				print"<br>";
				die("That PNR doesnot exist");
				
			}
	mysqli_close($link);
				

?>