
<?php 

session_start();
if(!isset($_SESSION['user']))
    header("Location: ./studentlogin.html");

$conn= mysqli_connect("localhost","root","","pi_portal");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $cnewpass=$_POST['cnewpass'];
        $user=$_SESSION['user'];

        $queryget=mysqli_query($conn,"Select password from reg_detail where Reg_No='$user' ");
        $row=mysqli_fetch_array($queryget);
        $oldpassword=$row['password'];
        if($oldpassword==$oldpass)
        {
            if($newpass==$cnewpass)
            {
                $query=mysqli_query($conn,"Update reg_detail SET password='$newpass' where Reg_No='$user'");

            }
            session_destroy();
            echo "<script> alert('Your Password has been Changed')</script>";
            header("Location: ./home.php");
            
        }
        else{
            die("Password doesn't Match");
        }
        
    }


mysqli_close();
?>