<?php

class Halutama extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
	}
	// public function index()
	// {

	// 	$this->load->view('HalamanUtama');
	// $this->load->view('templates/home');
	// }

}
