<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makes extends CI_Controller {

	public function index($makeid=0,$page=null) {
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()){
				$postData = $this->input->post();
				$this->Make_model->updateMakes($postData, $postData["action"]);
			}
				$data["admins"] = $this->Make_model->getAllMakes();
				$this->load->view('header');
				$this->load->view('makes/makes', $data);
				$this->load->view('footer');
		}
	}
	public function add(){
		$this->load->view('header');
		$this->load->view('makes/add');
		$this->load->view('footer');

	}
	public function edit($makeid = null){
		if ($makeid == null) { redirect(base_url(), 'auto'); }
		$data["result"] = $this->Make_model->getMakeInfo($makeid);
		$this->load->view('header');
		$this->load->view('makes/edit', $data);
		$this->load->view('footer');

	}
}
