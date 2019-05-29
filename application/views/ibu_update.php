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

<?php echo !empty($error) ? $error : '';?>

<form name="ibu_update" method="post" action="<?php echo site_url('ibu/update_action/'.$data_ibu['id_ibu']);?>" enctype="multipart/form-data">

<table border="1" class="table table-striped">
	<tr>
		<td>Nama Ibu</td>
		<td>
			<input type="text" name="nama_ibu" value="<?php echo $data_ibu['nama_ibu'];?>"  class="form-control">
			<input type="hidden" name="nama_ibu_old" value="<?php echo $data_ibu['nama_ibu'];?>">
			<?php echo form_error('nama_ibu');?>
		</td>
	</tr>
	<tr>
		<td>Umur Ibu</td>
		<td>
			<input type="text" name="umur_ibu" value="<?php echo $data_ibu['umur_ibu'];?>"  class="form-control">
			<?php echo form_error('umur_ibu');?>
		</td>
	</tr>
	<tr>
			<td>Foto Ibu</td>
			<td>
				<input type="file" name="userfile" class="form-control">
				<?php echo form_error('foto_ibu');?>
				
				<br />
				<?php if($data_ibu['foto_ibu'] != ''):?>
				<img src="<?php echo base_url('uploads/'.$data_ibu['foto_ibu']);?>" width="100">
				<?php endif;?>
				
			</td>
		</tr>
	<tr>
		<td></td>
		<td><button class="btn btn-primary"><i class="fas fa-save"></i> Update</button></td>
	</tr>
</table>

</form>

</body>
</html>