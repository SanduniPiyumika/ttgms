
        
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

        if(isset($_POST['register'])){
          $nGuideFname = $_POST['nGuideFname']; 
          $nGuideLname = $_POST['nGuideLname']; 
          $nGnic = $_POST['nGnic']; 
          $nGdob = $_POST['nGdob']; 
          $nGcontactNo = $_POST['nGcontactNo']; 
          $nGmail = $_POST['nGmail']; 
          $nGaddress = $_POST['nGaddress'];
          $nGcv = $_POST['nGcv'];
          
          
          $register_query = "INSERT INTO `newguide`(`nGuideFname`, `nGuideLname`, `nGnic`, `nGdob`, `nGcontactNo`, `nGmail`,`nGaddress`,`nGcv`) VALUES ('$nGuideFname', '$nGuideLname', '$nGnic', '$nGdob', '$nGcontactNo', '$nGmail','nGaddress','nGcv')";

          try{
            $register_result = mysqli_query($conn, $register_query);
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