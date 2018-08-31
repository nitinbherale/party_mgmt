<?php include 'connect.php'; 
list($master) = exc_qry("select * from tbl_master limit 1");
define('TITLE', $master[0]['app_title']);
define('FAVICON',$master[0]['app_favicon']);
define('LOGO',$master[0]['app_logo']);
define('META_DESC',$master[0]['app_meta_des']);
define('META_KEY',$master[0]['app_meta_key']);
define('SEND_BY',$master[0]['app_send_by']);
date_default_timezone_set('Asia/Calcutta');
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="<?php echo META_DESC; ?>">
<meta name="keywords" content="<?php echo META_KEY; ?>">
<title><?php echo TITLE; ?></title>
<link rel="icon" href="assets/img/<?php echo FAVICON; ?>" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
<link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><!--<img class="zmdi-hc-spin" src="https://thememakker.com/templates/infinio/html/assets/images/logo.svg" width="48" height="48" alt="sQuare">--></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>


<?php

$dist_cat = "SELECT * FROM tbl_dist WHERE status= 1 and parent_id = 0  ORDER BY dist_id";
list($dist) = exc_qry($dist_cat);

?>
<!-- Top Bar -->
<nav class="top_navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="navbar-logo">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/<?php echo LOGO; ?>" width="30" alt="Shivsena Party Management"><span class="m-l-10"><?php echo TITLE; ?></span></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="search_bar hidden-xs">
                        <div class="input-group">                
                            <input type="text" class="form-control" placeholder="Find your requirement...">
                        </div>
                    </li>
                    <li class="dropdown app_menu"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-grid"></i></a>
                        <ul class="dropdown-menu pullDown">
                            <li>
                                <ul>
                                    <li><a href="contacts.php"><i class="icon-list"></i><span>Contacts</span></a></li>
                                    <li><a href="group_list.php"><i class="icon-users"></i><span>Teams</span></a></li>
                                    <li><a href="#"><i class="icon-notebook"></i><span>Projects</span></a></li>
                                    <li><a href="#"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                
                    <li><a href="javascript:void(0);" class="fullscreen hidden-sm" data-provide="fullscreen"><i class=" icon-size-fullscreen"></i></a></li>
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img class="rounded-circle" src="../assets/images/nitin_sb.jpg" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0">Nitin S.Bherale</h6>
                                    <p class="user-position">Available</p>
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                    <a title="linkedin" href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a>
                                    <a title="dribbble" href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a>
                                    <a title="google plus" href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a>
                                    <hr>
                                </div>
                            </li>                            
                            <li><a href="#"><i class="icon-user m-r-10"></i> <span>My Profile</span> <span class="badge badge-success float-right"></span></a></li>
                            <!--<li><a href="javascript:void(0);"><i class="icon-notebook m-r-10"></i><span>Taskboard</span> <span class="badge badge-info float-right">New</span></a></li>-->                            
                            <!--<li><a href="#"><i class="icon-lock m-r-10"></i><span>Locked</span></a></li>-->
                            <li><a href="logout.php"><i class="icon-power m-r-10"></i><span>Sign Out</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
</nav>

<aside id="leftsidebar" class="sidebar h_menu">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN</li>
                        <li class="active open"> <a href="index.php"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-grid"></i><span>Members</span></a>
                            <ul class="ml-menu">
                                <li><a href="add_new_member.php">Add New Member</a></li>
                                <li><a href="member_list.php">Member List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-basket-loaded"></i><span>Events</span></a>
                            <ul class="ml-menu">
                                <li><a href="add_new_event.php">Add New Event</a></li>
                                <li><a href="event_list.php">Event List</a></li>
                            </ul>
                        </li>
                          <!--<li class=""> <a href="event_calender.php"><i class="icon-speedometer"></i><span>Event Calender</span></a></li>

                        <li class=""> <a href="#"><i class="icon-speedometer"></i><span>Reports</span></a></li>-->

                         <li class="header">Categories</li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-doc"></i><span>Categories</span></a>
                            <ul class="ml-menu">
                                <li><a href="#">Add New Category</a></li>
                                <li><a href="#">Categories List</a></li>
                            </ul>
                        </li>

                        <li class="header">Group List</li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-doc"></i><span> Groups</span></a>
                            <ul class="ml-menu">
                                <li><a a href="#smallModal" data-toggle="modal" data-target="#smallModal">Add New Group</a></li>
                                <li><a href="group_list.php">Group List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-basket-loaded"></i><span>District</span></a>
                            <ul class="ml-menu">
                                <li><a a href="#distModal" data-toggle="modal" data-target="#distModal">Add New Dist</a></li>
                                <li><a href="dist_list.php">District List</a></li>
                                <hr />
                                <h5>Districts</h5>
                                <?php 
                                      for ($i=0; $i <count($dist) ; $i++) { ?>
                                  <li><a href="member_list_cat.php?id=<?php echo $dist[$i]['dist_id'];  ?>"> 
                                        <?php
                                           echo $dist[$i]['dist_name'];

                                        ?>

                                </a></li><?php  }?>

                            </ul>
                        </li>
                        <!--<li> <a href="javascript:void(0);" class="menu-toggle"><i class="icon-map"></i><span>Maps</span></a>
                            <ul class="ml-menu">
                                <li><a href="#">Google Map</a></li>
                            </ul>
                        </li>-->                
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/widgets/infobox/infobox-1.js"></script>
<script src="assets/js/pages/index.js"></script>

<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<script src="assets/js/pages/ui/dialogs.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script type="text/javascript">
   function warning_msg(title,text) {
    swal({
        title: title,
        text: text,
        timer: 4000,
        type: "warning",
        showConfirmButton: false
        });
    }
    function success_msg(title,text,url){
        swal({
            title: title,
            text: text,
            type: "success",
            confirmButtonColor: "#8BC34A", 
            confirmButtonText: "OK" 
        },function(isConfirm){
        if (isConfirm) {
    window.location.href = url;
        }
        });
    }

</script>


<!--Modal-->
<?php 
if (isset($_POST['add_group'])) 
{
    $grp_name = $_POST['grp_name'];
    $grp_ins = "insert into tbl_grp set grp_nm = '$grp_name'";
    $grp_res = mysqli_query($dblink,$grp_ins);
    if ($grp_res) {
       echo '<script>swal("Group Added Successfully");</script>'; 
    }
    else
    {
        echo '<script>swal("Error");</script>';
    }
    
}

if (isset($_POST['add_dist'])) {
    $dist_name = $_POST['dist_name'];
    $datetime = date('Y-m-d h-i-s');
    $dist_ins = "INSERT INTO tbl_dist SET dist_name = '$dist_name', created= '$datetime'";
    $dist_res = mysqli_query($dblink,$dist_ins);
    if ($dist_res) {
        echo '<script>swal("Dist Added Successfully");</script>';
    }
    else{
         echo '<script>swal("Error");</script>';
    }
}
?>
  <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Add New Group</h4>
            </div>
            <form method="post">
                <div class="modal-body"> 
                   <div class="form-group">                                    
                        <input type="text" name="grp_name" class="form-control" placeholder="Add New Group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_group" class="btn btn-default btn-round waves-effect">Add </button>
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal-->

 <div class="modal fade" id="distModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Add New Dist</h4>
            </div>
            <form method="post">
                <div class="modal-body"> 
                   <div class="form-group">                                    
                        <input type="text" name="dist_name" class="form-control" placeholder="Add New Dist">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_dist" class="btn btn-default btn-round waves-effect">Add </button>
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal-->
</body>
</html>

<style type="text/css">
    .btn-neutral{float: left;}
</style>
