<html>

<head>
  <title>Railway reservation system</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />

</head>

<body style="background-size: 100% 95% ">

      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">RRailways</span></a></h1>
          <h2>follow the <b>TRACK =:=:=</b></h2>
		 </div>
		</div>

		<?php

			$name=$_POST["nm"];
			$phone_no=$_POST["tel"];
			$email_id=$_POST["eid"];
			$password=$_POST["pwd"];

			$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysql_error()); 


		//	$dbase_name="user";

		//	mysql_select_db($dbase_name) or die(mysql_error());

			$query="insert into logup values('$name',$phone_no,'$email_id','$password')";
			mysqli_query($link,$query) or die (mysqli_error($link));
			echo "<h1><strong>Welcome $name</strong></h1>";
			echo "<h1><strong>You are now Registered</strong></h1>";
			mysqli_close($link);

		?>

	<h1 style="padding-top:100px"><center><a href="welcome.html">Book Tickets now</a></center></h1>
<div id="content_footer" style="padding-top:160px"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="contact.html">Contact Us</a>|</p>
      <center></center>-->
    </div>
  </div>
	  </body></html>
