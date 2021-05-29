<?php
session_start();
$sesi = $_SESSION['level'];
if( $sesi == ""){
	header( "location:../login.php" );
}
?>



<!-- Jika yang masuk admin -->
<?php if ( $sesi == "admin" ) : ?>


<?php

require '../functions.php';


// ambil data di URL
$id = $_GET["id"];


// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM guru WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah!');
            window.location= '../index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah!');
        </script>
        ";
    }
}

?>


<html>
<head>
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
    <title>Ubah data</title>
</head>
<body>
    
<br>
		<a href="../index.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-home"></span> Kembali
		</a>
		
		

			<form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
				<div ng-controller="MyController" ng-app="myApp">
					<div class="container">
                        <div style="padding-top: 25px;">
                        <center>
							<h2>Detail Data Diri</h2>
						</center>
						</div>
				<br/>
							<div class="row">
								<div class='col-sm-4'></div>
									<div class='col-sm-5'>
										<table class='table table-bordered'>
											<tr>
												<td>Nama</td>
												<td ><input  name="nama" type='text'   class='form-control'  value="<?php echo $mhs["nama"]; ?>"  ></td>
											</tr>
											<tr>
													<td>Umur</td>
													<td ><input type="text" id="telpon" name="umur" onkeypress="return isNumber(event)" class='form-control' value="<?= $mhs["tanggal"]; ?>"></td>
											</tr>
											<div class="control-group">
													<tr>
														<td>Jenis Kelamin</td>
														<div class="controls">
														<td>
															<div class="form-group">
																<div class="col-sm-6">
																	<input type="radio" name="jenis"   value='Laki-laki'<?php if ($mhs["telpon"]=='Laki-laki') echo 'checked' ?>> Laki - Laki &nbsp;
																	<input type="radio" name="jenis"   value='Perempuan'<?php if ($mhs["telpon"]=='Perempuan') echo 'checked' ?> > Perempuan
																</div>
															  </div>	
														</td>
													</tr>
														</div>
												</div>
												<tr>
													<td>Jabatan</td>
													<td>
														<select class="form-control" name="jabatan">
															<option><?php echo $mhs["kelamin"]; ?></option>
                                                            <option>Kepala Sekolah</option>
                                                            <option>Guru</option>
                                                            <option>Staff</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Pendidikan Terakhir</td>
													<td>
														<select class="form-control" name="pendidikan">
															<option><?php echo $mhs["pend_ter"]; ?></option>
                                                            <option>SMA</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Masa Kerja</td>
													<td>
														<select class="form-control" name="masakerja">
															<option><?php echo $mhs["alamat"]; ?></option>
                                                            <option>1 Tahun</option>
                                                            <option>2 Tahun</option>
															<option>3 Tahun</option>
															<option>4 Tahun</option>
															<option>5 Tahun/Lebih</option>
														</select>
													</td>
												</tr>
												<tr>
													<td align="center" colspan="2">
													<button type="submit" name="submit">
													<span class="glyphicon glyphicon-ok"></span>Ubah Data</button>
													</td>
												</tr>
											</div>
										</table>
			</form>
            <script type="text/javascript">
			$(function () {
				$('#datetimepicker').datetimepicker({
					format: 'DD MMMM YYYY HH:mm',
                });
				
				$('#datepicker').datetimepicker({
					format: 'DD MMMM YYYY',
				});
				
				$('#date').datetimepicker({
					format: 'DD MMMM YYYY',
				});
				
				$('#timepicker').datetimepicker({
					format: 'HH:mm'
				});
			});
		</script>
</body>
</html>
<?php endif; ?>





<!-- Jika yang masuk guru -->

<?php if( $sesi == "user" ) : ?>

<?php
require '../functions.php';


// ambil data di URL
$id = $_GET["id"];


// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM guru WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah!');
            window.location= '../index_guru.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah!');
        </script>
        ";
    }
}

?>


<html>
<head>
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
    <title>Ubah data</title>
</head>
<body>
    
<br>
		<a href="../index_guru.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-home"></span> Kembali
		</a>
		
		

			<form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
				<div ng-controller="MyController" ng-app="myApp">
					<div class="container">
                        <div style="padding-top: 25px;">
                        <center>
							<h2>Ubah Data Diri</h2>
						</center>
						</div>
				<br/>
							<div class="row">
								<div class='col-sm-4'></div>
									<div class='col-sm-5'>
									<table class='table table-bordered'>
											<tr>
												<td>Nama</td>
												<td ><input  name="nama" type='text'   class='form-control'  value="<?php echo $mhs["nama"]; ?>"  ></td>
											</tr>
											<tr>
													<td>Umur</td>
													<td ><input type="text" id="telpon" name="umur" onkeypress="return isNumber(event)" class='form-control' value="<?= $mhs["tanggal"]; ?>"></td>
											</tr>
											<div class="control-group">
													<tr>
														<td>Jenis Kelamin</td>
														<div class="controls">
														<td>
															<div class="form-group">
																<div class="col-sm-6">
																	<input type="radio" name="jenis"   value='Laki-laki'<?php if ($mhs["telpon"]=='Laki-laki') echo 'checked' ?>> Laki - Laki &nbsp;
																	<input type="radio" name="jenis"   value='Perempuan'<?php if ($mhs["telpon"]=='Perempuan') echo 'checked' ?> > Perempuan
																</div>
															  </div>	
														</td>
													</tr>
														</div>
												</div>
												<tr>
													<td>Jabatan</td>
													<td>
														<select class="form-control" name="jabatan">
															<option><?php echo $mhs["kelamin"]; ?></option>
                                                            <option>Kepala Sekolah</option>
                                                            <option>Guru</option>
                                                            <option>Staff</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Pendidikan Terakhir</td>
													<td>
														<select class="form-control" name="pendidikan">
															<option><?php echo $mhs["pend_ter"]; ?></option>
                                                            <option>SMA</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Masa Kerja</td>
													<td>
														<select class="form-control" name="masakerja">
															<option><?php echo $mhs["alamat"]; ?></option>
                                                            <option>1 Tahun</option>
                                                            <option>2 Tahun</option>
															<option>3 Tahun</option>
															<option>4 Tahun</option>
															<option>5 Tahun/Lebih</option>
														</select>
													</td>
												</tr>
												<tr>
													<td align="center" colspan="2">
													<button type="submit" name="submit">
													<span class="glyphicon glyphicon-ok"></span>Ubah Data</button>
													</td>
												</tr>
											</div>
										</table>
			</form>
            <script type="text/javascript">
			$(function () {
				$('#datetimepicker').datetimepicker({
					format: 'DD MMMM YYYY HH:mm',
                });
				
				$('#datepicker').datetimepicker({
					format: 'DD MMMM YYYY',
				});
				
				$('#date').datetimepicker({
					format: 'DD MMMM YYYY',
				});
				
				$('#timepicker').datetimepicker({
					format: 'HH:mm'
				});
			});
		</script>
</body>
</html>







<?php endif; ?>