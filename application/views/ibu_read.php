<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter</title>

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>


	<a href="<?php echo site_url('ibu/insert');?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
	<br /><br />

	<table border="1" class="table table-striped">
		<thead>
			<tr>
				<th>ID Ibu</th>
				<th>Nama Ibu</th>
				<th>Umur Ibu</th>
				<th>Foto Ibu</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($daftar_ibu as $ibu):?>
			<tr>
				<td><?php echo $ibu['id_ibu'];?></td>
				<td><?php echo $ibu['nama_ibu'];?></td>
				<td><?php echo $ibu['umur_ibu'];?></td>
				<td>
					<?php if($ibu['foto_ibu'] != ''):?>
					<img src="<?php echo base_url('uploads/'.$ibu['foto_ibu']);?>" width="100">
					<?php endif;?>
				</td>
				<td>
					<a href="<?php echo site_url('ibu/update/'.$ibu['id_ibu']);?>" class="btn btn-success" >
					<i class="fa fa-edit"></i> Update
					</a>
					
					<a href="<?php echo site_url('ibu/delete_action/'.$ibu['id_ibu']);?>" class="btn btn-danger">
					<i class="fa fa-trash"></i> Delete
					</a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>

	<br />
	<a href="<?php echo site_url('ibu/download');?>" class="btn btn-success"><i class="fas fa-download"></i> Download</a>


</body>
</html>