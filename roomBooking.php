<!DOCTYPE html>
<html>
<head>
    <title>SunnyIsle-roomBooking</title>
    <style type="text/css">
        body {background-image: url(HomeBackground.jpeg);
              background-size: cover;}
        .div1 {
            height: 800px; 
            text-align: center; 
        }
        .div1 h1 {
            text-align: center; 
            color: white;
            font-size: 30px;
            font-family: STHeiti;
            text-decoration: underline;
        }
        .div2 {
            height: 20px; width: 500px;
            text-align: right;
        }
        .div3 {
            text-align: center; 
            color: white;
            font-size: 20px;
            font-family: STHeiti;
            line-height: 300px;
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
        .button{
            background: none;
            color: white;
            text-align: white;
        }
        .select{
            background: none; 
            color: white; 
            border-color: white;
            font-family: STHeiti;
            font-size: 15px;
        }
        span{
            text-align: center; 
            color: white;
            font-size: 20px;
            font-family: STHeiti;
        }
        .date{
            color: white; 
            background: none; 
            border-color: white; 
            height: 25px; width: 120px;
        }
        .submitButton {
            background: none; 
            font-size: 15px; 
            width: 80px;height: 40px;
            font-family: STHeiti;
            color: white;
            text-align: center;
        }
        a:link{
            text-decoration: none;
        }
        a:hover{
            color: grey;
        }
    </style>
</head>
<body>
    <div class = "div2" style="float: right">
    <a href = "homepage.php" class = "function"> Home </a> <b class="normal">|</b>
    <a class = "function" style = "color: grey">BookRoom</a> <b class="normal">|</b>
    <a href = "checkBooking.php" class = "function">CheckMyBooking</a> <b class="normal">|</b>
    <a href = "Logout.php" class = "function"> LogOut </a>
    </div>
    <form  action = "choose_room.php" method = "post">
    <div class = "div1">
        </br></br></br></br></br>
        <h1>Your requirement:</h1></br>
        <span> Check-in date:</span></br>
        <input type = "date" name = "inDate" value = "2019-05-15" class = "date"/></br></br>
        <span> Check-out date:</span></br>
        <input type = "date" name = "outDate" value = "2019-05-16" class= "date"/></br></br>
        <span> Type of the room:</span></br>
        <select class = "select" name = "roomType">
            <option value="1">Large room with double beds</option>
            <option value="2">Large room with a large single bed</option>
            <option value="3">Small room with a single bed</option>
            <option value="4">VIP room</option>
        </select></br></br>
    <center><input type = "submit" value = "SUBMIT" id = "btn" name = "submit" class ="submitButton"/></center>
    </div>
    </form>


</body>
</html>