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
        $TravelPlace = $_POST['TravelPlace'];
        $NumOfPeoples = $_POST['NumOfPeoples'];
        $CheckIn = $_POST['CheckIn'];
        $CheckOut = $_POST['CheckOut'];
        $Type = $_POST['Type'];
    }
    $sql= "INSERT INTO travelreservation(UserName, TravelPlace, NumOfPeoples, CheckIn, CheckOut, Type) 
    VALUES('$UserName','$TravelPlace','$NumOfPeoples','$CheckIn','$CheckOut','$Type')";
    if($con->query($sql))
    {
        echo "<script>alert('Successfully Booked!)</script>";
        header('Location: home.html');
    }
    else {
        echo "<script>alert('Cant book at this time please check again later!')</script>";
        header('Location: travelbooking.html');
    }
    $con->close();
    
?>
