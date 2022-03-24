<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_model extends CI_Model {

    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

	public function getModels($makeId){
    	$query = $this->db->from('model')->where('make_id',$makeId)->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array();
		}

	}
	public function getModelInfo($modelid=null) {
		$query = $this->db->where('id', $modelid)->get('model');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return array();
		}
	}

	public function updateModels($postData=null, $action=null) {
		if ($action == "add") {
			return $this->db->insert('model', array('name' => $postData["name"], 'make_id'=> $postData['make_id']));
		}
		if ($action == "edit") {
			return $this->db->update('model',array('name'=> $postData['name']),array('id'=> $postData['id']));
		}
		if ($action == "delete") {
			$query = $this->db->where('id', $postData["id"])->delete('model');
			return $query;
		}
	}
}
