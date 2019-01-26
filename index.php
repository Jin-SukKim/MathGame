<?php session_start(); ?>
<?php
    extract($_POST); 
    extract($_GET);

    if(!isset($_SESSION["login"])){
        header("Location: login.php?error=<p>not valid</p>"); die();
    }
	if(!isset($answer)) {
		$total=0;
		$correct=0;
	}
	if(isset($answer)) {
		if(is_numeric($answer)) {
			if($answer == $result) {
				$correct++;
				$total++;
			} else{
					$total++;
					$err = "wrong";
			}
		} else {
				$err = "Please enter a number";
		}
	}
	
	$first = rand(0, 50);
	$second = rand(0, 50);
	$sign_number = rand(0, 1);
	
	if($sign_number == 0) {
		$sign = "+";
		$result = $first + $second;
	} else {
		$sign = "-";
		$result = $first - $second;
	}

	
	
?>

<html lang='en'>
<head>
    <title>Random Math</title>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form class="form-horizontal" action="index.php" method="post">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h1>Math Game</h1>
                </div>
                <div class="col-sm-4">
                    <a herf="index.php" name="logout" class="btn btn-default btn-sm">Logout</a>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-sm-offset-3">
                    <?php echo $first; ?>
                </label>
                <label class="col-sm-2">
                    <?php echo $sign;?>
                </label>
                <label class="col-sm-2">
                    <?php echo $second; ?>
                </label>
                <label class="col-sm-3"></label>
            </div>
            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-4">
                    <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer">
					<input type="hidden" id="result" name="result" value="<?php echo $result; ?>" />
					<input type="hidden" id="first" name="first" value="<?php echo $first; ?>" />
					<input type="hidden" id="second" name="second" value="<?php echo $second; ?>" />
					<input type="hidden" id="sign" name="sign" value="<?php echo $sign; ?>" />
					<input type="hidden" id="correct" name="correct" value="<?php echo $correct; ?>" />
					<input type="hidden" id="total" name="total" value="<?php echo $total; ?>" />
				</div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
                </div>
                <div class="col-sm-5"></div>
            </div>
			<hr />
			<div classs="col-sm-3 col-sm-offset-4" id="error">
				<?php echo $err; ?>
			</div>
			<div class="col-sm-3 col-sm-offset-4">Score:
			<?php echo $correct . "/" . $total; 	?>
			</div>
        </form>
    </div>
</body>
</html>