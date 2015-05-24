<!doctype html>
<html lang="en">
<head>
    <title>Successfully Submitted</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
<?php include('includes/header.php'); ?>
<br>
<div id="content">
<h1>Success</h1>
<?php
    include("db.php");
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
</div>
</body>
</html>
