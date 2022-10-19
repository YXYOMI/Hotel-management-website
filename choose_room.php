<?php
include ('connect.php');
session_start();
$type = $_POST['roomType'];
$inDate = $_POST['inDate'];
$outDate = $_POST['outDate'];

$_SESSION['inDate'] = $inDate;
$_SESSION['outDate'] = $outDate;

$allRoom = "SELECT roomNum FROM allRoom WHERE roomType = '$type'";
$result2 = mysqli_query($mysqli,$allRoom);
$room= array();
while($result3 = mysqli_fetch_array($result2)){
    $room[] = $result3[0]; 
}
//echo "$result2[roomType]";    
$checkDate = mysqli_query($mysqli,"SELECT * FROM isBooked WHERE ('$inDate'>= inDate AND '$inDate' < outDate) OR ('$outDate' > inDate AND '$outDate' < outDate ) OR ('$inDate' < inDate AND '$outDate' > outDate )");
if($checkDate){

    $getNum = "SELECT * FROM isBooked WHERE ('$inDate'>= inDate AND '$inDate' < outDate) OR ('$outDate' > inDate AND '$outDate' < outDate ) OR ('$inDate' < inDate AND '$outDate' > outDate )";
    $result4 = mysqli_query($mysqli,$getNum);
    $bookedNum= array();
    while($result = mysqli_fetch_array($result4)){
        $bookedNum[] = $result[0]; //get the booked room number
    }
    //echo "$room[2]";
    //$selectRoom = array();
    $canSelect = array_diff($room,$bookedNum);
    foreach ($canSelect as $value1){
        echo "Choose room:  ";
        echo ("<form action = 'book_room.php' method = 'post'>
                <input type = 'submit' name= myroom value= $value1 </br>
            </form>");
    }
   
}  
else{
    foreach ($room as $value){
        //$myroom = $room[i];
        echo "Choose room:  ";
        echo "<form action = 'book_room.php' method = 'post'>
                <input type = 'submit' name= myroom value= $value1 </br>; 
            </form>";
    }
}

?>