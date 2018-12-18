<?php
   
   session_start();
   if(isset($session['user']))
    unset($_session['user']);
    //$_session['user']='reg_no';
    $conn = mysqli_connect("localhost","root","","pi_portal");

    if(!$conn)
    {
        die("Connection falied: ".mysqli_connect_error());
    }

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT reg_no from reg_detail where reg_no='$myusername' and Password='$mypassword' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['user'] = $myusername;
         
         header("Location: ./main.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "<script>alert('$error');</script>";
         header("Location: ./studentlogin.html");
      }
   }
   else
   {
    $error = "Error!";
    echo "<script>alert('$error');</script>";
    header("Location: ./studentlogin.html");
   }
?>