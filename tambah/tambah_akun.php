<?php
require '../functions.php';

if( isset($_POST['submit']) ){

    if( tambah_akun($_POST) > 0 ){
        echo "
        <script>
            alert('Akun berhasil ditambahkan !');
            window.location = '../akun.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('akun gagal ditambahkan!');
        <script>
        
        ";
    }

}



?>


<html>
<head>
    <title>Tambah Akun</title>
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
		<a href="../akun.php" class="btn btn-primary">
			<span class="glyphicon glyphicon-home"></span> Kembali
		</a>
		
		

			<form action="" method="post">
            
				<div ng-controller="MyController" ng-app="myApp">
					<div class="container">
                        <div style="padding-top: 25px;">
                            <center>
                                <h2>Form Tambah Akun</h2>
                            </center>
                        </div>
                                    <br/>
                                <div class="row">
                                    <div class='col-sm-4'></div>
                                        <div class='col-sm-5'>
                                            <h5>*username diisi NIG guru yang akan dibuatkan akun</h5>
                                            <table class='table table-bordered'>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td ><input  name="nama" type='text'   class='form-control'  ></td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td ><input  name="username" type='text'   class='form-control'  ></td>
                                                </tr>
                                                    <input type="hidden" name="password" value="user123">
                                                    <input type="hidden" name="level" value="user">  
                                                <tr>
													<td align="center" colspan="2">
													<button type="submit" name="submit">
													<span class="glyphicon glyphicon-plus"></span>Tambah Akun</button>
													</td>
												</tr>
                                                
                                            </table>
                                        </div>    
                                </div>            
                    </div>
                </div>
			</form>




</body>





</html>