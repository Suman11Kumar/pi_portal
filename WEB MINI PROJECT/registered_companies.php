<?php
    include("./random.php");
     $conn = mysqli_connect("localhost","root","","pi_portal");
                    if($conn == false)
                        die("Error connection! " . mysqli_connect_error());
                    else{
                        $sql = "select c_name,stipend,selected from company natural join registered_companies;";
                        $result = mysqli_query($conn,$sql);
?>

<!doctype html>
<html>
    <head>
        <title>Registered Companies</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 

    </head>

    <body style="background-color:powderblue;">
        <div><nav class="navbar navbar-default"></nav></div>
        <div>
                <div class="container">
                        <h1 style="font-size:400%;" align="center" ><span class="label label-success">REGISTERED COMPANIES</span></h1>
                </div>
                <br>
                <br>

                <div class="container">
                    <div>
                            <div class="col-lg-6">
                                
                                    <button type="button" class="btn btn-primary" style="font-size:20px;">Companies <span class="badge" id = "badge"><?php global $result; echo mysqli_num_rows($result);?></span></button>
                            
                            </div>
                    </div> 
                </div>
                <?php
                   
                    
                        if(mysqli_num_rows($result) > 0)
                        {
                            echo '<table class="table table-hover table-condensed table-striped" style="table-layout: fixed;border:1px bold solid; width: 200%; font-size:large; font-family:Tahoma;" >';
                            echo "<tr>";
                                echo "<th>COMPANY</th>";
                                echo "<th>STIPEND</th>";
                                echo "<th>SELECTED</th>";
                            echo "</tr>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>".$row['c_name']."</td>";
                                echo "<td>".$row['stipend']."</td>";
                                echo "<td>".$row['selected']."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                    }
                    mysqli_close($conn);
                ?>
        </div>
    </body>
</html>