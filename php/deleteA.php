<?php
    $host = "localhost";
    $username = "root";
    $password = "10102000";
    $database_connect = "dbmsprojectparta";
    $conn = mysqli_connect($host, $username, $password, $database_connect);

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
    $delid = $_POST["delid"];

    $sql = "DELETE FROM answers WHERE uID='$delid'";
    $result = $conn->query($sql);

    $sql1 = "DELETE FROM subject WHERE uID='$delid'";
    $result = $conn->query($sql1);

    $sql2 = "DELETE FROM details WHERE uID='$delid'";
    $result = $conn->query($sql2);

    header("Location:../Front/Contact.html");
    exit();
?>