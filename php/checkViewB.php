<?php
$host = "localhost";
$username = "root";
$password = "10102000";
$database_connect = "dbmsprojectpartb";
$conn = mysqli_connect($host, $username, $password, $database_connect);

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

$uId = $_POST["uID"];
$fetchingDetails = "SELECT * from `personal_info` where id = '$uId'";
$rsFCU = mysqli_query($conn, $fetchingDetails);


if ($rsFCU->num_rows > 0) {
    header("Location:viewB.php?ID=$uId");
    exit(); 
}
else
{
    echo "No Record Found!!!";
}
?>