<?php
    include("includes/db.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Natours | Exciting tours for adventurous people</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>
    
    <body>

    <div id="top"><!-- top starts -->
        <div class="container"><!-- container starts -->
            <div class="col-md-6 offer"><!-- col-md-6 offer starts -->
                <a href="#" class="btn btn-success btn-sm">
                    Welcome :Guest
                </a>
                <a href="#">
                    Sopping Cart Total Price: $100, Total Item 2
                </a>
            </div> <!-- col-md-6 offer ends -->

            <div class="col-md-6"> <!-- col-md-6 starts -->
                <ul class="menu"><!-- menu starts -->
                    <li><a href="customer_register.php">Register</a></li> 
                    <li><a href="checkout.php">My Account</a></li> 
                    <li><a href="cart.php">Go to Cart</a></li>
                    <li><a href="checkout.php">Login</a></li>
                </ul><!-- menu starts -->
            </div><!-- col-md-6 ends -->
        </div><!-- container ends -->
    </div><!-- top ends -->
    
    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default starts -->
        <div class="container"> <!-- container starts -->
            <div class="navbar-header"> <!-- navbar-header starts -->
                
                <a href="index.php" class="navbar-brand home"> <!-- navbar navbar-brabds home starts -->
                    <img src="images/logo-green-small-1x.png" alt="Logo" class="hidden-xs">
                    <img src="images/logo-green-small-1x.png" alt="Logo" class="visible-xs">
                </a> <!-- navbar navbar-brabds home starts -->

                <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div> <!-- navbar-header ends -->

            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse starts -->

                <div class="padding-nav"> <!-- padding-nav starts -->
                    <ul class="nav navbar-nav navbar-left"> <!-- nav navbar-nav navbar-left starts-->
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="Order_now.php">Order now</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul> <!-- nav navbar-nav navbar-left ends-->
                </div> <!-- padding-nav ends -->

                <a href="cart.php" class="btn btn-primary navbar-btn right"> <!-- btn btn-primary navbar-btn right starts -->
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in cart</span>
                </a> <!-- btn btn-primary navbar-btn right starts -->

                <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right starts -->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div><!-- navbar-collapse collapse right ends -->
                
                <div id="search" class="collapse clearfix"> <!-- collapse clearfix starts -->
                    <form class="navbar-form" method="get" action="results.php"> <!-- navbar-form starts -->
                        <div class="input-group"> <!-- input-group starts -->
                            <input type="text" class="form-control" palceholder="Search" name="user_query" required>
                            <span class="input-group-btn"> <!-- input-group-btn srats -->
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span> <!-- input-group-btn ends-->
                        </div> <!-- input-group ends -->
                    </form> <!-- navbar-form ends -->
                </div> <!-- collapse clearfix ends -->

            </div> <!-- navbar-collapse collapse ends -->
        </div> <!-- container starts -->
    </div><!-- navbar navbar-default ends -->

    <div class="container" id="slider"> <!-- container starts -->
       
        <div class="col-md-12"> <!-- col-md-12 starts -->
           
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide starts -->
            
                <ol class="carousel-indicators"> <!-- carousel-indicators starts -->
                
                    <li data-target="#myCarousel" sata-slide-to="0" class="active"> </li>

                    <li data-target="#myCarousel" sata-slide-to="1"> </li>

                    <li data-target="#myCarousel" sata-slide-to="2"> </li>

                    <li data-target="#myCarousel" sata-slide-to="3"> </li>
                
                </ol> <!-- carousel-indicators ends -->
                
                <div class="carousel-inner"> <!-- crousel-inner starts -->

                    <?php

                        $get_slides="select * from slider LIMIT 0,1";

                        $run_slides = mysqli_query($con,$get_slides);

                        while($row_slides=mysqli_fetch_array($run_slides)){
                            $slide_name= $row_slides['slide_name'];
                            $slide_image= $row_slides['slide_image'];

                            echo"
                                <div class='item active'>
                                    <img src='admin_area/slides_images/$slide_image'>
                                </div>
                            ";
                        }

                    ?> 

                    <?php
                        
                        $get_slides="select * from slider LIMIT 1,3 ";

                        $run_slides = mysqli_query($con,$get_slides);

                        while($row_slides=mysqli_fetch_array($run_slides)){
                            
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];

                            echo"
                                <div class='item'>
                                    
                                    <img src='admin_area/slides_images/$slide_image'>
                                
                                </div>
                            ";

                        }

                    ?>

                </div><!-- crousel-inner ends -->

                <a href="#myCarousel" data-slide="prev" class="left carousel-control"> <!--left carousel-control starts -->

                    <span class="glyphicon glyphicon-chevron-left"></span>

                    <span class="sr-only">Previous</span>

                </a><!--left carousel-control Ends -->

                <a href="#myCarousel" data-slide="next" class="right carousel-control"> <!--right carousel-control starts -->

                    <span class="glyphicon glyphicon-chevron-right"></span>

                    <span class="sr-only">Next</span>

                </a><!--right carousel-control Ends -->


            </div> <!-- carousel slide ends -->

        </div> <!-- col-md-12 ends -->

    </div> <!-- container ends -->

    <div class="advantages"> <!-- advantages starts -->
        
        <div class="container"> <!-- container starts -->

            <div class="same-height-row"> <!-- same-height-row starts -->
                
                <div class="col-sm-4"> <!-- col-sm-4 starts -->
                    
                    <div class="box same-height"><!-- box same-height starts -->

                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>

                        <h3><a href="#">WE LOVE OUR CUSTOMER</a></h3>
                        <p>We are known to provide best possible service ever</p>

                    </div> <!-- box same-height ends -->

                </div> <!-- col-sm-4 ends -->

                <div class="col-sm-4"> <!-- col-sm-4 starts -->

                    <div class="box same-height"><!-- box same-height starts -->

                        <div class="icon">
                           <i class="fa fa-tags"></i>
                        </div>

                        <h3><a href="#">BEST PRICES</a></h3>
                        <p>You can check on all other sites about the prices and then compare with our us</p>

                    </div> <!-- box same-height ends -->

                </div> <!-- col-sm-4 ends -->

                <div class="col-sm-4"> <!-- col-sm-4 starts -->

                    <div class="box same-height"><!-- box same-height starts -->

                        <div class="icon">
                            <i class="fa fa-tags"></i>
                        </div>

                        <h3><a href="#">100% SATISFACTION GUARANTEED</a></h3>
                        <p>Free return on everything for 3 months.</p>

                    </div> <!-- box same-height ends -->

                </div> <!-- col-sm-4 ends -->

            </div> <!-- same-height-row ends -->

        </div> <!-- container ends -->

    </div> <!-- advantages ends -->

    <div id="hot"> <!-- hot starts -->
        
        <div class="box"> <!-- box starts -->

            <div class="container"> <!-- container strats-->

                <div class="col-md-12"> <!-- col-md-12 starts -->

                    <h2>Latest Packages of this week</h2>

                </div> <!-- col-md-12 ends -->

            </div> <!-- container ends-->

        </div> <!-- box ends -->

    </div> <!-- hot ends -->

    <div id="content" class="container"> <!-- container starts -->

        <div class="row"> <!-- row starts -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">
                        <img src="admin_area/product_images/goa.jpg" alt="GOA" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Hindu Temple in Goa</a></h3>
                            <p class="price">$200</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                     <i class="fa fa-shopping-cart"></i>
                                     Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                        <img src="admin_area/product_images/KulluManali.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Kullu Manali</a></h3>
                            <p class="price">$800</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

           <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                        <img src="admin_area/product_images/himalayam.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Himalayam</a></h3>
                            <p class="price">$500</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                        <img src="admin_area/product_images/himalayam.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Himalayam</a></h3>
                            <p class="price">$500</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                    <img src="admin_area/product_images/himalayam.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Himalayam</a></h3>
                            <p class="price">$500</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                    <img src="admin_area/product_images/himalayam.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Himalayam</a></h3>
                            <p class="price">$500</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                    <img src="admin_area/product_images/himalayam.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Himalayam</a></h3>
                            <p class="price">$500</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>

                </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single starts -->

                <div class="product"><!-- product starts -->

                    <a href="details.png">      
                    <img src="admin_area/product_images/himalayam.jpg" alt="Kullu Manali" class="img-responsive">
                        <div class="text"> <!-- text starts-->
                            <h3><a href="details.php">Himalayam</a></h3>
                            <p class="price">$500</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </p>

                        </div><!-- text ends-->
                    </a>
            </div> <!-- product ends -->

            </div> <!-- col-sm-4 col-sm-6 single ends -->

        </div> <!-- row ends -->

    </div> <!-- container ends -->

    <?php
        include("includes/footer.php");
    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    </body>

</html>