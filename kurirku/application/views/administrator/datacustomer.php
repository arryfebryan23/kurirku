<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-book-open"></i> Data Customer
	</div>

	<?php echo $this->session->flashdata('pesan')?>

	<?php echo anchor('administrator/datacustomer/tambah_datacustomer/','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>	Tambah Data Customer</button>')?>

	<table class="table table-striped table-hover table-bordered">

	<tr class="text-center"> 
		<th>No</th>
		<th width="85px">Resi</th>
		<th>Nama Pengirim</th>
		<th>Alamat Pengirim</th>
		<th>Tujuan</th>
		<th>Nama Penerima</th>
		<th>Keterangan</th>
		<th colspan="3">Aksi</th>
	</tr> 
		
	<?php 

	$no=1;
	foreach ($tb_data as $dts) : ?>

		<tr class="small">
		
			<td><?php echo $no++ ?></td>
			<td><?php echo $dts->resi?></td>
			<td><?php echo $dts->pengirim?></td>
			<td><?php echo $dts->alamat_pengirim?></td>
			<td><?php echo $dts->tujuan?></td>
			<td><?php echo $dts->penerima?></td>
			<td><?php echo $dts->keterangan?></td>
		
			<td width="20px"><?php echo anchor('administrator/datacustomer/detail/'.$dts->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i>Detail</div>')?></td>
			<td width="20px"><?php echo anchor('administrator/datacustomer/update/'.$dts->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Edit</div>')?></td>
			<td onclick="javascript: return confirm('Apakah ingin menghapus datacustomer ini?')" width="20px"><?php echo anchor('administrator/datacustomer/hapus/'.$dts->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</div>')?></td>

		</tr>

	<?php endforeach; ?>

</table>

</div>