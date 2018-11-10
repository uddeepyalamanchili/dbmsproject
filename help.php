<?php
$link=mysqli_connect("localhost", "root","jaihindh","user") or die(mysqli_error());
$name=$_POST["nm"];
$phno=$_POST["tel"];
$contact_email=$_POST["email"];
$fb_content=$_POST["feed"];
//$db1="user";
//mysql_select_db($db1) or die(mysql_error());
$qinsert="insert into help values('$name','$phno','$contact_email','$fb_content')";
mysqli_query($link,$qinsert) or die(mysqli_error($link));
echo "FEEDBACK RECORDED!!......THANKYOU!!";
mysqli_close($link);
?>