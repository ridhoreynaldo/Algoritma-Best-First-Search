<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
        <div class="login-title text-center">
        </div>
        <div class="login-content">
            <div class="login-header ">
                <h3><strong>Welcome,</strong></h3>
                <h5>Silahkan Masuk Ke CPanel</h5>
            </div>
            <div class="login-body">

                <form action="" method="POST">
                    <div class="form-group ">
                        <div class="pos-r">
                            <input id="form-username" type="text" name="username" placeholder="Username..."
                                class="form-username form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pos-r">
                            <input id="form-password" type="password" name="password" placeholder="Password..."
                                class="form-password form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control" name="login"><strong>Sign
                                in</strong></button>
                    </div>
                    <div class="login-footer text-center template">
                        <h5><a href="index.php" class="bold"> Kembali Ke Home </a></h5>
                    </div>
                </form>
            </div> <!-- end  login-body -->
        </div><!-- end  login-content -->
        <div class="login-footer text-center template">
            <div class="login-footer text-center template">
            </div>
        </div> <!-- end  login-container -->
    </div>
    </div><!-- end container -->
</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['login'])):
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($db, "SELECT * FROM tb_admin");    
    $data = mysqli_fetch_assoc($query);
    if($username == $data['username'] && $password == $data['password']):
        header('Location: dashboard.php');
    endif;
endif;

?>