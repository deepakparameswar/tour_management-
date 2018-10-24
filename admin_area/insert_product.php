<?php
    include("includes/db.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Natours | Insert Products</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

    </head>
    
    <body>
    
        <div class="row"><!-- row starts -->
        
            <div class="col-lg-12"><!-- col-lg-12 starts -->
            
                <ol class="breadcrumb"><!-- breadcrumb starts -->
                
                  <li class="active">
                  
                    <i class="fa fa-dashboard"></i>Dashboard / Insert Products
                  
                  </li>
                
                </ol><!-- breadcrumb ends -->

            </div><!-- col-lg-12 ends -->
        
        </div><!-- row ends -->

        <div class="row"> <!-- row2 starts -->
        
            <div class="col-lg-12"><!-- col-lg-12 starts -->
            
                <div class="panel panel-default"><!-- panel panel-default starts -->
                
                    <div class="panel-heading"><!-- panel-heading starts -->
                    
                        <h3 class="panel-title">
                        
                            <i class="fa fa-money fa-fw"></i>Insert Products
                        
                        </h3>

                    </div><!-- panel-heading ends -->

                    <div class="panel-body"><!-- panel-body starts -->
                    
                        <form class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal starts -->
                        
                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Title</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_title" class="form-control" required>

                                </div>
                            
                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Package Category</label>

                                <div class="col-md-6">

                                    <select name="package_cat" class="form-control">
                                    
                                        <option>Select a Package Category</option>

                                        <?php

                                            $get_p_cats="select * from packages_categories";

                                            $run_p_cats = mysqli_query($con,$get_p_cats);

                                            while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                                                
                                                $p_cat_id = $row_p_cats['p_cat_id'];

                                                $p_cat_title = $row_p_cats['p_cat_title'];

                                                echo"<option value='$p_cat_id'>$p_cat_title</option>";

                                            }

                                        ?>
                                    
                                    </select>
                                    
                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Days</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_days" class="form-control" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Image 1</label>

                                <div class="col-md-6">

                                    <input type="file" name="product_img1" class="form-control" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Image 2</label>

                                <div class="col-md-6">

                                    <input type="file" name="product_img2" class="form-control" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Image 3</label>

                                <div class="col-md-6">

                                    <input type="file" name="product_img3" class="form-control" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Price</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_price" class="form-control" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Keywords</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_keywords" class="form-control" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                                        
                                <label class="col-md-3 control-label">Product Description</label>

                                <div class="col-md-6">

                                    <textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6">

                                    <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
                                </div>

                            </div><!-- form-group ends -->

                        </form> <!-- form-horizontal ends -->
                    
                    </div><!-- panel-body ends -->
                
                </div><!-- panel panel-default ends -->

            </div><!-- col-lg-12 ends -->
        
        </div><!-- row2 ends -->


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

    </body>

</html>


<?php

    if(isset($_POST['submit'])){
        $product_title = $_POST['product_title'];
        $package_cat = $_POST['package_cat'];
        $product_days = $_POST['product_days'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];
        
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_namel = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_namel,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        $insert_product= "insert into products (p_cat_id,days,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords) values ('$package_cat','$product_days','$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords')";

        $run_product = mysqli_query($con,$insert_product);

        if($run_product){

            echo"<script>alert('Product had been inserted sucessfully')</script>";

            echo"<script>window.open('insert_product.php','_self')</script>";
            
        }
    }

?>