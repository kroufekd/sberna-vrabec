<?php

/* localhost
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_sberna_vrabec";
*/

$servername = "md333.wedos.net";
$username = "a296459_vykupna";
$password = "EKQMhGst";
$db_name = "d296459_vykupna";


// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>