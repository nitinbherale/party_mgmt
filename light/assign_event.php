<?php include("header.php") ?>
<link rel="stylesheet" href="../assets/plugins/multi-select/css/multi-select.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" />


<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Event List</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create Event</a></li>
                                    <li class="breadcrumb-item active">Event List</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                               
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New Event</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                  <div class="card">
                    <div class="header">
                        <h2> <strong>Manage</strong> Event </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group"> <a href="javascript:void(0);" class="list-group-item active"> Event Details</a> 
                        <p class="list-group-item float-left"><span><strong>Event Name </strong></span>  : <span class="float-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>
                        <p class="list-group-item float-left"><span><strong>Event Description </strong></span>  : <span class="float-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>
                        <p class="list-group-item float-left"><span><strong>Event Date </strong></span>  : <span class="float-right"> 24th September 2018</span></p>
                         <p class="list-group-item float-left"><span><strong>Event Location </strong></span>  : <span class="float-right"> At-Apti,Post_vaholi, Mumbai, 421301</span></p>
                        <p class="list-group-item float-left"><span><strong>Select User </strong></span>
                        <select class="form-control z-index show-tick" data-live-search="true">
                          <option>User 1</option>
                          <option>User 2</option>
                          <option>User 3</option>
                        </select>

                          <button type="submit" name="add_dist" class="btn btn-default btn-round waves-effect">Assign Event </button>
                        </p>

                       

                      </div>
                    </div>
                </div><!--card-->
                
                </div>

            </div>
        </div><!--col-lg-12-->
    </div>
</section>

<script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 

<style type="text/css">
  .list-group .active{background-color: #f37437;border-color: #f37437;}
  .list-group strong{color: #f37437;}
</style>