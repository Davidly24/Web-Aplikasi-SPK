<?php
require '../functions.php';



// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM guru");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahNilai($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            window.location= '../nilai.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan!');
            window.location = '../nilai.php';
        </script>
        ";
    }
}


?>

<html>
<head>
<title>Tambah Data Nilai</title>
</head>
<body>
    <h1>Tambah Data Nilai Guru</h1>


    <form action="" method="post">
    
    <ul>
            
            <li>
                <label for="nama">Nama : </label>
                <select name="nama" id="nama">
                
                <?php foreach ($mhs as $row) : ?>
                <option><?php echo $row["nama"]; ?></option>
                <?php endforeach; ?>
                
                </select>
            </li>
            <li>
                <label for="per_pem">Perencanaan Pembelajaran : </label>
                <input type="text" name="per_pem" id="per_pem">
            </li>
            <li>
                <label for="pel_pem">Pelaksanaan Pembelajaran : </label>
                <input type="text" name="pel_pem" id="pel_pem">
            </li>
            <li>
                <label for="pen_pem">Penilaian Pembelajaran : </label>
                <input type="text" name="pen_pem" id="pen_pem">
            </li>
            <li>
                <label for="mel_mem">Melatih dan membimbing : </label>
                <input type="text" name="mel_mem" id="mel_mem">
            </li>
            <li>
                <label for="tug_tam">Tugas Tambahan : </label>
                <input type="text" name="tug_tam" id="tug_tam">
            </li>
            <li>
                <label for="peng_keg">Pengembangan Kegiatan Profesional : </label>
                <input type="text" name="peng_keg" id="peng_keg">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
    </ul>
    
    </form>
</body>
</html>