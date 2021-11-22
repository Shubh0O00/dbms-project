<?php

// The four variables of our database
$host = "localhost";
$username = "root";
$user_pass = "10102000";
$database_in_use = "dbmsprojectpartb";

// Creating database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

$delid = $_POST["delid"];

$sql = "DELETE FROM education_info WHERE id='$delid'";
$result = $mysqli->query($sql);

$sql1 = "DELETE FROM address WHERE id='$delid'";
$result = $mysqli->query($sql1);

$sql2 = "DELETE FROM hostel_enclosure_scanned WHERE id='$delid'";
$result = $mysqli->query($sql2);

$sql3 = "DELETE FROM fee_info WHERE id='$delid'";
$result = $mysqli->query($sql3);

$sql4 = "DELETE FROM jee_info WHERE id='$delid'";
$result = $mysqli->query($sql4);

$sql5 = "DELETE FROM contact_info WHERE id='$delid'";
$result = $mysqli->query($sql5);

$sql6 = "DELETE FROM personal_info WHERE id='$delid'";
$result = $mysqli->query($sql6);

header("Location:../Front/Contact.html");
    exit();
?>


