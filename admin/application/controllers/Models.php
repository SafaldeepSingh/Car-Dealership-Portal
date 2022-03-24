<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Controller {

	public function make($makeId = null) {
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()){
				$postData = $this->input->post();
				$this->Model_model->updateModels($postData, $postData["action"]);
			}
			if ($makeId == null) { redirect(base_url(), 'auto'); }
//			$makeid = $this->input->get('make');
			$data['models'] = $this->Model_model->getModels($makeId);

			$this->load->view('header');
			$this->load->view('models/models', $data);
			$this->load->view('footer');
		}
	}

	public function add($makeId){
		$this->load->view('header');
		$this->load->view('models/add', array('makeId'=> $makeId));
		$this->load->view('footer');

	}
	public function edit($modelId = null){
		if ($modelId == null) { redirect(base_url(), 'auto'); }
		$data["result"] = $this->Model_model->getModelInfo($modelId);
		$this->load->view('header');
		$this->load->view('models/edit', $data);
		$this->load->view('footer');

	}
	public function get($makeId = null) {
		$data = $this->input->post();
		echo json_encode($this->Model_model->getModels($data['make']));
	}

}
