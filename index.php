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

    <!--Font awesome css-->
    <link rel="stylesheet" href="css/fontawesome-free-5.15.1-web/css/all.css">

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
  <div class="video-container">
    <video autoplay muted loop id="VolControl">
      <source src="css/oregairu.mp4" type="video/mp4">
    </video>
    </div>
    <!--If Javascript disabled-->
    <noscript>
    <meta http-equiv="refresh" content="1;jsdisablewarning.php">
    </noscript>
    <!--You can modify Top Bar in here-->
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
      <!--This section is for modifying content-->
  <main role="main" class="inner cover">
    <h1 class="cover-heading">Welcome to Alumni Information System</h1>
      <p class="lead">Enjoy! Follow my github below!
      <a href="https://github.com/albetnov" class="btn btn-secondary">Follow Me!</a> 
    </p>
    <p class="lead">The Creator of Video which are we using in this Web
      <a href="https://www.instagram.com/hiiryn/" class="btn btn-secondary">Follow Hirryn!</a>
    </p>
  </main>
      <!--Place your website name below/copyright. Depends on you.-->
  <footer class="mastfoot mt-auto">
    <div class="inner">
    <button class="btn btn-sm btn-secondary" id="nomute" onclick="unmute();" style="display:inline"><i class="fas fa-volume-up"></i></button>
    <button class="btn btn-sm btn-secondary" id="mute" onclick="muteit();" style="display:none;"><i class="fas fa-volume-mute"></i></button>
      <p>Your copyright here.</p>
    </div>
  </footer>
</div>
</body>
<!--This is the javascript-->
<script type="text/javascript">
var vidbg = document.getElementById("VolControl");
  function unmute(){
    document.getElementById("nomute").style.display = "none";
    document.getElementById("mute").style.display = "inline";
    vidbg.muted = false;
  }
  function muteit(){
    document.getElementById("mute").style.display = "none";
    document.getElementById("nomute").style.display = "inline";
    vidbg.muted = true;
  }
</script>
</html>
