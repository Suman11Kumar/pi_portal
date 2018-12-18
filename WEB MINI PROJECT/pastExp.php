<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<style>
		
		table{
      width:100%;
    }
    td{
      width:50%;
      font-size:25px;
      border:1px solid;
    }
		h1 {
   		text-decoration: underline;
		padding-left: 100px;;
		font-size: 30px;
		color:Tomato;
		}

		h3{
   		text-decoration: underline;
		font-size: 35px;
		color:Blue;
		line-height: 1.8;
		}
		a:link {
    color: red;
  }
    a:visited {
    color: green;
  }

  a:hover {
    color: hotpink;
  }

  a:active {
    color: blue;
  }

</style>
</head>
  <body style="border:2px solid black; padding: 10px; margin:auto">

  <h1><b > INTERVIEW EXPERIENCES OF SELECTED STUDENTS</b></h1>
  <?php
  $con=mysqli_connect("localhost","root","","pi_portal");
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql= "select Name,Profile,year from company_past_experiences order by year ";
  $result=mysqli_query($con,$sql);
  $i=0;
  $table='<br><table cellpadding="5" >';
    if(mysqli_num_rows($result)>0)
    {

      $table.='<thead><th>Company_name</th><th>Profile</th></thead>';
      while($data=mysqli_fetch_array($result))
      {
        $name=$data['Name'];
        
        $profile=$data['Profile'];
        $year=$data['year'];
          $table.='<tr><td>'.'<a href="https://www.youtube.com" target="_blank">' .$name.'</a>'.'</td>';

          $table.='<td>'.'<a href="https://www.youtube.com" target="_blank">' .$profile."</a>".'</td>';
        $i++;
        $table.='</tr>';
      }
    
      $table.='</table>';
      echo $table;
    }
mysqli_free_result($result);

mysqli_close($con);
  ?>
  </body>
</html>
