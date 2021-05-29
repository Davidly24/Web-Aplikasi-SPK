<?php 
session_start();
if($_SESSION['level']=="" || $_SESSION['level']=="user"){
    header("location:login.php");
}
require 'functions.php';

$guru = query ("SELECT * FROM user");

// tombol cari ditekan
if(isset($_POST["cari"]) ){
    $guru = cari2($_POST["keyword"]);
}

?>

<html>
<head>
    <title>Halaman Akun Guru</title>
    <link rel="stylesheet" type="text/css" href="css1/style_akun1.css">
</head>
<body>
    <div class="content">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="nilai.php">Nilai</a></li>
                <li><a href="ubahBobot.php">SPK</a></li>
                <li><a href="report.php">Hasil SPK</a></li>
                <li id="akun"><a href="akun.php" class="akun">Akun</a></li>
                <li><a href="logout.php" onclick="return confirm('apakah anda ingin logout?');">Logout</a></li>
            </ul>
        </nav>

        <header>
            <h2 class="judul">Halaman Akun Guru</h2>
        </header>
        <br></br>

    <a href="tambah/tambah_akun.php" class="button">Tambah Akun Guru</a>

    


<hr>
<center><h3>Tabel Akun Guru</h3></center>
    <form action="" method="post" align="center">
        <input type="text" name="keyword" class="cari" size="40" autofocus placeholder="Masukan nama pencarian..." 
        autocomplete="off" required>
        <button type="submit" class="cari" name="cari">Cari!</button>
    </form>
<center>
<table cellspacing='0'>
    <thead>
        <tr>
            <th>No.</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>AKSI</th>
        </tr>
    </thead>

        <?php $i = 1; ?>
        <?php foreach($guru as $user) : ?>
    
    <tbody>
        <tr>
            <td><?= $i ?></td>
            <td><?= $user["nama"]; ?></td>
            <td><?= $user["username"]; ?></td>
            <td><?= $user["password"]?></td>
            <td>
                <a href="tambah/ubah_akun.php?id=<?= $user["id_user"]; ?>" class="button">Ubah</a> |
                <a href="hapus/hapus_user.php?id=<?= $user["id_user"]; ?>" class="button" onclick="return confirm('yakin ingin menghapus?');">hapus</a>
            </td>
        </tr>
    </tbody>

        <?php $i++ ?>
        <?php endforeach; ?>

</table>
</center>

    </div>
</body>
</html>