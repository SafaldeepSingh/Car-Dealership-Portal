<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
		$data['vehicles'] = $this->Vehicle_model->getFeaturedVehicles()['vehicles'];
//		echo '<pre>';
//		print_r($this->lang->line('used_vehicles'));
//		print_r($data['featuredVehicles'][0]['photos'][0]['path']);
//		exit;
		$this->load->view('home', $data);
	}
}
