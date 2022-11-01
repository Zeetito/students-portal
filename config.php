<?php 
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("error: ". $conn->connect_error);
    }
       
?>

