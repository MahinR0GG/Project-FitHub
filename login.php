<?php
$email=$_POST['email'];
$password=$_POST['password'];

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT email,password FROM user WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?> 
        <script type="text/javascript">window.location="http://localhost/project/index.html"</script>
    <?php
    }
} else {
    echo "<b>connection failed<b>";
}

$conn->close();

?>



