<?php include("header.php") ?>
<?php 
    if(!isValidUser())  
    {
        redirect("login.php"); 
    }
    else
    {
        list($events) = exc_qry("select * from tbl_evnt where evnt_active = 0 order by evnt_id desc");
        
        //approve event
        if(isset($_POST['approve']))
        {
            $evnt_id = $_POST['evnt_id'];
            $up_qry = "update tbl_evnt set evnt_appr = 1 where evnt_id = $evnt_id";
            $up_res = mysqli_query($dblink,$up_qry);
            if ($up_res) 
            {
                //echo '<script>success_msg("Success","Event Approved Successfully","event_list.php");</script>';

                list($event)= exc_qry("SELECT * FROM tbl_evnt WHERE evnt_id = '$evnt_id' ");
                $evnt_title = $event[0]['evnt_tit'];
                $date = $event[0]['evnt_date'];
                $desciption = $event[0]['evnt_des'];
                $street = $event[0]['evnt_str'];
                $city = $event[0]['evnt_cty'];
                $postal_code = $event[0]['evnt_pin_cod'];
                $time = $event[0]['evnt_time'];
                $per_nm = $event[0]['evnt_coor_per']; 
                $per_phone = $event[0]['evnt_cor_phone'];
                $per_email = $event[0]['evnt_cor_email'];  

                /*approve_mail($evnt_title,$date,$desciption,$street,$city,$postal_code,$time,$per_nm,$per_phone,$per_email,$evnt_id);*/     
               $headers = "MIME-Version: 1.0" . "\r\n";
               $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
               $email =  "nitinbherale@gmail.com";           
            // Additional headers
               $headers .= 'From: contact@yuvasena.co.in' . "\r\n";
               $subject = 'AUT Saheb program details on - '.$date;
               $message1 = "<html><body>";
               $message1 .= "<div class='mail-content'>";
               $message1 .= "<table style='border:1px solid #ccc;width: 90%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";
               $message1 .= "<tr><td align='center'><img src = 'yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";
               $message1 .= "<tr style='padding-bottom:20px;'> <td style='font-family: verdana;line-height: 35px;font-size: 15px;'>Dear ".$dear_name." Saheb,<td></tr>";
               $message1 .= "<tr style='padding-bottom:20px;'> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/> We have received invitation for the following program :<td></tr>";
               $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";
               $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Details : </b>".$description."</td></tr>";
               $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$street.", ".$city.", ".$postal_code."</td></tr>";
               $message1 .= "<tr><td style='line-height: 31px;font-size: 15px;font-family: verdana;'><b>Time : </b>".$time." </td></tr>";
               $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Person of Contact : </b>".$per_nm." - ".$per_phone." </td></tr>";
               $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Status : </b> Tentative confirm</td></tr>";
               $message1 .= "<tr><td style='font-family: verdana;line-height: 26px;font-size: 15px; padding-top: 5px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";
               $message1 .= "</table>";
               $message1 .= "</div>";
               $message1 .= "</body></html>";

        $text = $message1;

        (mail($email,$subject,$text,$headers));
          echo '<script>success_msg("Success","Event Approved Successfully","event_list.php");</script>';   
                  }   
            else
            {
                $msg = mysqli_error($dblink);
                echo "<script>swal('Error in approve')</script>";
            }  
        }
        //Approve Query End

       //echo "<script>window.alert('".count($events)."')</script>"; 

         if (isset($_POST['delete_evnt'])) { 
              $evnt_id = $_POST['id'];
              $qry_del = "UPDATE tbl_evnt SET evnt_active = 1 WHERE evnt_id = '$evnt_id' ";
              $result_del = mysqli_query($dblink,$qry_del);

              if ($result_del) {
                   echo '<script>success_msg("Success","Event Deleted Successfully","event_list.php");</script>';
              }
        }
        //Delete Query End Here


    }
 ?>
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
                <div class="card product_item_list product-order-list">
                    <div class="body">
                        <div class="table-responsive">
                            <table id="mainTable" class="table table-bordered table-striped table-hover dataTable js-exportable m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date and Time</th>
                                        <th>Location</th>
                                        <th>Image</th>
                                        <th>Assigned To</th>
                                       <!--  <th>Groups</th> -->
                                       <!--  <th data-breakpoints="xs md">Status</th> -->
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php for ($i=0; $i < count($events); $i++) { ?>                                   
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $events[$i]['evnt_tit']; ?></td>
                                        <td><?php echo $events[$i]['evnt_des']; ?></td>
                                        <td><?php echo date('d F Y', strtotime($events[$i]['evnt_date'])); ?>, 
                                            <?php echo date('h:i a',strtotime($events[$i]['evnt_time'])); ?></td>
                                        <td><?php echo $events[$i]['evnt_str']; ?>,<?php echo $events[$i]['evnt_cty']; ?>,<?php echo $events[$i]['evnt_pin_cod']; ?></td>
                                        <td><img src="assets/img/events/<?php echo $events[$i]['evnt_pic']; ?>" width="100" alt="Product img"></td>
                                        <td> 
                                        <?php if($events[$i]['evnt_date']>=date('Y-m-d')) { //if event date is valid 
                                                if ($events[$i]['evnt_appr']==0) { //if event pending ?>
                                                <form method="POST">
                                                    <input type="hidden" name="evnt_id" value="<?php echo $events[$i]['evnt_id']; ?>">
                                                    <button type="submit" class="btn btn-success" name="approve" > Approve </button>
                                                    <button type="submit" class="btn btn-danger" name="disapprove" > Disapprove </button>
                                                </form>
                                                <?php }

                                                if ($events[$i]['evnt_appr']==1) { //if event is approved ?>
                                                    <form method="POST" action="assign_event.php">
                                                    <input type="hidden" name="evnt_id" value="<?php echo $events[$i]['evnt_id']; ?>">
                                                    <button type="submit" class="btn btn-success" name="approve" > Assign </button>
                                                    </form>
                                                    <form method="POST">
                                                    <button type="submit" class="btn btn-danger" name="cancel_evnt" > Cancel </button>
                                                    </form>
                                                <?php } ?>
                                               
                                        <?php } ?>
                                        </td>
                                        <td>
                                             <form method="get" action="view_event.php">
                                                 <input type="hidden" name="view_id" value="<?php echo $events[$i]['evnt_id'];?>">
                                                 <button type="submit" class="btn btn-sm btn-default waves-effect waves-float waves-green left_btn"><i class="zmdi zmdi-eye"></i></button>
                                             </form>

                                            <form method="POST" action="edit_event.php">
                                             <input type="hidden" class="" name="del_id" value="<?php echo $events[$i]['evnt_id'];?>">
    
                                            <button type="submit" name="edit_member" class="btn btn-sm btn-default waves-effect waves-float waves-green left_btn"><i class="zmdi zmdi-edit"></i></button>
                                            </form>
                                            <form method="POST">
                                                <input type="hidden" name="id" value="<?php echo $events[$i]['evnt_id']; ?>">
                                             <button type="submit" name="delete_evnt" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>   
                                    <?php  } ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('.star').on('click', function () {
            $(this).toggleClass('star-checked');
        });

        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });
    });
</script>
<style type="text/css">
    
</style>
