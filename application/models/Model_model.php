<?php


class Model_model extends CI_Model
{
	public function getModelsWithCount($makeId){
		$models = $this->db->where('make_id',$makeId)->get('model')->result_array();
		$modelWithCount = array();
		foreach ($models as $model){
			$count = $this->db->where('model_id',$model['id'])->get('vehicle')->num_rows();
			if($count>0)
				array_push($modelWithCount, array('name'=>$model['name'],'id'=>$model['id'], 'count' => $count));
		}
		return $modelWithCount;
	}
	public function getAllModelsWithCount(){
		$models = $this->db->get('model')->result_array();
		$modelWithCount = array();
		foreach ($models as $model){
			$count = $this->db->where('model_id',$model['id'])->get('vehicle')->num_rows();
			$make = $this->db->where('id',$model['make_id'])->get('make')->row()->name;
			if($count>0)
				array_push($modelWithCount, array('name'=>$model['name'],'make'=>$make,'make_id'=>$model['make_id'],'id'=>$model['id'], 'count' => $count));
		}
		return $modelWithCount;
	}
}
