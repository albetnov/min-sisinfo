<?php
session_start();
    if($_SESSION['level'] != "admin"){
        die('this page only for admin.');
    }
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
  ?>   
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
</head>
<body>
<center>
<h1>You are login as admin</h1>
<p>This page is session protected. If you want to test, try login as user. And manually open this link as user!</p>
<input type="text" id="link" readonly value="<?= $url ?>">
<button onclick="copy()">Copy to clipboard</button><br>
<a href="../logout.php">Logout</a>
</center>
</body>
</html>
<script>
function copy() {
  var copyText = document.getElementById("link");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Text Copied");
}
</script>