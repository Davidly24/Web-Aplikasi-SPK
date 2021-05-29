<?php
session_start();
$sesi = $_SESSION['level'];
if( $sesi == "" ){
	header("location:../login.php");
}
?>





<!-- Jika yang masuk sebagai admin -->
<?php if( $sesi == "admin") : ?>


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
		
	</head>
    
		<body>

		<br>
		<a href="../index.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-home"></span> Kembali
		</a>
		
		

			<form action="" method="post">
				<div ng-controller="MyController" ng-app="myApp">
					<div class="container">
                        <div style="padding-top: 25px;">
                        <center>
							<h2>Form Data Diri</h2>
						</center>
						</div>
				<br/>
							<div class="row">
								<div class='col-sm-4'></div>
									<div class='col-sm-5'>
										<table class='table table-bordered'>
											<tr>
											
												<td>Nama</td>
													<td ><input  ng-model="form.nama"  name="nama" type='text'   class='form-control' required ></td>
											</tr>
											<tr>
												<td>Umur</td>
													<td ><input type="text" id="telpon" name="umur" ng-model="form.telpon" required onkeypress="return isNumber(event)" class='form-control'></td>
											</tr>
											<div class="control-group">
													<tr>
														<td>Jenis Kelamin</td>
														<div class="controls">
														<td>
															<div class="form-group">
																<div class="col-sm-6">
																	<input type="radio" name="jenis" ng-model="form.jenis" required value='Laki-laki'> Laki - Laki &nbsp;
																	<input type="radio" name="jenis" ng-model="form.jenis" required value='Perempuan'> Perempuan
																</div>
															  </div>	
														</td>
													</tr>
														</div>
												</div>
											<tr>
											<tr>
													<td>Jabatan</td>
													<td>
														<select class="form-control" name="jabatan" required >
															<option value="">-</option>
                                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                            <option value="Guru">Guru</option>
                                                            <option value="Staff">Staff</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Pendidikan Terakhir</td>
													<td>
														<select class="form-control" name="pendidikan" required >
															<option value="" >-</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Masa Kerja</td>
													<td>
														<select class="form-control" name="masakerja" required >
                                                            <option value="">-</option>
                                                            <option value="1 Tahun">1 Tahun</option>
                                                            <option value="2 Tahun">2 Tahun</option>
															<option value="3 Tahun">3 Tahun</option>
															<option value="4 Tahun">4 Tahun</option>
															<option value="5 Tahun/Lebih">5 Tahun/Lebih</option>
														</select>
													</td>
												</tr>
												
												<tr>
													<td align="center" colspan="2">
													<button type="submit" name="submit">
													<span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
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




<!-- Jika yang masuk sebagai guru -->
<?php if ( $sesi == "user" ) : ?>


<?php
require '../functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            window.location = '../index_guru.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan!');
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
		
	</head>
    
		<body>

		<br>
		<a href="../index_guru.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-home"></span> Kembali
		</a>
		
		

			<form action="" method="post">
				<div ng-controller="MyController" ng-app="myApp">
					<div class="container">
                        <div style="padding-top: 25px;">
                        <center>
							<h2>Form Data Diri</h2>
						</center>
						</div>
				<br/>
							<div class="row">
								<div class='col-sm-4'></div>
									<div class='col-sm-5'>
									<table class='table table-bordered'>
											<tr>
												<td>Nama</td>
													<td ><input  ng-model="form.nama"  name="nama" type='text'   class='form-control'  ></td>
											</tr>
											<tr>
												<td>Umur</td>
													<td ><input type="text" id="telpon" name="umur" ng-model="form.telpon" onkeypress="return isNumber(event)" class='form-control'></td>
											</tr>
											<div class="control-group">
													<tr>
														<td>Jenis Kelamin</td>
														<div class="controls">
														<td>
															<div class="form-group">
																<div class="col-sm-6">
																	<input type="radio" name="jenis" ng-model="form.jenis"  value='Laki-laki'> Laki - Laki &nbsp;
																	<input type="radio" name="jenis" ng-model="form.jenis"  value='Perempuan'> Perempuan
																</div>
															  </div>	
														</td>
													</tr>
														</div>
												</div>
											<tr>
											<tr>
													<td>Jabatan</td>
													<td>
														<select class="form-control" name="jabatan"  >
															<option>-</option>
                                                            <option>Kepala Sekolah</option>
                                                            <option>Guru</option>
                                                            <option>Staff</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Pendidikan Terakhir</td>
													<td>
														<select class="form-control" name="pendidikan"  >
															<option>-</option>
                                                            <option>SMA</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>Masa Kerja</td>
													<td>
														<select class="form-control" name="masakerja"  >
															<option>-</option>
                                                            <option>-</option>
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
													<span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
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
