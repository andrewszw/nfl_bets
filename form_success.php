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
    
    if($_POST['submit']) {
        
        $name = $_POST['name'];
        $week = $_POST['week'];
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
        
    }

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
     if(!mysql_query($query)) 
     {
        die('Error: ' . mysql_error());
     }

?>

<center><p><b>Thank you for your submission. GO COWBOYS!</b></p></center><br />
<center><p><b>Almost everything on this webpage now is fully automated.
              I no longer have to enter everything manually each and every week.
              The table with the picks should be generated based on who has picked (so go take a look).
              If something seems to be wrong, PLEASE LET ME KNOW.</b></p></center>
</div>
</body>
</html>
