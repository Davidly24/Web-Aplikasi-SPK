<?php
require '../functions.php';

$id = $_GET["id"];
echo $id;
if( hapus_nilai($id) > 0){
    echo "
    <script>
        alert('data berhasil dihapus!');
        window.location= '../nilai.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('data gagal dihapus!');
        window.location= '../nilai.php';
    </script>
    ";
}

?>