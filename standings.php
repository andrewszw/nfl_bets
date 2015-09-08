<?php include_once('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NFL Bets</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="well">
        <h1>Current Standings</h1>
        <br />
        <p><strong>* There are currently no standings to report. The records you see are for TESTING.</strong></p>
        <br />
        <center>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Place</th><th>Name</th><th>Wins</th><th>Losses</th><th>Win Percentage</th><th>Games Back</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include('includes/db.php');

                    // build the query that will gather the current standings
                    $query = "select * from nflbets_standings where year='2015' order by place";

                    // run the query
                    $result = $con->query($query);

                    // build the table based on the query results
                    while($row = $result->fetch_array()) {
                        echo '<tr><td>' . $row['place'] . '</td>
                              <td>' . $row['name'] . '</td>
                              <td>' . $row['win'] . '</td>
                              <td>' . $row['loss'] . '</td>
                              <td>' . $row['percentage'] . '</td>
                              <td>' . $row['games_back'] . '</td></tr>';
                    }

                    // close the connection
                    $con->close();
                ?>
                </tbody>
            </table>
            </div>
        </center>
        </div><!-- end well -->
    </div><!-- end container-fluid -->

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

