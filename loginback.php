<?php
    session_start();
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $Pwd = $_POST["psw"];
        $get=$_POST["category"];
    
    $con = mysqli_connect("localhost", "root", "", "ttgms");
        mysqli_select_db($con, "ttmgs");
        
        if($get=='customer'){

        $Q2 = "select * from user where userMail='$email' and password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {

              $_SESSION['email']=$UN['email'];
                $_SESSION['psw']=$row['psw'];
                header("location:./CheckOutForm.php");
               

              
        } 
    else {
            echo "Invalid user name and password";
        }
        }
    
        
  
    elseif($get=='driver'){

        $Q2 = "select * from driver where dEmail='$email' and password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              header("location:./leave.php");
              $_SESSION['email']=$email;
                $_SESSION['psw']=$row['psw'];
              
        } 
    else {
            echo "Invalid user name and password";
        }
    }
    elseif($get=='guide'){

        $Q2 = "select * from guide where gEmail='$email' and password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              header("location:./leave.php");
              $_SESSION['email']=$email;
                $_SESSION['psw']=$row['psw'];
              
        } 
    else {
            echo "Invalid user name and password";
        }
    }
    elseif($get=='admin'){

        $Q2 = "select * from admin where aEmail='$email' and password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              header("location:./add_home.php");
              $_SESSION['email']=$email;
                $_SESSION['psw']=$row['psw'];
              
        } 
    else {
            echo "Invalid user name and password";
        }
    }
    
    }
  
    ?>