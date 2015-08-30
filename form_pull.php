<?php
  include('includes/db.php');
  
  // set up the query to get all of the nfl games
  $query = "SELECT * FROM nflgames WHERE week_no='1' and year='2015'";
  
  // run the query
  $result = $con->query($query);
   
  // fetch the array of results
  $schedule = $result->fetch_array();

  // close the connection to the database
  $con->close();
  
  // get the json encoded array for future use
  echo json_encode($schedule);
?>
