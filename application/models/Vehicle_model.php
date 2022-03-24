<?php


class Vehicle_model extends CI_Model
{
	public function getVehicles(){
		$vehicles = $this->db->get('vehicle')->result_array();
		$maxPrice = PHP_INT_MIN;
		$minPrice = PHP_INT_MAX;
		$maxYear = PHP_INT_MIN;
		$minYear = PHP_INT_MAX;
		$maxKms = PHP_INT_MIN;
		$minKms = PHP_INT_MAX;
		foreach ($vehicles as $index=>$vehicle){
			$vehicles[$index]['photos']= $this->db->where('vehicle_id', $vehicle['id'])->get('photos')->result_array();

			if($vehicle['thumbnail_id']!=-1){
				$vehicles[$index]['thumbnail'] = $this->db->where('id',$vehicle['thumbnail_id'])->get('photos')->row()->path;
			}else if (count($vehicles[$index]['photos'])){
				$vehicles[$index]['thumbnail'] = $vehicles[$index]['photos'][0]['path'];
			}

			$vehicles[$index]['options']= $this->db->where('available', 1)->where('vehicle_id', $vehicle['id'])->get('options')->result_array();
			$vehicles[$index]['make'] = $this->db->where('id',$vehicle['make_id'])->get('make')->row()->name;
			$vehicles[$index]['model'] = $this->db->where('id',$vehicle['model_id'])->get('model')->row()->name;
			if($vehicle['price']> $maxPrice) $maxPrice = $vehicle['price'];
			if($vehicle['price']< $minPrice) $minPrice = $vehicle['price'];

			if($vehicle['year']> $maxYear) $maxYear = $vehicle['year'];
			if($vehicle['year']< $minYear) $minYear = $vehicle['year'];

			if($vehicle['kilometers']> $maxKms) $maxKms = $vehicle['kilometers'];
			if($vehicle['kilometers']< $minKms) $minKms = $vehicle['kilometers'];
		}
		return array('vehicles'=> $vehicles, 'minPrice'=> $minPrice, 'maxPrice'=> $maxPrice
		, 'minYear'=> $minYear, 'maxYear'=> $maxYear
		, 'minKms'=> $minKms, 'maxKms'=> $maxKms
		);
	}
	public function getVehicle($vehicleId){
		$vehicle = $this->db->where('id', $vehicleId)->get('vehicle')->row_array();

		$vehicle['photos'] = $this->db->where('vehicle_id', $vehicleId)->get('photos')->result_array();
		$vehicle['options']= $this->db->where('available', 1)->where('vehicle_id', $vehicleId)->get('options')->result_array();
		$vehicle['make'] = $this->db->where('id',$vehicle['make_id'])->get('make')->row()->name;
		$vehicle['model'] = $this->db->where('id',$vehicle['model_id'])->get('model')->row()->name;

		return $vehicle;
	}
	public function getCategoriesCount() {
		$carsCount = $this->db->where('category', 'cars')->get('vehicle')->num_rows();
		$convertibleCount = $this->db->where('category', 'convertible')->get('vehicle')->num_rows();
		$suvCount = $this->db->where('category', 'suv')->get('vehicle')->num_rows();
		$trucksCount = $this->db->where('category', 'trucks')->get('vehicle')->num_rows();
		$miniVanCount = $this->db->where('category', 'mini_van')->get('vehicle')->num_rows();
		$commercialCarCount = $this->db->where('category', 'commercial_car')->get('vehicle')->num_rows();
		return array('cars'=> $carsCount
					, 'convertible'=>$convertibleCount
					, 'suv'=> $suvCount
					, 'trucks'=> $trucksCount
					, 'mini_van'=> $miniVanCount
					, 'commercial_car'=> $commercialCarCount
		);
	}
	public function getFuelTypeCount() {
		$gasCount = $this->db->where('fuel', 'gas')->get('vehicle')->num_rows();
		$hybridCount = $this->db->where('fuel', 'hybrid')->get('vehicle')->num_rows();
		$dieselCount = $this->db->where('fuel', 'diesel')->get('vehicle')->num_rows();
		return array('gas'=> $gasCount, 'hybrid'=>$hybridCount, 'diesel'=> $dieselCount);
	}
	public function getTransmissionCount() {
		$automaticCount = $this->db->where('transmission', 'automatic')->get('vehicle')->num_rows();
		$semiAutomaticCount = $this->db->where('transmission', 'semi-automatic')->get('vehicle')->num_rows();
		$manualCount = $this->db->where('transmission', 'manual')->get('vehicle')->num_rows();
		return array('automatic'=> $automaticCount, 'semiAutomatic'=>$semiAutomaticCount, 'manual'=> $manualCount);
	}
	public function getOptionsWithCount() {
		$options =  $this->db->get('options')->result_array();
		$countOptions = array();
		foreach ($options as $option){
			if(!key_exists("$option[name]",$countOptions))
				$countOptions["$option[name]"] = 0;

				$countOptions["$option[name]"] += $option['available'];
		}
		return $countOptions;

	}

