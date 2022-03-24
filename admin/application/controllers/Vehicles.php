<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends CI_Controller {

	public function index() {
		if ($this->Admin_model->verifyUser()) {
			if ($this->input->post()){
				$postData = $this->input->post();
				$this->Vehicle_model->updateVehicles($postData, $postData["action"]);
			}
				$data["vehicles"] = $this->Vehicle_model->getVehicles();
				$this->load->view('header');
				$this->load->view('vehicles/vehicles', $data);
				$this->load->view('footer');
		}
	}
	public function add(){
		$makes = $this->Make_model->getMakes();
		$this->load->view('header');
		$this->load->view('vehicles/add', array('makes'=> $makes));
		$this->load->view('footer');

	}
	public function edit($vehicleid = null){
		if ($vehicleid == null) { redirect(base_url(), 'auto'); }
		$data['makes'] = $this->Make_model->getMakes();
		$data["result"] = $this->Vehicle_model->getVehicleInfo($vehicleid);
		$data['models'] = $this->Model_model->getModels($data['result']['make_id']);
		$data['photos'] = $this->Vehicle_model->getVehiclePhotos($vehicleid);
		$data['options'] = $this->Vehicle_model->getVehicleOptions($vehicleid);
		$data['options'] = array_column($data['options'],'name');
//		echo '<pre>';
//		print_r(array_column($data['options'],'name'));
//		print_r($data['result']);
//		exit;
		$this->load->view('header');
		$this->load->view('vehicles/edit', $data);
		$this->load->view('footer');

	}

	public function deletePhoto(){
		$photoId = $this->input->post('photoId');
		echo $this->Vehicle_model->deletePhoto($photoId);
	}
	public function setThumbnail() {
		$photoId = $this->input->post('photoId');
		$vehicleId = $this->input->post('vehicleId');
		$status =  $this->db->update('vehicle',array('thumbnail_id'=>$photoId),array('id'=>$vehicleId));
		echo $status;
	}
	public function featureVehicle(){
		$vehicleId = $this->input->post('id');
		$status = $this->input->post('status');
		echo json_encode($this->Vehicle_model->featureVehicle($vehicleId, $status));
	}
}
