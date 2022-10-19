<!DOCTYPE html>
<html>
<head>
    <title>SunnyIsle-Homepage</title>
    <script type="text/javascript">

    function notLogin_alert(){
        alert("Sorry, you did not log into the system. Please click to log in.");
        window.location.href="Login.html";
    }
    </script>
    <style type="text/css">
    	body {background-image: url(HomeBackground.jpeg);
    	      background-size: cover;}
        .div {
            height: 20px; width: 500px;
            text-align: right;
            float:right;
            margin-top:-42px;
        }
        .normal {
            color:white;
        	text-align: center;
        	font-family: STHeiti;
        }
        .function{
            text-align: right;
            color:white;
            font-family: STHeiti;
            font-size: 20px;
        }
        a:link{
            text-decoration: none;
        }
        a:hover{
            color: grey;
        }
        .welcome1{
            color: white;
            font-family: STHeiti;
            text-align: center;
            font-size:50px;
        }
        .welcome2{
            color: white;
            font-family: STHeiti;
            text-align: center;
            font-size:30px;
        }
        </style>
    </head>
    <body>
    <div class = "div">
    <a class = "function" style = "color: grey;"> Home </a> <b class="normal">|</b>
    <a href = "roomBooking.php" class = "function">BookRoom</a> <b class="normal">|</b>
    <a href = "checkBooking.php" class = "function">CheckMyBooking</a> <b class="normal">|</b>
    <a href = "Logout.php" class = "function"> LogOut </a>
    </div>
    <?php
    session_start();
    if (isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
        $_SESSION['isLogin'] = 1;
    }
    if (isset($_SESSION['isLogin'])) {
        echo "<p class = 'welcome1'> </br></br></br></br></br>Hello, {$_SESSION['username']} !</p>"; 
        echo "<p class = 'welcome2'> Welocome to <ins>Sunny Isle</ins>.</p>";
        echo "<p class = 'welcome2'> Hope you can enjoy your trip.</p>";
    }
    else{
        echo "<p class = 'welcome2'> Sorry, you did not log in to the system. </p>";
        echo "<p class = 'welcome2'>Please click <a href='Logout.php'> here </a> to log in. </p>" ; 
    }
?>
</body>
</html>