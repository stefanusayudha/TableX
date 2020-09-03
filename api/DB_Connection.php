<?php
    $db_sever = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name="kejari_siiswan";

    // Create connection
    $conn = new mysqli($db_sever, $db_user, $db_password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>