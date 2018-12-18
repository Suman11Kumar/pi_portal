<!DOCTYPE html>
<?php
    session_start();
    //if(!isset($_SESSION['user']))
    //  header("Location: logout.php");
?>
<html lang="en">
<head>
  <title>Placement Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

  <style>
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }

  </style>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li>
          <img src="./images/logo.png">
        </li>
        <li>
          <a href="home.php"class='active' target="frame3"><i class="fa fa-home fa-fw"></i> Home</a>
        </li>
        <li class="dropdown">
          <a href="Profile.php" target="frame3"><i class="fa fa-user fa-fw"></i>Profile</a>
        </li>
        <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-institution fa-fw"></i> Companies<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="jobOpening.php" target="frame3"><i class="fa fa-plus"></i> Job Openings</a></li>
               <li><a href="registered_companies.php" target="frame3"><i class="glyphicon glyphicon-ok"></i> Registered Companies</a></li>                     
             </ul>
           </li>
           <li>
                <a href="pastExp.php" target="frame3"><i class="fa fa-history"></i> &nbsp;Interview Experience </a>
            </li>
            
            <li>
                <a href="tpoDetails.php" target="frame3"><i class="fa fa-phone fa-fw"></i> TPO Contacts</a>
               
            </li>

            <li>
                <a href="RULES AND REGULATIONS.html" target="frame3"><i class="fa fa-info-circle"></i> &nbsp;Rules and Regulations </a>
            </li>

             <li>
                <a href="Change_password.html" target="frame3"><i class="fa fa-user fa-fw"></i> &nbsp;My Account </a>
            </li>

            <!--<li>
                <a href="feedback.php" target="frame3"><i class="fa fa-commenting"></i> &nbsp;Feedback </a>
            </li>-->
            </ul>
    </nav>
    
  </div>
</div>

</body>
</html>
