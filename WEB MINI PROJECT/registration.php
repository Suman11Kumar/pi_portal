<?php

session_start();
if(isset($session['user']))
  unset($_session['user']);

$conn = mysqli_connect("localhost","root","","pi_portal");

if(!$conn)
{
    die("Connection falied: ".mysqli_connect_error());
}


$Name = $_POST['username'];
$Reg_no = $_POST['reg'];
//$User_id = $_POST['user_id'];
$Password = $_POST['password'];
$Cpassword=$_POST['cpassword'];
$Credits = 10;

if($Password===$Cpassword)
{



    $reg = "INSERT INTO reg_detail values ('$Name','$Reg_no','$Password','$Credits');";
    
    if(mysqli_query($conn,$reg)){
        echo "Registered";
        $_session['user']=$Reg_no;
        echo '<script>alert("Successfully Registered.\n Login to your account");</script>';
        header("Location: ./studentlogin.html");
    }else{
        echo "Error!". mysqli_error($conn);
        echo '<script>alert("NOT WORKING TRY AGAIN!");</script>';
    }
}

else
{
    echo '<script>alert("Password doesnot match");</script>';
    header("Location: ./studentlogin.html");
}
mysqli_close($conn);

?>