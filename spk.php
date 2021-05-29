<?php
session_start();
$sesi = $_SESSION['level'];
if ( $sesi == "" || $sesi == "user" ){
    header("location:login.php");
}

require 'functions.php';

$bobot = query("SELECT * FROM bobot");
$nilai = query("SELECT * FROM nilai");

?>

<html>
    <head>
        <title>Sistem Pendukung Keputusan</title>
        <link rel="stylesheet" href="css1/style2">
    </head>
    <body>
    <div class="content">
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="nilai.php">Nilai</a></li>
                <li><a href="spk.php">SPK</a></li>
                <li><a href="akun.php" class="akun">Akun</a></li>
                <li><a href="logout.php" onclick="return confirm('apakah anda ingin keluar?');">Logout</a></li>
            </ul>
        </div>

        <header>
            <h2 class="judul">Halaman Nilai</h2>
        </header>
        <br></br>

        <table class="table2">
        <tr>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
            <th>C6</th>
            <th>Jumlah</th>
            <th>Ubah Data</th>
        </tr>


        <?php foreach( $bobot as $row ) : ?>
        <?php $jumlahBobot = $row["c1"] + $row["c2"] + $row["c3"] + $row["c4"] + $row["c5"] +$row["c6"]  ;?>    
        <tr>
            <td> <?php echo $row["c1"]; ?> </td>
            <td> <?php echo $row["c2"]; ?> </td>
            <td> <?php echo $row["c3"]; ?> </td>
            <td> <?php echo $row["c4"]; ?> </td>
            <td> <?php echo $row["c5"]; ?> </td>
            <td> <?php echo $row["c6"]; ?> </td>
            <td> <?php echo $jumlahBobot; ?> </td>
            <td> <a href="ubahBobot.php?id=<?= $row["id_bobot"]; ?>" class="button">Ubah</a> </td>
        </tr>
        <?php endforeach; ?>



        
        </table>

        <br>

        <h2>Langkah 1</h2>
        
        <table class="table1">
        
        <tr> 
            <th>W1</th>
            <th>W2</th>
            <th>W3</th>
            <th>W4</th>
            <th>W5</th>
            <th>W6</th>
        </tr>

        

        <?php 
            $w1 = $row["c1"] / $jumlahBobot;
            $w2 = $row["c2"] / $jumlahBobot;
            $w3 = $row["c3"] / $jumlahBobot;
            $w4 = $row["c4"] / $jumlahBobot;
            $w5 = $row["c5"] / $jumlahBobot;
            $w6 = $row["c6"] / $jumlahBobot;
        ?>
        <tr>
            <td><?php echo $w1; ?></td>
            <td><?php echo $w2; ?></td>
            <td><?php echo $w3; ?></td>
            <td><?php echo $w4; ?></td>
            <td><?php echo $w5; ?></td>
            <td><?php echo $w6; ?></td>
        </tr>
        </table>
        
       <br></br>
    <h2>Langkah 2</h2>

    <table class="table1">
    <tr>
    <th>NO.</th>
    <th>Nama</th>
    <th>Perencanaan <br> Pembelajaran</th>
    <th>Pelaksanaan <br> Pembelajaran</th>
    <th>Penilaian <br> Hasil Pembelajaran</th>
    <th>Melatih dan <br> Membimbing</th>
    <th>Tugas <br> Tambahan</th>
    <th>Pengembangan <br> Kegiatan Profesional</th>
    <th>Hasil dari Langkah 2</th>
    <th>Hasil Kesimpulan</th>
    </tr>
    
    <?php $jumlah = 0; ?>
    <?php foreach ($nilai as $langkah1) :  ?>

    <?php  $langkah1["nama"]; ?>
    <?php  $langkah1["per_pem"]; ?>
    <?php  $langkah1["pel_pem"]; ?>
    <?php  $langkah1["pen_pem"]; ?>
    <?php  $langkah1["mel_mem"]; ?>
    <?php  $langkah1["tug_tam"]; ?>
    <?php  $langkah1["peng_keg"]; ?>
    <?php $hitung2 =  $langkah1["per_pem"] ** $w1 * 
                    $langkah1["pel_pem"] ** $w2 * 
                    $langkah1["pen_pem"] ** $w3 *  
                    $langkah1["mel_mem"] ** $w4 * 
                    $langkah1["tug_tam"] ** $w5 *
                    $langkah1["peng_keg"] ** $w6;?>

    <?php $jumlah += $hitung2; ?>
    <?php endforeach; ?>




    <?php $i = 1;?>
    
    <?php foreach ($nilai as $langkah2) :  ?>

    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $langkah2["nama"]; ?></td>
    <td><?php echo $langkah2["per_pem"]; ?></td>
    <td><?php echo $langkah2["pel_pem"]; ?></td>
    <td><?php echo $langkah2["pen_pem"]; ?></td>
    <td><?php echo $langkah2["mel_mem"]; ?></td>
    <td><?php echo $langkah2["tug_tam"]; ?></td>
    <td><?php echo $langkah2["peng_keg"]; ?></td>
    <?php $hitung3 =  $langkah2["per_pem"] ** $w1 * 
                    $langkah2["pel_pem"] ** $w2 * 
                    $langkah2["pen_pem"] ** $w3 *  
                    $langkah2["mel_mem"] ** $w4 * 
                    $langkah2["tug_tam"] ** $w5 *
                    $langkah2["peng_keg"] ** $w6;?>
    <td><?php echo $hitung3; ?></td>
    <td> <?php echo $hitung3 / $jumlah; ?> </td>
    
    
    </tr>
    
    <?php $i++; ?>
    <?php endforeach; ?>
    <tr>
    <td colspan="8"></td>
    <td><?php echo $jumlah; ?></td>
    </tr>
    </table>
    <br>
    
    </body>
</html>