<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Make_model extends CI_Model {

    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

	public function getAllMakes(){
    	$query = $this->db->from('make')->get();
		if ($query->num_rows() > 0) {
			$makes = $query->result_array();
			return $makes;
		} else {
			return array();
		}

	}
	public function getMakes(){
    	$query = $this->db->from('make')->get();
		if ($query->num_rows() > 0) {
			$makes = $query->result_array();
			$finalMakes = array();
			foreach ($makes as $make){
				$models = $this->db->where('make_id',$make['id'])->get('model')->num_rows();
				if($models > 0)
					array_push($finalMakes, $make);
			}
//			return $query->result_array();
			return $finalMakes;
		} else {
			return array();
		}

	}
	public function getMakeInfo($makeid=null) {
		$query = $this->db->where('id', $makeid)->get('make');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return array();
		}
	}
	public function updateMakes($postData=null, $action=null) {
		if ($action == "add") {
			return $this->db->insert('make', array('name' => $postData["name"]));
		}
		if ($action == "edit") {
			return $this->db->update('make',array('name'=> $postData['name']),array('id'=> $postData['id']));
		}
		if ($action == "delete") {
			$query = $this->db->where('id', $postData["id"])->delete('make');
			return $query;
		}
	}
}
