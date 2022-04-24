<?php include("body.php"); ?>
        <main role="main" class="col-md-1 ml-sm-auto col-lg-12 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
            <h1 class="h2">Edit About</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm" style="text-align: center;" >
              <thead>
                <tr>
                  <th></th>
                  <th>Nama</th>
                  <th>Nim</th>
                  <th>Jurusan</th>
                  <th>Matriks(x,y)</th>
                  <th colspan="1">Action</th>
                </tr>
              </thead>
              
              <tbody>
             
              <?php
              include "koneksi.php";
            $data=mysqli_query($db, "SELECT * FROM tb_about");
            while ($d=mysqli_fetch_array($data)) {
                ?>     
                <form action="" method="POST">
                  <tr>
                    <td><i class="fa fa-user" aria-hidden="true"></i></i></td>
                    <td><input type="text" class="form-control col-sm-9 container text-center" name="nama" value="<?=$d['nama']?>"></td>
                    <td><input type="text" class="form-control col-sm-6 container text-center" name="nim" value="<?=$d['nim']?>"></td>
                    <td><input type="text" class="form-control col-sm-9 container text-center" name="jurusan" value="<?=$d['jurusan']?>"></td>
                    <td><input type="text" class="form-control col-sm-3 container text-center" name="matriks" value="<?=$d['matriks']?>"></td>
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

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $matriks = $_POST['matriks'];

if($_POST['nama']){
  $data = mysqli_query($db, "UPDATE tb_about SET nama='$nama'");
}
if($_POST['nim']){
  $data = mysqli_query($db, "UPDATE tb_about SET nim='$nim'");
}
if($_POST['jurusan']){
  $data = mysqli_query($db, "UPDATE tb_about SET jurusan='$jurusan'");
}
if($_POST['matriks']){
  $data = mysqli_query($db, "UPDATE tb_about SET matriks='$matriks'");
}
    if( $data ){
        echo '<meta http-equiv="refresh" content="0;url=about-edit.php">';
    } else {
        die("gagal mengedit...");
    }

} else {
}

?>