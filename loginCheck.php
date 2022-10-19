<html>
<head>
<script type="text/javascript">
    //function login_alert(){
       // alert("Log in successfully!");
        //window.location.href="index.php";
    //}
    function failed_alert(){
        alert("Sorry, the username or the password is wrong! Please try again!");
        window.location.href="index.php";
    }
    function login_alert(){
        alert("Log in successfully! Click to go to the homepage. ");
        window.location.href="homepage.php";
    }
</script>
</head>
<body>
<?php
include('connect.php');
session_start();
if(isset($_POST['loginSub'])) {
    $username = $_POST['login_id'];
    $password = $_POST['login_pwd'];
    //check whether the username and password is matched
    $check =mysqli_query($mysqli,"SELECT * FROM register WHERE username = '$username' AND pwd = '$password' limit 1");
    $result = mysqli_fetch_array($check);
    if($result){
        //log in successfully
        //echo("<script>login_alert();</script>");
        //echo 'log in successfully! click <a href ="Homepage.html"> here </a> to enter the homepage.';
        setcookie("username", $_POST["login_id"], time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("password", $_POST["login_pwd"], time() + (86400 * 30), "/"); 
        $_SESSION['username'] = $username;
        $_SESSION['isLogin'] = 1;
        echo("<script>login_alert();</script>");
    }
    else{
        echo("<script>failed_alert();</script>");
        //echo 'log in failed! click <a href ="Login.html"> here </a> to try again.';
        exit;
    }
}
?>
</body>
</html>