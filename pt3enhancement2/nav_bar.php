<?php session_start(); 
$login_session=$_SESSION['login_user'];
if(!isset($_SESSION['login_user']))
{
    // not logged in
    header('Location: login.php');
    exit();
}?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="jquery-3.5.1.min.js"></script>
 

<style type="text/css">
  .navbar {
    padding-top: 2px;
    padding-bottom: 2px;
    border: 1;
    margin-bottom: 0;
    font-size: 18px;
    letter-spacing: 3px; 
    background-color: white;
    color: black;
  }

  .container-fluid {
    color: black;
  }

    #wlc {
      font-size: 25px;
    }
</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" id="navtext" style="color: #c58585; font-size: 35px">Happiness</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li id="wlc" ><a href="index.php" style="color: black">Welcome, <?php echo $_SESSION["user_name"];?></a></li>
      <li><a href="index.php" style="color: black">Home</a></li>
      <li><a href="search.php" style="color: black">Search Products</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="products.php">Products</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="staffs.php">Staffs</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="search.php">Search Products</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>