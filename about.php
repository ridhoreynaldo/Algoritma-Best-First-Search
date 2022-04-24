<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {background:url(style/img/chess-1.jpg); margin:0; padding:0; background-size:100%}
</style>
<link rel="stylesheet" href="style/css2/bootstrap.min.css">
<link rel="stylesheet" href="style/css2/catur.css">

<link rel="stylesheet" type="text/css" href="style/css2/bgandterminal.css"> 
<script src="js/terminal.js"></script>

</head>
<body>
<a href="index.php">
<input type="submit" class="btn btn-primary" value="Home"></div></a>

<div class="element">
<a href="login.php">
<input type="submit" class="btn btn-danger" value="Login Admin"></div></a>
</div>


<div id="wrapper">
     <center><font color="#b9c47c"><h2 class="card-header">Informasi Admin</h2></font></center>
<div class="box">
<span class="prefix">
<div id="console">
<font size="7">
    <?php 
    include "koneksi.php";
    $query = mysqli_query($db,"SELECT * FROM tb_about");
    while($data = mysqli_fetch_array($query)):
    ?>
<font color="magenta">Nama</font>: <?=$data['nama']?></br>
<font color="magenta">Nim</font> : <?=$data['nim']?></br>
<font color="magenta">Jurusan</font>: <?=$data['jurusan']?></br>
  <?php endwhile;?>
    </div></span></div>
    </form>
    </body>
</html>