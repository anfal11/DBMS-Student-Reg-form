<?php
$dbHost="localhost";
$dbName="loginsystem";
$dbChar="utf8";
$dbUser="root";
$dbPass="";

$conn = mysqli_connect($dbHost,$dbName,$dbChar, $dbUser,$dbPass);

$username = $_POST('username');
$usermail = $_POST('usermail');
$userpass = $_POST('userpass');

$sql = "INSERT INTO data (username, usermail, userpass) VALUES ('$username', '$usermail', '$userpass')";

if (mysqli_query($conn, $sql)) {
    echo "Data Stored";
} else {
    echo "Something Went Wrong";
}

?>