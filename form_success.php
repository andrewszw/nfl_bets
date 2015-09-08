<?php include_once('includes/header.php'); ?>
<?php include('includes/db.php'); ?>
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
    error_reporting(-1);
    ini_set('display_errors', 'On');

    // get the form input
    $name = trim($_POST['name']);
    $week = trim($_POST['week_no']);
    $one = strtolower($_POST['one']);
    $two = strtolower($_POST['two']);
    $three = strtolower($_POST['three']);
    $four = strtolower($_POST['four']);
    $five = strtolower($_POST['five']);
    $six = strtolower($_POST['six']);
    $seven = strtolower($_POST['seven']);
    $eight = strtolower($_POST['eight']);
    $nine = strtolower($_POST['nine']);
    $ten = strtolower($_POST['ten']);
    $eleven = strtolower($_POST['eleven']);
    $twelve = strtolower($_POST['twelve']);
    $thirteen = strtolower($_POST['thirteen']);
    $fourteen = strtolower($_POST['fourteen']);
    $fifteen = strtolower($_POST['fifteen']);
    $sixteen = strtolower($_POST['sixteen']);
    $current = date("Y-m-d H:i:s");

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
    $result = $con->query($query);

    // test the query
    if(!$result) {
        die('Error');
    }

    // close the connection
    $con->close();
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
