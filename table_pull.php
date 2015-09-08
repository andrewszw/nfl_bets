<?php
    include('includes/db.php');
    
    // prepare the query
    $query = "select * from nflbets where year='2015' and week_no='1'";

    // run the query
    $result = $con->query($query);

    // make an array to return
    $picks = array();
    while($row = $result->fetch_array()) {
        $picks[] = $row;
    }

    // close the connection
    $con->close();

    echo json_encode($picks);

?>
