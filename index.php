<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/css2/catur.css">
    <link rel="stylesheet" href="style/css2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css2/bgandterminal.css">
    <script src="style/js/terminal.js"></script>
</head>

<body>
    <a href="about.php"><input type="submit" class="btn btn-secondary" value="Tentang"></a>
    <div class="element">
        <a href="login.php"><input type="submit" class="btn btn-danger" value="Login Admin"></a>
    </div>

    <div id="wrapper">
        <center>
            <font color="#b9c47c">
                <h4 class="card-header">PENERAPAN ALGORITMA GREEDY UNTUK MENENTUKAN LANGKAH TERPENDEK KUDA PADA
                    PERMAINAN CATUR</h4>
            </font>
        </center>
        <?php
         include "koneksi.php";
         $data=mysqli_query($db, "SELECT * FROM tb_about");
         while ($d=mysqli_fetch_array($data)) {
             $matriks = $d['matriks'];
           }
           ?>
        <form action="" method="POST">
            <div class="box">
                <span class="prefix">
                    <div id="console">
                        <font size="6" color="red">
                            Atur Bidak Dan Ukuran Papan<br>
                        <font size="5">
                            Baris X Kolom Papan(Only Admin Can Change) 
                            <font color="black"><input type="text" name="rowcol" size="1" value='<?=$matriks?>' disabled><br></font>
                            &#9822<font color="black"><input type="text" name="kuda" size="2" placeholder="0,0"></font>
                            &#9812<font color="black"><input type="text" name="raja" size="2" placeholder="0,0"><br></font>
                            &#9817<font color="black"><input type="text" name="pion1" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion2" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion3" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion4" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion5" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion6" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion7" size="2" placeholder="0,0"></font>
                            &#9817<font color="black"><input type="text" name="pion8" size="2" placeholder="0,0"><br></font>
                            <input type="submit" class="btn btn-warning" name="submit" value="Proses">
                            <a class="btn btn-primary" href="index.php">Clear</a><br><br>
        </form>
        <?php 
        include "algorithm.php";
       
            $titikPionX = [];
            $titikPionY = [];
            $titikKuda = [];
            $titikRaja = [];
        if(isset($_POST['submit'])){
            //$matriks = array($_POST['rowcol']);
            $tk = array($_POST['kuda']);
            $titikKuda = [$tk[0][0],$tk[0][2]];
            $tr = array($_POST['raja']);
            $titikRaja = [$tr[0][0],$tr[0][2]];

            $tp1 = array($_POST['pion1']);
            $tp2 = array($_POST['pion2']);
            $tp3 = array($_POST['pion3']);
            $tp4 = array($_POST['pion4']);
            $tp5 = array($_POST['pion5']);
            $tp6 = array($_POST['pion6']);
            $tp7 = array($_POST['pion7']);
            $tp8 = array($_POST['pion8']);

            $titikPionX = [$tp1[0][0],
                           $tp2[0][0],
                           $tp3[0][0],
                           $tp4[0][0],
                           $tp5[0][0],
                           $tp6[0][0],
                           $tp7[0][0],
                           $tp8[0][0]];
            $titikPionY = [$tp1[0][2],
                           $tp2[0][2],
                           $tp3[0][2],
                           $tp4[0][2],
                           $tp5[0][2],
                           $tp6[0][2],
                           $tp7[0][2],
                           $tp8[0][2]];
        }
        ?>
        <?=minLangkahKetarget($titikKuda, $titikRaja, $matriks);?>

    </div>
    </span>
    </div>

    </div>

</body>

</html>