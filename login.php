<?php
 $usr = $_POST["usr"];
 $pwd = $_POST["pwd"];
 if($usr == “priyanka” && $pwd == “priyanka123”)
 {
 $loginName = "Welcome Admin";
 }
 else
 {
 $loginName = "Login Failed";
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="sitestyle.css">
</head>
<body>
<header>
<h1>Cloud Login Result</h1>
</header>
<hr>
<article>
<section>
<h2> <?php echo $loginName ?></h1>
</section>
</article>
<footer>
Developed by K Anbarasan
</footer>
</body>
</html>
