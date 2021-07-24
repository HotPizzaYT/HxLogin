<?php
session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["email"])){
header("Location: acc.php");
}
?>
<title>JSON login system</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form action="log.php" method="post" enctype="multipart/form-data">
<h1>JSON login system</h1>
<p>Username:</p>
<input type="text" maxlength="16" required name="username" >
<p>Password:</p>
<input type="password" required name="password" > <input type="submit" name="submit" value="Log in" >
</form>
<a href="register.php">I don't have an account!</a>
<br />
<?php
if(isset($_GET["err"])){
	if($_GET["err"] === "1"){
		// This will most likely never happen unless the user goes to log.php in their browser.
		echo "Error: You did not fill in all forms";
	}
	if($_GET["err"] === "2"){
		echo "Error: Invalid password";
	}
	if($_GET["err"] === "3"){
		echo "Error: That account does not exist";
	}
}
?>
