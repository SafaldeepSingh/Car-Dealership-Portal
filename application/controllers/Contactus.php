<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contactus extends CI_Controller
{
	public $language = 'english';
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('lang'))
			$this->language= $this->session->userdata('lang');
		$this->lang->load('home', $this->language);
	}

	public function index()
	{
		$this->load->view('contact_us');
	}

}
