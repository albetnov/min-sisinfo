<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!--Creator of this template-->
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <!--Little credits for my self lol(beckend)-->
    <meta name="author" content="albetnov">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Sistem Informasi Alumni</title>
    <!--You can get this template here-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

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
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center" onload="setTimeout('redirect()', 300)">
    <!--This video is fanmade(created by my friend lol.) footage source from Anime(Oregairu). This anime is recommended(If you like conflict).-->
    <video autoplay muted loop id="VideoBg">
      <source src="css/oregairu.mp4" type="video/mp4">
    </video>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Sistem Informasi Alumni</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="login/login.php">Login</a>
        <a class="nav-link" href="login/daftar/register.php">Register</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Welcome to Alumni Information System</h1>
      <p class="lead" style="background-color: blanchedalmond;width: fit-content;color:black;">Enjoy! Follow my github below!
      <a href="https://github.com/albetnov" class="btn btn-secondary">Follow Me!</a> 
    </p>
    <p class="lead" style="background-color: blanchedalmond;width: fit-content;color:black;">The Creator of Video which are we using in this Web
      <a href="https://www.instagram.com/hiiryn/" class="btn btn-secondary">Follow Hirryn!</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Your copyright here.</p>
    </div>
  </footer>
</div>
</body>
<script type="text/javascript">
 function redirect() {
   if (screen.width <= 950) {
      window.location = "nomobile.php";
   }
  }
</script>
</html>
