<?php include("header.php");
list($dist) = exc_qry("select * from tbl_dist where status = 1");
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
                        <h2><strong>District</strong> List</h2>                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-filter table-hover m-b-0">
                            <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Dist Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php for ($i=0; $i < count($dist); $i++) { ?>
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td class="project-title">
                                            <h6><?php echo $dist[$i]['dist_name']; ?></h6>
                                        </td>
                                        <td class="project-actions">
                                            <!-- <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a> -->
                                            <button class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></button>
                                            <form method="post">
                                                <input type="hidden" name="dist_id" value="<?php echo $dist[$i]['dist_id'] ?>">
                                                <button name="dist_del" type="submit" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
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