	public function getFilteredVehicles($minimum_price,$maximum_price,$minimum_year,$maximum_year
		, $minimum_kilometers,$maximum_kilometers, $categories, $fuel, $transmission, $options, $make, $model, $search
	,$sortOrder){
		$this->db->from('vehicle');
		if($categories && count($categories))
			$this->db->where_in('category',$categories);
		if($fuel && count($fuel))
			$this->db->where_in('fuel',$fuel);
		if($transmission && count($transmission))
			$this->db->where_in('transmission',$transmission);
		if($options && count($options)){
			$this->db->join('options','options.vehicle_id = vehicle.id');
			$this->db->select('vehicle.*,options.name as option_name');
			$this->db->where_in('options.name',$options)->where('options.available',1);
			$this->db->group_by('vehicle_id');
		}
		if($make && count($make)) {
			$this->db->where_in('make_id', $make);
			if ($model && count($model))
				$this->db->where_in('model_id', $model);
		}
		if($search!=''){
			$this->db->like('name',$search)
						->or_like('id',$search);
		}
		//Sorting
		if($sortOrder =='price-lth')
			$this->db->order_by('price','ASC');
		else if($sortOrder == 'price-htl')
			$this->db->order_by('price','DESC');
		else if($sortOrder =='km-lth')
			$this->db->order_by('kilometers','ASC');
		else if($sortOrder == 'km-htl')
			$this->db->order_by('kilometers','DESC');
		else if($sortOrder =='year-lth')
			$this->db->order_by('year','ASC');
		else if($sortOrder == 'year-htl')
			$this->db->order_by('year','DESC');

		$vehicles = $this->db->get()->result_array();
//		print_r($model);
//		print_r($vehicles);
//		exit;
		$filteredVehicles = array();
		foreach ($vehicles as $index=>$vehicle){
//			Price Filter
			if(($vehicle['price']-$minimum_price)< 0 || ($vehicle['price']-$maximum_price) > 0)
				continue;
//			Year Filter
			if($vehicle['year']< $minimum_year || $vehicle['year']>$maximum_year)
				continue;
//			Kilometers Filter
			if($vehicle['kilometers']< $minimum_kilometers || $vehicle['kilometers']>$maximum_kilometers)
				continue;
			$vehicles[$index]['photos']= $this->db->where('vehicle_id', $vehicle['id'])->get('photos')->result_array();
			$vehicles[$index]['options']= $this->db->where('vehicle_id', $vehicle['id'])->get('options')->result_array();
			$vehicles[$index]['make'] = $this->db->where('id',$vehicle['make_id'])->get('make')->row()->name;
			$vehicles[$index]['model'] = $this->db->where('id',$vehicle['model_id'])->get('model')->row()->name;

			if($vehicle['thumbnail_id']!=-1){
				$vehicles[$index]['thumbnail'] = $this->db->where('id',$vehicle['thumbnail_id'])->get('photos')->row()->path;
			}else if (count($vehicles[$index]['photos'])){
				$vehicles[$index]['thumbnail'] = $vehicles[$index]['photos'][0]['path'];
			}


			array_push($filteredVehicles,$vehicles[$index]);
		}
//		return array('vehicles'=>$vehicles, 'count'=>count($filteredVehicles));
		return array('vehicles'=>$filteredVehicles, 'count'=>count($filteredVehicles));
	}

	public function getCount($type){
		if($type == 'inventory')
			return $this->db->get('vehicle')->num_rows();
		else if($type == 'under15k')
			return $this->db->where('price<','15000')->get('vehicle')->num_rows();
		else if($type == 'under10k')
			return $this->db->where('price<','10000')->get('vehicle')->num_rows();
		else if($type == 'cars')
			return $this->db->where('category','cars')->get('vehicle')->num_rows();
		else if($type == 'suv')
			return $this->db->where('category','suv')->get('vehicle')->num_rows();
		else if($type == 'convertible')
			return $this->db->where('category','convertible')->get('vehicle')->num_rows();
		else if($type == 'hybrid')
			return $this->db->where('fuel','hybrid')->get('vehicle')->num_rows();
	}
	public function getFeaturedVehicles(){
		$vehicles = $this->db->where('featured',1)->get('vehicle')->result_array();
		$maxPrice = PHP_INT_MIN;
		$minPrice = PHP_INT_MAX;
		$maxYear = PHP_INT_MIN;
		$minYear = PHP_INT_MAX;
		$maxKms = PHP_INT_MIN;
		$minKms = PHP_INT_MAX;
		foreach ($vehicles as $index=>$vehicle){
			$vehicles[$index]['photos']= $this->db->where('vehicle_id', $vehicle['id'])->get('photos')->result_array();
			$vehicles[$index]['options']= $this->db->where('vehicle_id', $vehicle['id'])->get('options')->result_array();
			$vehicles[$index]['make'] = $this->db->where('id',$vehicle['make_id'])->get('make')->row()->name;
			$vehicles[$index]['model'] = $this->db->where('id',$vehicle['model_id'])->get('model')->row()->name;
			if($vehicle['price']> $maxPrice) $maxPrice = $vehicle['price'];
			if($vehicle['price']< $minPrice) $minPrice = $vehicle['price'];

			if($vehicle['year']> $maxYear) $maxYear = $vehicle['year'];
			if($vehicle['year']< $minYear) $minYear = $vehicle['year'];

			if($vehicle['kilometers']> $maxKms) $maxKms = $vehicle['kilometers'];
			if($vehicle['kilometers']< $minKms) $minKms = $vehicle['kilometers'];
		}
		return array('vehicles'=> $vehicles, 'minPrice'=> $minPrice, 'maxPrice'=> $maxPrice
		, 'minYear'=> $minYear, 'maxYear'=> $maxYear
		, 'minKms'=> $minKms, 'maxKms'=> $maxKms
		);
	}
}
