<?php

session_start();
$sesi = $_SESSION['level'];
if ($sesi == "") {
    header("location:login.php");
}

require 'functions.php';

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM bobot ")[0];
$nilai = query("SELECT * FROM nilai");

?>

<?php $jumlahBobot = $mhs["c1"] + $mhs["c2"] + $mhs["c3"] + $mhs["c4"] + $mhs["c5"] + $mhs["c6"];

$w1 = $mhs["c1"] / $jumlahBobot;
$w2 = $mhs["c2"] / $jumlahBobot;
$w3 = $mhs["c3"] / $jumlahBobot;
$w4 = $mhs["c4"] / $jumlahBobot;
$w5 = $mhs["c5"] / $jumlahBobot;
$w6 = $mhs["c6"] / $jumlahBobot;
?>

<?php $jumlah = 0;
foreach ($nilai as $langkah1) :
    $hitung2 =  $langkah1["per_pem"] ** $w1 *
        $langkah1["pel_pem"] ** $w2 *
        $langkah1["pen_pem"] ** $w3 *
        $langkah1["mel_mem"] ** $w4 *
        $langkah1["tug_tam"] ** $w5 *
        $langkah1["peng_keg"] ** $w6;

    $jumlah += $hitung2;
endforeach;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css1/style_nilaiguru3.css">
</head>

<body>
    <header>
        <div class="jumbotron">
            <h2 class="judul">Halaman guru</h2>
            <p>Sekolah Khusus Pelita Insani</p>
        </div>

        <nav>
            <ul>
                <li><a href="index_guru.php">Home</a></li>
                <li id="nilai"><a href="nilai_guru.php">Nilai</a></li>
                <li><a href="logout.php" onclick="return confirm('apakah anda ingin logout?');">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
            <article id="sejarah" class="card">
                <h3>Tabel Nilai dan Perhitungan</h3>
                <table class="table1">
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
                        <th>Hasil dari Langkah 2</th>
                        <th>Hasil Langkah 3</th>
                    </tr>
                    <?php $j = 0; ?>
                    <?php $i = 1; ?>
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
                                $langkah2["peng_keg"] ** $w6; ?>
                            <td><?php echo number_format($hitung3, 4); ?></td>
                            <?php $kesimpulan = $hitung3 / $jumlah; ?>
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
                <br>
                <h3>Hasil Akhir</h3>

                <?php rsort($urut); ?>
                <table class="table1">

                    <tr>
                        <th>Peringkat</th>
                        <th>Nama dan Hasil Akhir</th>
                    </tr>
                    <?php $c = 1; ?>
                    <?php $jumlah = $j; ?>
                    <?php for ($x = 0; $x < $jumlah; $x++) : ?>
                        <tr>
                            <td><?php echo $c; ?></td>
                            <td><?php echo $urut[$x]; ?></td>
                        </tr>

                        <?php $c++ ?>
                    <?php endfor; ?>
                </table>

            </article>
        </div>



    </main>
</body>

</html>