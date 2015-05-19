<?php
  include('db.php'); 
  $result = mysql_query("select *
                         from nflgames
                         where week_no='17'");
  $schedule = mysql_fetch_array($result);
  echo json_encode($schedule);
?>
