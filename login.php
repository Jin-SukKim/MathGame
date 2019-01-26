<?php session_start(); ?>
<?php extract($_POST); ?>
<?php extract($_GET); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1>Please login to enjoy our math game</h1>
            </div>
            <div class="col-sm-1"></div>
        </div>
        
        <form class="form-horizontal" action="validator.php" method="post">
            <div class="form-group required">
                <label class="control-label col-sm-4" for="text">Email:</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" />
                </div>
                <div class="col-sm-4"></div>
            </div>
            
            <div class="form-group required">
                <label class="control-label col-sm-4" for="text">Password:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="password" placeholder="Password" name="password" />
                </div>
                <div class="col-sm-4"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <button type="submit" name="login" class="btn btn-primary">login</button>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <?php echo $error; ?>
            </div>
        </form>
    </div>
</body>
    
    
</html>