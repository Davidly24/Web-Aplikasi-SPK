<?php
error_reporting(0);
session_start();
$sesi = $_SESSION['level'];
if( $sesi == "" || $sesi == "user" ){
    header("location:login.php");
}


require 'functions.php';

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM bobot ")[0];
$nilai = query("SELECT * FROM nilai2");
?>

<html>
<head>
        <title>Hasil Perangkingan</title>
        <link rel="stylesheet" href="css1/style_hasil1.css">
    </head>
    <body>
    <div class="content">
        <header>
            <h2 class="judul">Sekolah Khusus Pelita Insani</h2>
            <p align="center">Jln. Raya Serdang Waringin Kurung,Margatani Kramatwatu Serang/Banten</p>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="nilai.php">Nilai</a></li>
                <li><a href="ubahBobot.php">SPK</a></li>
                <li id="hasil"><a href="report.php">Hasil SPK</a></li>
                <li><a href="logout.php" onclick="return confirm('apakah anda ingin keluar?');">Logout</a></li>
            </ul>
        </nav>


        <?php if ($mhs["c1"] == 0 ) : ?>
        <br><br>
        <center><span>Ubahlah Bobot Terlebih Dahulu, Pada Halaman SPK</span><center>
        <?php elseif ($mhs["c2"] == 0 ) : ?>
        <br><br>
        <center><span>Ubahlah Semua Bobot Terlebih Dahulu, Pada Halaman SPK</span><center>
        <?php elseif ($mhs["c3"] == 0 ) : ?>
        <br><br>
        <center><span>Ubahlah Semua Bobot Terlebih Dahulu, Pada Halaman SPK</span><center>
        <?php elseif ($mhs["c4"] == 0 ) : ?>
        <br><br>
        <center><span>Ubahlah Semua Bobot Terlebih Dahulu, Pada Halaman SPK</span><center>
        <?php elseif ($mhs["c5"] == 0 ) : ?>
        <br><br>
        <center><span>Ubahlah Semua Bobot Terlebih Dahulu, Pada Halaman SPK</span><center>
        <?php elseif ($mhs["c6"] == 0 ) : ?>
        <br><br>
        <center><span>Ubahlah Semua Bobot Terlebih Dahulu, Pada Halaman SPK</span><center>

        <?php else : ?>

        <header>
            <h3 align="center">Hasil Perangkingan</h3>
        </header>
    
        <?php $jumlahBobot = $mhs["c1"] + $mhs["c2"] + $mhs["c3"] + $mhs["c4"] + $mhs["c5"] +$mhs["c6"]  ;?>    
        <?php 
            $w1 = $mhs["c1"] / $jumlahBobot;
            $w2 = $mhs["c2"] / $jumlahBobot;
            $w3 = $mhs["c3"] / $jumlahBobot;
            $w4 = $mhs["c4"] / $jumlahBobot;
            $w5 = $mhs["c5"] / $jumlahBobot;
            $w6 = $mhs["c6"] / $jumlahBobot;
        ?>

    <?php $jumlah = 0; ?>
    <?php foreach ($nilai as $langkah1) :  ?>
        <?php 
        $jumlah_k1 = $langkah1["k1"] + $langkah1["k2"] + $langkah1["k3"] + $langkah1["k4"] + $langkah1["k5"] + $langkah1["k6"] + $langkah1["k7"] +
                    $langkah1["k8"] + $langkah1["k9"] + $langkah1["k10"];    
        $kriteria1 = ($jumlah_k1 / 40) * 100;
        
        $jumlah_k2 = $langkah1["k11"] + $langkah1["k12"] + $langkah1["k13"] + $langkah1["k14"] + $langkah1["k15"] + $langkah1["k16"] + $langkah1["k17"];    
        $kriteria2 = ($jumlah_k2 / 28) * 100;

        $jumlah_k3 = $langkah1["k18"] + $langkah1["k19"] + $langkah1["k20"] + $langkah1["k21"] + $langkah1["k22"] + $langkah1["k23"] + $langkah1["k24"] +
                        $langkah1["k25"] + $langkah1["k26"] + $langkah1["k27"] + $langkah1["k28"];
        $kriteria3 = ($jumlah_k3 / 44) * 100;

        $jumlah_k4 = $langkah1["k29"] + $langkah1["k30"] + $langkah1["k31"];    
        $kriteria4 = ($jumlah_k4 / 12) * 100;

        $jumlah_k5 = $langkah1["k32"] + $langkah1["k33"] + $langkah1["k34"] + $langkah1["k35"] + $langkah1["k36"];    
        $kriteria5 = ($jumlah_k5 / 20) * 100;

        $jumlah_k6 = $langkah1["k37"] + $langkah1["k38"] + $langkah1["k39"] + $langkah1["k40"];    
        $kriteria6 = ($jumlah_k6 / 16) * 100;
        
        
    ?>
    
    <?php $hitung2 =  $kriteria1 ** $w1 * 
                    $kriteria2 ** $w2 * 
                    $kriteria3 ** $w3 *  
                    $kriteria4 ** $w4 * 
                    $kriteria5 ** $w5 *
                    $kriteria6 ** $w6;?>

    <?php $jumlah += $hitung2; ?>
    <?php endforeach; ?>



