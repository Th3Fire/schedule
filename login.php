<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    
<!-- Mixins-->

<div class="pen-title">
  <h1>Welcome</h1><span>Please Login before use </span>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form name="form1" method="post" action="check_login.php">
      <div class="input-container">
        <input name="txtUsername" type="text" id="txtUsername" required="required"/>
        <label for="txtUsername">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="txtPassword" type="password" id="txtPassword" required="required"/>
        <label for="txtPassword">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>

      </div>
     <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form name="form2" method="post" action="register.php">
       <div class="input-container">
        <input name="txtName" type="text" id="txtName" required="required"/>
        <label for="Username">Full name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="txtUsername" type="text" id="txtUsername" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="txtPassword" type="password" id="txtPassword" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="txtConPassword" type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
