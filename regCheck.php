<html>
<head>
<script type="text/javascript">
    function nameExist_alert(){
        alert("ERROR: the username has already existed. Please try again.");
        window.location.href="Signin.html";
    }
    function signin_alert(){
        alert("Register successfully! You can log in now!");
        window.location.href="index.php";
    }
    function failed_alert(){
        alert("Sorry, the registration failed. Please try again.");
        window.location.href="Signin.html";
    }
    function pwdNotSame_alert(){
        alert("ERROR: the confirm password does not match the original password. </br>Please try again.");
        window.location.href="Signin.html";
    }   
</script>
</head>
<body>
<?php
include('connect.php');

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$pwdChe = $_POST['pwdChe'];
$rName = $_POST['rName'];
$passportID = $_POST['passportID'];
$phoneNum = $_POST['phoneNum'];
$emailAdd = $_POST['emailAdd'];

if($pwd == $pwdChe){
    $check = mysqli_query($mysqli,"select * from register where username='$username' limit 1");
    if(mysqli_fetch_array($check)){
        //echo 'ERROR: the username already exists.Click<a href = "Signin.html" >here</a> to return' ;
        echo("<script>nameExist_alert();</script>");
        exit;
    }
    $sql = "INSERT INTO register(username, pwd,pwdChe,rName,passportID,phoneNum,emailAdd) VALUES ('$username', '$pwd', '$pwdChe', '$rName', '$passportID', '$phoneNum', '$emailAdd')";
    if(mysqli_query($mysqli,$sql)) {
    //exit('Register successfully! Click <a href = "Login.html">here</a> to login');
        echo("<script>signin_alert();</script>");
    }
    else{
    	//echo 'Sorry, the registration failed';
        //echo 'Click <a href = "Signin.html" > here </a> to return.';
        echo("<script>failed_alert();</script>");
    }
}
else{
    //echo 'The password is not the same, please try again';
    //echo 'Click <a href = "Signin.html" > here </a> to return.';
    echo("<script>pwdNotSame_alert();</script>");
}

?>
</body>
</html>