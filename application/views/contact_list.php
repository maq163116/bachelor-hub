<!-- ====== Breadcrumbs Area ====== --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Contact List</span>
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
                                
                                <th style="width: 15%;">Firstname</th>
                                <th style="width: 10%;">Email</th>
                                <th style="width: 15%;">Subject</th>
                                <th style="width: 55%;">Message</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sl = 1;
                                foreach ($contact_list as $key=>$value) {
                                    ?>
                            <tr>
                                <td> <?php echo $sl++ ; ?> </td>
                                
                                <td> <?php echo $value->first_name; ?> </td>
                                <td> <?php echo $value->email; ?> </td>
                                <td> <?php echo $value->subject; ?> </td>
                                <td> <?php echo $value->description; ?> </td>
                                
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