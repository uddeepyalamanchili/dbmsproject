<?php
session_start();
?>
<html>

<head>
  <title>Railway reservation system</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />

</head>
<script src="validation_signup.js"></script>
<body style="background-size: 100% 100% ">

      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">RRailways</span></a></h1>
          <h2>follow the <b>TRACK =:=:=</b></h2>
        </div>
      </div>
	  <div id="cn">
	  <form method="post" action="gen3.php">
	  <?php
			$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysqli_error());
			//$dbase_name="user";
			//mysql_select_db($dbase_name) or die(mysql_error());
			$data=mysqli_query($link,"select * from trains where Train_name='LOKSHAKTI EXPRESS' ")or die(mysqli_error());
			while($info=mysqli_fetch_array($data))
			{
			print"<table>";
			print"<tr><td><font color=black>Train No :".$info['Train_no']."</font></td>";
			print"<td><font color=black>Train Name :".$info['Train_name']."</font></td></tr>";
			print"<tr><td><font color=black>From :".$info['From']."</font></td>";
			print"<td><font color=black>Depature :".$info['Depature']."</font></td></tr>";
			print"<tr><td><font color=black>To:".$info['To']."</font></td>";
			print"<td><font color=black>Arrival :".$info['Arrival']."</font></td></tr>";
			//print"<td><font color=black>Date :".$info['date']."</font></td></tr>";
			print"<tr><td><font color=black>Fare :".$info['Fare']."</font></td>";
			print"<td><font color=black>Seat No :";
			for ($seat = 1; $seat <= $_SESSION["no"]; $seat++)
			{
				echo"S-";
				echo(rand(1,100));
				if($seat!=$_SESSION["no"])
				{
					echo",";
				}
			}
			print"</font></td></tr>";
			print"</table>";
			print"<hr>";
			print"<strong><center>Passenger Details</center></strong>";
			for ($ps = 1; $ps <= $_SESSION["no"]; $ps++)
				{
					print"<tr><td><u>Passenger$ps</u></td></tr>";
							switch ($ps) {
								case 1:
                  $name1=$_POST["name1"];
                  $age1=$_POST["age1"];
                  $gender1=$_POST["GENDER1"];
									print"<p>Name :$name1</p>";
									print"<p>Age :$age1</p><br>";
									$_SESSION["panme1"]=$name1;
									$_SESSION["age1"]=$age1;

									break;
								case 2:
                  $name2=$_POST["name2"];
                  $age2=$_POST["age2"];
                  $gender2=$_POST["GENDER2"];
									print"<p>Name :$name2</p>";
									print"<p>Age :$age2</p>";
									$_SESSION["panme2"]=$name2;
									$_SESSION["age2"]=$age2;
									break;
								case 3:
                  $name3=$_POST["name3"];
                  $age3=$_POST["age3"];
                  $gender3=$_POST["GENDER3"];
									print"<p>Name :$name3</p>";
									print"<p>Age:$age3</p>";
									$_SESSION["panme3"]=$name3;
									$_SESSION["age3"]=$age3;
									break;
								case 4:
                  $name4=$_POST["name4"];
                  $age4=$_POST["age4"];
                  $gender4=$_POST["GENDER4"];
									print"<p>Name :$name4</p>";
									print"<p>Age :$age4</p>";
									$_SESSION["panme4"]=$name4;
									$_SESSION["age4"]=$age4;
									break;
								}

				}

			}
			print"<p><button id='registerNew' type='submit' >Confirm</button></p>";

		?>
		</FORM>
	  </div>

	  <div id="content_footer" style="padding-top:60px"></div>
    <div id="footer">
<p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="contact.html">Contact Us</a> |</p>
      <center><p></p></center>
    </div>
  </div>
  </body>
</html>
