<!DOCTYPE html>
<html>
<head>
	<title>Login To Continue</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/4ccc2fd43f/css/solid.css">
<script src="https://use.fontawesome.com/4ccc2fd43f.js"></script>
<link rel="stylesheet" type="text/css" href="style.php">
</head>
<body >
     <div class="modal-dialog text-center">
    <div class="col-8 main-section">
    	<div class="modal-content">
    		<div class="col-12 user-img">
    			<img src="img/face.png">
    		</div>
    		<form class="col-12" action="validation.php" method="post">
    			<div class="form-group"><p style="font-size: 16px; text-align: left; color: white;"> This webpage is password protected enter password to continue.
                <br>
                </p>
    				<input type="password" class="form-control" placeholder="Enter password" name="password">
    			</div>
    			<button type="submit" class="btn">
    				<i class="fas fa-sign-in-alt">
    					
    				</i>  Login
    			</button>
    		</form>
    		<div class="col-12 forgot">
    			<a href="#">Forgot Password?</a>
    		</div>
    	</div>
    </div> 	
     </div>




</body>
</html>