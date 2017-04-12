

<?php
// $servername = "localhost";
// $username = "javascri_wp2";
// $password = "P@ssw0rd123456";
// $dbname = "javascri_wp2";

  $servername = "localhost";
 $username = "sa";
 $password = "P@ssw0rd";
 $dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
?>
