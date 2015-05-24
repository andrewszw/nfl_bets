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
        <h2>Week 1</h2>
        <br />
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Please enter your first name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="First Name">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game1" class="col-sm-2 control-label">Steelers @ Patriots</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game1" placeholder="Steelers or Patriots">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game2" class="col-sm-2 control-label">Packers @ Bears</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game2" placeholder="Packers or Bears">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game3" class="col-sm-2 control-label">Chiefs @ Texans</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game3" placeholder="Chiefs or Texans">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game4" class="col-sm-2 control-label">Browns @ Jets</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game4" placeholder="Browns or Jets">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game5" class="col-sm-2 control-label">Colts @ Bills</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game5" placeholder="Colts or Bills">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game6" class="col-sm-2 control-label">Dolphins @ Redskins</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game6" placeholder="Dolphins or Redskins">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game7" class="col-sm-2 control-label">Panthers @ Jaguars</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game7" placeholder="Panthers or Jaguars">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game8" class="col-sm-2 control-label">Seahawks @ Rams</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game8" placeholder="Seahawks or Rams">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game9" class="col-sm-2 control-label">Saints @ Cardinals</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game9" placeholder="Saints or Cardinals">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game10" class="col-sm-2 control-label">Lions @ Chargers</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game10" placeholder="Lions or Chargers">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game11" class="col-sm-2 control-label">Titans @ Buccaneers</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game11" placeholder="Titans or Buccaneers">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game12" class="col-sm-2 control-label">Bengals @ Raiders</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game12" placeholder="Bengals or Raiders">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game13" class="col-sm-2 control-label">Ravens @ Broncos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game13" placeholder="Ravens or Broncos">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game14" class="col-sm-2 control-label">Giants @ Cowboys</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game14" placeholder="Giants or Cowboys">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game15" class="col-sm-2 control-label">Eagles @ Falcons</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game15" placeholder="Eagles or Falcons">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <label for="game16" class="col-sm-2 control-label">Vikings @ 49ers</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="game16" placeholder="Vikings or 49ers">
                    </div><!-- end input col -->
                </div><!-- end formgroup -->

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success"></button>
                    </div><!-- end button div -->
                </div><!-- end form group -->
            </form><!-- end form -->
        </div><!-- end well -->
    </div><!-- end container fluid -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
