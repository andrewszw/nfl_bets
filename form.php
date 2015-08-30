<?php include_once('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NFL Bets Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

    <div class="container-fluid">
        <div class="well">
        <h1>Week 1</h1>
        
        <hr>
        <br />
        
        <form action="form_success.php" method="post">
            <p style="font-size:16px"><strong>Please enter your name and the current week number (1)</strong></p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="week_no">Week Number</label>
                <input type="text" class="form-control" name="week_no" value="1">
            </div>

            <hr>
            <br />

            <div id="form">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        
        </div><!-- end well -->
    </div><!-- end container fluid -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/form.js"></script>
</body>
</html>
