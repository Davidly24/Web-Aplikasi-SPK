<?php 
session_start();
if($_SESSION['level']=="" || $_SESSION['level']=="user"){
    header("location:login.php");
}
require 'functions.php';

$mahasiswa = query ("SELECT * FROM guru ORDER BY id");
$sus = count($mahasiswa);
// tombol cari ditekan
if(isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

    
if($sus == 0){
    $jadi = 1;
    }else{
        $jadi = 2;
    }
    
?>

<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css1/style_index4.css">
</head>
<body>
    <div class="content">
        <header>
            <h2 class="judul">Sekolah Khusus Pelita Insani</h2>
            <p align="center">Jln. Raya Serdang Waringin Kurung,Margatani Kramatwatu Serang/Banten</p>
        </header>
        <nav>
            <ul>
                <li id="home"><a href="index.php">Home</a></li>
                <li><a href="nilai.php">Nilai</a></li>
                <li><a href="ubahBobot.php">SPK</a></li>
                <li><a href="report.php">Hasil SPK</a></li>
                <li><a href="logout.php" onclick="return confirm('apakah anda ingin keluar?');">Logout</a></li>
            </ul>
        </nav>

        
        <header>
            <h3 align="center">Halaman Utama</h3>
        </header>
        <br></br>

    <a href="tambah/tambah_guru.php" class="button">Tambah Data Guru</a>

    

<?php if ( $jadi == 1 ) : ?>
<hr>
<center><span class="blink">Data Kosong, Silahkan Klik Tambah Data Guru</span><center>
<?php else : ?>
    <center><h3>Tabel Data Guru</h3></center>
    <form action="" method="post" align="center">
        <input type="text" name="keyword" class="cari" size="40" autofocus placeholder="Masukan nama pencarian..." 
        autocomplete="off" required>
        <button type="submit" class="cari" name="cari">Cari!</button>
    </form>
    <div class="text">
        <table align="center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Masa Kerja</th>
                    <th>AKSI</th>
                </tr>
            </thead>

                <?php $i = 1; ?>
                <?php foreach($mahasiswa as $row) : ?>
            
            <tbody>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["kelamin"]; ?></td>
                    <td><?= $row["telpon"]; ?></td>
                    <td><?= $row["tanggal"]; ?> Tahun</td>
                    <td><?= $row["pend_ter"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>
                    <td>
                        <a href="tambah/ubah.php?id=<?= $row["id"]; ?>" class="button">Ubah</a> |
                        <a href="hapus/hapus.php?id=<?= $row["id"]; ?>" class="button" onclick="return confirm('yakin ingin menghapus?');">hapus</a>
                    </td>
                </tr>
            </tbody>

                <?php $i++ ?>
                <?php endforeach; ?>

        </table>
<?php endif ; ?>
    </div>
</body>
</html>