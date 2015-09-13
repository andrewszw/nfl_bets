<?php include_once('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NFL Bets Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>

    <div class="container-fluid">
        <div class="well">
        <h1>Insert Weekly Games</h1>
        <form method="post">
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year" placeholder="Current Year">
            </div>
            <div class="form-group">
                <label for="week_no">Week Number</label>
                <input type="text" class="form-control" name="week_no" placeholder="Current Week Number">
            </div>
            <div class="form-group">
                <label for="one">Game One</label>
                <input type="text" class="form-control" name="one" placeholder="Game One">
            </div>
            <div class="form-group">
                <label for="two">Game Two</label>
                <input type="text" class="form-control" name="two" placeholder="Game Two">
            </div>
            <div class="form-group">
                <label for="three">Game Three</label>
                <input type="text" class="form-control" name="three" placeholder="Game Three">
            </div>
            <div class="form-group">
                <label for="four">Game Four</label>
                <input type="text" class="form-control" name="four" placeholder="Game Four">
            </div>
            <div class="form-group">
                <label for="five">Game Five</label>
                <input type="text" class="form-control" name="five" placeholder="Game Five">
            </div>
            <div class="form-group">
                <label for="six">Game Six</label>
                <input type="text" class="form-control" name="six" placeholder="Game Six">
            </div>
            <div class="form-group">
                <label for="seven">Game Seven</label>
                <input type="text" class="form-control" name="seven" placeholder="Game Seven">
            </div>
            <div class="form-group">
                <label for="eight">Game Eight</label>
                <input type="text" class="form-control" name="eight" placeholder="Game Eight">
            </div>
            <div class="form-group">
                <label for="nine">Game Nine</label>
                <input type="text" class="form-control" name="nine" placeholder="Game Nine">
            </div>
            <div class="form-group">
                <label for="ten">Game Ten</label>
                <input type="text" class="form-control" name="ten" placeholder="Game Ten">
            </div>
            <div class="form-group">
                <label for="eleven">Game Eleven</label>
                <input type="text" class="form-control" name="eleven" placeholder="Game Eleven">
            </div>
            <div class="form-group">
                <label for="twelve">Game Twelve</label>
                <input type="text" class="form-control" name="twelve" placeholder="Game Twelve">
            </div>
            <div class="form-group">
                <label for="thirteen">Game Thirteen</label>
                <input type="text" class="form-control" name="thirteen" placeholder="Game Thirteen">
            </div>
            <div class="form-group">
                <label for="fourteen">Game Fourteen</label>
                <input type="text" class="form-control" name="fourteen" placeholder="Game Fourteen">
            </div>
            <div class="form-group">
                <label for="fifteen">Game Fifteen</label>
                <input type="text" class="form-control" name="fifteen" placeholder="Game Fifteen">
            </div>
            <div class="form-group">
                <label for="sixteen">Game Sixteen</label>
                <input type="text" class="form-control" name="sixteen" placeholder="Game Sixteen">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div><!-- end well -->
    </div><!-- end container fluid -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    include('../includes/db.php');

    // check the request type
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // collect form input
        $year     = $_POST['year'];
        $week_no  = $_POST['week_no'];
        $one      = $_POST['one'];
        $two      = $_POST['two'];
        $three    = $_POST['three'];
        $four     = $_POST['four'];
        $five     = $_POST['five'];
        $six      = $_POST['six'];
        $seven    = $_POST['seven'];
        $eight    = $_POST['eight'];
        $nine     = $_POST['nine'];
        $ten      = $_POST['ten'];
        $eleven   = $_POST['eleven'];
        $twelve   = $_POST['twelve'];
        $thirteen = $_POST['thirteen'];
        $fourteen = $_POST['fourteen'];
        $fifteen  = $_POST['fifteen'];
        $sixteen  = $_POST['sixteen'];

        // build the query
        $query = "INSERT INTO nflgames VALUES(
                  '$week_no', '$one', '$two', '$three', '$four',
                  '$five', '$six', '$seven', '$eight', '$nine',
                  '$ten', '$eleven', '$twelve', '$thirteen',
                  '$fourteen', '$fifteen', '$sixteen', '$year')";

        // run the query
        $result = $con->query($query);

        // test the query
        if(!$result) {
            die('Error');
        }

        // close the connection
        $con->close();
    }
?>
