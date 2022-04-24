<?php               //Tag pembuka PHP
error_reporting(0); //Menghandle pesan error dari variable undefined

//BAGIAN 1
//Membuat Kerangka Untuk Menyimpan Titik Eksplorasi/Perpindahan Posisi Kuda
//dengan Method Constructor sebagai inisialisasi data 
class titikExplore{
    function __construct($baris, $kolom, $titikSimpan){
        $this->baris = $baris;
        $this->kolom = $kolom;
        $this->titikSimpan = $titikSimpan;
    }
}

//BAGIAN 2
//Fungsi Verifikasi Posisi Kuda dimana posisi kuda harus sesuai dengan ukuran dari papan catur
function adaDidalam($baris, $kolom, $matriks){
    if($baris >= 1 && $baris <= $matriks && $kolom >= 1 && $kolom <= $matriks){
        return true;
    }
    else{
        return false;
    }
}

//BAGIAN 3
//Fungsi mencari langkah terdekat kuda untuk mencapai posisi tujuan
function minLangkahKetarget($titikKuda, $titikRaja, $matriks){

    //MEMBUAT VARIABLE GLOBAL AGAR BISA DI PAKAI DI MANA SAJA
    global $titikPionX;
    global $titikPionY;
    
    //RUTE(PATH) BARIS DAN KOLOM(DX,DY) AGAR KUDA BISA MELANGKAH
    $rumusX = [-2, -1, 1, 2, -2, -1, 1, 2];
    $rumusY = [-1, -2, -2, -1, 1, 2, 2, 1];

    //ANTRIAN(QUEUE) UNTUK MENYIMPAN LANGKAH KUDA
    $tambahAntrian = [];

    //PUSH POSISI AWAL KUDA KEDALAM titikExplore
    array_push($tambahAntrian, new titikExplore($titikKuda[0], $titikKuda[1], 0));
    $hapusAntrian;$baris;$kolom;
    $mengunjungi = array($matriks);

    //Simbol bidak pada standard html
    $rajaPutih = "<font color ='red'>&#9812</font>";
    $pionPutih = "<font color ='red'>&#9817</font>";
    $kudaHitam = "<font color ='red'>&#9822</font>";
    $warna = "hitam";
    $hitam = 0;
?>

<!--BAGIAN 4-->
<!--Membuat Desain Papan Catur Dan Posisi Bidak ke dalam sebuah papan catur-->
<font size="6">Papan Catur</font><br><table border="1">
<?php 
for($row = 1; $row <= $matriks; $row++):
    $mengunjungi[$row] = array($matriks + 1);
    for($col = 1; $col <= $matriks; $col++):
        $mengunjungi[$row][$col] = false;
?>
<td width = "60" height = "60" align="center" class="<?=$warna.$hitam?>"><font size = "6">
<?php
if ($titikKuda[0] == $row && $titikKuda[1] == $col)
    echo $kudaHitam;
if($titikRaja[0] == $row && $titikRaja[1] == $col)
    echo $rajaPutih;
for($i=0; $i < count($titikPionX); $i++):
if($titikPionX[$i] == $row && $titikPionY[$i] == $col)
    echo $pionPutih;
endfor;
?>
    </font><font color = "gray" size="2">
        <?=$row.",".$col;?>
    </font></td>
<?php
$hitam == 0 ? $hitam=1 : $hitam=0;
    endfor;
?>
</tr>
<?php
//JIKA MATRIKS GENAP/GANJIL ATUR WARNA PAPAN CATUR
if($matriks % 2 == 0){
$hitam == 0 ? $hitam=1 : $hitam=0;
}
elseif($matriks % 2 ==1){
$hitam == 1 ? $hitam=1 : $hitam=0;
}
endfor;
?>
</table><br>

<!--BAGIAN 5-->
<!--Membuat node atau simpul untuk setiap langkah kuda bergerak ke posisi tujuan-->
<font size="6">Queue (Antrian dari Node ke Node)</font><br>
<font size="2">
<?php
$mengunjungi[$titikKuda[0]][$titikKuda[1]] = true;

//Bagian program untuk menghapus semua kemungkinan langkah jika titik sudah diisi oleh bidak pion
while(count($tambahAntrian)  != 0):
    $hapusAntrian = array_shift($tambahAntrian);
    for($i = 0; $i < count($titikPionX); $i++):
    if($titikPionX[0] == $hapusAntrian->baris && $titikPionY[0] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[1] == $hapusAntrian->baris && $titikPionY[1] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[2] == $hapusAntrian->baris && $titikPionY[2] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[3] == $hapusAntrian->baris && $titikPionY[3] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[4] == $hapusAntrian->baris && $titikPionY[4] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[5] == $hapusAntrian->baris && $titikPionY[5] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[6] == $hapusAntrian->baris && $titikPionY[6] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    if($titikPionX[7] == $hapusAntrian->baris && $titikPionY[7] == $hapusAntrian->kolom)
    $hapusAntrian = array_shift($tambahAntrian);
    endfor;
?>
<?php
if($hapusAntrian->baris == null && $hapusAntrian->kolom == null){
    echo "Tidak Dapat Menjangkau Target";
    break;
}
?>

<!--BAGIAN 6-->
<!--Bagian Program untuk melakukan antrian dan path/rute kuda dalam mencari tujuan-->
<?php
//LOOP UNTUK SEMUA KEADAAN YANG DAPAT DIJANGKAU
for($i = 0; $i < count($rumusX); $i++):
    $baris = (int)$hapusAntrian->baris + $rumusX[$i];
    $kolom = (int)$hapusAntrian->kolom + $rumusY[$i];

    //JIKA KEADAAN YANG DAPAT DIJANGKAU BELUM DIKUNJUNGI DAN ADA DIDALAM PAPAN
    //PUSH KEADAAN ITU KEDALAM ANTRIAN(QUEUE)
    if(adaDidalam($baris, $kolom, $matriks) && !$mengunjungi[$baris][$kolom]):
        $mengunjungi[$baris][$kolom] = true;
        array_push($tambahAntrian, new titikExplore($baris, $kolom, $hapusAntrian->titikSimpan + 1));
        echo "(".$baris.','.$kolom.")";

    endif;
    //HENTIKAN PENCARIAN JIKA TITIK SUDAH DITEMUKAN
    if($baris == $titikRaja[0] && $kolom == $titikRaja[1]){
    break;
}
endfor;
?>
<br>

<!--BAGIAN 7-->
<!--Bagian program dalam menghitung total langkah dengan melakukan looping /iteratif,-->
<!--ketika posisi tujuan ditemukan hentikan pencarian-->
<?php
if($baris == $titikRaja[0] && $kolom == $titikRaja[1]){
break;
}
endwhile;

while(count($tambahAntrian)  != 0):
    $hapusAntrian = array_shift($tambahAntrian);
    if($hapusAntrian->baris == $titikRaja[0] && $hapusAntrian->kolom == $titikRaja[1]){
    echo "<h4>Total Langkah Yaitu = ".$hapusAntrian->titikSimpan."</h4>";
}
    

for($i = 0; $i < count($rumusX) ; $i++):
    $baris = (int)$hapusAntrian->baris + $rumusX[$i];
    $kolom = (int)$hapusAntrian->kolom + $rumusY[$i];
    if(adaDidalam($baris, $kolom, $matriks) && !$mengunjungi[$baris][$kolom]):
        $mengunjungi[$baris][$kolom] = true;
        array_push($tambahAntrian, new titikExplore($baris, $kolom, $hapusAntrian->titikSimpan + 1));
    endif;
endfor;
endwhile;
echo "<h6>Titik Awal Yaitu = (".$titikKuda[0].",".$titikKuda[1].")&nbsp;";
echo "Titik Tujuan Yaitu = (".$titikRaja[0].",".$titikRaja[1].")</h6>";
}
?>