
<link href="css/bootstrap.min.css" rel="stylesheet">

<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 
//Create
if (isset($_POST['create'])) { 


  $target_dir = "products/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
  // Check if image file is a actual image or fake image
  
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "<div class='alert alert-danger margin-top-40' role='alert'>File is not an image!</div>"; 
      $uploadOk = 0;
    }
  
 
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>File already exists!</div>";  
    $uploadOk = 0;
  }
 
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Sorry your file is too large</div>"; 
    $uploadOk = 0;
  }
 
  // Allow certain file formats
  if($imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpg") {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Only JPG, PNG or GIF file allowed.</div>"; 
    $uploadOk = 0;
  }
 
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Sorry your file is not uploaded.</div>"; 
  // if everything is ok, try to upload file
  } else {
    
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 

  try {
 
        $stmt = $conn->prepare("INSERT INTO tbl_products_a176172_pt3(fld_product_num, fld_product_name, fld_product_price, fld_product_brand, fld_product_type, fld_product_flavour, fld_product_colour, fld_product_image) VALUES(:pid, :name, :price, :brand, :type, :flavour, :colour, :picture)");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':price', $price, PDO::PARAM_INT);
      $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
      $stmt->bindParam(':type', $type, PDO::PARAM_STR);
      $stmt->bindParam(':flavour', $flavour, PDO::PARAM_STR);
      $stmt->bindParam(':colour', $colour, PDO::PARAM_STR);
      $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
       
      $pid = $_POST['pid'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $brand =  $_POST['brand'];
      $type = $_POST['type'];
      $flavour = $_POST['flavour'];
      $colour = $_POST['colour'];
      $picture = $_FILES["fileToUpload"]["name"];

    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
} else {
      echo "Sorry, there was an error uploading your file.";
    }
 }}
 
//Update

if (isset($_POST['update'])) {

if (empty($_FILES["fileToUpload"]["name"])) {
  try {
        $stmt = $conn->prepare("UPDATE tbl_products_a176172_pt3 SET fld_product_num = :pid, fld_product_name = :name, fld_product_price = :price, fld_product_brand = :brand, 
        fld_product_type= :type, fld_product_flavour = :flavour, fld_product_colour = :colour WHERE fld_product_num = :oldpid");

      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':price', $price, PDO::PARAM_INT);
      $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
      $stmt->bindParam(':type', $type, PDO::PARAM_STR);
      $stmt->bindParam(':flavour', $flavour, PDO::PARAM_STR);
      $stmt->bindParam(':colour', $colour, PDO::PARAM_STR);

      $stmt->bindParam(':oldpid', $oldpid, PDO::PARAM_STR);
       
      $pid = $_POST['pid'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $brand = $_POST['brand'];
      $type =  $_POST['type'];
      $flavour= $_POST['flavour'];
      $colour = $_POST['colour'];

      $oldpid = $_POST['oldpid'];

      $stmt->execute();
    
    // header("Location: products.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  } 

}

else {

  $target_dir = "products/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $oldimg = $target_dir.($_POST["imgname"]);
 
  // Check if image file is a actual image or fake image
 
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "<div class='alert alert-danger margin-top-40' role='alert'>File is not an image!</div>"; 
      $uploadOk = 0;
    }
  
  //Delete old file if uploaded new
  if (file_exists($oldimg) ){
    unlink($oldimg);
    echo "<div class='alert alert-danger margin-top-40' role='alert'>New Image Updated. Old product image deleted.</div>";  
    $uploadOk = 1;
  }

 
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>File already exists.</div>";  

    $uploadOk = 0;
  }
 
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Sorry your file is too large</div>"; 
    $uploadOk = 0;
  }
 
  // Allow certain file formats
  if($imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpg") {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Only JPG, PNG or GIF file allowed.</div>"; 
    $uploadOk = 0;
  }
 
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Sorry your file is not uploaded.</div>"; 
  // if everything is ok, try to upload file
  } else {
    
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 
  try {
        $stmt = $conn->prepare("UPDATE tbl_products_a176172_pt3 SET fld_product_num = :pid, fld_product_name = :name, fld_product_price = :price, fld_product_brand = :brand, fld_product_type = :type, fld_product_flavour = :fld_product_flavour, fld_product_colour = :colour, fld_product_image = :picture WHERE fld_product_num = :oldpid");

      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':price', $price, PDO::PARAM_INT);
      $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
      $stmt->bindParam(':type', $type, PDO::PARAM_STR);
      $stmt->bindParam(':flavour', $flavour, PDO::PARAM_STR);
      $stmt->bindParam(':colour', $colour, PDO::PARAM_STR);

      $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
      $stmt->bindParam(':oldpid', $oldpid, PDO::PARAM_STR);
       
      $pid = $_POST['pid'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $brand = $_POST['brand'];
      $type =  $_POST['type'];
      $flavour = $_POST['flavour'];
      $colour = $_POST['colour'];

      $picture = $_FILES["fileToUpload"]["name"];
      $oldpid = $_POST['oldpid'];

     
      $stmt->execute();
    
    
    // header("Location: products.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  } 
}
else {
      echo "Sorry, there was an error uploading your file.";
    }
 
}
} } 

//Delete
if (isset($_GET['delete'])) {
 
  try {
 
      $stmt = $conn->prepare("DELETE FROM tbl_products_a176172_pt3 WHERE fld_product_num = :pid");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
       
    $pid = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: products.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
 
  try {
 
      $stmt = $conn->prepare("SELECT * FROM tbl_products_a176172_pt3
        WHERE fld_product_num = :pid");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
       
    $pid = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
} 
  $conn = null;
?>