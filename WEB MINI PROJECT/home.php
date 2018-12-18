<!DOCTYPE HTML PUBLIC "~//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<?php
    session_start();
    if(!isset($_SESSION['user']))
        header("Location: logout.php");
?>
<html>

    <head> 
        <title> Placement Portal </title>
        <style>
            h1 {
                 font-family: Georgia, serif;
                 border-bottom: 3px solid #00ffff;
                 color: #000080;
                 font-size: 30px;
            }
        </style>
    </head>
    <body>
    <center>
        <h1>
            WELCOME TO YOUR INTERNSHIP PORTAL
        </h1>
        <p>
            This portal will keep you updated about the placements information.
        </p>
        <img src="images/mycolg.jpg" height="350px" width="550px">
    </center>
    </body>
</html>