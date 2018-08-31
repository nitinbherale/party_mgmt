<?php include("header.php");?>
<!-- JQuery DataTable Css -->
<?php

if (!isValidUser()) {
    redirect("login.php");
}
else{
    $evnt_id = $_GET['view_id'];
    list($events) = exc_qry("SELECT * FROM tbl_evnt WHERE evnt_id = '$evnt_id' ");

}
?>



<!-- Main Content -->
<section class="content ecommerce-page">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Member List</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.php">Member <i class="icon-user"></i></a></li>
                                    <!--<li class="breadcrumb-item"></li>-->
                                    <li class="breadcrumb-item active">Member List</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-3"></div>
             <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card member-card">
                    <div class="header">
                        <h4 class="m-t-10" style="color: #f37437;font-weight: 600;">Event Details</h4>
                    </div>
                    <div class="member-img">
                        <a href="index.php" class="">
                        <img src="assets/img/events/no_image.png" class="img-responsive" alt="event_img">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12 clearfix">
                            <p class="text-muted"><?php echo $events[0]['evnt_des']; ?></p>
                        </div>
                        <hr>
                         
                          <div class="col-12 oth_listing clearfix">
                        	<p class="float-left font-bold">Street :</p>
                            <p class="text-muted float-right"><?php echo $events[0]['evnt_str']; ?>
                             
                            </p>
                        </div>
                        <hr>

                        <div class="col-12 oth_listing clearfix">
                        	<p class="float-left font-bold">Time & Date :</p>
                            <p class="text-muted float-right">
                                <?php echo date('Y-m-d', strtotime($events[0]['evnt_date'])); ?>, 
                                <?php echo date('h:i a',strtotime($events[0]['evnt_time'])); ?>
                            </p>
                        </div>
                        <hr>

                         <div class="col-12 oth_listing clearfix">
                        	<p class="float-left font-bold">City :</p>
                            <p class="text-muted float-right"> <?php echo $events['0']['evnt_cty']; ?></p>
                        </div>
                        <hr>

                        <div class="col-12 oth_listing clearfix">
                        	<p class="float-left font-bold">Postal Code :</p>
                            <p class="text-muted float-right"> <?php echo $events['0']['evnt_pin_cod']; ?></p>
                        </div>
                        <hr>

                         <div class="col-12 oth_listing clearfix">
                        	<p class="float-left font-bold">Person Of Contact :</p>
                            <p class="text-muted float-right badge badge-success"><?php echo $events['0']['evnt_coor_per']; ?></p>
                        </div>
                        <hr>

                        <!--<div class="col-12 oth_listing clearfix">
                        	<p class="float-left font-bold">Coordinate Phone :</p>
                            <p class="text-muted float-right"><?php echo $events['0'][''] ?></p>
                        </div>
                        <hr>-->

                       <button type="submit" class="btn btn-primary btn-round">Approve</button>
                       <button type="submit" class="btn btn-default btn-round">DisApprove</button>
                    </div>
                </div>
            </div><!--col-lg-4-->
            <div class="col-sm-12 col-md-12 col-lg-6"></div>

        </div>
    </div>
</section>
<!-- Jquery Core Js --> 

<!-- Jquery DataTable Plugin Js --> 

<style type="text/css">
	/*.oth_listing{padding-bottom: 10px;}*/
</style>
