<?php
require '../functions.php';
$id = $_GET["id"];
$user = query( " SELECT * FROM user WHERE id_user = $id " )[0];

if( isset($_POST['submit']) ){

    if( ubah_akun($_POST) > 0 ){
        echo "
        <script>
            alert('Akun berhasil diubah !');
            window.location = '../akun.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('akun gagal diubah!');
            window.location = '../akun.php';
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
                                            <input type="hidden" name="id" value="<?php echo $user["id_user"]; ?>">
                                            <table class='table table-bordered'>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td ><input  name="nama" type='text'   class='form-control' value= "<?php echo $user["nama"]; ?>"  ></td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td ><input  name="username" type='text' value="<?php echo $user["username"]; ?>"   class='form-control'  ></td>
                                                </tr>
                                                    <input type="hidden" name="password" value="<?php echo $user["password"]; ?>">
                                                    <input type="hidden" name="level" value="<?php echo $user["level"]; ?>">  
                                                <tr>
													<td align="center" colspan="2">
													<button type="submit" name="submit">
													<span class="glyphicon glyphicon-plus"></span>Ubah Akun</button>
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