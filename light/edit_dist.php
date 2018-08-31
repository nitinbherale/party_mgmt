<?php include("header.php") ?>	
<?php 

 if (isset($_POST['edit_dist'])) {
 	 $id = $_POST['dist_id'];
 	 $name_dist = $_POST['dist_nm'];
 	 $upd_qry = "UPDATE tbl_dist SET dist_name = '$name_dist' WHERE status=0 AND dist_id = '$id'";
 	 $run_qry = mysqli_query($dblink,$upd_qry);
 	 if ($run_qry) {
 	 	echo '<script>success_msg("Success","District Updated Successfully","dist_list.php");</script>';
 	 }
 }


 $id = $_POST['dist_id'];
 list($dist) = exc_qry("SELECT * FROM tbl_dist WHERE dist_id = '$id' ");
 if ($id>0) {
 	$id = $_POST['dist_id'];
 	$name_dist = $dist[0]['dist_name']; 

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
                                <h2>Districts</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">District List</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                               
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Add New Dist</button>
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
                        <h2><strong>Edit</strong> District</h2>                        
                    </div>
                    <div class="body">
                        <form method="POST">
                        	<label>Dist Name</label>
                        	<div class="form-group">
                        		<input type="text" name="dist_nm" value="<?php echo $dist[0]['dist_name'];  ?>" class="form-control">
                        	</div>
                        	<button type="submit" name="edit_dist" class="btn btn-default btn-round waves-effect">Edit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>