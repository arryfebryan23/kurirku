<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransaksiPaket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = 'transaction/v-new-transaction';
        $data['active_sidebar'] = 'dashboard';
        $data['page'] = 'transaction/dashboard';

        $this->load->view('templates/template-admin', $data);
    }

    public function newTransaction()
    {
        $data['page'] = 'transaction/v-new-transaction';
        $data['active_sidebar'] = 'new-transaction';

        $data['new_no_resi'] = $this->_generateRandomString();
        $data['provinsi'] = $this->db->get('provinsi')->result();

        $this->load->view('templates/template-admin', $data);
    }

    public function allTransactions()
    {
        $data['page'] = 'transaction/v-all-transactions';
        $data['active_sidebar'] = 'all-transactions';

        $this->load->view('templates/template-admin', $data);
    }

    public function addTransaction()
    {
        var_dump($_POST);
        die;
    }

    // for form select
    public function getKotaKabByProv($id)
    {
        $kota_kab = $this->db->get_where('kota_kabupaten', ['provinsi_id' => $id])->result();
        echo json_encode($kota_kab);
    }

    public function getKecByKotaKab($id)
    {
        $kec = $this->db->get_where('kecamatan', ['kota_kabupaten_id' => $id])->result();
        echo json_encode($kec);
    }

    protected function _generateRandomString(): string
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = 'KK-1017';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $this->db->select('no_resi');
        $this->db->where('no_resi', $randomString);
        $oldData = $this->db->get('transaksi_paket')->row();
        if ($oldData) {
            $this->_generateRandomString();
        } else {
            return $randomString;
        }
    }
}
