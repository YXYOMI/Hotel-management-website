<!DOCTYPE html>
<html>
<title>SunnyIsle-checkBooking</title>
<head>
    <title>SunnyIsle-roomCancel</title>
    <style type="text/css">
        body {background-image: url(HomeBackground.jpeg);
              background-size: cover;}
        .booking {
            font-family: STHeiti;
            text-align: center; 
            color:white;
            font-size: 20px;
        }
        .div {
            height: 20px; width: 500px;
            text-align: right;
            float: right;
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
            color:white;
        }
        a:hover{
            color: grey;
        }
    </style>
</head>
<body>
    <div class = "div">
    <a href = "homepage.php" class = "function"> Home </a> <b class="normal">|</b>
    <a href = "roomBooking.php" class = "function">BookRoom</a> <b class="normal">|</b>
    <a class = "function" style = "color: grey">CheckMyBooking</a> <b class="normal">|</b>
    <a href = "Logout.php" class = "function"> LogOut </a>
    </div></br></br></br></br></br>

<?php
    include('connect.php');
    session_start();
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM isBooked WHERE user ='$username'";
    $result = mysqli_query($mysqli,$sql);
    
    if($result)
    {
        while($result2 = mysqli_fetch_array($result)){
            echo"<p class ='booking'> Room $result2[0]&nbsp FORM $result2[1]&nbsp TO $result2[2]&nbsp&nbsp&nbsp&nbsp <a href = 'cancelBooking.php?room=$result2[0]&indate=$result2[1]&outdate=$result2[2]'style='font-size:17px;text-decoration: underline; color:white;'>Cancel my booking. </a></p>";
    
        }   
    }

    
?>
</body>
</html>