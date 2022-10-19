<!DOCTYPE html>
<html>
<head>
    <title>SunnyIsle-roomCancel</title>
    <script type="text/javascript">
        function cancel_alert(){
            alert("Cancle the booked-room successfully! Click to go to the homepage.");
            window.location.href="homepage.php";
        }
    </script>
</head>
<body>
    <?php
        include('connect.php');
        $room = $_GET['room'];
        $indate = $_GET['indate'];
        $outdate = $_GET['outdate'];
        $sql = "DELETE FROM `isBooked` WHERE roomNum = '$room' AND inDate = '$indate'";
        if($result = mysqli_query($mysqli,$sql)){
            echo("<script>cancel_alert();</script>"); 
        }
        
    ?>
</body>
</html>