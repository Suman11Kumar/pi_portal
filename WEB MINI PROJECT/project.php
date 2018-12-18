<?php
    include("./random.php");
    session_start();
    if(!isset($_SESSION['user']))
        header("Location: ./logout.php");
    $regno = $_SESSION['user'];

$link = mysqli_connect("localhost","root","","pi_portal");
$rand = randomDigits(3);
$pid = 'PR'. $rand;
$Iid = 'IT' . $rand;
if($link == false)
    die("Error connection! " . mysqli_connect_error());
else{
    if(isset($_POST['continue3']))
    {
        $pt = mysqli_real_escape_string($link,$_POST['title']);
        $pd = mysqli_real_escape_string($link,$_POST['comment']);
        $io = mysqli_real_escape_string($link,$_POST['org']);
        $id = mysqli_real_escape_string($link,$_POST['duration']);
        $ip = mysqli_real_escape_string($link,$_POST['profile']);
        $query1 = "insert into project values('$regno','$pid','$pt','$pd');";
        $query2 = "insert into intern values('$regno','$Iid','$io','$id','$ip');";
        $result1 = mysqli_query($link,$query1);
        $result2 = mysqli_query($link,$query2);
        if($result1 && $result2)
        {
            echo '<script>alert("Entered Successfully ! Move to next tab");</script>';
            echo '<script>window.open("./Profile.php","frame3");</script>';
        }
        else
        {
            echo '<script>alert("Error");</script>';
            //echo '<script>window.open("./Profile.php","frame3");</script>';
        }
    }
}
?>