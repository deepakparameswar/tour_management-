<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{
?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top  starts -->

    <div class="navbar-header"> <!-- navbar-header starts -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <!-- navbar-ex1-collapse starts -->
            <span class="sr-only"> Toggle Navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

        </button><!-- navbar-ex1-collapse ends -->

            <a href="index.php?dashboard" class="navbar-brand"> Admin panel</a>

    </div> <!-- navbar-header ends -->

    <ul class="nav navbar-right top-nav"> <!-- nav navbar-right top-nav starts -->

        <li class="dropdown"><!-- dropdown starts -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle starts -->

                <i class="fa fa-user"></i>

                Deepak Parameswar <b class="caret"></b>

            </a><!-- dropdown-toggle ends -->

            <ul class="dropdown-menu"><!-- dropdown-menu starts -->
            
                <li><!-- li starts -->

                    <a href="index.php?user_profile">

                        <i class="fa fa-fw fa-user"></i>Profile
                     
                    </a>
                </li><!-- li ends -->

                
                <li><!-- li starts -->

                    <a href="index.php?view_products">

                        <i class="fa fa-fw fa-envelope"></i>Products

                        <span class="badge">7</span>
                    
                    </a>
                </li><!-- li ends -->

                
                <li><!-- li starts -->

                    <a href="index.php?view_customers">

                        <i class="fa fa-fw fa-gear"></i>Customers

                        <span  class="badge">12</span>
                    </a>
                </li><!-- li ends -->

                
                <li><!-- li starts -->

                    <a href="index.php?view_cats">

                        <i class="fa fa-fw fa-gear"></i>Product Categories
                        <span class="badge">5</span>
                    
                    </a>

                </li><!-- li ends -->

                <li class="divider"></li>

                <li><!-- li starts -->

                    <a href="logout.php"> <i class="fa fa-fw fa-power-off"></i>Log Out</a>

                </li><!-- li ends -->

            </ul><!-- dropdown-menu ends -->
            

        </li><!-- dropdown ends -->

    </ul> <!-- nav navbar-right top-nav ends -->

    <div class="collapse navbar-collapse navbar-ex1-collapse"> <!-- navbar-collapse navbar-ex1-collapse starts -->
    
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav starts -->
        
            <li> <!-- li starts -->
            
                <a href="index.php?dashboard">
                    
                    <i class="fa fa-fw fa-dashboard"></i>Dashboard

                </a>

            </li> <!-- li ends -->

            <li> <!-- li starts -->
            
                <a href="#" data-toggle="collapse" data-target="#products">
                    
                    <i class="fa fa-fw fa-table"></i>Products

                    <i class="fa fa-fw fa-caret-down"></i>

                </a>

                <ul id="products" class="collapse">
                
                    <li>
                        <a href="index.php?insert_products">Insert Products</a>
                    </li>

                    <li>

                        <a href="index.php?view_products">View Products</a>
                    
                    </li>
                
                </ul>

            </li> <!-- li ends -->

            <li> <!-- li starts -->
            
            <a href="#" data-toggle="collapse" data-target="#p_cat">
                
                <i class="fa fa-fw fa-pencil"></i>Products Categories

                <i class="fa fa-fw fa-caret-down"></i>

            </a>

            <ul id="p_cat" class="collapse">
            
                <li>
                    <a href="index.php?insert_p_cat">Insert Product Category</a>
                </li>

                <li>

                    <a href="index.php?view_products">View Products Categories</a>
                
                </li>
            
            </ul>

            </li> <!-- li ends -->

            <li> <!-- li starts -->
            
            <a href="#" data-toggle="collapse" data-target="#cat">
                
                <i class="fa fa-fw fa-arrows-v"></i>Categories

                <i class="fa fa-fw fa-caret-down"></i>

            </a>

            <ul id="cat" class="collapse">
            
                <li>
                    <a href="index.php?insert_products">Insert Category</a>
                </li>

                <li>

                    <a href="index.php?view_cats">View Categories</a>
                
                </li>
            
            </ul>

        </li> <!-- li ends -->


        <li> <!-- li starts -->
            
            <a href="#" data-toggle="collapse" data-target="#slides">
                
                <i class="fa fa-fw fa-gear"></i>Slides

                <i class="fa fa-fw fa-caret-down"></i>

            </a>

            <ul id="slides" class="collapse">
            
                <li>
                    <a href="index.php?insert_slide">Insert Slide</a>
                </li>

                <li>

                    <a href="index.php?view_slides">View Slides</a>
                
                </li>
            
            </ul>

        </li> <!-- li ends -->

        <li>
        
            <a href="index.php?view_customers" >

                <i class="fa fa-fw fa-edit"></i>View Customers
            
            </a>

        </li>

        <li>
        
            <a href="index.php?view_orders">

                <i class="fa fa-fw fa-list"></i>View Orders

            </a>
        </li>

        <li>
    
            <a href="index.php?view_payments">

                <i class="fa fa-fw fa-pencil"></i>View Payments

            </a>

        </li>

        <li> <!-- li starts -->
            
            <a href="#" data-toggle="collapse" data-target="#users">
                
                <i class="fa fa-fw fa-gear"></i>Users

                <i class="fa fa-fw fa-caret-down"></i>

            </a>

            <ul id="users" class="collapse">
            
                <li>
                    <a href="index.php?insert_user">Insert User</a>
                </li>

                <li>

                    <a href="index.php?view_users">View Users</a>
                
                </li>

                <li>

                    <a href="index.php?user_profile">Edit Profile</a>

                </li>
            
            </ul>

        </li> <!-- li ends -->

        <li><!-- li starts -->
        
            <a href="logout.php">

                <i class="fa fa-fw fa-power-off"></i>Log Out

            </a>

        </li><!-- li ends -->
        
        </ul><!-- nav navbar-nav side-nav ends -->

    </div><!-- navbar-collapse navbar-ex1-collapse ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top  ends -->

<?php } ?>