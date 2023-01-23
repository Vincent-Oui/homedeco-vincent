<!--
Matric Number: A176172
Name: Goh Sze Minn
-->
<?php session_start(); 

  ?>
  
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Happiness Sweets Ordering System : Home</title>

  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

       <style type="text/css">
      html{
        background-color: mistyrose;
      }
      .thebox
        {
        box-sizing: border-box;
        width:60px;
        height:60px;
        margin: auto;
        background: url(happiness logo.png) center;
        background-size: contain;
        background-repeat: no-repeat;
        background-origin: content-box;
       
        }
    </style>

</head>
<body

<?php  

if(!isset($_SESSION['login_user']))
{   
    include_once 'login_bar.php';
    // not logged in
  
} else { include_once 'home_bar.php'; } ?>

  <div class="thebox col-md-12  col-sm-12 col-xs-12">
    
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>