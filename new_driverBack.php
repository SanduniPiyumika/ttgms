              <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register1'])){
          $nDriverFname = $_POST['nDriverFname']; 
          $nDriverLname = $_POST['nDriverLname']; 
          $nDnic = $_POST['nDnic']; 
          $nDdob = $_POST['nDdob']; 
          $nDcontactNo = $_POST['nDcontactNo']; 
          $nDmail = $_POST['nDmail']; 
          $nDaddress = $_POST['nDaddress'];
          $nDcv = $_POST['nDcv'];
          
          
          $register1_query = "INSERT INTO `newdriver`(`nDriverFname`, `nDriverLname`, `nDnic`, `nDdob`, `nDcontactNo`, `nDmail`,`nDaddress`,`nDcv`) VALUES ('$nDriverFname', '$nDriverLname', '$nDnic', '$nDdob', '$nDcontactNo', '$nDmail','nDaddress','nDcv')";

          try{
            $register1_result = mysqli_query($conn, $register1_query);
            if(mysqli_affected_rows($conn)>0){
   echo"<script>alert('registration Successfully');</script>";
   header("location:./Home.php");
               
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