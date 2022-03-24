<?php


class Make_model extends CI_Model
{
	public function getMakesWithCount(){
		$makes = $this->db->get('make')->result_array();
		$makeWithCount = array();
		foreach ($makes as $make){
			$count = $this->db->where('make_id',$make['id'])->get('vehicle')->num_rows();
			if($count>0)
				array_push($makeWithCount, array('name'=>$make['name'],'id'=>$make['id'], 'count' => $count));
		}
		return $makeWithCount;
	}
	public function getMakeName($makeId){
		return $this->db->where('id', $makeId)->get('make')->row()->name;
	}
}
