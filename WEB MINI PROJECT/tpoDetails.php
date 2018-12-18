<!DOCTYPE html>
<html>
<head>
    <title>TPO DETAILS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative; 
        }
        .button {background-color: #4CAF50; /* Green */ border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 40px;margin: 10px 400px;}
        .button1:hover {box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);}
        .button2 {width: 40%;}
    </style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="">
<nav class="navbar navbar-default"></nav>   


<h1> TPO DETAILS</h1>

<?php
$conn = mysqli_connect("localhost","root","","pi_portal");
if(!$conn)
{
    die("Connection falied: ".mysqli_connect_error());
    header("Location: ./TPO DETAILS.html");
}
$sql="select Name,Reg_no,Course,Email_id,Contact_no FROM tpo_detail";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {
     
    // header('Content-type: image/jpeg');
     //echo $row['image'];
     echo '<div class="container">';
     echo '<div class="row">';
        echo '<div class="col">' ;
     echo " Name " . $row['Name'] ."<br/> Reg No. " . $row['Reg_no'] ."<br/> Course " . $row['Course'] ."<br/> Email " . $row['Email_id'] ."<br/> Contact No. " . $row['Contact_no'];
     echo '</div>';
     echo '</div>';
     echo '</div>';
     echo '<br>';
    }
}
mysqli_close($conn);
?>
</body>
</html>
