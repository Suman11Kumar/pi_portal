
<?php
session_start();
$conn=mysqli_connect("localhost","root","","pi_portal");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $name=$_POST['name'];
    $regno=$_SESSION['user'];
    $course=$_POST['Cno'];

    $guardian=$_POST['gname'];
    $guardian_contact=$_POST['gcont'];
    $guardian_address=$_POST['gadd'];

    $branch=$_POST['bno'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $linkedin=$_POST['lid'];
    $gender=$_POST['gender'];
    $category=$_POST['category'];
    $physically=$_POST['Physically_challenged'];
    $residence=$_POST['Residence'];
    $marital=$_POST['Marital_Status'];
    $contact=$_POST['cnum'];
    $Current_add=$_POST['Padd'];
    $Permanent_add=$_POST['Padd1'];



    if($name || $regno || $course || $guardian || $branch || $dob || $email || $linkedin || $gender || $category || $physically || $residence || $marital || $contact || $Current_add || $Permanent_add )
    {
        $b_code ="";
        $bquery = "select b_code from branch where course='$course' and branch_name='$branch';";
        $res = mysqli_query($conn,$bquery);
        if(mysqli_num_rows($res) == 1)
        {
            $row = mysqli_fetch_array($res,MYSQLI_NUM);
            $b_code = $row[0];
        }
        else{
            echo '<script>alert("Error! Please Try Again! 1");</script>';
            echo '<script>window.open("./Profile.php","frame3");</script>';
        }

        $query=mysqli_query($conn,"insert into student_personel_details values('$regno','$contact','$email','$dob','$gender','$category','$guardian','$guardian_ad  dress','$guardian_contact,'$marital','$Current_add','$Permanent_add','$linkedin','$b_code','$residence');");
        if($query)
        {
            echo '<script>alert("Your Datails Entered Successfully!<br> Move to next Tab");</script>';
            echo '<script>window.open("./Profile.php","frame3");</script>';
        }  
        else{
            echo '<script>alert("Error! Please Try Again!");</script>';
            echo '<script>window.open("./Profile.php","frame3");</script>';
        } 
    }
    else
    {
        echo '<script>alert("Error! You should fill all the feilds");</script>';
        echo '<script>window.open("./Profile.php","frame3");</script>';
    }
mysqli_close($conn);

}
?>