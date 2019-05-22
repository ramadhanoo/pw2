<!DOCTYPE html>
<html>
<head>
	<title>Welcome to CodeIgniter</title>

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<form name="ibu_insert" method="post" action="<?php echo site_url('ibu/insert_action');?>">

	<table border="1" class="table table-striped">
		<tr>
			<td>Nama Ibu</td>
			<td>
				<input type="text" name="nama_ibu" class="form-control">
				<?php echo form_error('nama_ibu');?>
			</td>
		</tr>
		<tr>
			<td>Umur Ibu</td>
			<td>
				<input type="text" name="umur_ibu" class="form-control">
				<?php echo form_error('umur_ibu');?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button class="btn btn-primary"><i class="fas fa-save"></i> Insert</button></td>
		</tr>
	</table>

</form>

</body>
</html>