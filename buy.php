<?php

$Address=$_REQUEST['Address'];

$db_connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die();
$query=mysqli_query($db_connect,"INSERT INTO buynow(Address) values('$Address')") or die(mysqli_error($db_connect));

 mysqli_close($db_connect);
 header("location:index.html?notes=success");
 ?>
 
 <html>
      <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Done<br/> we'll be in touch shortly! <br/> <button><a href="index.html">Home</a></button></p>
      </div>
    </body>
</html>

   
