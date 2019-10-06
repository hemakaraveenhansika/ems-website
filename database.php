<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems_database";

// Create connection
<<<<<<< HEAD
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
=======
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM employee WHERE `NIC`='945950242V'";
//$sql = "SELECT NIC FROM employee";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
//foreach ($row as $key => $value) {
//    echo "Key: $key; Value: $value\n";
//}

//$conn->close();
?>