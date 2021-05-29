<?php

require '../functions.php';

$guru = query("SELECT * FROM guru");



if( isset($_POST["simpan"]) ){

    if(tambahnilai($_POST) > 0 ){
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            window.location = '../nilai.php';
        </script>
        ";
    }else{
        echo "gagal";
    }

}



?>


<html>
<head>
<title>Coba</title>

<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>From Biodata</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<script src="js/jQuery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="js/angular.min.js"></script>
		<script src="js/proses.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>

<br>
		<a href="../nilai.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-home"></span> Kembali
		</a>
    




<form action="" method="post">
<div style="padding-top: 25px;">
                        
<h2 align="center">Penilaian Kinerja Guru</h2>
						
<div class="row">
	<div class='col-sm-3'></div>
		<div class='col-sm-5'>
<table class='table table-bordered'>
    <tr>
        <td>NAMA : </td>
    <td>
        <select name="nama" class="form-control" id="nama">
        <option>-</option>
        <?php foreach ($guru as $row) : ?>
        <option> <?php echo $row["nama"]; ?> </option>
        <?php endforeach; ?>

        </select>
    </td>
    </tr>
    <tr>
        <td>KELAS : </td>
        <td>
            <select class="form-control">
                <option value="">II/SLBB: A</option>
                <option value="">II/SLBB: B</option>
            </select>
        </td>
    </tr>
</table>
            </div>
</div>
<h4 align="center"> *Keterangan skor <br>
                    1 = Sangat Kurang,
                    2 = Kurang,
                    3 = Baik,
                    4 = Sangat Baik

        </h4>
        <br>		
