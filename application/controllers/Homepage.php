<?php

class Homepage extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'homepage/landing-page';

        $this->load->view('templates/template-homepage', $data);
    }
}
