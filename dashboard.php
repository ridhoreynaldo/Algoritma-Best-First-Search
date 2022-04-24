<?php include("koneksi.php"); ?>
<?php include "body.php"; ?> 
<?php
$query1 = mysqli_query($db, "SELECT * FROM tb_about");
$query2 = mysqli_query($db, "SELECT * FROM tb_admin");
?>
           <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-flask f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo mysqli_num_rows($query1) ?></h2>
                                    <p class="m-b-0">Tentang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo mysqli_num_rows($query2) ?></h2>
                                    <p class="m-b-0">Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>