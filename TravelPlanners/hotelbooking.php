<?php
    $hostname = "localhost";
    $un = "root";
    $pw = 1996;
    $db = "TravelPlanner";
    $con = new mysqli($hostname, $un, $pw, $db);
    if($con->connect_error){
        echo "faild";
    }

    if(isset($_POST['submit'])){
        $UserName = $_POST['UserName'];
        $Hotel = $_POST['Hotel'];
        $Rooms = $_POST['Rooms'];
        $CheckIn = $_POST['CheckIn'];
        $CheckOut = $_POST['CheckOut'];
        $Guest = $_POST['Guest'];
    }
    $sql= "INSERT INTO hotelreservation(UserName, Hotel, Rooms, CheckIn, CheckOut, Guest) 
    VALUES('$UserName','$Hotel','$Rooms','$CheckIn','$CheckOut','$Guest')";
    if($con->query($sql))
    {
        echo "<script>alert('Successfully Booked!)</script>";
        header('Location: travelbooking.html');
    }
    else {
        echo "<script>alert('Cant book at this time please check again later!')</script>";
        header('Location: home.html');
    }
    $con->close();
    
?>
