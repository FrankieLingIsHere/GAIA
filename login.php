<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" type="image/x-icon" href="Images/Logo_favicon.png">
</head>

<body class="login-page">

<div id="bg"></div>

<form method="post" class="login-form" action="login_process.php">
  <div class="form-field">
    <input class="input-field" id="email" name="email" type="email" placeholder="Email"/>
  </div>
  
  <div class="form-field">
    <input class="input-field" id="passowrd" name="password" type="password" placeholder="Password (8-12 characters)"/>
  </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
</form>
  
</body>
</html>