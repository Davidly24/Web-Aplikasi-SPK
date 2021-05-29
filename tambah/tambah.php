<?php
require '../functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            window.location = '../index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan!');
            window.location= '../index.php';
        </script>
        ";
    }
}

?>


<html>
<head>
    <title>Tambah data mahasiswa</title>
</head>
<body>
    

    <h1>Tambah data mahasiswa</h1>


    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="kelas">KELAS : </label>
                <input type="text" name="kelas" id="kelas" required>
            </li>
            <li>
                <label for="telpon">No. Telpon : </label>
                <input type="text" name="telpon" id="telpon" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    
    
    
    </form>


</body>
</html>