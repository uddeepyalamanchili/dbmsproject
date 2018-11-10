<?php
$name=$_POST['nm'];
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Railway reservation system</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body style="background-size: 100% auto">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">RRailways</span></a></h1>
          <h2>follow the <b>TRACK =:=:=</b></h2>
        </div>
      </div>
	  <div id="menubar">
        <ul id="menu">
		<li><a>Welcome to RRailways<?php echo"$name"; ?></a></li>
		</div>
		</div>
	  <center>
	     <div id="middle">
        
	 <p><a href="booking.php">Book a train</a></p>
	  <p><a href="booking.html">Cancellation</a></p>
	    <p><a href="booking.html">Booking History</a></p>
	  
      </div>
	  </center>
    </div>
	  <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Our Cities</a> | <a href="safety.html">Safety</a> | <a href="help.html">Help Center</a> | <a href="contact.html">Contact Us</a> |</p>
      <center><p></p></center>
    </div>
  </div>
</body>
</html>