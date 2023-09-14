<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Signstyle.css">
 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>SignUp/Login Page</title>
</head>

 
<body>
  <div class="container">
    <div class="form">
      <div class="btn">
				<button class="signUpBtn">SIGN UP</button>
			
				<button class="loginBtn">LOG IN</button>
			
      </div>
      <form class="signUp" action="register.php" method="post">
        <div class="formGroup">
          <input type="text" id="userName" name="name" placeholder="User Name" autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email" name="email" required autocomplete="off">
        </div>
		<div class="formGroup">
          <input type="Phone" placeholder="Phone" name="phone" required autocomplete="off">
        </div>
		<div class="formGroup">
          <input type="address" placeholder="Address" name="address" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="password" id="password" name="password" placeholder="Password" required autocomplete="off">
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">I agree with term & conditions</span>
        </div>
        <div class="formGroup">
          <button type="submit" class="btn2">REGISTER</button>
        </div>
 
      </form>
        
	
      <!------ Login Form -------- -->
      <form class="login" action="login.php" method="post">
        
        <div class="formGroup">
          <input type="email" placeholder="Email" name="email" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" name="password" required autocomplete="off">
         
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">Keep me signed in on this device</span>
        </div>
        <div class="formGroup">
			
          <button type="submit" name="loginBTN" class="btn2">LOG IN</button>
		
        </div>
 
      </form>
 
    </div>
  </div>
 
  <script src="SjQuery.js"></script>
</body>
 
</html>
