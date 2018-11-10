	<?php	
	session_start();
	?>
	
	<HTML>
	<BODY>
	<?php
		$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysqli_error($link)); 

		
			//$dbase_name="user";

			//mysql_select_db($dbase_name) or die(mysql_error()); 
			$data=mysqli_query($link,"select * from trains where Train_name='GUJRAT MAIL' ")or die(mysqli_error($link));
			$dbnot=$_SESSION["no"];
			while($info=mysqli_fetch_array($data))
			{
				$no=$info['available'] - $dbnot;
				$dt=$info['Train_no'];
				$et=$info['Train_name'];
				$ft=$info['Fare'];
				$query="update trains set available='$no'where Train_name='GUJRAT MAIL'";
				mysqli_query($link,$query) or die(mysqli_error($link));
				for ($ps = 1; $ps <= $_SESSION["no"]; $ps++)
				{
			
					switch ($ps) {
								case 1:

									$name1=$_SESSION["panme1"];
									$age1=$_SESSION["age1"];
									$pnr1=(rand(8000,20000));
									$query1="insert into details values('$name1',$age1,$pnr1,$dt,'$et',$ft,)";
									mysqli_query($link,$query1) or die (mysqli_error($link)); 
									$_SESSION["pnr1"]=$pnr1;
									break;
								case 2:
									$name2=$_SESSION["panme2"];
									$age2=$_SESSION["age2"];
									$pnr2=(rand(8000,20000));
									$query1="insert into details values('$name2',$age2,$pnr2,$dt,'$et',$ft,)";
									mysqli_query($link,$query1) or die (mysqli_error()); 
									$_SESSION["pnr2"]=$pnr2;
									break;
								case 3:
									$name3=$_SESSION["panme2"];
									$age3=$_SESSION["age2"];
									$pnr3=(rand(8000,20000));
									$query1="insert into details values('$name3',$age3,$pnr3,$dt,'$et',$ft,)";
									mysqli_query($link,$query1) or die (mysqli_error()); 
									$_SESSION["pnr3"]=$pnr3;
									break;
								case 4:
									$name4=$_SESSION["panme2"];
									$age4=$_SESSION["age2"];
									$pnr4=(rand(8000,20000));
									$query1="insert into details values('$name4',$age4,$pnr4,$dt,'$et',$ft,)";
									mysqli_query($link,$query1) or die (mysqli_error()); 
									$_SESSION["pnr4"]=$pnr4;
									break;
								}
					
				}

				 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=final.php">';
			}
				mysqli_close($link);
				
	?>
	</body></html>