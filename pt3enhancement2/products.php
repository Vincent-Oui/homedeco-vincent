<!--
Matric Number: A176172
Name: Goh Sze Minn
-->

<?php
  include_once 'products_crud.php';
?>
 <script src="jquery-3.5.1.min.js"></script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
  <title>Happiness Ordering System : Products</title>

  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <?php include_once 'nav_bar.php'; ?>
    
    <style>
      .input-group {
        padding-bottom: 10px;
      }

      #body {
        background-color: mistyrose;
        font: 18px "Montserrat", sans-serif;
        
      }

        #my th {
        font-size: 20px;
        background-color: mistyrose;
        color: white;
      }

      #my tr{
        font-size: 16px;
      }
 
    </style>
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="body">
 
 <?php if ($_SESSION["user_level"]=="Admin") { ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Product</h2>
      </div>
    <form action="products.php" method="post" class="form-horizontal" enctype="multipart/form-data" id="frm">
      <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
          <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>" required>
        </div>
        </div>

      <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
          <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>" required>
        </div>
        </div>

        <div class="form-group">
          <label for="productprice" class="col-sm-3 control-label">Price</label>
          <div class="col-sm-9">
          <input name="price" type="number" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>" min="0.0" step="0.01" required>
        </div>
        </div>

      <div class="form-group">
          <label for="productbrand" class="col-sm-3 control-label">Brand</label>
          <div class="col-sm-9">
          <select name="brand" class="form-control" id="productbrand" required>
            <option value="">Please select</option>
            <option value="Rendez Vous" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Rendez Vous") echo "selected"; ?>>Rendez Vous</option>
        <option value="Fun Express" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Fun Express") echo "selected"; ?>>Fun Express</option>
        <option value="Sweet Candy Company" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Sweet Candy Company") echo "selected"; ?>>Sweet Candy Company</option>
        <option value="AirHeads" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="AirHeads") echo "selected"; ?>>AirHeads</option>
        <option value="Campfire" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Campfire") echo "selected"; ?>>Campfire</option>
        <option value="Jelly Bunny" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Jelly Bunny") echo "selected"; ?>>Jelly Bunny</option>
        <option value="Kopiko" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Kopiko") echo "selected"; ?>>Kopiko</option>
        <option value="Dubble Bubble" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Dubble Bubble") echo "selected"; ?>>Dubble Bubble</option>
        <option value="Mentos" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Mentos") echo "selected"; ?>>Mentos</option>
        <option value="Sassy Spheres" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Sassy Spheres") echo "selected"; ?>>Sassy Spheres</option>
        <option value="Sassy Starlights" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Sassy Starlights") echo "selected"; ?>>Sassy Starlights</option>
        <option value="Floss Sugar" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Floss Sugar") echo "selected"; ?>>Floss Sugar</option>
        <option value="Espeez Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Espeez Candy") echo "selected"; ?>>Espeez Candy</option>
        <option value="Haribo" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Haribo") echo "selected"; ?>>Haribo</option>
        <option value="Giant Gummy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Giant Gummy") echo "selected"; ?>>Giant Gummy</option>
        <option value="Big Foot" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Big Foot") echo "selected"; ?>>Big Foot</option>
        <option value="Fruit Plus" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Fruit Plus") echo "selected"; ?>>Fruit Plus</option>
        <option value="Archie McPhee" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Archie McPhee") echo "selected"; ?>>Archie McPhee</option>
        <option value="Starburst" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Starburst") echo "selected"; ?>>Starburst</option>
        <option value="Tootsie Roll" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Tootsie Roll") echo "selected"; ?>>Tootsie Roll</option>
        <option value="Cocoaland" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Cocoaland") echo "selected"; ?>>Cocoaland</option>
        <option value="Rinda" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Rinda") echo "selected"; ?>>Rinda</option>
        <option value="WarHeads" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="WarHeads") echo "selected"; ?>>WarHeads</option>
        <option value="Prisma Mexico" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Prisma Mexico") echo "selected"; ?>>Prisma Mexico</option>
        <option value="Jovy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Jovy") echo "selected"; ?>>Jovy</option>
        <option value="Charms" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Charms") echo "selected"; ?>>Charms</option>
        <option value="Bobs Sweet Stripes" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Bobs Sweet Stripes") echo "selected"; ?>>Bobs Sweet Stripes</option>
        <option value="LifeSavers" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="LifeSavers") echo "selected"; ?>>LifeSavers</option>
        <option value="Pixy Stix" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Pixy Stix") echo "selected"; ?>>Pixy Stix</option>
        <option value="Hitto" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Hitto") echo "selected"; ?>>Hitto</option>
        <option value="Guan Sheung Yuan Food" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Guan Sheung Yuan Food") echo "selected"; ?>>Guan Sheung Yuan Food</option>
        <option value="Ricola" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Ricola") echo "selected"; ?>>Ricola</option>
        <option value="Brachs" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Brachs") echo "selected"; ?>>Brachs</option>
        <option value="Big Red" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Big Red") echo "selected"; ?>>Big Red</option>
        <option value="Eclipse" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Eclipse") echo "selected"; ?>>Eclipse</option>
        <option value="CurlyCates" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="CurlyCates") echo "selected"; ?>>CurlyCates</option>
        <option value="Cloud9" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Cloud9") echo "selected"; ?>>Cloud9</option>
        <option value="Dryden & Plamer" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Dryden & Plamer") echo "selected"; ?>>Dryden & Plamer</option>
        <option value="Chocolate Storybook" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Chocolate Storybook") echo "selected"; ?>>Chocolate Storybook</option>
          </select>
        </div>
        </div>  

        <div class="form-group">
          <label for="producttype" class="col-sm-3 control-label">Type</label>
          <div class="col-sm-9">
          <select name="type" class="form-control" id="producttype" required>
           <option value="Bons Bons" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Bons Bons") echo "selected"; ?>>Bons Bons</option>
           <option value="Bulk Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Bulk Candy") echo "selected"; ?>>Bulk Candy</option>
           <option value="Candy Cane" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Candy Cane") echo "selected"; ?>>Candy Cane</option>
           <option value="Candy Corn" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Candy Corn") echo "selected"; ?>>Candy Corn</option>
           <option value="Chewing Gum" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Chewing Gum") echo "selected"; ?>>Chewing Gum</option>
           <option value="Chewy Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Chewy Candy") echo "selected"; ?>>Chewy Candy</option>
            <option value="Cotton Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Cotton Candy") echo "selected"; ?>>Cotton Candy</option>
            <option value="Gummy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Gummy") echo "selected"; ?>>Gummy</option>
            <option value="Hard Candys" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Hard Candy") echo "selected"; ?>>Hard Candy</option>
            <option value="Herb Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Herb Candy") echo "selected"; ?>>Herb Candy</option>
            <option value="Jelly Beans" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Jelly Beans") echo "selected"; ?>>Jelly Beans</option>
        <option value="Lollipops" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Lollipops") echo "selected"; ?>>Lollipops</option>
        <option value="Marshmallows" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Marshmallows") echo "selected"; ?>>Marshmallows</option>
        <option value="Mexican Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Mexican Candy") echo "selected"; ?>>Mexican Candy</option>
        <option value="Rock Candy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Rock Candy") echo "selected"; ?>>Rock Candy</option>
        <option value="Taffy" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Taffy") echo "selected"; ?>>Taffy</option>
      </select>
        </div>
        </div>

        <div class="form-group">
          <label for="productflavour" class="col-sm-3 control-label">Flavour</label>
          <div class="col-sm-9">
          <select name="flavour" class="form-control" id="productflavour" required>
            <option value="">Please select</option>
            <option value="Apple" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Apple") echo "selected"; ?>>Apple</option>
            <option value="Bacon" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Bacon") echo "selected"; ?>>Bacon</option>
            <option value="Berries" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Berries") echo "selected"; ?>>Berries</option>
            <option value="Blackcurrant" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Blackcurrant") echo "selected"; ?>>Blackcurrant</option>
            <option value="Blueberry" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Blueberry") echo "selected"; ?>>Blueberry</option>
            <option value="Cherry" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Cherry") echo "selected"; ?>>Cherry</option>
            <option value="Chocolate" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Chocolate") echo "selected"; ?>>Chocolate</option>
            <option value="Cinnamon" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Cinnamon") echo "selected"; ?>>Cinnamon</option>
            <option value="Coffee" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Coffee") echo "selected"; ?>>Coffee</option>
            <option value="Fruity" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Fruity") echo "selected"; ?>>Fruity</option>
            <option value="Grape" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Grape") echo "selected"; ?>>Grape</option>
            <option value="Lemon" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Lemon") echo "selected"; ?>>Lemon</option>
            <option value="Milk" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Milk") echo "selected"; ?>>Milk</option>
            <option value="Mint" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Mint") echo "selected"; ?>>Mint</option>
             <option value="Orange" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Orange") echo "selected"; ?>>Orange</option>
            <option value="Original" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Original") echo "selected"; ?>>Original</option>
            <option value="Polar Ice" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Polar Ice") echo "selected"; ?>>Polar Ice</option>
            <option value="Raspberry" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Raspberry") echo "selected"; ?>>Raspberry</option>
            <option value="Sour" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Sour") echo "selected"; ?>>Sour</option>
            <option value="Sour Cherry" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Sour Cherry") echo "selected"; ?>>Sour Cherry</option>
            <option value="Vanilla" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Vanilla") echo "selected"; ?>>Vanilla</option>
            <option value="Watermelon" <?php if(isset($_GET['edit'])) if($editrow['fld_product_flavour']=="Watermelon") echo "selected"; ?>>Watermelon</option>
          </select>
        </div>
        </div>

      <div class="form-group">
          <label for="productcolour" class="col-sm-3 control-label">Flavour</label>
          <div class="col-sm-9">
          <select name="colour" class="form-control" id="productcolour" required>
            <option value="">Please select</option>
            <option value="Assorted" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Assorted") echo "selected"; ?>>Assorted</option>
            <option value="Black" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Black") echo "selected"; ?>>Black</option>
            <option value="Blue" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Blue") echo "selected"; ?>>Blue</option>
            <option value="Brown" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Brown") echo "selected"; ?>>Brown</option>
            <option value="Gold" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Gold") echo "selected"; ?>>Gold</option>
            <option value="Green" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Green") echo "selected"; ?>>Green</option>
            <option value="Orange" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Orange") echo "selected"; ?>>Orange</option>
            <option value="Pink" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Pink") echo "selected"; ?>>Pink</option>
            <option value="Purple" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Purple") echo "selected"; ?>>Purple</option>
            <option value="Red" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Red") echo "selected"; ?>>Red</option>
            <option value="Silver" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Silver") echo "selected"; ?>>Silver</option>
            <option value="White" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="White") echo "selected"; ?>>White</option>
            <option value="Yellow" <?php if(isset($_GET['edit'])) if($editrow['fld_product_colour']=="Yellow") echo "selected"; ?>>Yellow</option>
          </select>
        </div>
        </div>

        <div class="form-group">
          <label for="imgupload" class="col-sm-3 control-label">Image</label>
          <div class="col-sm-9">
        <div class="input-group">
        <label class="form-control"  id="filename"> <?php  if(isset($_GET['edit'])) echo $editrow['fld_product_image']; ?>
            </label>
            <input type="text" name="imgname" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_image']; ?>" hidden="">
            <?php if (isset($_GET['edit'])) { ?>
              <label class="input-group-btn">
            <span class="btn btn-primary">
               <input type="file" id="fileToUpload" name="fileToUpload" style="display: none;" onchange="$('#filename').text(this.files[0].name)">  Choose File 
            </span>
        </label>
      <?php } else {?>
        <label class="input-group-btn">
            <span class="btn btn-primary">
               <input type="file" id="fileToUpload" name="fileToUpload" style="display: none;" required="" onchange="$('#filename').text(this.files[0].name)">  Choose File 
            </span>
        </label>
     <?php } ?>
    </div>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
          <button class="btn btn-default" type="submit" name="update" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" type="submit" name="create" onclick="isEmpty()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        </div>
      </div>
    </form>
    </div>
  </div>
     <?php } ?>

    <script>


      function isEmpty() {
 
      var x = document.getElementById('fileToUpload').value;

     
      if (x == null || x == "") {
          alert("Please upload a photo!");
  
          return false;
      }
       
      return true;
  }


</script>

 <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Products List</h2>
      </div>


      <table class="table table-striped table-bordered">
        <tr align="center">
          <th>Product ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Brand</th>
        <!--  <th>Type</th>
          <th>Flavour</th>
          <th>Colour</th> -->
          <th>Action</th>
        </tr>
      <?php
      // Read
      $per_page = 10;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select * from tbl_products_a176172_pt3 LIMIT $start_from, $per_page");
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
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
           <?php if ($_SESSION["user_level"]=="Admin") {?>
          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a> <?php } ?>
        </td>
      </tr>
      <?php } ?>
 
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a176172_pt3");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>