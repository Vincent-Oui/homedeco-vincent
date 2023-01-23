 <?php 
 	   include_once 'products_crud.php' ?>

  <script src="jquery-3.5.1.min.js"></script>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Happiness Sweets Ordering System : Search Products</title>

  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include_once 'nav_bar.php';  ?>
    <style>
      .input-group {
        padding-bottom: 10px;
      }
    </style>
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style type="text/css">
   #body {
        background-color: mistyrose;
        font: 16px "Montserrat", sans-serif;
      }

     #my th {
        font-size: 20px;
        background-color: #7E7E7E;
        color: white;
      }

      #my tr{
        font-size: 16px;
      }

</style>

<body id="body">

    <script>
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#my tr ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


    <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Products List</h2>
      </div>

       
      <div class="input-group input-group-lg">
        <label class="input-group-addon " ><i class="glyphicon glyphicon-search"></i></label>
      <input type="Search" id="myInput" placeholder="Search for products here"  class="form-control ">
      </div>
      
     
      <table class="table table-striped table-bordered" id="my">
        <tr>
        <th>Product ID</th> 
        <th>Name</th>
        <th>Price (RM)</th>
        <th>Brand</th>
       <!--  <th>Type</th>
          <th>Flavour</th>
          <th>Colour</th> -->
        <th>Action</th>
        </tr>
      <?php
      // Read
       
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select * from tbl_products_a176172_pt3 ");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td id="try1"><?php echo $readrow['fld_product_num']; ?></td>
        <td id="try2"><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
       <!--  <td><?php echo $readrow['fld_product_type']; ?></td>
        <td><?php echo $readrow['fld_product_flavour']; ?></td>
        <td><?php echo $readrow['fld_product_colour']; ?></td> -->
        <td>
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-warning btn-xs"  target="_blank" >Details</a>         
           <?php if ($_SESSION["user_level"]=="Admin") {?>
          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a> <?php } ?>
        </td>
      </tr>
      <?php } ?>
 
    </table>
    </div>
  </div>
 
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>