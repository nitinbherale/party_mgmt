<?php include("header.php") ?>
<?php

  if(!isValidUser())  
 {
    redirect("login.php"); 
  }
    else
  {

  	list($contact) = exc_qry("SELECT * FROM tbl_member");

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
                                <h2>Contact Numbers</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                   
                                    <li class="breadcrumb-item active">Contact List</li>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">                    
                    <div class="header">
                        <h2><strong>Contact</strong> Numbers</h2>                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-filter table-hover m-b-0">      <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>                           
                                <tbody>
                                	<?php  for ($i=0; $i < count($contact); $i++) { 
        
                                	 ?>
                                    <tr data-status="approved">
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $contact[$i]['mem_f_nm']; ?></td>
                                        <td><?php echo $contact[$i]['mem_m_no']; ?></td>
                                        <td><?php echo $contact[$i]['mem_desn']; ?></td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                <?php } ?>

                                    <!--<tr data-status="approved">
                                        <td>2</td>
                                        <td>nitinbherale@gmail.com</td>
                                        <td>9922854416</td>
                                        <td>Shivsena</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>3</td>
                                        <td>nitinbherale@gmail.com</td>
                                        <td>9922854416</td>
                                        <td>Shivsena</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>4</td>
                                        <td>nitinbherale@gmail.com</td>
                                        <td>9922854416</td>
                                        <td>Shivsena</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>5</td>
                                        <td>nitinbherale@gmail.com</td>
                                        <td>9922854416</td>
                                        <td>Shivsena</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>6</td>
                                        <td>nitinbherale@gmail.com</td>
                                        <td>9922854416</td>
                                        <td>Yuvasena</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>7</td>
                                        <td>nitinbherale@gmail.com</td>
                                        <td>9922854416</td>
                                        <td>Yuvasena</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

