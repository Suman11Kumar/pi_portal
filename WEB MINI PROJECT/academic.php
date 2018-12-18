<?php
    include("./random.php");
    session_start();
    $reg = $_SESSION['user'];
        
    $conn = mysqli_connect("localhost","root","","pi_portal");
        if($conn == false)
            die("Error connection! " . mysqli_connect_error());
        else{
            
            if(isset($_POST['continue2']))
            {
                $rand = randomDigits(3);
                $sname10 = mysqli_real_escape_string($conn,$_REQUEST['sname10']);
                $bname10 = mysqli_real_escape_string($conn,$_REQUEST['bname10']);
                $pyear10 = mysqli_real_escape_string($conn,$_REQUEST['pyear10']);
                $per10 = mysqli_real_escape_string($conn,$_REQUEST['Percentage10']);
                $sname12 = mysqli_real_escape_string($conn,$_REQUEST['sname12']);
                $bname12 = mysqli_real_escape_string($conn,$_REQUEST['bname12']);
                $pyear12 = mysqli_real_escape_string($conn,$_REQUEST['pyear12']);
                $per12 = mysqli_real_escape_string($conn,$_REQUEST['Percentage12']);
                
                $gp = mysqli_real_escape_string($conn,$_REQUEST['Percentage']);
                $gc = mysqli_real_escape_string($conn,$_REQUEST['clg']);
                $gy = mysqli_real_escape_string($conn,$_REQUEST['yr']);
                $gu = mysqli_real_escape_string($conn,$_REQUEST['University']);
                $gd = mysqli_real_escape_string($conn,$_REQUEST['deg']);

                $b_code="";
                $spi1 = mysqli_real_escape_string($conn,$_REQUEST['spi_1']);
                $spi2 = mysqli_real_escape_string($conn,$_REQUEST['spi_2']);
                $spi3 = mysqli_real_escape_string($conn,$_REQUEST['spi_3']);
                $spi4 = mysqli_real_escape_string($conn,$_REQUEST['spi_4']);
                $spi5 = mysqli_real_escape_string($conn,$_REQUEST['spi_5']);
                $spi6 = mysqli_real_escape_string($conn,$_REQUEST['spi_6']);
                $cpi = mysqli_real_escape_string($conn,$_REQUEST['cpi']);
                $pgb = "select b_code from branch where course='MCA';";
                $branch = mysqli_query($conn,$pgb);
                if(mysqli_num_rows($branch) == 1)
                {
                    $row = mysqli_fetch_array($branch,MYSQLI_NUM);
                    $b_code = $row[0];
                }
                $ug_code = 'UG' . $rand;
                $ac_code = 'AC' . $rand;
                $pg_code = 'PG' . $rand;
                //echo $ug_code." " .$ac_code." " .$pg_code;
                $sql = "insert into academic values('$sname10','$bname10','$pyear10','$per10','$sname12','$bname12','$pyear12','$per12','$reg','$ac_code')";
                $grad = "insert into ug values('$gp','$gy','$gc','$ug_code','$ac_code','$gu','$gd')";
                $pg = "insert into pg values('2020','$spi1','$spi2','$spi3','$spi4','$spi5','$spi6','$cpi','$pg_code','$b_code','$ug_code')";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    $result = mysqli_query($conn,$grad);
                    if($result)
                    {
                        $result = mysqli_query($conn,$pg);
                        if($result)
                        {
                            echo '<script>alert("Your Datails Entered Successfully!<br> Move to next Tab");</script>';
                            echo '<script>window.open("./Profile.php","frame3");</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error! Please Try Again! 1");</script>';
                            //echo '<script>window.open("./Profile.php","frame3");</script>';
                        }
                    }
                    else{
                        echo '<script>alert("Error! Please Try Again! 2");</script>';
                        //echo '<script>window.open("./Profile.php","frame3");</script>';
                    }
                }
                else
                {
                    echo '<script>alert("Error! Please Try Again! 3");</script>';
                    //echo '<script>window.open("./Profile.php","frame3");</script>';
                }    
            }
        }
?>