<h3 align="center">Tabel Nilai dan Perhitungan</h3>

    <table align="center" class="table1">
    <tr>
        <th rowspan="2">NO.</th>
        <th rowspan="2">Nama</th>
        <th colspan="6">Nilai</th>
        <th colspan="2">Nilai Perhitungan</th>
    </tr>
    <tr>
    <th>Perencanaan <br> Pembelajaran</th>
    <th>Pelaksanaan <br> Pembelajaran</th>
    <th>Penilaian <br> Hasil Pembelajaran</th>
    <th>Melatih dan <br> Membimbing</th>
    <th>Tugas <br> Tambahan</th>
    <th>Pengembangan <br> Kegiatan Profesional</th>
    <th>Hasil vektor S</th>
    <th>Hasil vektor V</th>
    </tr>
    <?php $j = 0; ?>
    <?php $i=1; ?>
    <?php foreach ($nilai as $langkah2) :  ?>
        <?php 
        $jumlah_k1 = $langkah2["k1"] + $langkah2["k2"] + $langkah2["k3"] + $langkah2["k4"] + $langkah2["k5"] + $langkah2["k6"] + $langkah2["k7"] +
                    $langkah2["k8"] + $langkah2["k9"] + $langkah2["k10"];    
        $kriteria1 = ($jumlah_k1 / 40) * 100;
        
        $jumlah_k2 = $langkah2["k11"] + $langkah2["k12"] + $langkah2["k13"] + $langkah2["k14"] + $langkah2["k15"] + $langkah2["k16"] + $langkah2["k17"];    
        $kriteria2 = ($jumlah_k2 / 28) * 100;

        $jumlah_k3 = $langkah2["k18"] + $langkah2["k19"] + $langkah2["k20"] + $langkah2["k21"] + $langkah2["k22"] + $langkah2["k23"] + $langkah2["k24"] +
                        $langkah2["k25"] + $langkah2["k26"] + $langkah2["k27"] + $langkah2["k28"];
        $kriteria3 = ($jumlah_k3 / 44) * 100;

        $jumlah_k4 = $langkah2["k29"] + $langkah2["k30"] + $langkah2["k31"];    
        $kriteria4 = ($jumlah_k4 / 12) * 100;

        $jumlah_k5 = $langkah2["k32"] + $langkah2["k33"] + $langkah2["k34"] + $langkah2["k35"] + $langkah2["k36"];    
        $kriteria5 = ($jumlah_k5 / 20) * 100;

        $jumlah_k6 = $langkah2["k37"] + $langkah2["k38"] + $langkah2["k39"] + $langkah2["k40"];    
        $kriteria6 = ($jumlah_k6 / 16) * 100;
        
        
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $langkah2["nama"]; ?></td>
        <td><?php echo number_format($kriteria1, 2); ?></td>
        <td><?php echo number_format($kriteria2, 2); ?></td>
        <td><?php echo number_format($kriteria3, 2); ?></td>
        <td><?php echo number_format($kriteria4, 2); ?></td>
        <td><?php echo number_format($kriteria5, 2); ?></td>
        <td><?php echo number_format($kriteria6, 2); ?></td>
        <?php $hitung3 =  $kriteria1 ** $w1 * 
                        $kriteria2 ** $w2 * 
                        $kriteria3 ** $w3 *  
                        $kriteria4 ** $w4 * 
                        $kriteria5 ** $w5 *
                        $kriteria6 ** $w6;?>
        <td><?php echo number_format($hitung3, 4); ?></td>
        <?php $kesimpulan = $hitung3/ $jumlah; ?>
        <td> <?php echo number_format($kesimpulan, 4); ?> </td>
        <?php $urut[] = number_format($kesimpulan, 4) . " " .  " ( " .  $langkah2["nama"] . " ) "; ?>        
    <?php $i++; ?>
    <?php $j++ ?>
    <?php endforeach; ?>
    </tr>
    <tr>
    <td colspan="8" align="right"> Jumlah </td>
    <td><?php echo number_format($jumlah, 4); ?></td>    
    </tr>
</table>

<?php rsort($urut); ?>
<br>
<p align="center">Berikut adalah hasil akhir dari perhitungan Metode Weighted Product</p>
<h3 align="center">Hasil Kesimpulan</h3>
<table align="center" class="table1" >

    <tr>
        <th>Peringkat</th>
        <th>Nama dan Hasil Akhir</th>
    </tr>
<?php $c = 1; ?>
<?php $jumlah = $j; ?>
<?php for( $x=0; $x < $jumlah; $x++ ) : ?>
    <tr>
        <td><?php echo $c; ?></td>
        <td><?php echo $urut[$x]; ?></td>
     </tr>
    
<?php $c++ ?>
<?php endfor; ?>
</table>
<br>
<hr>
<p>*Ubah kedalam format pdf</p>
<form action="report1.php" method="post">
<select class="cari" name="semester" id="" required>
<option value="">Masukkan Semester</option>
<option value="Genap">Genap</option>
<option value="Ganjil">Ganjil</option>
</select>
<input type="text" class="cari" name="tahun" placeholder="Masukkan Tahun Ajaran" required>
<button type="submit" class="cari" name="submit" required>Print</button>
</form>
<?php endif ;?>
</body>
</html>