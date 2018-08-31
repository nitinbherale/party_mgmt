<?php include("header.php");
 if(!isValidUser())  
    {
        redirect("login.php"); 
    }
    else
    {
        $mem_id = $_GET['mbr_no'];
        list($member_list) = exc_qry("select * from tbl_member where mem_id = ".$mem_id);
        if(isset($_POST['send_sms'])){
            $message = $_POST['message']."\n".SEND_BY;
            $send = send_sms($message,$member_list[0]['mem_m_no']);
          //  $send = "success";
            if($send="success")
            {
                $ins_qry = 'insert into tbl_sms set sms_sender_id = '.$_SESSION['pma_adm_id'].', sms_sender_usnm = "'.$_SESSION['pma_adm_usr_nm'].'", sms_rece_id = '.$member_list[0]['mem_id'].', sms_rece_mn = '.$member_list[0]['mem_m_no'].', sms_sent_time = now(), sms_content="'.$message.'"';
                $ins_res = mysqli_query($dblink,$ins_qry);
                if($ins_qry){
                    echo '<script>success_msg("Success","Message Send SuccessFully","view_profile.php?mbr_no='.$member_list[0]['mem_id'].'");</script>';
                }
                else{
                    $err_msg = mysqli_error($dblink);
                    echo '<script>swal("'.$err_msg.'")</script>';
                }
               // echo "<script>window.alert('".$ins_qry."')</script>";
                // 
            }
        }//sms

        if(isset($_POST['download_pdf']))
        {
        $mem_id = $_GET['mbr_no'];
        list($member_list) = exc_qry("select * from tbl_member where mem_id = ".$mem_id);
        $name = $member_list[0]['mem_f_nm'];
        $desn = $member_list[0]['mem_desn'];
        $email = $member_list[0]['mem_email'];
        $dob = $member_list[0]['mem_dob'];
        $str = $member_list[0]['mem_str'];
        require('tfpdf.php');
        $pdf = new tFPDF();
        $pdf->AddPage();
        // Add a Unicode font (uses UTF-8)
        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $pdf->SetFont('DejaVu','',14);

        // Load a UTF-8 string from a file and print it
        //$txt = file_get_contents('HelloWorld.php');
       $string  = 'hello';
       

       $html = "
                 Name : $name 
                 Designation : $desn
                 DOB : $dob
                 Address : $str
                 Email : $email

       ";
        
        $pdf->write(8,$html);

        // Select a standard font (uses windows-1252)
        $pdf->SetFont('Arial','',14);
        $pdf->Ln(10);
        //$pdf->Write(5,'The file size of this PDF is only 13 KB.');

        $pdf->Output();

    }else{
        $msg = mysqli_error($dblink);
        echo $msg;
    }

    }   
?>
<section class="content profile-page">    
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h2>Profile</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Member Profile</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(strlen($member_list[0]['mem_img'])>0){
        $img = $member_list[0]['mem_img'];
        }
        else{
            $img = "no_image.png";
        };  ?>
        <div class="row clearfix">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="card member-card">
                    <div class="header l-parpl">
                    </div>
                    <div class="member-img">
                            <a href="#" class="">
                            <img src="assets/img/<?php echo $img; ?>" class="user_pic rounded img-raised" alt="User" style="width:150px;">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="facebook" href="<?php echo $member_list[0]['mem_fb_lk']; ?>" style="">
                                    <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="twitter" href="<?php echo $member_list[0]['mem_tw_lk']; ?>" style="">
                                    <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="instagram" href="javascript:void(0);" style="">
                                    <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!--<p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>-->
                            <h6><strong><?php echo $member_list[0]['mem_f_nm']; ?></strong></h6>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-6" style="border-right: 1px solid rgba(0,0,0,.1);">
                               <p class="text-muted"><?php echo $member_list[0]['mem_desn']; ?></p>
                               <small><?php echo $member_list[0]['mem_str']; ?></small>
                            </div>
                            <div class="col-6">
                                <p><i class="zmdi zmdi-phone" style="color: #000;font-weight: 800;"></i> - +91 <?php echo $member_list[0]['mem_m_no']; ?></p>
                                <p><i class="zmdi zmdi-whatsapp" style="color: #189d0e;font-weight: 800;"></i> - +91 <?php echo $member_list[0]['mem_wp_no']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3" style="">
                            </div>
                            <div class="col-6">
                                <form method="post">
                                <button type="submit" name="download_pdf" class="btn btn-primary btn-round btn-block waves-effect btn-raised m-b-10" data-placement-from="top" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="bg-black"><i class="material-icons"></i> Download Pdf </button>
                                </form>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                                    <div class="header">
                                        <h2><strong>Send</strong> Message</h2>
                                    </div>
                                    <div class="body m-b-10">
                                        <form method="post">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="message" required></textarea>
                                            </div>
                                            <div class="post-toolbar-b">
                                               <!--  <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-attachment"></i></button>
                                                <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-camera"></i></button> -->
                                                <button type="submit" name="send_sms" class="btn btn-primary btn-round">Send </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Other Info*</strong></h2>
                        <p><?php echo $member_list[0]['mem_srt_info']; ?></p>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <li class="list-group-item"><span class=""><strong>Email Id :</strong></span>&nbsp;&nbsp; <?php echo $member_list[0]['mem_email']; ?></li>
                            <li class="list-group-item"><span class=""><strong>DOB</strong></span>:&nbsp;&nbsp; <?php echo $member_list[0]['mem_dob']; ?></li>
                            <li class="list-group-item"><span class=""><strong>District</strong></span> : <?php echo $member_list[0]['mem_dis']; ?></li>
                            <li class="list-group-item"><span class=""><strong>Tahsil</strong></span> :&nbsp;&nbsp; <?php echo $member_list[0]['mem_tah']; ?></li>
                            <li class="list-group-item"><span class=""><strong>Street</strong></span> : &nbsp;&nbsp; <?php echo $member_list[0]['mem_str']; ?></li>                      
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<style type="text/css">
    .card_mt_20{margin-top: 50px;margin-bottom: 60px;}
    .card_mt_20 p {color: #ffffff;}
    .tab_custom_clr h5{color: #f37437;}
    .social-links li a{color: #f37437;}
</style>
