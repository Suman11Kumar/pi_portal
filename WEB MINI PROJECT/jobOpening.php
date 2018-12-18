<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        h1 {
                text-align: center;
                color:rgb(86, 10, 173);
                font-size: 70px;
            }
            
            table{
                border-collapse: collapse;
                width: 100%;
                border-spacing: 5px;
                }
            th, td{
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid rgb(20, 18, 138);
                 }

            tr:nth-child(even) {background-color: rgb(134, 119, 177);}
.button {
    background-color:rgb(52, 25, 204);
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}



    </style>
</head>
<body style="border:2px solid black; padding: 10px; margin:auto">
<p id ="demo">
        <h1>JOB OPENINGS</h1>
        <table>
                <tr>
                    <th>COMPANY</th>
                    <th>PROFILE</th>
                    <!--<th>BRANCHES ALLOWED</th>-->
                    <th>STIPEND</th>
                    <th>CTC</th>
                    <th>JOB LOCATION </th>
                    <th>PROVISION OF PPO</th>
                    <th>REGISTRATION DEADLINE</th>
                    <th>Arriving Date</th>
                    <th>REGISTER</th>
                </tr>
                <?php
                    $con=mysqli_connect("localhost","root","","pi_portal");
                    if (mysqli_connect_errno())
                    {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $sql= "select * from company";
                    /*select C_Name,Profile,Date_Arriving,Deadline,Stipend,CTC,Location,PPO_Allowed from company
                    AND select branch_name,course from branch where B_CODE IN
                    (select B_Code from eligibility_criteria where C_Code IN
                    (select C_Code from COMPANY))*/
                    $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                            $code = $row['C_Code'];
                            $branches = "select branch_name,course from branch natural join eligibility_criteria natural join company where C_Code = $code; ";
                            $res = mysqli_query($con,$branches);
                            $b = "";
                            
                            
                            /*if(mysqli_num_rows($res) > 0)
                            {
                                while($r = mysqli_fetch_array($res,MYSQLI_ASSOC))
                                {
                                    $b .= $r['branch_name'] ." ". $r['course'] . '<br>';
                                }
                            }
                            mysqli_free_result($res);*/
                            echo '<tr>';
                            echo '<td>'. $row['C_Name'] . '<br>';
                            echo '<a href="https://www.youtube.com/" class="button" target="_blank">GLANCE</a>
                        <a href="https://www.youtube.com/" class="button" target="_blank">ELIGIBILITY</a></td>';         
                            echo '<td>'.$row['Profile'] . '</td>';
                            //echo '<td>'.$b.'</td>';
                            echo '<td>'.$row['Stipend'].'</td>';
                            echo '<td>'.$row['CTC'].'</td>';
                            echo '<td>'.$row['Location'].'</td>';
                            echo '<td>'.$row['PPO_Allowed'].'</td>';
                            echo '<td>'.$row['Deadline'].'</td>';
                            echo '<td>'.$row['Date_Arriving'].'</td>';
                            echo '<td><a href="https://www.youtube.com/"  class="button" target="_blank">REGISTER</a></td>';
                            echo '</td></tr>';
                        }
                    }
                    mysqli_free_result($result);
                    mysqli_close($con);
                ?>
         </table>
    </body>
</html>


