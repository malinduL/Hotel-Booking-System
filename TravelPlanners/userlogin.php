<?php
    $hostname = "localhost";
    $un = "root";
    $pw = 1996;
    $db = "travelplanner";
    $con = new mysqli($hostname, $un, $pw, $db);
    if($con->connect_error){
        echo "faild";
    }
    if(isset($_POST['SignIn'])){

        $UserName  = mysqli_real_escape_string($con,$_POST['UserName']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
    
        if ($UserName != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from userlogin where UserName ='".$UserName ."' and password='".$password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['UserName'] = $UserName;
                header('Location: home.html');
            }else{
                echo "<script>alert('Invalid username or password!')</script>";
                header('Location: index.html');
                
            }
    
        }
    
    }
?>
