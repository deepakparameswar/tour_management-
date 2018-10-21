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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
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


    <div id="content"> <!-- content starts-->

        <div class="container"> <!-- container starts -->

            <div class="col-md-12"><!-- col-md-12 starts -->

                <ul class="breadcrumb"><!-- breadcrumb starts-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Order now</li>
                </ul><!-- breadcrumb ends-->

            </div><!-- col-md-12 ends -->

            <div class="col-md-3"><!-- col-md-3 starts -->

                <?php
                    include("includes/sidebar.php");
                ?>

            </div><!-- col-md-3 ends -->

            <div class="col-md-9"><!-- col-md-9 starts -->

                <div class="row" id=productMain><!-- row starts -->

                    <div class="col-sm-6"><!-- col-sm-6 starts -->

                        <div id="mainImage"><!-- mainimage starts -->

                            <div id="myCarousel" class="crousel slide" data-ride="carousel">

                                <ol class="carousel-indicators"><!-- carousel-indicators starts -->

                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                                    
                                </ol><!-- carousel-indicators ends -->

                                <div class="carousel-inner"><!-- carousel-inner starts -->

                                    <div class="item active">
                                        <center>

                                            <img src="admin_area/product_images/product.1.jpg" alt="Product 1" class="img-responsive">
                                            
                                        </center>
                                    </div>

                                    <div class="item">

                                        <img src="admin_area/product_images/product.2.jpg" alt="Product 1" class="img-responsive">
                                            
                                    </div>
                                    
                                    <div class="item">
                                        
                                        <img src="admin_area/product_images/product.3.jpg" alt="Product 1" class="img-responsive">
                                            
                                    </div>

                                </div><!-- carousel-inner ends -->


                            </div>

                        </div><!-- mainimage ends -->

                    </div><!-- col-sm-6 ends -->

                    <div class="col-sm-6"><!-- col-sm-6 starts -->

                        <div class="box"><!-- box starts -->

                            <h1 class="text-center">Goa</h1>

                            <form action="details.php" method="post" class="form-horzontal"><!-- form-horzontal starts-->

                                <div class="form-group"><!-- form-group starts -->

                                    <label class="col-md-5 control-label">Days</label>

                                    <div class="col-md-7"><!-- col-md-7 starts -->

                                        <select class="form-control">
                                            <option>1</option>
                                        </select> 

                                    </div><!-- col-md-7 ends -->        

                                </div><!-- form-group ends -->
                                
                                <div class="from-group">
                                    
                                    <input type="text">
                                    
                                </div>

                            </form><!-- form-horzontal ends-->

                        </div><!-- box ends -->

                    </div><!-- col-sm-6 ends -->


                </div><!-- row ends -->

            </div><!-- col-md-9 ends -->

        </div> <!-- container ends -->

    </div> <!-- content ends-->
    

    <?php
        include("includes/footer.php");
    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    </body>

</html>