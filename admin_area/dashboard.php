<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{
?>

<div class="row"><!-- row starts -->

    <div class="col-lg-12"><!-- col-lh-12 starts -->
        
        <h1 class="page-header">Dashboard</h1>

        <ol class="breadcrumb"><!-- breadcrumb starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i>Dashboard

            </li>

        </ol><!-- breadcrumb ends -->

    </div><!-- col-lh-12 ends -->

</div><!-- row ends-->

<div class="row"><!-- 2nd row starts -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 starts -->

        <div class="panel panel-primary"><!-- panel panel-primary starts -->

            <div class="panel-heading"><!-- panel-heading starts -->

                <div class="row"><!-- row starts-->

                    <div class="col-xs-3"><!-- col-xs-3 starts -->

                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!-- col-xs-3 ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right starts -->

                        <div class="huge">15</div>
                        <div>Packages</div>

                    </div><!-- col-xs-9 text-right ends -->

                </div><!-- panel-heading row ends-->

            </div><!-- panel-heading ends -->
            
            <a href="index.php?view_packages">

                <div class="panel-footer"><!-- panel-footer starts -->
                    
                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                </div><!-- panel-footer ends -->

            </a>

        </div><!-- panel panel-primary ends -->

    </div><!-- col-lg-3 col-md-6 ends -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 starts -->

        <div class="panel panel-green"><!-- panel panel-green starts -->

            <div class="panel-heading"><!-- panel-heading starts -->

                <div class="row"><!-- row starts-->

                    <div class="col-xs-3"><!-- col-xs-3 starts -->

                        <i class="fa fa-comments fa-5x"></i>
                        
                    </div><!-- col-xs-3 ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right starts -->

                        <div class="huge">9</div>
                        <div>Customers</div>

                    </div><!-- col-xs-9 text-right ends -->

                </div><!-- panel-heading row ends-->

            </div><!-- panel-heading ends -->
             
            <a href="index.php?view_customers">

                <div class="panel-footer"><!-- panel-footer starts -->
                    
                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                </div><!-- panel-footer ends -->

            </a>

        </div><!-- panel panel-green ends -->

    </div><!-- col-lg-3 col-md-6 ends -->
    
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 starts -->

        <div class="panel panel-yellow"><!-- panel panel-yellow starts -->

            <div class="panel-heading"><!-- panel-heading starts -->

                <div class="row"><!-- row starts-->

                    <div class="col-xs-3"><!-- col-xs-3 starts -->

                        <i class="fa fa-shopping-cart fa-5x"></i>
                        
                    </div><!-- col-xs-3 ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right starts -->

                        <div class="huge">6</div>
                        <div>Package Categories</div>

                    </div><!-- col-xs-9 text-right ends -->

                </div><!-- panel-heading row ends-->

            </div><!-- panel-heading ends -->
            
            <a href="index.php?view_p_cats">

                <div class="panel-footer"><!-- panel-footer starts -->
                    
                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                </div><!-- panel-footer ends -->

            </a>

        </div><!-- panel panel-yellow ends -->

    </div><!-- col-lg-3 col-md-6 ends -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 starts -->

        <div class="panel panel-red"><!-- panel panel-red starts -->

            <div class="panel-heading"><!-- panel-heading starts -->

                <div class="row"><!-- row starts-->

                    <div class="col-xs-3"><!-- col-xs-3 starts -->

                        <i class="fa fa-support fa-5x"></i>
                        
                    </div><!-- col-xs-3 ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right starts -->

                        <div class="huge">4</div>
                        <div>Orders</div>

                    </div><!-- col-xs-9 text-right ends -->

                </div><!-- panel-heading row ends-->

            </div><!-- panel-heading ends -->
            
            <a href="index.php?view_orders">

                <div class="panel-footer"><!-- panel-footer starts -->
                    
                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                </div><!-- panel-footer ends -->

            </a>

        </div><!-- panel panel-red ends -->

    </div><!-- col-lg-3 col-md-6 ends -->

</div><!-- 2nd row ends -->

<div class="row"><!-- row starts -->

    <div class="col-lg-8"><!-- col-lg-8 starts -->

        <div class="panel panel-primary"> <!-- panel panel-primary starts -->

            <div class="panel-heading"><!-- panel-heading starts -->

                <h3 class="panel-title"><!-- panel-title starts -->
                    <i class="fa fa-money fa-fw"></i>New Order
                </h3><!-- panel-title ends -->

            </div><!-- panel-heading ends -->

            <div class="panel-body"><!-- panel-body starts -->

                <div class="table-responsive"><!-- table-responsive starts -->

                    <table class="table table-bordered table-hover table-striped"><!-- tabel table-bordered table-hover table-striped starts -->

                        <thead><!-- thead starts -->
                        
                            <tr>
                                <th>Order_No:</th>
                                <th>Customer_Email:</th>
                                <th>Invoice_No:</th>
                                <th>Package_ID:</th>
                                <th>From_Date:</th>
                                <th>To_Date:</th>
                                <th>Status:</th>
                            </tr>

                        </thead><!-- thead ends -->

                        <tbody><!-- tbody starts -->

                            <tr>

                                <td>1</td>
                                <td>boo@gmail.com</td>
                                <td>78045</td>
                                <td>32</td>
                                <td>5/8/2018</td>
                                <td>5/10/2018</td>
                                <td>Complete</td>

                            </tr>

                        </tbody><!-- tbody ends -->


                    </table> <!-- tabel table-bordered table-hover table-striped ends -->

                </div><!-- table-responsive ends -->

                <div class="text-right"><!-- text-right starts -->

                    <a href="index.php?view_orders">View All Orders <i class="fa fa-arrow-circle-right"></i></a>

                </div><!-- text-right ends -->

            </div><!-- panel-body ends -->

        </div><!-- panel panel-primary ends -->

    </div><!-- col-lg-8 ends -->

    <div class="col-md-4"><!-- col-md-4 starts -->

        <div class="panel"><!-- panel starts -->

            <div class="panel-body"><!-- panel-body starts -->

                <div class="thumb-info md-md"><!-- thumb-info md-md starts -->

                    <img src="admin_images/admin.jpg"  class="rounded img-responsive" alt="Admin Img">

                    <div class="thumb-info-title"><!-- thumb-info-title starts -->

                        <span class="thumb-info-inner">Deepak Parameswar</span>
                        <span class="thumb-info-type">Developer</span>

                    </div><!-- thumb-info-title ends -->

                </div><!-- thumb-info md-md ends -->

                <div class="md-md"><!--  md-md starts -->

                    <div class="widget-content-expanded"><!-- widget-content-expanded starts -->

                        <i class="fa fa-user"></i><span>Email: </span>deepak@gmail.com <br>
                        <i class="fa fa-user"></i><span>Country: </span> india<br>
                        <i class="fa fa-user"></i><span>Contact</span>+910000044774<br>
                                             
                    </div><!-- widget-content-expanded ends -->

                    <hr class="dotted short">

                    <h5 class="text-muted">About</h5>

                    <p>........................... ..................</p>

                </div><!--  md-md ends -->

            </div><!-- panel-body ends -->

        </div><!-- panel ends -->

    </div><!-- col-md-4 ends -->

</div><!-- row ends -->

<?php } ?>