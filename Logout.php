<!DOCTYPE html>
<html>
<head>
    <title>SunnyIsle-Logout</title>
    <script>
    function logout_alert(){
        alert("Hope to see you next time!");
        window.location.href="index.php";
    }
    </script>
</head>
<body>
<?php 
	session_start();
	$username = $_SESSION['username'];
	session_destroy();
 
	setcookie("username", "", time()-99);
	setcookie("password", "", time()-99);
 
    echo("<script>logout_alert();</script>");
 
 ?>
 </body>
 </html>
