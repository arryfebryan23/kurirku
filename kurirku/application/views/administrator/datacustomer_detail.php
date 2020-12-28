<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-eye"></i> Data Detail Customer
	</div>

	<table class="table table hover table-bordered table-striped">

	<?php foreach($detail as $dt) : ?>

		<tr>
			<td>Resi</td>
			<td><?php echo $dt->resi; ?></td>
		</tr>

		<tr>
			<td>Nama Pengirim</td>
			<td><?php echo $dt->pengirim; ?></td>
		</tr>

		<tr>
			<td>Alamat Pengirim</td>
			<td><?php echo $dt->alamat_pengirim; ?></td>
		</tr>

		<tr>
			<td>No. Telpon Pengirim</td>
			<td><?php echo $dt->no_telpon_pengirim; ?></td>
		</tr>

		<tr>
			<td>Tujuan</td>
			<td><?php echo $dt->tujuan; ?></td>
		</tr>

		<tr>
			<td>Penerima</td>
			<td><?php echo $dt->penerima; ?></td>
		</tr>

		<tr>
			<td>No. Telpon Penerima</td>
			<td><?php echo $dt->no_telpon_penerima; ?></td>
		</tr>

		<tr>
			<td>Paket</td>
			<td><?php echo $dt->paket; ?></td>
		</tr>

		<tr>
			<td>Driver</td>
			<td><?php echo $dt->driver; ?></td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td><?php echo $dt->keterangan; ?></td>
		</tr>
	<?php endforeach; ?>	

	</table>
<?php echo anchor ('administrator/datacustomer','<div class="btn btn-sm btn-primary">Kembali</div>')?>
<br><br><br>
</div>