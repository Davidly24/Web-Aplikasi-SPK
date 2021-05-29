<?php
error_reporting(0);
session_start();
$sesi = $_SESSION['level'];
$sesi2 = $_SESSION['username'];
if( $sesi == "" ){
    header("location:login.php");
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM guru WHERE id = $sesi2")[0];

if( $sesi2 == $mahasiswa["id"] ){
    $jadi = 1;
}else{
    $jadi = 0;
}

?>




<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css1/style_indexguru3.css">
</head>

<body>
        <header>
            <div class="jumbotron">
                <h2 class="judul">Halaman guru</h2>
                <p class="head">Sekolah Khusus Pelita Insani</p>
            </div>

            <nav>
                <ul>
                    <li id="home"><a href="index_guru.php">Home</a></li>
                    <li><a href="nilai_guru.php">Nilai</a></li>
                    <li><a href="logout.php" onclick="return confirm('apakah anda ingin logout?');">Logout</a></li>
                </ul>
            </nav>
        </header>
<main>
    <div id="content">
        <article id="sejarah" class="card">
        <?php if( $jadi == 1 ) : ?>
            <table class="demo-table responsive">
                <h2><?php echo $mahasiswa["nama"]; ?></h2>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-header="Nama" ><?php echo $mahasiswa["nama"]; ?></td>
                        <td data-header="Umur"><?php echo $mahasiswa["tanggal"]; ?></td>
                        <td data-header="Jabatan"><?php echo $mahasiswa["kelamin"]; ?></td>
                        <td data-header="Pendidikan"><?php echo $mahasiswa["pend_ter"]; ?></td>
                        <td data-header="Masa Kerja"><?php echo $mahasiswa["alamat"]; ?></td>
                        <td data-header="Jenis Kelamin"><?php echo $mahasiswa["telpon"]; ?></td>
                        <th scope="row">
                            <div class="toolbox">
                                <a href="tambah/ubah.php?id=<?php echo $mahasiswa["id"]; ?>" class="edit">Ubah</a>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>Data tidak ditemukan silahkan masukan data!</p>
            <a href="tambah/tambah_guru.php" class="button">Tambah Data</a>
        <?php endif; ?>
        </article>
        <article class="keterangan">
            <h3 id="wp1" class="wp">Metode Weighted Product</h3>
            <p>Sistem ini dibangun bertujuan untuk memberikan solusi pengambilan keputusan untuk
                penilaian kinerja guru, hasil dari aplikasi ini adalah berupa ranking guru berdasarkan
                dari hasil rata-rata setiap program penilaian dipangkatkan dengan bobot setiap program penilaian. Metode ini
                disebut metode WP atau Weighted Product.
            </p>
            <p>Metode Weighted Product (WP) adalah salah satu metode penyelesaian pada sistem pendukung keputusan.
                Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan atribut atau kriteria, dimana
                setiap atribut saling tidak tergantung satu dengan yang lainnya.
            </p>
        </article>
    </div>
   
   
    
    <aside>
        <article class="profile">
            <header>
                <h2>SKHIP</h2>
                <h3>Sekolah Khusus Pelita Insani</h3>
                <figure>
                    <img src="css1/logo_sekolah.jpg">
                </figure>
            </header>
            <section>
                <h3>Informasi Lainnya</h3>
                <table>
                    <tr>
                        <th>Jalan</th>
                        <td>Jln. Raya Serdang Waringin Kurung</td>
                    </tr>
                    <tr>
                        <th>Kampung</th>
                        <td>Margagiri</td>
                    </tr>
                    <tr>
                        <th>Desa</th>
                        <td>Margatani<sup>2</sup></td>
                     </tr>
                    <tr>
                        <th>Kecamatan</th>
                        <td>Kramatwatu</td>
                    </tr>
                    <tr>
                        <th>Kabupaten</th>
                        <td>Serang, Banten</td>
                    </tr>
                </table>
            </section>
        </article>
    </aside>

</main>
</body>
</html>