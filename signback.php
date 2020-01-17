<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          echo("successful in connection");
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){
          $fName = $_POST['fName']; 
          $lName = $_POST['lName']; 
          $uNIC = $_POST['uNIC']; 
          $uAge = $_POST['uAge']; 
          $userMail = $_POST['userMail']; 
          $password = $_POST['password']; 
          
          
          $register_query = "INSERT INTO `user`(`fName`, `lName`, `uNIC`, `uAge`, `userMail`, `password`) VALUES ('$fName', '$lName', '$uNIC', '$uAge', '$userMail', '$password')";

          try{
            $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
              echo"<script>alert('registration successful');</script>";
            }
            else{
             
            echo"<script>alert('error in registration');</script>";
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>