<?php include_once('includes/header.php'); ?>
<?php include_once('includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Processing Page</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<?php
    // turn on error reporting
    error_reporting(0);

    // make sure submit button has been clicked
    if($_POST['submit']) {

        // get the form input
        $name = trim($_POST['name']);
        $week = trim($_POST['week']);
        $one = strtolower($_POST['game1']);
        $two = strtolower($_POST['game2']);
        $three = strtolower($_POST['game3']);
        $four = strtolower($_POST['game4']);
        $five = strtolower($_POST['game5']);
        $six = strtolower($_POST['game6']);
        $seven = strtolower($_POST['game7']);
        $eight = strtolower($_POST['game8']);
        $nine = strtolower($_POST['game9']);
        $ten = strtolower($_POST['game10']);
        $eleven = strtolower($_POST['game11']);
        $twelve = strtolower($_POST['game12']);
        $thirteen = strtolower($_POST['game13']);
        $fourteen = strtolower($_POST['game14']);
        $fifteen = strtolower($_POST['game15']);
        $sixteen = strtolower($_POST['game16']);
        $current = date("Y-m-d H:i:s");
    }

    // build the query
    $query ="INSERT INTO nflbets
             VALUES(
             '$name',
             '$week',
             '$one',
             '$two',
             '$three',
             '$four',
             '$five',
             '$six',
             '$seven',
             '$eight',
             '$nine',
             '$ten',
             '$eleven',
             '$twelve',
             '$thirteen',
             '$fourteen',
             '$fifteen',
             '$sixteen',
             '$current')";

    // run the query
    $result = mysqli_query($con, $query);

    // test the query
    if(!$result) {
        die('Error');
    }

    // close the connection
    mysqli_close($con);
?>

    <div class="container-fluid">
        <div class="well">
            <h1>Your picks are being reviewed</h1>
            <p>Thank you for making your picks this week. The time of your submission will be reviewed in order to ensure
               your picks were submitted on time. To view other participant's picks for this week, please take a look at the weekly
               picks table.
            </p>
        </div><!-- end well -->
    </div><!-- end container-fluid -->

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
