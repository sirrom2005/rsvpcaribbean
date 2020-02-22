<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RSVP Caribbean Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="views/css/signin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <div id="imgloader" class="hide"><span>acessing server please wait...</span><p align="center"><img src="views/images/loading.gif" alt="." /></p></div>
      <div class="container clear-top">
          <form name="frm" id="frm" class="form-signin" method="post">                   
                <span class="form-signin-heading">Log In</span>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter you password" required>
                <div class="checkbox">
                  <!--label>
                        <input type="checkbox" value="remember-me"> Remember me
                  </label-->
                </div>
                <div id="error"></div>
                <div id="msg" class="flashmsg"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn">Sign in</button>
            </form>
      </div> 
      <div class="footer">Copyright &copy; 2016. <a href="/">RSVP Caribbean</a> </div>
  </body>
</html>
