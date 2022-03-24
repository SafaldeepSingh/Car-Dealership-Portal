<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {


	public function index()
	{
		$lang = $this->input->post('language');
		echo $this->session->set_userdata('lang',$lang);
	}
}
