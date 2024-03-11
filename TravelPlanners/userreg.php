<?php
    $hostname = "localhost";
    $un = "root";
    $pw = 1996;
    $db = "TravelPlanner";
    $con = new mysqli($hostname, $un, $pw, $db);
    if($con->connect_error){
        echo "faild";
    }

    if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $UserName = $_POST['UserName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ContactNumber = $_POST['ContactNumber'];
        
    }
    $sql= "INSERT INTO user( fullname , UserName , email , password , ContactNumber) VALUES('$fullname','$UserName','$email','$password','$ContactNumber')";

    $sql1= "INSERT INTO userlogin( UserName, password) VALUES('$UserName','$password')";

    if($con->query($sql))
    {
    echo "<script>alert('Successfully Registered! Please login to continue!')</script>";
    
    if($con->query($sql1))
    {
    echo "<script>alert('Record inserted ')</script>";
    header('Location: index.html');
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    header('Location: index.html');
    }
    
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    }
    $con->close();
    
?>
<!DOCTYPE html>
