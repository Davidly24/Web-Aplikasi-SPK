<?php
error_reporting(0);
session_start();
$sesi = $_SESSION['level'];
if( $sesi == "" || $sesi == "user" ){
    header("location:login.php");
}


require 'functions.php';

$nilai = query("SELECT * FROM nilai2 ORDER BY id_nilai2");
$sus = count($nilai);


if($sus == 0){
    $jadi = 1;
}else{
    $jadi = 2;
}

?>

<html>
<head>
<title>Halaman Nilai</title>
<link rel="stylesheet" href="css1/nilai_style.css">

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
                <li id="nilai"><a href="nilai.php">Nilai</a></li>
                <li><a href="ubahBobot.php">SPK</a></li>
                <li><a href="report.php">Hasil SPK</a></li>
                <li><a href="logout.php" onclick="return confirm('apakah anda ingin keluar?');">Logout</a></li>
            </ul>
        </nav>

        <header>
            <h3 align="center">Halaman Nilai</h3>
        </header>
        <br></br>




    <a href="tambah/coba.php" class="button">Tambah Nilai Guru</a>

    <hr>


    <?php if($jadi == 1) : ?>
        <center><span class="blink">Data Kosong, Silahkan Klik Tambah Nilai</span><center>

    <?php else : ?> 
    <center>
    <table cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Nama</th>
        <th>Perencanaan <br> Pembelajaran</th>
        <th>Pelaksanaan <br> Pembelajaran</th>
        <th>Penilaian <br> Hasil Pembelajaran</th>
        <th>Melatih dan <br> Membimbing</th>
        <th>Tugas <br> Tambahan</th>
        <th>Pengembangan <br> Kegiatan Profesional</th>
        <th colspan="2">AKSI</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($nilai as $row) :  ?>
    <?php 
        $jumlah_k1 = $row["k1"] + $row["k2"] + $row["k3"] + $row["k4"] + $row["k5"] + $row["k6"] + $row["k7"] +
                    $row["k8"] + $row["k9"] + $row["k10"];    
        $kriteria1 = ($jumlah_k1 / 40) * 100;
        
        $jumlah_k2 = $row["k11"] + $row["k12"] + $row["k13"] + $row["k14"] + $row["k15"] + $row["k16"] + $row["k17"];    
        $kriteria2 = ($jumlah_k2 / 28) * 100;

        $jumlah_k3 = $row["k18"] + $row["k19"] + $row["k20"] + $row["k21"] + $row["k22"] + $row["k23"] + $row["k24"] +
                        $row["k25"] + $row["k26"] + $row["k27"] + $row["k28"];
        $kriteria3 = ($jumlah_k3 / 44) * 100;

        $jumlah_k4 = $row["k29"] + $row["k30"] + $row["k31"];    
        $kriteria4 = ($jumlah_k4 / 12) * 100;

        $jumlah_k5 = $row["k32"] + $row["k33"] + $row["k34"] + $row["k35"] + $row["k36"];    
        $kriteria5 = ($jumlah_k5 / 20) * 100;

        $jumlah_k6 = $row["k37"] + $row["k38"] + $row["k39"] + $row["k40"];    
        $kriteria6 = ($jumlah_k6 / 16) * 100;
        
        
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo number_format( $kriteria1, 2 ) ; ?></td>
        <td><?php echo number_format( $kriteria2, 2) ; ?></td>
        <td><?php echo number_format( $kriteria3, 2 ) ; ?></td>
        <td><?php echo number_format( $kriteria4, 2 ) ; ?></td>
        <td><?php echo number_format( $kriteria5, 2 ) ; ?></td>
        <td><?php echo number_format( $kriteria6, 2 ) ; ?></td>
        <td>
            <a href="tambah/ubah_nilai.php?id=<?= $row["id_nilai2"]; ?>" class="aksi" );">Ubah</a> |
            <a href="hapus/hapus_nilai.php?id=<?= $row["id_nilai2"]; ?>" class="aksi" onclick="return confirm('yakin ingin menghapus?');">hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


    </table>
    </center>
    <?php endif; ?>
    </div>

</body>
</html>