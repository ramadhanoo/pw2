<!DOCTYPE html>
<html>
<head>
	<title>Welcome to CodeIgniter</title>


</head>
<body>

<?php echo !empty($error) ? $error : '';?>

<form name="ibu_insert" method="post" action="<?php echo site_url('ibu/insert_action');?>" enctype="multipart/form-data">

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
			<td>Foto Ibu</td>
			<td>
				<input type="file" name="userfile" class="form-control">
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