<div class="row">
	<div class='col-sm-3'></div>
		<div class='col-sm-6'>
        <table class='table table-bordered'>

                <tr>
                    <td align="center">
                        <label for="">Program</label>
                    </td>
                    <td align="center">
                        <label for="">No</label>
                    </td>
                    <td align="center">
                        <label for="">Komponen Penilaian</label>
                    </td>
                    <td colspan="4">
                        <label for="">Skor</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for="">Perencanaan Pembelajaran. </label>
                    </td>
                    <td>
                        <label for="">1. </label>
                    </td>
                    <td>
                        <label for="">Menggunakan Kalender Ajaran</label>
                    </td>
                    <td>
                        <input type="radio" name="1" value="1" required> 1
                    </td>
                    <td>
                        <input type="radio" name="1" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="1" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="1" value="4"> 4
                    </td>
                </tr>


                <tr>
                    <td colspan="7">
                        <label for="">-</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">2</label>
                    </td>
                    <td>
                        <label for="">Menyusun Program Tahunan</label>
                    </td>
                    <td>
                        <input type="radio" name="2" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="2" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="2" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="2" value="4"> 4
                    </td>
                </tr>

                
                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">3</label>
                    </td>
                    <td>
                        <label for="" hiden>Menyusun Program Semester</label>
                    </td>
                    <td>
                        <input type="radio" name="3" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="3" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="3" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="3" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">4</label>
                    </td>
                    <td>
                        <label for="" hiden>Memperbaiki Silabus</label>
                    </td>
                    <td>
                        <input type="radio" name="4" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="4" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="4" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="4" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">5</label>
                    </td>
                    <td>
                        <label for="" hiden>Mengembangkan RPP</label>
                    </td>
                    <td>
                        <input type="radio" name="5" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="5" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="5" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="5" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">6</label>
                    </td>
                    <td>
                        <label for="" hiden>Menetapkan KKM</label>
                    </td>
                    <td>
                        <input type="radio" name="6" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="6" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="6" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="6" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">7</label>
                    </td>
                    <td>
                        <label for="" hiden>Menggunkan Agenda Harian</label>
                    </td>
                    <td>
                        <input type="radio" name="7" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="7" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="7" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="7" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">8</label>
                    </td>
                    <td>
                        <label for="" hiden>Memiliki Jadwal Tetap</label>
                    </td>
                    <td>
                        <input type="radio" name="8" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="8" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="8" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="8" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">9</label>
                    </td>
                    <td>
                        <label for="" hiden>Mengelola Buku Absensi</label>
                    </td>
                    <td>
                        <input type="radio" name="9" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="9" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="9" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="9" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">10</label>
                    </td>
                    <td>
                        <label for="" hiden>Mengelola Buku Nilai</label>
                    </td>
                    <td>
                        <input type="radio" name="10" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="10" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="10" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="10" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">-</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for="">Pelaksanaan Pembelajaran</label>
                    </td>
                    <td>
                        <label for="">11</label>
                    </td>
                    <td>
                        <label for="">Mengkondisikan Kelas</label>
                    </td>
                    <td>
                        <input type="radio" name="11" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="11" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="11" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="11" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">12</label>
                    </td>
                    <td>
                        <label for="" hiden>Memfasilitasi Siswa</label>
                    </td>
                    <td>
                        <input type="radio" name="12" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="12" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="12" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="12" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">13</label>
                    </td>
                    <td>
                        <label for="" hiden>Mengembangkan pengalaman <br> mengelaborasi informasi </label>
                    </td>
                    <td>
                        <input type="radio" name="13" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="13" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="13" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="13" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">14</label>
                    </td>
                    <td>
                        <label for="" hiden>Mengembangkan pengalaman belajar <br> mengkonfirmasi informasi</label>
                    </td>
                    <td>
                        <input type="radio" name="14" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="14" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="14" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="14" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">15</label>
                    </td>
                    <td>
                        <label for="" hiden>Melaksanakan penilaian proses</label>
                    </td>
                    <td>
                        <input type="radio" name="15" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="15" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="15" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="15" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">16</label>
                    </td>
                    <td>
                        <label for="" hiden>Menilai pengetahuan, karakter, <br> dan keterampilan siswa</label>
                    </td>
                    <td>
                        <input type="radio" name="16" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="16" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="16" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="16" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">17</label>
                    </td>
                    <td>
                        <label for="" hiden>Melaksanakan kegiatan refleksi, <br> mengukur pencapaian target</label>
                    </td>
                    <td>
                        <input type="radio" name="17" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="17" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="17" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="17" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">-</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for="">Penilaian Hasil Pembelajaran</label>
                    </td>
                    <td>
                        <label for="">18</label>
                    </td>
                    <td>
                        <label for="">Menggunakan Daftar Nilai <br> sesuai dengan standar penilaian</label>
                    </td>
                    <td>
                        <input type="radio" name="18" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="18" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="18" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="18" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">19</label>
                    </td>
                    <td>
                        <label for="" hiden>Melaksanakan tes dalam bentu <br>  Ulangan Harian,UTS,UAS/UKK</label>
                    </td>
                    <td>
                        <input type="radio" name="19" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="19" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="19" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="19" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">20</label>
                    </td>
                    <td>
                        <label for="" hiden>Melakukan penilaian Ahlak <br> Mulia dan kepribadian</label>
                    </td>
                    <td>
                        <input type="radio" name="20" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="20" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="20" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="20" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">21</label>
                    </td>
                    <td>
                        <label for="" hiden>Melaksanakan penilaian keterampilan siswa</label>
                    </td>
                    <td>
                        <input type="radio" name="21" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="21" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="21" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="21" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">22</label>
                    </td>
                    <td>
                        <label for="" hiden>Menilai kreativitas dan inovasi siswa</label>
                    </td>
                    <td>
                        <input type="radio" name="22" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="22" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="22" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="22" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">23</label>
                    </td>
                    <td>
                        <label for="" hiden>Melakukan Analisis Ulangan Harian</label>
                    </td>
                    <td>
                        <input type="radio" name="23" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="23" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="23" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="23" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">24</label>
                    </td>
                    <td>
                        <label for="" hiden>Remedial dan Pengayaan</label>
                    </td>
                    <td>
                        <input type="radio" name="24" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="24" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="24" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="24" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">25</label>
                    </td>
                    <td>
                        <label for="" hiden>Instrumen tes setiap KD</label>
                    </td>
                    <td>
                        <input type="radio" name="25" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="25" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="25" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="25" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">26</label>
                    </td>
                    <td>
                        <label for="" hiden>Menyusun Bank Soal</label>
                    </td>
                    <td>
                        <input type="radio" name="26" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="26" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="26" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="26" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">27</label>
                    </td>
                    <td>
                        <label for="" hiden>Menggunakan Kartu soal</label>
                    </td>
                    <td>
                        <input type="radio" name="27" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="27" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="27" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="27" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">28</label>
                    </td>
                    <td>
                        <label for="" hiden>Melaksanakan Analisis Penilaian</label>
                    </td>
                    <td>
                        <input type="radio" name="28" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="28" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="28" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="28" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">-</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for="">Melatih dan Memebimbing</label>
                    </td>
                    <td>
                        <label for="">29</label>
                    </td>
                    <td>
                        <label for="">Melatih dan membimbing siswa <br> dalam remedial dan pengayaan</label>
                    </td>
                    <td>
                        <input type="radio" name="29" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="29" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="29" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="29" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">30. </label>
                    </td>
                    <td>
                        <label for="" hiden>Membimbing siswa meraih target <br> pretasi dalam Kegiatan Ekstra Kurikuler</label>
                    </td>
                    <td>
                        <input type="radio" name="30" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="30" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="30" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="30" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">31. </label>
                    </td>
                    <td>
                        <label for="" hiden>Memberikan bimbingan dalam <br> kegiatan Karya Ilmiah Siswa</label>
                    </td>
                    <td>
                        <input type="radio" name="31" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="31" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="31" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="31" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">-</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for="">Tugas Tambahan</label>
                    </td>
                    <td>
                        <label for="">32</label>
                    </td>
                    <td>
                        <label for="">Menjadi Wakil Kepala Sekolah</label>
                    </td>
                    <td>
                        <input type="radio" name="32" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="32" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="32" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="32" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">33. </label>
                    </td>
                    <td>
                        <label for="" >Menjadi Wali Kelasa</label>
                    </td>
                    <td>
                        <input type="radio" name="33" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="33" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="33" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="33" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">34. </label>
                    </td>
                    <td>
                        <label for="" >Menjadi pembina extrakurikuler</label>
                    </td>
                    <td>
                        <input type="radio" name="34" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="34" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="34" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="34" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">35. </label>
                    </td>
                    <td>
                        <label for="" >Melaksanakan tugas piket</label>
                    </td>
                    <td>
                        <input type="radio" name="35" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="35" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="35" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="35" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">36. </label>
                    </td>
                    <td>
                        <label for="" >Menjadi Pembina Osis</label>
                    </td>
                    <td>
                        <input type="radio" name="36" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="36" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="36" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="36" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">-</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for="">Mengembangkan Kegiatan Profesional</label>
                    </td>
                    <td>
                        <label for="">37. </label>
                    </td>
                    <td>
                        <label for="">Melakukan Penelitian Tindakan Kelas</label>
                    </td>
                    <td>
                        <input type="radio" name="37" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="37" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="37" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="37" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">38. </label>
                    </td>
                    <td>
                        <label for="" >Mengikuti Pendidikan / Semminar dsb</label>
                    </td>
                    <td>
                        <input type="radio" name="38" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="38" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="38" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="38" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">39. </label>
                    </td>
                    <td>
                        <label for="" >Menggunakan Teknologi <br> Infromasi dan Komunikasi</label>
                    </td>
                    <td>
                        <input type="radio" name="39" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="39" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="39" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="39" value="4"> 4
                    </td>
                </tr>

                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                <td>
                        <label collrow for=""></label>
                    </td>
                    <td>
                        <label for="">40. </label>
                    </td>
                    <td>
                        <label for="" >Meningkatkan Penguasaan Bahasa Asing</label>
                    </td>
                    <td>
                        <input type="radio" name="40" value="1"> 1
                    </td>
                    <td>
                        <input type="radio" name="40" value="2"> 2
                    </td>
                    <td>
                        <input type="radio" name="40" value="3"> 3
                    </td>
                    <td>
                        <input type="radio" name="40" value="4"> 4
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <label for="">.</label>
                    </td>
                </tr>
                <tr>
                        <td align="center" colspan="6">
                            <button type="submit" name="simpan">
                            <span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
                        </td>
                </tr>
        </table>
        </div>
</div>
<br>


</form>
</div>

</body>
</html>