<!-- ====== Breadcrumbs Area ====== --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">All Post</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->
<div class="availability-area bg-white-smoke">
        <div class="container">
         
            <div class="row">
                <div class="col-md-12">
                    <table id="userListTable" class="table table-bordered table-striped table_th_maroon">
                        <thead>
                            <tr>
                                <th style="width: 5%;">SL</th>
                                <th style="width: 10%;">Photo</th>
                                <th style="width: 15%;">Title</th>
                                <th style="width: 10%;">Rent</th>
                                <th style="width: 15%;">Date</th>
                                <th style="width: 10%;">Approved</th>
                                <th style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sl = 1;
                                foreach ($post as $key=>$value) {
                                    ?>
                            <tr>
                                <td> <?php echo $sl++ ; ?> </td>
                                <td>
                                    <img src="<?php echo base_url($value->thumb_photo) ?>" alt="" width="50px" height="50px">
                                </td>
                                <td> <?php echo $value->title; ?> </td>
                                <td> <?php echo $value->rent; ?> </td>
                                <td> <?php echo date("d M Y h:i a", strtotime($value->insert_time)) ?> </td>
                                <td> <?php if($value->approved == 1) echo "Approved"; else echo "Unapproved"; ?> </td>
                                <td> 
                                    <a href="<?php echo base_url('site/approve/'.$value->id)?>" class="btn btn-sm bg-info"><?php if($value->approved == 1) echo '<i class="fa fa-times"></i>'; else echo '<i class="fa fa-check"></i>';?></a>
                                    <a href="<?php echo base_url('details/'.$value->id)?>" class="btn btn-sm bg-green"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url('site/all_post_delete/'.$value->id); ?>" class="btn btn-sm btn-danger" onclick = 'return confirm("Are You Sure?")'><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container  -->
    </div>