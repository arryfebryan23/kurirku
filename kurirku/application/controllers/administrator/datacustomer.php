<?php

class Datacustomer extends CI_Controller
{

	public function index()
	{
		$data['tb_data'] = $this->datacustomer_model->tampil_data('tb_data')->result();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/datacustomer', $data);
		$this->load->view('template_administrator/footer');
	}

	public function detail($id)
	{
		$data['detail'] = $this->datacustomer_model->ambil_id_datacustomer($id);

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/datacustomer_detail', $data);
		$this->load->view('template_administrator/footer');
	}

	public function tambah_datacustomer()
	{

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/datacustomer_form');
		$this->load->view('template_administrator/footer');
	}

	public function tambah_datacustomer_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_datacustomer();
		} else {
			$resi 					=	$this->input->post('resi');
			$pengirim 				=	$this->input->post('pengirim');
			$alamat_pengirim 		=	$this->input->post('alamat_pengirim');
			$no_telpon_pengirim 	=	$this->input->post('no_telpon_pengirim');
			$tujuan 				=	$this->input->post('tujuan');
			$penerima 				=	$this->input->post('penerima');
			$no_telpon_penerima 	=	$this->input->post('no_telpon_penerima');
			$paket 					=	$this->input->post('paket');
			$driver 				=	$this->input->post('driver');
			$keterangan 			=	$this->input->post('keterangan');



			$data = array(
				'resi'					=> $resi,
				'pengirim'				=> $pengirim,
				'alamat_pengirim'		=> $alamat_pengirim,
				'no_telpon_pengirim'	=> $no_telpon_pengirim,
				'tujuan'				=> $tujuan,
				'penerima'				=> $penerima,
				'no_telpon_penerima'	=> $no_telpon_penerima,
				'paket'					=> $paket,
				'driver'				=> $driver,
				'keterangan'			=> $keterangan,
			);

			$this->datacustomer_model->insert_data($data, 'tb_data');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Customer Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/datacustomer');
		}
	}

	public function update($id)
	{
		$where = array('id' => $id);
		$data['update'] = $this->datacustomer_model->update_data($where, 'tb_data')->result();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/datacustomer_update', $data);
		$this->load->view('template_administrator/footer');
	}

	public function perbarui()
	{
		$id 					=	$this->input->post('id');
		$resi 					=	$this->input->post('resi');
		$pengirim 				=	$this->input->post('pengirim');
		$alamat_pengirim 		=	$this->input->post('alamat_pengirim');
		$no_telpon_pengirim 	=	$this->input->post('no_telpon_pengirim');
		$tujuan 				=	$this->input->post('tujuan');
		$penerima 				=	$this->input->post('penerima');
		$no_telpon_penerima 	=	$this->input->post('no_telpon_penerima');
		$paket 					=	$this->input->post('paket');
		$driver 				=	$this->input->post('driver');
		$keterangan 			=	$this->input->post('keterangan');

		$data = array(
			'resi'					=> $resi,
			'pengirim'				=> $pengirim,
			'alamat_pengirim'		=> $alamat_pengirim,
			'no_telpon_pengirim'	=> $no_telpon_pengirim,
			'tujuan'				=> $tujuan,
			'penerima'				=> $penerima,
			'no_telpon_penerima'	=> $no_telpon_penerima,
			'paket'					=> $paket,
			'driver'				=> $driver,
			'keterangan'			=> $keterangan,
		);

		$where = array('id' => $id);

		$this->datacustomer_model->perbarui_datacustomer($where, $data, 'tb_data');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Customer Berhasil Diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/datacustomer');
	}


	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->datacustomer_model->hapus_data($where, 'tb_data');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Customer Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/datacustomer');
	}


	public function _rules()
	{
		$this->form_validation->set_rules('resi', 'Resi', 'required', ['required' => 'Resi Harus Di Isi!']);

		$this->form_validation->set_rules('pengirim', 'Nama Pengirim', 'required', ['required' => 'Pengirim Harus Di Isi!']);

		$this->form_validation->set_rules('alamat_pengirim', 'Alamat Pengirim', 'required', ['required' => 'Alamat Pengirim Harus Di Isi!']);

		$this->form_validation->set_rules('no_telpon_pengirim', 'No.Telpon Pengirim', 'required', ['required' => 'No.Telpon Pengirim Harus Di Isi!']);

		$this->form_validation->set_rules('tujuan', 'Alamat Tujuan', 'required', ['required' => 'Alamat Tujuan Harus Di Isi!']);

		$this->form_validation->set_rules('penerima', 'Nama Penerima', 'required', ['required' => 'Alamat Penerima Harus Di Isi!']);

		$this->form_validation->set_rules('no_telpon_penerima', 'No.Telpon Penerima', 'required', ['required' => 'No.Telpon Penerima Harus Di Isi!']);

		$this->form_validation->set_rules('paket', 'Paket', 'required', ['required' => 'Paket Harus Di Isi!']);

		$this->form_validation->set_rules('driver', 'Driver', 'required', ['required' => 'Driver Harus Di Isi!']);

		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan Harus Di Isi!']);
	}
}
