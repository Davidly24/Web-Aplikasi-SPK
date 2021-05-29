<?php
require 'functions.php';

$semester = $_POST["semester"];
$tahun = $_POST["tahun"];

require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$nilai = query("SELECT * FROM nilai2");
$bobot = query("SELECT * FROM bobot")[0];


$jumlah = $bobot["c1"] + $bobot["c2"] + $bobot["c3"] + $bobot["c4"] + $bobot["c5"] + $bobot["c6"];  

$w1 = $bobot["c1"] / $jumlah;
$w2 = $bobot["c2"] / $jumlah;
$w3 = $bobot["c3"] / $jumlah;
$w4 = $bobot["c4"] / $jumlah;
$w5 = $bobot["c5"] / $jumlah;
$w6 = $bobot["c6"] / $jumlah;

        $html = '<html>
             <head>
                <style>
               
                .table1 {
                    font-family: sans-serif;
                    color: #232323;
                    border-collapse: collapse;
                    text-align: center;
                }
                
                .table1, th{
                    border: 1px solid #999;
                    padding: 7px 10px;
                    font-size: 11px;
                }

                 td {
                    border: 1px solid #999;
                    padding: 8px 10px;
                    font-size: 10px;
                }

                h2, p{
                    text-align: center;
                    margin-top: 0;
                }

                h3 {
                    text-decoration: underline;
                    text-align: center;
                }
                pre {
                    text-decoration : bold;
                }
            </style>
            </head>';
            
        $html .= '<body>
            <h2>Sekolah Khusus Pelita Insani</h2>
            <p>Jl. Raya Serdang Waringin Kurung Keramatwatu Serang/Banten</p>
            <hr/>
            <br>
            <h3>Laporan Hasil Penilaian kinerja Guru</h3>

            <br>
            <pre>
            Semester        : ' . $semester . ' 
            Tahun           : ' . $tahun . '
            </pre>  
            ';


        
        $html .= '<table class="table1">
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
                    <th>Hasil Vector S</th>
                    <th>Hasil Vector V</th>
                    </tr>';


            $jumlahLangkah2 = 0;
            foreach( $nilai as $hasil ){
                $jumlah_k1 = $hasil["k1"] + $hasil["k2"] + $hasil["k3"] + $hasil["k4"] + $hasil["k5"] + $hasil["k6"] + $hasil["k7"] +
                    $hasil["k8"] + $hasil["k9"] + $hasil["k10"];    
                $kriteria1 = ($jumlah_k1 / 40) * 100;
                
                $jumlah_k2 = $hasil["k11"] + $hasil["k12"] + $hasil["k13"] + $hasil["k14"] + $hasil["k15"] + $hasil["k16"] + $hasil["k17"];    
                $kriteria2 = ($jumlah_k2 / 28) * 100;

                $jumlah_k3 = $hasil["k18"] + $hasil["k19"] + $hasil["k20"] + $hasil["k21"] + $hasil["k22"] + $hasil["k23"] + $hasil["k24"] +
                                $hasil["k25"] + $hasil["k26"] + $hasil["k27"] + $hasil["k28"];
                $kriteria3 = ($jumlah_k3 / 44) * 100;

                $jumlah_k4 = $hasil["k29"] + $hasil["k30"] + $hasil["k31"];    
                $kriteria4 = ($jumlah_k4 / 12) * 100;

                $jumlah_k5 = $hasil["k32"] + $hasil["k33"] + $hasil["k34"] + $hasil["k35"] + $hasil["k36"];    
                $kriteria5 = ($jumlah_k5 / 20) * 100;

                $jumlah_k6 = $hasil["k37"] + $hasil["k38"] + $hasil["k39"] + $hasil["k40"];    
                $kriteria6 = ($jumlah_k6 / 16) * 100;


                $langkah2 = $kriteria1 ** $w1 *
                            $kriteria2 ** $w2 *
                            $kriteria3 ** $w3 *
                            $kriteria4 ** $w4 *
                            $kriteria5 ** $w5 *
                            $kriteria6 ** $w6 ;
                $jumlahLangkah2 += $langkah2;
            }
        
        
        $j = 0;    
        $i =1;
        foreach( $nilai as $hasil2 ){
            $jumlah_k1 = $hasil2["k1"] + $hasil2["k2"] + $hasil2["k3"] + $hasil2["k4"] + $hasil2["k5"] + $hasil2["k6"] + $hasil2["k7"] +
                    $hasil2["k8"] + $hasil2["k9"] + $hasil2["k10"];    
            $kriteria1 = ($jumlah_k1 / 40) * 100;
            
            $jumlah_k2 = $hasil2["k11"] + $hasil2["k12"] + $hasil2["k13"] + $hasil2["k14"] + $hasil2["k15"] + $hasil2["k16"] + $hasil2["k17"];    
            $kriteria2 = ($jumlah_k2 / 28) * 100;

            $jumlah_k3 = $hasil2["k18"] + $hasil2["k19"] + $hasil2["k20"] + $hasil2["k21"] + $hasil2["k22"] + $hasil2["k23"] + $hasil2["k24"] +
                            $hasil2["k25"] + $hasil2["k26"] + $hasil2["k27"] + $hasil2["k28"];
            $kriteria3 = ($jumlah_k3 / 44) * 100;

            $jumlah_k4 = $hasil2["k29"] + $hasil2["k30"] + $hasil2["k31"];    
            $kriteria4 = ($jumlah_k4 / 12) * 100;

            $jumlah_k5 = $hasil2["k32"] + $hasil2["k33"] + $hasil2["k34"] + $hasil2["k35"] + $hasil2["k36"];    
            $kriteria5 = ($jumlah_k5 / 20) * 100;

            $jumlah_k6 = $hasil2["k37"] + $hasil2["k38"] + $hasil2["k39"] + $hasil2["k40"];    
            $kriteria6 = ($jumlah_k6 / 16) * 100;

        $langkah3 = $kriteria1 ** $w1 *
                    $kriteria2 ** $w2 *
                    $kriteria3 ** $w3 *
                    $kriteria4 ** $w4 *
                    $kriteria5 ** $w5 *
                    $kriteria6 ** $w6 ;
        $kesimpulan = $langkah3 / $jumlahLangkah2;
        $urut[] = number_format($kesimpulan, 4) . " " . " ( " . $hasil2["nama"] . " ) ";
        $simpul = number_format($kesimpulan, 4);
        $vektorV = number_format($langkah3, 4);
        $jumlahVektorV = number_format($jumlahLangkah2, 4);

        $html .= "<tr>
        <td>" . $i . "</td>
        <td>" . $hasil2["nama"] . "</td>
        <td>" . number_format($kriteria1, 2) . "</td>
        <td>" . number_format($kriteria2, 2) . "</td>
        <td>" . number_format($kriteria3, 2) . "</td>
        <td>" . number_format($kriteria4, 2) . "</td>
        <td>" . number_format($kriteria5, 2) . "</td>
        <td>" . number_format($kriteria6, 2) . "</td>
        <td>" . $vektorV . "</td>
        <td>" . $simpul . "</td>
        </tr>
        ";
        
        $j++;
        $i++;
        }


        
        $html .= "<tr>
        <td colspan='8'> Jumlah </td>
        <td> ".  $jumlahVektorV  ."</td>
        <td></td>
        </tr>
        </table>
        ";


        rsort($urut);
        

        $html .= " 
        <br>
        <h3>Hasil Kesimpulan</h3> ";
        $html .= "<table class='table1' align='center'>
            <tr>
                <th>Perinkat</th>
                <th>Hasil SPK</th>
            </tr>
            ";
        
        $no = 1;
        for( $x = 0; $x < $j; $x++ ){
        
        $html .= "<tr>
            <td>" . $no . "</td>
            <td>" . $urut[$x] . "</td>
        </tr>
        ";


        $no++;
        }
        

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('Laporan_nilai.pdf');


?>