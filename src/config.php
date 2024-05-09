<?php

$servername = "mysqldb";

$username = "root";

$password = "root";

$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>
