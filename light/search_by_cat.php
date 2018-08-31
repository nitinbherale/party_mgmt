<?php include("header.php") ?>	
<!--Multiselect Css-->
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
                         <label for="dist">Distict</label>
                         <select class="form-control z-index show-tick" data-live-search="true">
                            <option>Thane</option>
                            <option>Ahmednagar</option>
                            <option>Akola</option>
                         </select>

                         <label for="Tal">Tal</label>
                         <select class="form-control z-index show-tick" data-live-search="true">
                            <option>Kalyan</option>
                            <option>Ambernath</option>
                            <option>Badlapur</option>
                         </select>  

                         <label for="Tal">Category</label>
                         <select class="form-control z-index show-tick" data-live-search="true">
                            <option>MLA</option>
                            <option>Sadasya</option>
                            <option>Khasdaar</option>
                         </select>

                        	<button type="submit" name="edit_dist" class="btn btn-default btn-round waves-effect">Edit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
