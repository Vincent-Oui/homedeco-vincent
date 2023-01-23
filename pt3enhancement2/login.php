<?php session_start();
include_once 'database.php' ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Happiness Sweets Sdn. Bhd. Ordering System : Login</title>

  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

 <?php include_once 'login_bar.php'; ?>

<style type="text/css">
   #body {
        background-color: mistyrose;
        font: 16px "Montserrat", sans-serif;}

  .center {
        display: block;
        margin-left: auto;
        border-radius: 25px;
        border-image: 25px;
        margin-right: auto;
        width: 50%;
      }
    #uname{
        color:   #white;
         margin:auto;
        width: 250px;
        border-color:   #DCDCDC;
        background-color: white;
        font-size: 15px;
        line-height: 1.5;
        display: block;
        height: 50px;
        border-radius: 25px;
        text-align: center;
        margin-top: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 50px 0 rgba(0, 0, 0, 0.19);
       }

  #pw{
        color:   #white;
        margin:auto;
        width: 250px;
        border-color:   #DCDCDC;
        background-color: white;
        font-size: 15px;
        line-height: 1.5;
        display: block;
        height: 50px;
        border-radius: 25px;
        text-align: center;
        margin-top: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 50px 0 rgba(0, 0, 0, 0.19);
      }

        #login{
       
        color: white;
        background-color: #c58585;
        border-color:   #c58585;
        font-family: 100%,Montserrat;
        font-weight: bold;
        margin: auto;
        text-transform: uppercase;
        border-radius: 25px;
        width: 250px;
        margin-top: 30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 50px 0 rgba(0, 0, 0, 0.19);
     }

     #form{
      width: 350px;
      border: 2px solid #ccc;
      padding: 30px;
      margin: auto;
      margin-top: 30px;
      background: white;
      border-radius: 10px;
    }
        
</style>


<body id="body">
   <?php
 try  
 {  
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))  
      {  
          
                $query = "SELECT * FROM tbl_staffs_a176172_pt3 WHERE fld_staff_email = :uname AND fld_pw = :pw";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'uname'     =>     $_POST["uname"],  
                          'pw'     =>     $_POST["pw"]  
                     )  
                ); 
                 $result = $statement->fetchAll(); 
                $count = $statement->rowCount();  
                if($count > 0)  
                {  

                     $_SESSION["login_user"] = $_POST["uname"];  


                      foreach($result as $readrow) {
                      $_SESSION["user_level"]=$readrow["fld_position"];
                      $_SESSION["user_name"]=$readrow["fld_staff_fname"];
                }
          
              header("location:index.php"); 
                
                } 
                
                else  
                {  
                   echo "<div class='alert alert-danger margin-top-40' role='alert'>Username and Password invalid!</div>"; 
            
           }  
       
 } 

 }
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<div class="container-fluid" id="outline">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2">
    <form action="login.php" method="post" name="frmlogin"class="form-horizontal" id="form">
      <div class="form-group">
         <div class="col-sm-12">
        <img src="happiness logo.png" class="img-responsive center" style="width: 250px">
      </div>
          <!-- <label for="productid" class="col-sm-3 control-label" hidden="">Username</label> -->
          <div class="col-sm-12">
          <input name="uname" type="text" class="form-control" id="uname" placeholder="Email" required="">
        </div>
        </div>
      <div class="form-group">
          <!-- <label for="productname" class="col-sm-3 control-label" hidden="">Password</label> -->
          <div class="col-sm-12">
          <input name="pw" type="password" class="form-control" id="pw" placeholder="Password"  required="">
        </div>
      </div>
    <div class="form-group">
       <div class="col-sm-12">
              <button type="submit" id="login" name="login" class=" btn btn-primary btn-block" value="Login" aria-hidden="true" onclick="validateForm()">Login</button> 
          </div>
            </div>
    </form>

    <script type="text/javascript">
 
  function validateForm() {
 
      var x = document.forms["frmlogin"]["uname"].value;
      var y = document.forms["frmlogin"]["pw"].value;
      //var x = document.getElementById("prd").value;
      //var y = document.getElementById("qty").value;
      if (x == null || x == "") {
          alert("Please key in useremail!");
          document.forms["frmlogin"]["uname"].focus();
          //document.getElementById("prd").focus();
          return false;
      } 
      if (y == null || y == "") {
          alert("Please key in password!");
          document.forms["frmlogin"]["pw"].focus();
          //document.getElementById("qty").focus();
          return false;
      }
        return true;
  }
 
</script>

</body>
</html>