<?php include("header.php");

    if(!isValidUser())  
    {
        redirect("login.php"); 
    }
    else
    {
        list($members) = exc_qry("select * from tbl_member where mem_active = 0");
        if (isset($_POST['add_program'])) 
        {
            $error = 0;
            $title = mysqli_real_escape_string($dblink,$_POST['title']);
            $description = mysqli_real_escape_string($dblink,$_POST['description']);
            $p_date = $_POST['p_date'];// $p_date;
            $p_time = $_POST['p_time'];
            $coor_array = $_POST['coor_person'];
            /*$coor_per = $coor_array[0];
            for ($i=1; $i < count($coor_array); $i++) 
            { 
                $coor_per .= ",".$coor_array[$i];
            }*/
            $cor_person = $_POST['c_person'];
            $cor_phone = $_POST['c_mobile'];
            $cor_email = $_POST['c_email'];
            $street = mysqli_real_escape_string($dblink,$_POST['street']);
            $city = mysqli_real_escape_string($dblink,$_POST['city']);
            $pin_code = $_POST['pin_code'];
            $e_pic = $_FILES["e_pic"];
            $tmp_name = time()."_".$e_pic['name']; 
            $imgpath = "assets/img/events/";
            // event image validation
            if(strlen($e_pic["name"])>0)
            {
                if ($e_pic['size']<1000000) 
                {
                    if(!move_uploaded_file($e_pic["tmp_name"],$imgpath.$tmp_name))//storing image in file
                    {
                        echo '<script>warning_msg("Error","File upload Failed");</script>'; 
                        $error = 1;
                    }
                }
                else
                {
                    echo '<script>warning_msg("Warning","File size is more than 1 mb");</script>'; 
                    $error = 1;
                }
            }
            else
            {
                $tmp_name = "no_image.png";
               
            }

            if($error == 0)
            {
                $ins_qry = "INSERT INTO tbl_evnt SET evnt_tit = '$title', evnt_des = '$description', evnt_date = '$p_date', evnt_time = '$p_time', evnt_coor_per = '$coor_per',evnt_cor_phone = '$cor_phone',evnt_cor_email = '$cor_email', evnt_str = '$street', evnt_cty = '$city', evnt_pin_cod = $pin_code, evnt_pic = '$tmp_name',evnt_add_time = now(), evnt_add_by = ".$_SESSION['pma_adm_id'];
                $result_qry = mysqli_query($dblink,$ins_qry);
                if ($result_qry) 
                {
                   echo '<script>success_msg("Success","Event added Successfully","add_new_event.php");</script>'; 
                }
                else
                {
                    $msg = mysqli_error($dblink);
                    echo '<script>swal("Error");</script>';
                }
            }
        }
    }
 ?>
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
                                <h2>Add New Event</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Event List</a></li>
                                    <li class="breadcrumb-item active">New Event</li>
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
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Event</strong> Details</h2>
                    </div>
                    <div class="body">
                        <form method="post" enctype="multipart/form-data" novalidate>
                            <label for="event_name">Event Title *</label>
                            <div class="form-group">                                
                                <input type="text" name="title" required class="form-control" value="<?php echo $title; ?>" placeholder="Event Name *">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                               <label for="date">Date *</label>
                                 <input type="date" class="form-control" name="p_date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo $p_date; ?>" placeholder="Enter Date *">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="time">Time *</label>
                                <input type="time" name="p_time" required class="form-control" placeholder="Enter Time *" value="<?php echo $p_time; ?>">
                              </div>
                            </div> 
                            <!--<label for="Coordinate_email">Contact Person </label>
                            <div class="form-group" >                                
                                <select class="form-control show-tick" multiple name="coor_person[]" required>
                                    <?php for ($i=0; $i < count($members) ; $i++) { ?>
                                       <option value="<?php echo $members[$i]['mem_id']; ?>" 
                                        <?php for($a=0;$a < count($coor_personarray); $a++)
                                        {
                                            if($coor_array[$a]==$members[$i]['mem_id'])
                                            {
                                                echo "selected"; //if array value matched then print selected
                                            }
                                        } ?> >
                                       <?php echo $members[$i]['mem_f_nm']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>-->

                            <label for="Coordinate_email">Contact Person Name: </label>
                            <div class="form-group">
                                <input type="text" name="c_person" placeholder="Co-ordinate Person" class="form-control">
                            </div>

                            <label for="Coordinate_email">Contact Person Mobile No. </label>
                            <div class="form-group">
                                <input type="text" name="c_mobile" placeholder="Contact Person Mobile No." class="form-control">
                            </div>

                            <label for="Coordinate_email">Contact Person Email Id : </label>
                            <div class="form-group">
                                <input type="text" name="c_email" placeholder="Contact Person Email" class="form-control">
                            </div>

                             <label for="Event_location">Location*</label>
                            <div class="form-group">                                
                                <input type="text" name="street" required class="form-control" placeholder="Enter Street *" value="<?php echo $street; ?>">
                                <input type="text" name="city" required class="form-control m-t-5" placeholder="Enter City *" value="<?php echo $city; ?>" >
                                <input type="number" name="pin_code" required min="100000" max="999999" class="form-control m-t-5" placeholder="Pin Code *" value="<?php echo $pin_code; ?>" >
                            </div>

                             <label for="Coordinate_email">Event Image </label>  
                            <div class="form-group">                             
                                <input type="file" name="e_pic" accept="image/* class="form-control" placeholder="Coordinate Person Email ">
                            </div>

                            <label for="Event_description">Event Desciption *</label>
                            <div class="form-group">                                
                                <textarea rows="4" class="form-control no-resize" name="description" required class="form-control" value="<?php echo $description; ?>" placeholder="Event Description *"></textarea>
                            </div>
                            <button type="submit" name="add_program" class="btn btn-raised btn-primary btn-round waves-effect">CREATE Event</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->        
    </div>
</section>


<script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script> 
