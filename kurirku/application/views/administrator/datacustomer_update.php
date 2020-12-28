<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-keyboard"></i> Form Ubah Data Customer
	</div>


	<section class="content">
		<?php foreach($update as $updt) { ?>
		
		<form action="<?php echo base_url().'administrator/datacustomer/perbarui';?>" method="post">

			<div class="form-group">
				<label>Resi</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $updt->id ?>">
				<input type="text" name="resi" class="form-control" style="width: 20%" value="<?php echo $updt->resi ?>">
			</div>

	<div class="form-group">
		<label>Nama Pengirim</label>
		<input input="text" name="pengirim" class="form-control" style="width: 50%" value="<?php echo $updt->pengirim ?>">
		<?php echo form_error('pengirim','<div class="text-danger small ml-3">','</div>')?>
	</div> 

	<div class="form-group">
		<label>Alamat Pengirim</label>
		<input input="text" name="alamat_pengirim" class="form-control" style="width: 50%" value="<?php echo $updt->alamat_pengirim ?>">
		<?php echo form_error('alamat_pengirim','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>No.Telepon Pengirim</label>
		<input input="text" name="no_telpon_pengirim" class="form-control" style="width: 20%" value="<?php echo $updt->no_telpon_pengirim ?>" >
		<?php echo form_error('no_telpon_pengirim','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>Alamat Tujuan</label>
		<input input="text" name="tujuan" class="form-control" style="width: 50%" value="<?php echo $updt->tujuan ?>">
		<?php echo form_error('tujuan','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>Nama Penerima</label>
		<input input="text" name="penerima" class="form-control" style="width: 50%" value="<?php echo $updt->penerima ?>">
		<?php echo form_error('penerima','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>No.Telepon Penerima</label>
		<input input="text" name="no_telpon_penerima" class="form-control" style="width: 20%" value="<?php echo $updt->no_telpon_penerima ?>">
		<?php echo form_error('no_telpon_penerima','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>Paket</label>
		<select name="paket" class="form-control" style="width: 50%" value="<?php echo $updt->paket ?>">
			<option value="">-- Pilih Paket --</option>
			<option>Regular</option>
			<option>Kargo</option>
		</select>
		<?php echo form_error('paket','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>Driver</label>
		<input input="text" name="driver" class="form-control" style="width: 50%" value="<?php echo $updt->driver ?>">
		<?php echo form_error('driver','<div class="text-danger small ml-3">','</div>')?>
	</div>

	<div class="form-group">
		<label>Keterangan</label>
		<select name="keterangan" class="form-control" style="width: 50%" value="<?php echo $updt->keterangan ?>">
			<option value="">-- Pilih Keterangan Paket --</option>
			<option>Belum Dikirim</option>
			<option>Sedang Dikirm</option>
			<option>Telah Dikirm</option>
		</select>
		<?php echo form_error('keterangan','<div class="text-danger small ml-3">','</div>')?>
	</div>



		<button type="submit" class="btn btn-sm btn-primary mb-5 mt-3">Simpan</button>
		<?php echo anchor ('administrator/datacustomer','<div class="btn btn-sm btn-danger mb-5 mt-3">Kembali</div>')?>

		<?php } ?>

	</section>

</div>