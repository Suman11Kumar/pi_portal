<!DOCTYPE html>
<?php
    session_start();
   // if(!isset($_SESSION['user']))
   // header("Location: logout.php");
?>
<html lang="en">
<head>
  <title>Placement Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="logout.php">
<nav class="navbar bg-light">
        <div class="container-fluid">  
                <div class="navbar-header">  
                  <a class="navbar-brand" href="#">MNNIT ALLAHABAD</a>  
                </div>  
                <ul class="nav navbar-nav">   
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">UserName <span class="caret"></span></a>  
                    <ul class="dropdown-menu">  
                      <li><a href="logout.php" target="_parent">Logout</a></li>   
                    </ul>  
                  </li>  
                </ul>  
              </div>  
            </nav>
<br>


</form>
</body>
</html>

 