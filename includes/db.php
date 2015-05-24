<?php
    $con = mysqli_connect('localhost', 'andrewszw', 'Zach.sql', 'andrewszw');

    // check connection
    if(mysqli_connect_errno()) {
        echo "Failed to connect to mysql: " . mysqli_connect_error();
    }
?>
