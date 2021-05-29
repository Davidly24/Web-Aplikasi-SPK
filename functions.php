<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "spk");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows=[];
    while($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    // ambil data dari tiap elemen form
    $nama = htmlspecialchars($data["nama"]);
    $umur = htmlspecialchars($data["umur"]);
    $kelamin = htmlspecialchars($data["jenis"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $masakerja = htmlspecialchars($data["masakerja"]);
    $pend_ter = htmlspecialchars($data["pendidikan"]);

    // query insert data
    $query = "INSERT INTO  guru
                VALUES
                ('', '$nama', '$umur', '$kelamin', '$jabatan', '$masakerja', '$pend_ter')
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

// function tambahNilai($data){
//     global $conn;
//     // ambil data dari tiap elemen form
//     $nama = htmlspecialchars($data["nama"]);
//     $per_pem = htmlspecialchars($data["per_pem"]);
//     $pel_pem = htmlspecialchars($data["pel_pem"]);
//     $pen_pem = htmlspecialchars($data["pen_pem"]);
//     $mel_mem = htmlspecialchars($data["mel_mem"]);
//     $tug_tam = htmlspecialchars($data["tug_tam"]);
//     $peng_keg = htmlspecialchars($data["peng_keg"]);


//     // query insert data
//     $query = "INSERT INTO  nilai
//                 VALUES
//                 ('', '$nama', '$per_pem', '$pel_pem', '$pen_pem', '$mel_mem', '$tug_tam', '$peng_keg')
//                 ";
//     mysqli_query($conn, $query);
//     return mysqli_affected_rows($conn);

// }

function tambah_akun($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $level = htmlspecialchars($data["level"]);

    $query = "INSERT INTO user VALUES
    ( '', '$nama', '$username', '$password', '$level' )
    ";

    mysqli_query( $conn, $query );
    return mysqli_affected_rows($conn);

}

function tambahLain($data){
    global $conn;
    // ambil data dari tiap elemen form

    $nama = $data["nama"];
    
    $nama1 = $data["1"];
    $nama2 = $data["2"];
    $nama3 = $data["3"];
    $nama4 = $data["4"];
    $nama5 = $data["5"];
    $nama6 = $data["6"];
    $nama7 = $data["7"];
    $nama8 = $data["8"];
    $nama9 = $data["9"];
    $nama10 = $data["10"];

    $nama11 = $data["11"];
    $nama12 = $data["12"];
    $nama13 = $data["13"];
    $nama14 = $data["14"];
    $nama15 = $data["15"];
    $nama16 = $data["16"];
    $nama17 = $data["17"];
    
    $nama18 = $data["18"];
    $nama19 = $data["19"];
    $nama20 = $data["20"];
    $nama21 = $data["21"];
    $nama22 = $data["22"];
    $nama23 = $data["23"];
    $nama24 = $data["24"];
    $nama25 = $data["25"];
    $nama26 = $data["26"];
    $nama27 = $data["27"];
    $nama28 = $data["28"];   

    $nama29 = $data["29"];
    $nama30 = $data["30"];
    $nama31 = $data["31"];

    $nama32 = $data["32"];
    $nama33 = $data["33"];
    $nama34 = $data["34"];
    $nama35 = $data["35"];
    $nama36 = $data["36"];

    $nama37 = $data["37"];
    $nama38 = $data["38"];
    $nama39 = $data["39"];
    $nama40 = $data["40"];


    // query insert data
    $query = "INSERT INTO  nilai2
                VALUES
                ('','$nama', '$nama1', '$nama2', '$nama3', '$nama4', '$nama5', '$nama6', $nama7, $nama8, $nama9, $nama10, 
                            '$nama11', '$nama12', '$nama13', '$nama14', '$nama15', '$nama16', $nama17, $nama18, $nama19, $nama20, 
                            '$nama21', '$nama22', '$nama23', '$nama24', '$nama25', '$nama26', $nama27, $nama28, $nama29, $nama30,
                            '$nama31', '$nama32', '$nama33', '$nama34', '$nama35', '$nama36', $nama37, $nama38, $nama39, $nama40
                )
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function tambahnilai($nilai){
    global $conn;
    
    $nama = $nilai["nama"];
    $k1 = $nilai["1"];
    $k2 = $nilai["2"];
    $k3 = $nilai["3"];
    $k4 = $nilai["4"];
    $k5 = $nilai["5"];

    $k6 = $nilai["6"];
    $k7 = $nilai["7"];
    $k8 = $nilai["8"];
    $k9 = $nilai["9"];
    $k10 = $nilai["10"];

    $k11 = $nilai["11"];
    $k12 = $nilai["12"];
    $k13 = $nilai["13"];
    $k14 = $nilai["14"];
    $k15 = $nilai["15"];

    $k16 = $nilai["16"];
    $k17 = $nilai["17"];
    $k18 = $nilai["18"];
    $k19 = $nilai["19"];
    $k20 = $nilai["20"];

    $k21 = $nilai["21"];
    $k22 = $nilai["22"];
    $k23 = $nilai["23"];
    $k24 = $nilai["24"];
    $k25 = $nilai["25"];

    $k26 = $nilai["26"];
    $k27 = $nilai["27"];
    $k28 = $nilai["28"];
    $k29 = $nilai["29"];
    $k30 = $nilai["30"];

    $k31 = $nilai["31"];
    $k32 = $nilai["32"];
    $k33 = $nilai["33"];
    $k34 = $nilai["34"];
    $k35 = $nilai["35"];

    $k36 = $nilai["36"];
    $k37 = $nilai["37"];
    $k38 = $nilai["38"];
    $k39 = $nilai["39"];
    $k40 = $nilai["40"];

    $query = "INSERT INTO nilai2 VALUES('', '$nama', '$k1', '$k2', '$k3', '$k4', '$k5', '$k6', '$k7', '$k8', '$k9', '$k10',
                                            '$k11', '$k12', '$k13', '$k14', '$k15', '$k16', '$k17', '$k18', '$k19', '$k20',
                                            '$k21', '$k22', '$k23', '$k24', '$k25', '$k26', '$k27', '$k28', '$k29', '$k30',
                                            '$k31', '$k32', '$k33', '$k34', '$k35', '$k36', '$k37', '$k38', '$k39', '$k40')" ;
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function ubahnilai($nilai){
    global $conn;
    
    $id = $nilai["id"];
    $nama = $nilai["nama"];
    $k1 = $nilai["1"];
    $k2 = $nilai["2"];
    $k3 = $nilai["3"];
    $k4 = $nilai["4"];
    $k5 = $nilai["5"];

    $k6 = $nilai["6"];
    $k7 = $nilai["7"];
    $k8 = $nilai["8"];
    $k9 = $nilai["9"];
    $k10 = $nilai["10"];

    $k11 = $nilai["11"];
    $k12 = $nilai["12"];
    $k13 = $nilai["13"];
    $k14 = $nilai["14"];
    $k15 = $nilai["15"];

    $k16 = $nilai["16"];
    $k17 = $nilai["17"];
    $k18 = $nilai["18"];
    $k19 = $nilai["19"];
    $k20 = $nilai["20"];

    $k21 = $nilai["21"];
    $k22 = $nilai["22"];
    $k23 = $nilai["23"];
    $k24 = $nilai["24"];
    $k25 = $nilai["25"];

    $k26 = $nilai["26"];
    $k27 = $nilai["27"];
    $k28 = $nilai["28"];
    $k29 = $nilai["29"];
    $k30 = $nilai["30"];

    $k31 = $nilai["31"];
    $k32 = $nilai["32"];
    $k33 = $nilai["33"];
    $k34 = $nilai["34"];
    $k35 = $nilai["35"];

    $k36 = $nilai["36"];
    $k37 = $nilai["37"];
    $k38 = $nilai["38"];
    $k39 = $nilai["39"];
    $k40 = $nilai["40"];

    $query = " UPDATE nilai2 SET  nama = '$nama', k1 = '$k1', k2 = '$k2', k3 = '$k3', k4 = '$k4', k5 = '$k5', k6 = '$k6', k7 = '$k7', k8 = '$k8', k9 = '$k9', k10 = '$k10',
                                            k11 = '$k11', k12 = '$k12', k13 = '$k13', k14 = '$k14', k15 = '$k15', k16 = '$k16', k17 = '$k17', k18 = '$k18', k19 = '$k19', k20 = '$k20',
                                            k21 = '$k21', k22 = '$k22', k23 = '$k23', k24 = '$k24', k25 = '$k25', k26 = '$k26', k27 = '$k27', k28 = '$k28', k29 = '$k29', k30 = '$k30',
                                            k31 = '$k31', k32 = '$k32', k33 = '$k33', k34 = '$k34', k35 = '$k35', k36 = '$k36', k37 = '$k37', k38 = '$k38', k39 = '$k39', k40 = '$k40' WHERE id_nilai2 = $id ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM guru WHERE id = $id");
            return mysqli_affected_rows($conn);
        }

        function hapus_user($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");
            return mysqli_affected_rows($conn);
        }

        function hapus_nilai($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM nilai2 WHERE id_nilai2 = $id");
            return mysqli_affected_rows($conn);
        }


function ubah($data){
    global $conn;
    // ambil data dari tiap elemen form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $umur = htmlspecialchars($data["umur"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $kelamin = htmlspecialchars($data["jenis"]);
    $masakerja = htmlspecialchars($data["masakerja"]);
    $pend_ter = htmlspecialchars($data["pendidikan"]);
    


    // query insert data
    $query = "UPDATE guru SET
                nama = '$nama',
                tanggal = '$umur',
                telpon = '$kelamin',
                kelamin = '$jabatan',
                alamat = '$masakerja',
                pend_ter = '$pend_ter'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_bobot($data){
    global $conn;
    // ambil data dari tiap elemen form
    $id = $data["id"];
    $c1 = htmlspecialchars($data["c1"]);
    $c2 = htmlspecialchars($data["c2"]);
    $c3 = htmlspecialchars($data["c3"]);
    $c4 = htmlspecialchars($data["c4"]);
    $c5 = htmlspecialchars($data["c5"]);
    $c6 = htmlspecialchars($data["c6"]);

    
    // query insert data
    $query = "UPDATE bobot SET
                c1 = '$c1',
                c2 = '$c2',
                c3 = '$c3',
                c4 = '$c4',
                c5 = '$c5',
                c6 = '$c6'
                WHERE id_bobot = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_akun($data){
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $level = $data["level"];

    $query = " UPDATE user SET 
            nama = '$nama',
            username = '$username',
            password = '$password',
            level = '$level'
            WHERE  id_user = $id    
     ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}



        function cari($keyword){
            $query = "SELECT * FROM guru
                    WHERE
                    nama LIKE '%$keyword%'
                    ";
            return query($query);
        }


        function cari2($keyword1){
            $query = "SELECT * FROM user WHERE username = $keyword1";
            return query($query);
        }




function registrasi($data){
    global $conn;

    $userName = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek ussername sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$userName'");
    if( mysqli_fetch_assoc($result) ){
        echo "<script>
                alert('username yang dipilih sudah ada')
            </script>";
        return false;
    }


    // cek konfrimasi password
    if($password !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;    
    }
    // enkripsi terlebih dahulu
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$userName', '$password')");
    return mysqli_affected_rows($conn);

}

?>