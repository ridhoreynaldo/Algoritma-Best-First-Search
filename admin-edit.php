<?php include("body.php"); ?>
        <main role="main" class="col-md-1 ml-sm-auto col-lg-12 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
            <h1 class="h2">Edit Admin</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm" style="text-align: center;" >
              <thead>
                <tr>
                  <th></th>
                  <th>Username</th>
                  <th>Password</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              
              <tbody>
             
              <?php
              include "koneksi.php";
            $qry="SELECT * FROM tb_admin";
            $data=mysqli_query($db,$qry);
            while ($d=mysqli_fetch_array($data)) {
                ?>     
                <form action="" method="POST">
                  <tr>
                  <input type="hidden" name="id" value="<?=$d['id']?>"></td>
                    <td><i class="fa fa-user" aria-hidden="true"></i></i></td>
                    <td><input type="text" class="form-control col-sm-6 container text-center" name="username" value="<?=$d['username']?>"></td>
                    <td><input type="password" class="form-control col-sm-9 container text-center" name="password" value=""></td>
                    <td><input type="submit" name="submit" class='btn btn-sm btn-success' value="&nbsp;Edit&nbsp"></td>
                  </tr>
                </form>
               <?php
                }
                ?>
              </tbody> 
            </table>
              </div>
        </main>

        <?php

if( isset($_POST['submit']) ){

    // ambil id dari query string
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, md5($_POST['password']));

if($_POST['username']){
    $qry = "UPDATE tb_admin SET username='$username' WHERE id=$id";
    $data = mysqli_query($db, $qry);
}
if($_POST['password']){
    $qry = "UPDATE tb_admin SET password='$password' WHERE username='$username'";
    $data = mysqli_query($db, $qry);
}

    // apakah query berhasil?
    if( $data ){
        echo '<meta http-equiv="refresh" content="0;url=admin-edit.php">';
    } else {
        die("gagal mengedit...");
    }

} else {
}

?>