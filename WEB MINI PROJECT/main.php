<!DOCTYPE HTML PUBLIC "~//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<?php
    session_start();
    if(!isset($_SESSION['user']))
        header("Location: logout.php");
?>
<html>

    <head> 
        <title> Placement Portal </title>
    </head>
<form method="POST" action="logout.php">
    <frameset rows = "12%,88%">
        <frame src = "horizontal_bar.php" name="frame1">

        <frameset cols = "20%,80%">
            <frame src = "verticalbar.php" name="frame2">
            <frame src="home.php" name="frame3">
        </frameset>
 </frameset>
 </form>

</html>