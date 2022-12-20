<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('form_login');
		$this->load->view('templates_admin/footer');
	}
}
