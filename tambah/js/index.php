<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>From Biodata</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	</head>
	<body>
	<div ng-app="myApp" ng-controller="myCtrl">
		<div class="container">
			<div> 
				<div style="padding-top: 25px;">
					<center><h2>Form Data Diri</h2></center>
				</div>
				<br />
				<div class="row">
					<div class='col-sm-4'>
					</div>
					<!-- DATETIMEPICKER -->
					<div class='col-sm-5'>
						
						<table class='table table-bordered'>
	<tr>
		<td>Nama Mahasiswa</td>
		<td><input type='text' name='nama' class='form-control' value={{name}} required></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>
			<div class="form-group">
							<div class='input-group date' id='datepicker'>
								<input type='text' class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
				
		
		
	</td>
		
		</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat" size="10"></textarea></td>
		
		</tr>
	<tr>
		<td>Telpon</td>
		<td><input type='text' name='telpon' class='form-control' required ></td>
		</tr>
	
	<div class="control-group">
	<tr>
	<td>Jenis Kelamin</td>
		
		
		<div class="controls">
		<td>
			<div class="form-group">
                <div class="col-sm-6">
                <input type="radio" name="jenis" value="Laki - Laki" > Laki - Laki &nbsp; &nbsp; 
				  <input type="radio" name="jenis" value="Perempuan"  > Perempuan
                </div>
              </div>	
			</td>
			</tr>
		</div>
	</div>
	
	
		
		<tr>
		<td>Kewarganegaraan</td>
		
		<td>
			<select class="form-control" name="negara">
					<option value="Indonesia">Indonesia</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Singapura">Singapura</option>
					<option value="Thailand">Thailand</option>
			</select>
			</td>
		
		</tr>
		
		
		
		<tr>
		<td align="center" colspan="2">
		<button type="submit" class="btn btn-primary" name="btn-save">
		<span class="glyphicon glyphicon-plus"></span> Save </button>
		</td>
		</tr>
		
		</table>
		</form>		
					</div>
					<!-- DATETIMEPICKER -->
					<div class='col-sm-4'>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jQuery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#datetimepicker').datetimepicker({
					format: 'DD MMMM YYYY HH:mm',
                });
				
				$('#datepicker').datetimepicker({
					format: 'DD MMMM YYYY',
				});
				
				$('#timepicker').datetimepicker({
					format: 'HH:mm'
				});
			});
		</script>
		<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.name = "John Doe";
});
</script>
	</body>
</html>