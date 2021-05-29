<?php
require '../functions.php';

$id = $_GET["id"];
echo $id;
if( hapus_user($id) > 0){
    echo "
    <script>
        alert('data berhasil dihapus!');
        window.location= '../akun.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('data gagal dihapus!');
        window.location= '../akun.php';
    </script>
    ";
}

?>