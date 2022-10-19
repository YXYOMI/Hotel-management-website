<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
    function book_alert(){
        alert("You have booked the room successfully! Click to go to the homepage.");
        window.location.href="homepage.php";
    }
</script>
</head>
<body>
<?php
include ('connect.php');
session_start();
$myroom = $_POST['myroom'];
$user = $_SESSION['username'];
$inDate = $_SESSION['inDate'];
$outDate = $_SESSION['outDate'];
$sqli = "INSERT INTO isBooked(roomNum, inDate, outDate, user) VALUES ('$myroom', '$inDate', '$outDate', '$user')";
$result5 = mysqli_query($mysqli,$sqli);
if($result5){
    echo("<script>book_alert();</script>");
}
?>
</body>
</html>