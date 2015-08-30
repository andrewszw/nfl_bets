<?php
    $con = new mysqli('localhost', 'andrewszw', 'Zach.sql', 'andrewszw');

    // check connection
    if($con->connect_errno) {
        die('Failed to connect to the database: ' . $con->connect_error);
    }
?>
