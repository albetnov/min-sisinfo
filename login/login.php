<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<!--The author of this template-->
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <!--Here is content adjustment-->
    <form class="form-signin" method="POST" action="logincontroller.php">
  <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
	  <label><?php if(isset($_GET['pesan'])){ ?><?php echo $_GET['pesan'];?><?php } ?></label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a href="../index.php" class="btn btn-primary btn-block">Back</a>
</form>
</body>
</html>
