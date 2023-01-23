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
  }
    #wlc {
      font-size: 25px;
    }

    .navbar-nav{
      color: black;
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
      <a class="navbar-brand" href="index.php" style="color: black; font-size: 35px">Happiness</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li id="wlc"><a href="index.php"  style="color: #c858585;font-size: 18px;" >Welcome, <?php echo $_SESSION["user_name"];?></a></li>
      <li><a href="index.php"  style="color: #6e6d70">Home</a></li>     
      <li><a href="products.php"  style="color: #6e6d70">Products</a></li>
      <li><a href="staffs.php"  style="color: #6e6d70">Staffs</a></li>
      <li><a href="customers.php" style="color: #6e6d70">Customers</a></li>
      <li><a href="orders.php" style="color: #6e6d70">Orders</a></li>
      <li><a href="search.php" style="color: #6e6d70">Search Products</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php" style="color: black">Logout</a></li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>