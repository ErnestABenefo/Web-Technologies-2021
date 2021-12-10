<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="LoginPage" />
    <meta name="author" content="Ernest Nana Kwaku Ampomah - Benefo" />
    <meta name=" keywords" content="SignUp" />
    <meta name="viewport" content="width = device-width, initial-scale = 2" />
    <title>SignUp</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="signup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  
  <body>
	
  <form class="login-form" method="post" action="sign-up.php">

  <div >
        <h2>Sign Up</h2>
  </div>

    <div class="field">
  	  <label>Username</label>
  	    <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	
    <div class="field">
  	  <label>Email</label>
  	    <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>

  	<div class="field">
  	  <label>Password</label>
  	    <input type="password" name="password_1">
  	</div>

  	<div class="field">
  	  <label>Confirm password</label>
  	    <input type="password" name="password_2">
  	</div>

  	<button type="submit" class="logbtn" name="reg_user">Register</button>

    <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>