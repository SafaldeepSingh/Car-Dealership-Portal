<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

	public function getVehicles(){
    	$query = $this->db->from('vehicle')->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array();
		}

	}
	public function getVehicleInfo($vehicleid=null) {
		$query = $this->db->where('id', $vehicleid)->get('vehicle');
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return array();
		}
	}
	public function getVehiclePhotos($vehicleId){
    	return $this->db->where('vehicle_id',$vehicleId)->get('photos')->result_array();
	}
	public  function deletePhoto($photoId){
    	$path = $this->db->where('id', $photoId)->get('photos')->row()->path;
    	unlink($path);
		return $this->db->where('id',$photoId)->delete('photos');
	}
	public function getVehicleOptions($vehicleId){
    	return $this->db->where('vehicle_id',$vehicleId)->where('available',1)->get('options')->result_array();
	}
	public function updateVehicles($postData=null, $action=null) {
		if ($action == "add") {
			$DBdata = array(
				'name'=> $postData['name'],
				'price'=> $postData['price'],
				'kilometers'=> $postData['kilometers'],
				'year'=> $postData['year'],
				'description'=> $postData['description'],
				'make_id'=> $postData['make'],
				'model_id'=> $postData['model'],
				'drive_train'=> $postData['drive_train'],
				'transmission'=> $postData['transmission'],
				'category'=> $postData['category'],
				'trim_level'=> $postData['trim_level'],
				'engine'=> $postData['engine'],
				'cyclinders'=> $postData['cyclinder'],
				'exterior_color'=> $postData['exterior_color'],
				'interior_color'=> $postData['interior_color'],
				'doors'=> $postData['doors'],
				'fuel'=> $postData['fuel'],
				'trunk_space'=> $postData['trunk_space'],
				'fuel_efficiency_city'=> $postData['fuel_efficiency_city'],
				'fuel_efficiency_highway'=> $postData['fuel_efficiency_highway'],
				'horse_power'=> $postData['horse_power'],
				'length'=> $postData['length'],
				'width'=> $postData['width'],
				'height'=> $postData['height'],
			);
			$this->db->insert('vehicle', $DBdata);
			$insertId =  $this->db->insert_id();
//			echo '<pre>';
//			print_r($_FILES);
//			exit;
			$this->do_upload($insertId);
//			Add Options
			$this->addVehicleOptions($postData, $insertId);
//		END	Add Options
		}
		if ($action == "edit") {
			$this->updateVehicleOptions($postData);
			$DBdata = array(
				'name'=> $postData['name'],
				'price'=> $postData['price'],
				'kilometers'=> $postData['kilometers'],
				'year'=> $postData['year'],
				'description'=> $postData['description'],
				'make_id'=> $postData['make'],
				'model_id'=> $postData['model'],
				'drive_train'=> $postData['drive_train'],
				'transmission'=> $postData['transmission'],
				'category'=> $postData['category'],
				'trim_level'=> $postData['trim_level'],
				'engine'=> $postData['engine'],
				'cyclinders'=> $postData['cyclinder'],
				'exterior_color'=> $postData['exterior_color'],
				'interior_color'=> $postData['interior_color'],
				'doors'=> $postData['doors'],
				'fuel'=> $postData['fuel'],
				'trunk_space'=> $postData['trunk_space'],
				'fuel_efficiency_city'=> $postData['fuel_efficiency_city'],
				'fuel_efficiency_highway'=> $postData['fuel_efficiency_highway'],
				'horse_power'=> $postData['horse_power'],
				'length'=> $postData['length'],
				'width'=> $postData['width'],
				'height'=> $postData['height'],
			);
			$this->do_upload($postData['id']);
//			echo '<pre>';
//			print_r($_FILES);
//			exit;
			return $this->db->update('vehicle',$DBdata,array('id'=> $postData['id']));
		}
		if ($action == "delete") {
			$photos = $this->db->where('vehicle_id',$postData['id'])->get('photos')->result_array();
			foreach ($photos as $photo){unlink($photo['path']);}
			$query = $this->db->where('id', $postData["id"])->delete('vehicle');
			return $query;
		}
	}
	public function featureVehicle($vehicleId,$status){
    	if($status == 1)
	    	return $this->db->update('vehicle',array('featured'=>0), array('id'=>$vehicleId));
    	else
			return $this->db->update('vehicle',array('featured'=>1), array('id'=>$vehicleId));
	}

	private function addVehicleOptions($postData, $insertId) {
		$optionsData = array();
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Cruise_Control','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'CD_Player','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'MP3_Player','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Doors','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Satellite_Radio','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Onboard_computer','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Backup_camera','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'AM_/_FM_radio','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Auto_on/off_Headlamps','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Backup_Sensor','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Bluetooth','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Audio_Voice_Control','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Auto-Dimming_R/V_Mirror','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Bose_Sound_System','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Climate_Control','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Color_TV','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Adaptive_Cruise_Control','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Dual_Climate_Control','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Electronic_Compass','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'JBL_Sound_System','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Navigation_System','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Seat','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Sunroof','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Remote_Fuel_Cover_Release','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Reverse_Park_Assist','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Keyless_Entry','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Mirrors','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Sliding_Doors','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Windows','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rain_Sensor_Wipers','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rear_Defroster','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Remote_Start','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Hill_Ascent_Control','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Hydraulic_lift','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Intermittent_Wipers','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Lane_Departure_Warning','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Adjustable_Seat','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_lift_Gates','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Rear_Sunshade','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Steering','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rear_view_Camera','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Remote_Trunk_Release','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Trip_Computer','Technology');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Tachometer','Technology');


		$this->addVehicleOption($postData, $insertId, $optionsData, 'Vehicle_stability_control','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Child_locks','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Alarm_System','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Keyless_entry','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Anti-theft_system','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_brakes','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Traction_Control','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Collison_Avoidance_System','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Driver_Side_Airbag','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'ABS','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Dual_Airbag','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Passenger_Airbag','Security');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Stability_Control','Security');

		$this->addVehicleOption($postData, $insertId, $optionsData, 'Intermittent_wipers','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_seats','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Electric_windows','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Air_conditioning','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Bucket_seats','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Illuminated_driver\'s_side_vanity_mirror','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Digital_Clock','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Cup_Holder','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Bench_Seating','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Door_Map_Pockets','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Auxilary_12v_outlet','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Cloth_Interior','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Heated_Seats','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Leather_Interior','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Lift_out_roof','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Memory_Seats','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rear_Air_and_Heat','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rear_Seat_Audio_Controls','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Split_folding_Rear_Seats','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Steering_Wheel_Audio_Controls','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Trip_Odometer','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Heads_up_display','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Panoramic_Sunroof','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Wood_Trim_Interior','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Storage_box','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Reclining_Seats','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Adjustable_Pedals','Interior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Analog_Gauges','Interior');

		$this->addVehicleOption($postData, $insertId, $optionsData, 'Heated_mirrors','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_mirrors','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Automatic_headlights','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Alloy_Wheels','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Fog_Lights','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Halogen_Headlamps','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Power_Antenna','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Premium/oversized_wheels','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Removable_Panels','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Two_toned_Paint','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Leather_Wrap_Wheel','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Luggage_Rack','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Off_Road_Tires','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Removable_Roof','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Step_Bumper','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Truck_Cap','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Flood_Lights','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Heated_Exterior_Mirrors','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'On_Glass_Antenna','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Privacy_Glass','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rear_Aerodynamic_Spoiler','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Rear_Mounted_Spare','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Removable_Roof_Panel','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Roof_Rack','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Tinted_Windows','Exterior');
		$this->addVehicleOption($postData, $insertId, $optionsData, 'Xenon_Headlights','Exterior');

//		echo '<pre>';
//		print_r($optionsData);
//		print_r($postData);
//		exit;

		$this->db->insert_batch('options',$optionsData);

	}
	private function addVehicleOption($postData,$insertId, &$optionsData,$option, $type){
		if(key_exists($option, $postData) && $postData[$option] == 'on')
			array_push($optionsData, array('vehicle_id'=> $insertId, 'name' => "$option"
			, 'type' => "$type", 'available'=>1));
		else
			array_push($optionsData, array('vehicle_id'=> $insertId, 'name' => "$option"
			, 'type' => "$type", 'available'=>0));
	}
	private function updateVehicleOptions($postData){
		$this->updateVehicleOption($postData, 'Cruise_Control','Technology');
		$this->updateVehicleOption($postData, 'CD_Player','Technology');
		$this->updateVehicleOption($postData, 'MP3_Player','Technology');
		$this->updateVehicleOption($postData, 'Power_Doors','Technology');
		$this->updateVehicleOption($postData, 'Satellite_Radio','Technology');
		$this->updateVehicleOption($postData, 'Onboard_computer','Technology');
		$this->updateVehicleOption($postData, 'Backup_camera','Technology');
		$this->updateVehicleOption($postData, 'AM_/_FM_radio','Technology');
		$this->updateVehicleOption($postData, 'Auto_on/off_Headlamps','Technology');
		$this->updateVehicleOption($postData, 'Backup Sensor','Technology');
		$this->updateVehicleOption($postData, 'Bluetooth','Technology');
		$this->updateVehicleOption($postData, 'Audio_Voice_Control','Technology');
		$this->updateVehicleOption($postData, 'Auto-Dimming R/V Mirror','Technology');
		$this->updateVehicleOption($postData, 'Bose_Sound_System','Technology');
		$this->updateVehicleOption($postData, 'Climate_Control','Technology');
		$this->updateVehicleOption($postData, 'Color TV','Technology');
		$this->updateVehicleOption($postData, 'Adaptive_Cruise_Control','Technology');
		$this->updateVehicleOption($postData, 'Dual_Climate_Control','Technology');
		$this->updateVehicleOption($postData, 'Electronic_Compass','Technology');
		$this->updateVehicleOption($postData, 'JBL_Sound_System','Technology');
		$this->updateVehicleOption($postData, 'Navigation_System','Technology');
		$this->updateVehicleOption($postData, 'Power_Seat','Technology');
		$this->updateVehicleOption($postData, 'Power_Sunroof','Technology');
		$this->updateVehicleOption($postData, 'Remote_Fuel_Cover_Release','Technology');
		$this->updateVehicleOption($postData, 'Reverse_Park_Assist','Technology');
		$this->updateVehicleOption($postData, 'Keyless_Entry','Technology');
		$this->updateVehicleOption($postData, 'Power_Mirrors','Technology');
		$this->updateVehicleOption($postData, 'Power_Sliding_Doors','Technology');
		$this->updateVehicleOption($postData, 'Power_Windows','Technology');
		$this->updateVehicleOption($postData, 'Rain_Sensor_Wipers','Technology');
		$this->updateVehicleOption($postData, 'Rear_Defroster','Technology');
		$this->updateVehicleOption($postData, 'Remote_Start','Technology');
		$this->updateVehicleOption($postData, 'Hill_Ascent_Control','Technology');
		$this->updateVehicleOption($postData, 'Hydraulic_lift','Technology');
		$this->updateVehicleOption($postData, 'Intermittent_Wipers','Technology');
		$this->updateVehicleOption($postData, 'Lane_Departure_Warning','Technology');
		$this->updateVehicleOption($postData, 'Power_Adjustable_Seat','Technology');
		$this->updateVehicleOption($postData, 'Power_lift_Gates','Technology');
		$this->updateVehicleOption($postData, 'Power_Rear_Sunshade','Technology');
		$this->updateVehicleOption($postData, 'Power_Steering','Technology');
		$this->updateVehicleOption($postData, 'Rear_view_Camera','Technology');
		$this->updateVehicleOption($postData, 'Remote_Trunk_Release','Technology');
		$this->updateVehicleOption($postData, 'Trip_Computer','Technology');
		$this->updateVehicleOption($postData, 'Tachometer','Technology');

		$this->updateVehicleOption($postData, 'Vehicle_stability_control','Security');
		$this->updateVehicleOption($postData, 'Child_locks','Security');
		$this->updateVehicleOption($postData, 'Alarm_System','Security');
		$this->updateVehicleOption($postData, 'Keyless_entry','Security');
		$this->updateVehicleOption($postData, 'Anti-theft_system','Security');
		$this->updateVehicleOption($postData, 'Power_brakes','Security');
		$this->updateVehicleOption($postData, 'Traction_Control','Security');
		$this->updateVehicleOption($postData, 'Collison_Avoidance_System','Security');
		$this->updateVehicleOption($postData, 'Driver_Side_Airbag','Security');
		$this->updateVehicleOption($postData, 'ABS','Security');
		$this->updateVehicleOption($postData, 'Dual_Airbag','Security');
		$this->updateVehicleOption($postData, 'Passenger_Airbag','Security');
		$this->updateVehicleOption($postData, 'Stability_Control','Security');

		$this->updateVehicleOption($postData, 'Intermittent_wipers','Interior');
		$this->updateVehicleOption($postData, 'Power_seats','Interior');
		$this->updateVehicleOption($postData, 'Electric_windows','Interior');
		$this->updateVehicleOption($postData, 'Air_conditioning','Interior');
		$this->updateVehicleOption($postData, 'Bucket_seats','Interior');
		$this->updateVehicleOption($postData, 'Illuminated_driver\'s_side_vanity_mirror','Interior');
		$this->updateVehicleOption($postData, 'Digital_Clock','Interior');
		$this->updateVehicleOption($postData, 'Cup_Holder','Interior');
		$this->updateVehicleOption($postData, 'Bench_Seating','Interior');
		$this->updateVehicleOption($postData, 'Door_Map_Pockets','Interior');
		$this->updateVehicleOption($postData, 'Auxilary_12v_outlet','Interior');
		$this->updateVehicleOption($postData, 'Cloth_Interior','Interior');
		$this->updateVehicleOption($postData, 'Heated_Seats','Interior');
		$this->updateVehicleOption($postData, 'Leather_Interior','Interior');
		$this->updateVehicleOption($postData, 'Lift_out_roof','Interior');
		$this->updateVehicleOption($postData, 'Memory_Seats','Interior');
		$this->updateVehicleOption($postData, 'Rear_Air_and_Heat','Interior');
		$this->updateVehicleOption($postData, 'Rear_Seat_Audio_Controls','Interior');
		$this->updateVehicleOption($postData, 'Split_folding_Rear_Seats','Interior');
		$this->updateVehicleOption($postData, 'Steering_Wheel_Audio_Controls','Interior');
		$this->updateVehicleOption($postData, 'Trip_Odometer','Interior');
		$this->updateVehicleOption($postData, 'Heads_up_display','Interior');
		$this->updateVehicleOption($postData, 'Panoramic_Sunroof','Interior');
		$this->updateVehicleOption($postData, 'Wood_Trim_Interior','Interior');
		$this->updateVehicleOption($postData, 'Storage_box','Interior');
		$this->updateVehicleOption($postData, 'Reclining_Seats','Interior');
		$this->updateVehicleOption($postData, 'Adjustable Pedals','Interior');
		$this->updateVehicleOption($postData, 'Analog_Gauges','Interior');

		$this->updateVehicleOption($postData, 'Heated_mirrors','Exterior');
		$this->updateVehicleOption($postData, 'Power_mirrors','Exterior');
		$this->updateVehicleOption($postData, 'Automatic_headlights','Exterior');
		$this->updateVehicleOption($postData, 'Alloy_Wheels','Exterior');
		$this->updateVehicleOption($postData, 'Fog_Lights','Exterior');
		$this->updateVehicleOption($postData, 'Halogen_Headlamps','Exterior');
		$this->updateVehicleOption($postData, 'Power_Antenna','Exterior');
		$this->updateVehicleOption($postData, 'Premium/oversized_wheels','Exterior');
		$this->updateVehicleOption($postData, 'Removable_Panels','Exterior');
		$this->updateVehicleOption($postData, 'Two_toned_Paint','Exterior');
		$this->updateVehicleOption($postData, 'Leather_Wrap_Wheel','Exterior');
		$this->updateVehicleOption($postData, 'Luggage_Rack','Exterior');
		$this->updateVehicleOption($postData, 'Off_Road_Tires','Exterior');
		$this->updateVehicleOption($postData, 'Removable_Roof','Exterior');
		$this->updateVehicleOption($postData, 'Step_Bumper','Exterior');
		$this->updateVehicleOption($postData, 'Truck_Cap','Exterior');
		$this->updateVehicleOption($postData, 'Flood_Lights','Exterior');
		$this->updateVehicleOption($postData, 'Heated_Exterior_Mirrors','Exterior');
		$this->updateVehicleOption($postData, 'On_Glass_Antenna','Exterior');
		$this->updateVehicleOption($postData, 'Privacy_Glass','Exterior');
		$this->updateVehicleOption($postData, 'Rear_Aerodynamic_Spoiler','Exterior');
		$this->updateVehicleOption($postData, 'Rear_Mounted_Spare','Exterior');
		$this->updateVehicleOption($postData, 'Removable_Roof_Panel','Exterior');
		$this->updateVehicleOption($postData, 'Roof_Rack','Exterior');
		$this->updateVehicleOption($postData, 'Tinted_Windows','Exterior');
		$this->updateVehicleOption($postData, 'Xenon_Headlights','Exterior');

	}
	private function updateVehicleOption($postData, $option, $type){
		if(key_exists($option, $postData) && $postData[$option] == 'on')
			$this->db->where('vehicle_id',$postData['id'])->where('name',$option)->where('type',$type)
				->set('available',1)->update('options');
		else
			$this->db->where('vehicle_id',$postData['id'])->where('name',$option)->where('type',$type)
				->set('available', 0)->update('options');

	}
	private function do_upload($insertId){
//		$config['upload_path']='./sean-content/vehicle-images/'.gmdate('Y_m_d_h_i_s');
//		$config['allowed_types']='gif|jpg|png';
//		if (!file_exists($config['upload_path'])) {mkdir($config['upload_path'], 0777, true);}
//		$this->load->library('upload',$config);

		$name_array = array();
		$path_array = array();
		$thumbpath_array = array();
		if(!($_FILES['photos']['name'][0]))
			return;

		$count = count($_FILES['photos']['name']);
		$files=$_FILES;
		$uploadStatus=true;
		//upload start
		for($s=0; $s<=$count-1; $s++) {
			$_FILES['photos']['name']= $files['photos']['name'][$s];
			$_FILES['photos']['type']    = $files['photos']['type'][$s];
			$_FILES['photos']['tmp_name'] = $files['photos']['tmp_name'][$s];
			$_FILES['photos']['error']     = $files['photos']['error'][$s];
			$_FILES['photos']['size']    = $files['photos']['size'][$s];

			$config['upload_path']='./sean-content/vehicle-images/'.gmdate('Y_m_d_h_i_s');
			$config['allowed_types']='gif|jpg|png|jpeg';
			if (!file_exists($config['upload_path'])) {mkdir($config['upload_path'], 0777, true);}
			$this->load->library('upload',$config);


			if($this->upload->do_upload('photos'))
			{
				$data = $this->upload->data();
				$thumbnail = 'sean-content/vehicle-images/'.gmdate('Y_m_d_h_i_s').'/'.$data['file_name'];
				$name_array[] = $data['file_name'];
				$path_array[] = 'sean-content/vehicle-images/'.gmdate('Y_m_d_h_i_s').'/'.$data['file_name'];
				$thumbpath_array[] = str_replace('.', '_thumb.', $thumbnail);

				// Resize Images- Create Thumbnail
//				$config['image_library'] = 'gd2';
//				$config['source_image'] = './sean-content/vehicle-images/'.gmdate('Y_m_d_h_i_s').'/'.$data['file_name'];
//				$config['new_image'] = './'.$thumbnail;
//				$config['create_thumb'] = TRUE;
//				$config['maintain_ratio'] = TRUE;
//				$config['width']         = 1000;
//
//				$this->load->library('image_lib', $config);
//				$this->image_lib->resize();
//				$this->image_lib->clear();
			}
			else
			{
				delete_files('./sean-content/vehicle-images/'.gmdate('Y_m_d_h_i_s'));
				$uploadStatus=false;
				break;
			}
		}
		//upload finish
		if(!$uploadStatus)
		{
//			$this->session->set_flashdata('error', 'Something Went Wrong. Please try again!');
//			redirect('/admin/vehicle-images');
		}
		else
		{
			$saveData = array();
			foreach($name_array as $index=>$row)
			{
				$entry=array(
//					'name'=>$row,
					'path'=>$path_array[$index],
					'vehicle_id'=>$insertId,
//					'thumbpath'=>$thumbpath_array[$index]
//					'path'=>$thumbpath_array[$index]
				);

				$saveData[]=$entry;
			}
//			print_r($insertId);
//			exit();
			$this->db->insert_batch('photos',$saveData);
//			$this->admin_model->insertGridImages($saveData);
//			$this->session->set_flashdata('success', 'Image(s) Uploaded Successfully');
//			redirect('/admin/grid-images');
		}
	}

}
