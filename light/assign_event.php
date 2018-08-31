<?php include("header.php") ?>

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
                        <div class="card-header" style="background: #FF4500;color: #fff;font-weight: 800;text-align:center;">
                            <strong class="card-title">Manage Event</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                                           
                                  <form enctype="multipart/form-data" method="post">
                                     
                                  <table class="table table-striped">
                                      <tbody>
                                        <tr scope="row">
                                          <th class=""><strong>Event Name :</strong></th>
                                          <td class="">test</td>
                                        </tr>
                                        <tr>
                                          <th scope="row" style="overflow: hidden;"><strong>Event Description :</strong> </th>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                        
                                        </tr>
                                        <tr>
                                          <th scope="row"><strong>Event Date :</strong> </th>
                                          <td>2018-08-30 (04:05 am)</td>
                                        </tr>
                                         <tr>
                                          <th scope="row"><strong>Event Location :</strong> </th>
                                          <td>At-Apti,Post_vaholi, Mumbai, 421301</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <input type="hidden" name="homepage" value="program">
                                      <input type="hidden" name="p_id" value="126">
                                        <div class="form-group p-10">
                                          <label for="cc-payment" class="control-label mb-1">User</label>
                                          <select id="cc-pament" name="user" class="form-control user-success" onchange="update(this.value)">
                                            <option value="">Select User</option>
                                            <option value="3">Nitin S. Bherale </option>  
                                        </select>
                                      </div>
                                      <div id="data" style="margin: 5px;"><h4> Send Notification To </h4><br><div class="row"><div class="form-group col-sm-3"> 
                                         <input type="checkbox" name="checkarr[]" value="3"> <strong>User 1 </strong>
                                       </div>
                                        <div class="form-group col-sm-3"> 
                                            <input type="checkbox" name="checkarr[]" value="9"> <strong>User 2 </strong>
                                        </div>
                                        <div class="form-group col-sm-3"> 
                                            <input type="checkbox" name="checkarr[]" value="10"> <strong>User 3 </strong>
                                        </div>
                                    </div>
                                  </div></div>

                                         <!--<button type="submit" name="assign" class="btn btn-secondary">Asign Program</button>-->
                                         <button type="submit" name="assign" class="btn btn-success btn-anim m_left" style="background: #FF4500;"><i class="fa fa-sign-out"></i><span class="btn-text">Assign Program</span></button>
                                  </form>
                              </div>
                          </div>


                    </div> <!-- .card -->
                                    
                
                </div>

            </div>
        </div><!--col-lg-12-->
    </div>
</section>