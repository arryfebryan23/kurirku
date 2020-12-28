<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Driver extends CI_Controller
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

        $this->load->view('templates/template-driver', $data);
    }

    public function endTransaction()
    {
        $data['page'] = 'driver/v-end-transaction';
        $data['active_sidebar'] = 'end-transaction';

        $data['new_no_resi'] = 'KK-123123123123';
        $data['provinsi'] = $this->db->get('provinsi')->result();

        $this->load->view('templates/template-driver', $data);
    }
}
