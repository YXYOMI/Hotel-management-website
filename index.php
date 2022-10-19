<!DOCTYPE html>
<html>
<head>
    <title>SunnyIsle-Login</title>
    <style type="text/css">
    	body {background-image: url(Background.jpg);
    	      background-size: cover;}
    	h1 { text-align: center; 
             color: white;
             font-size: 100px;
             font-family: STHeiti;
    	}
        .normal {color:white;
        	     text-align: center;
        	     font-family: STHeiti;
                 font-weight: bold;
        }
        .div1{ 
            width: 600px;
            margin:0 auto;
            margin-top: 200px;
        }
        .text1{
            background:none;
            border-color:white; 
            height: 20px; 
            width: 200px
        }
    </style>
</head>
<body>

    <div class = "div1">
    <fieldset style= "border-style: double; border-color: white;">
        <legend style="font-family: STHeiti; font-size:70px; color:white; text-align: center; ">Sunny Isle</legend>
        </br></br>
        <form action = "loginCheck.php" method = "post">
        <center><table border ="0">
            <tr>
                <td><lable style = "font-size: 25px" class = "normal" >Username&nbsp&nbsp</lable></td>
    	        <td><input type = "text" name = "login_id" class = "text1"/></td>
            </tr>
            <tr></tr><tr></tr><tr></tr>
            <tr>
                <td><lable style = "font-size: 25px" class = "normal" >Password</lable></td>
    	        <td><input type = "password" name = "login_pwd" class = "text1"/></td>
            </tr>
        </table></center>
        </br></br>
        <center><input type = "submit" name = loginSub value = "Log in" class = "normal" style = "background: none; font-size: 17px; width: 80px;height: 45px" />
            &nbsp&nbsp&nbsp&nbsp <a href = "Signin.html" class = "normal"> Sign in</a>
        </center>
        </form>
    </fieldset>
    </div>


</body>
</html>