<HTML lang="en">
<HEAD>
  <TITLE>
  Tourists Transportation and Guiding Management System for a Travel Agency In Badulla  
  </TITLE>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  

<!-- CUSTOM STYLE CSS -->
    <link href="ass\style.css" rel="stylesheet" />


      <style>

      * {
          box-sizing: border-box;
        }
  
@media screen and(min-width:600px ){
  #image{
      flex:50%;
      max-width: 50%;
      }
  }

@media screen and(max-width:800px ){
  #image{
      flex:100%;
      max-width: 100%;
      }
  }

.div1 {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.image {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
  background-color :black;
  flex-wrap: nowrap;
}

.img:hover{
transform: scale(1.15);
}
.img{
    margin-top: 10px;
 }

.full {
 
    width: 100%; 
 
}
 
 
 
.footer {
 
                height: auto;
 
                padding-bottom: 30px;
 
                position: relative;
 
                width: 100%;
 
                 color:green;
 
                border-bottom: 1px solid #CCCCCC;
 
                border-top: 1px solid #DDDDDD;
 
                background: #ffffff;
 
                background: -webkit-linear-gradient(to right, #000000, #ffffff); 
 
                background: linear-gradient(to right, #000000, #ffffff);   
 
}
 
 
 
 
 

.footer ul {
 
                font-size: 13px;
 
                list-style-type: none;
 
                margin-left: 0;
 
                padding-left: 0;
 
                margin-top: 15px;
 
                color: #000000;
 
}


 

</style>
</HEAD>

<BODY>
<div style = "background-image:url('Badulla.jpg');  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">
<div style="background-color: Gray;font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

<!--Nav Bar-->  
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="Transportation.php">Transport</a>
    </li>
        

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="guide.php">Guide</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href="driver.php">Driver</a>
    </li>
  
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link" href="package.php">Package</a>
    </li>
   
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
  
    
    <li class="nav-item">
      <a class="nav-link" href="places.php">Tourist Attraction Places</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
    
      <li class="nav-item">
      <a class="nav-link" href="about.php">About Us</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
   
 <li class="nav-item" >
      <a class="nav-link" href="cancelbooking.php">Cancel Booking</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

   <li class="nav-item" >
      <a class="nav-link" href=""><img src="img\add.png" /></a>
    </li>
 <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item" >
  <a class="nav-link" href=""><img src="img\log.png" /></a>
    </li>
    
    </li>
  </ul>
</nav>
</div>
              
<div >
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 60%;
    padding: 10px;">
    <div class="col-15">
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
                    
              <div class="thumbnail" style="width:100%";>
      <form class="form-horizontal w3-left w3-border w3-light-gray" id="register-form1" method="post" action="./new_driverBack.php" style="background-color: #E0ECF8;">
    <center><div class="col-md-12 col-sm-12 alert-info"><br><h3>New Drivers Application</h3> </div></center>

<div class="col-15">

              <div class="thumbnail" style="width:100%",>
                    <center><b>
                  
                  
                        
                        <br>
                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">First Name:- </span><input id="nDriverFname" type="text" class="form-control" name="nDriverFname" placeholder="First Name" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">Last Name:- </span><input id="nDriverLname" type="text" class="form-control" name="nDriverLname" placeholder="Last Name" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">NIC :- </span><input id="nDnic" type="text" class="form-control" name="nDnic" placeholder="NIC" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">DOB:- </span><input id="nDdob" type="text" class="form-control" name="nDdob" placeholder="DOB" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">Telephone No :- </span><input id="nDcontactNo" type="text" class="form-control" name="nDcontactNo" placeholder="Telephone Number" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">E-mail :- </span><input id="nDmail" type="email" class="form-control" name="nDmail" placeholder="E-mail" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">Address:- </span><input id="nDaddress" type="text" class="form-control" name="nDaddress" placeholder="Address" required autofocus> </div></div><br>


              <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">CV:- </span><input id="nDcv" type="file" class="form-control" name="nDcv" placeholder="Upload Your CV" required autofocus> </div></div><br>

                                 
                        <button type="submit" name="register1" id="submit-button" class="btn btn-info btn-block">Submit
                                </button>

                                <button type="reset" class="btn btn-info btn-block">Clear
                                </button>
                                </from>
                              </div></div></form></b></center></div></div></div></div>



<footer>
  
 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Contact </h3>
 
                    <ul>
 
                       <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
 
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-7 ">
 
                    <h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer></div>
</BODY>
</HTML>