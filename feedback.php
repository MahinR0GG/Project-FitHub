<?php
include("config.php");
$Name=$_REQUEST['Name'];
$Email=$_REQUEST['Email'];
$Message=$_REQUEST['Message'];
$db_connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die();
$query=mysqli_query($db_connect,"INSERT INTO feedback(Name,Email,Message) values('$Name','$Email','$Message')") or die(mysqli_error($db_connect));

 mysqli_close($db_connect);
 header("location:index.html?notes=success");
 ?>
   

