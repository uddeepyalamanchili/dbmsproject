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

	     <center><div id="book">
		<h2>Enter Your Details</h2>
	 <form method="post" name="f1" >
 	<table border=0>
	<?php


		print"<tr><p>
         <td>Enter the no. of tickets you want to book </td><td><input  name='no' type='number' class='text'  style=' border-radius: 15px; width:90%; height:150%; padding-bottom:10px'></td></tr>";

		$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysqli_error());

		//$dbase_name="user";

		//mysql_select_db($dbase_name) or die(mysql_error());

		$data=mysqli_query($link,"select * from trains where Train_name='Rajdhani Express' ")or die(mysqli_error());

				$not=$_POST["no"];
				echo $not;
				$in=1;
				$_SESSION["no"] = $not ;
			if($not<=4)
			{

				while($info = mysqli_fetch_assoc($data))
				{
				$dbavailable=$info['available'];
				}
				print"Avaliable Tickets: $dbavailable";
				print"<br>";
				for ($in = 1; $in <= $not; $in++)
				{

					print"<tr><td><u>Passanger $in</u></td></tr>";
					print"<tr><p><td>Name</td><td><input name='name$in' type='text' class='text' style='border-radius: 15px; width:150%; height:150%;padding-bottom:10px'required></td></p></tr>";
					print"<tr><p><td>Age</td><td><input name='age$in' type='number' class='text' style='border-radius: 15px; width:90%; height:150%;padding-bottom:10px'required></td></p></tr>";
					print"<tr><td>Gender</td><td><INPUT TYPE= RADIO CHECKED NAME='GENDER$in' value='M'>Male</td><td><INPUT TYPE= RADIO NAME='GENDER$in' value='F'>Female</td></tr>";
					if($in==$not)
					{
						print"<tr><td><p><button id='registerNew' type='submit' onclick='redrict()' formaction='confirm.php' >Submit</button></p></td></tr>";
					}
				}

				print"<script>
					function Redirect() {
						alert('You are booking $not tickets');

            }

            </script>";
			}
			else
			{
				print"<script>alert('Not more Than 4 Tickets Allowed');</script>";
			}

		?>


	</table></form>
</div></center>

  	<div id="content_footer" style="padding-top:190px"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="contact.html">Contact Us</a> | </p>
      <center><p></p></center>
    </div>
  </div>
  </body>
</html>
