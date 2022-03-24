<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Vehicles extends CI_Controller
{
	public $language = 'english';
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('lang'))
			$this->language= $this->session->userdata('lang');
		$this->lang->load('home', $this->language);
	}

	public function index()
	{
		$vehicleData = $this->Vehicle_model->getVehicles();
		$data['vehicles'] = $vehicleData['vehicles'];
		$data['minPrice'] = $vehicleData['minPrice'];
		$data['maxPrice'] = $vehicleData['maxPrice'];
		$data['minYear'] = $vehicleData['minYear'];
		$data['maxYear'] = $vehicleData['maxYear'];
		$data['minKms'] = $vehicleData['minKms'];
		$data['maxKms'] = $vehicleData['maxKms'];
		$data['makesWithCount'] = $this->Make_model->getMakesWithCount();
//		$data['modelsWithCount'] = $this->Model_model->getModelsWithCount();
		$data['categoriesCount'] = $this->Vehicle_model->getCategoriesCount();
		$data['fuelTypeCount'] = $this->Vehicle_model->getFuelTypeCount();
		$data['transmissionCount'] = $this->Vehicle_model->getTransmissionCount();
		$data['optionsCount'] = $this->Vehicle_model->getOptionsWithCount();
//		echo '<pre>';
//		print_r($data['vehicles']);
//		exit();
		$this->load->view('vehicles', $data);
	}
	public function details($vehicleId = null)
	{
		if($vehicleId == null){redirect(base_url());}
		$data['vehicle'] = $this->Vehicle_model->getVehicle($vehicleId);
//		echo '<pre>';
//		print_r($vehicle);
//		exit;
		$this->load->view('vehicle_details', $data);
	}

	public function fetch_data(){
		$minimum_price = $this->input->post('minimum_price');
		$maximum_price = $this->input->post('maximum_price');

		$minimum_year = $this->input->post('minimum_year');
		$maximum_year = $this->input->post('maximum_year');

		$minimum_kilometers = $this->input->post('minimum_kilometers');
		$maximum_kilometers = $this->input->post('maximum_kilometers');

		$categories = $this->input->post('categories');
		$fuel = $this->input->post('fuel');
		$transmission = $this->input->post('transmission');
		$options = $this->input->post('options');
		$make = $this->input->post('make');
		$model = $this->input->post('model');
		$search = $this->input->post('search');
		$sortOrder = $this->input->post('sort_order');

		$modelsHTML = '';
		if($make && count($make)){
			foreach ($make as $item){
				$makeName = $this->Make_model->getMakeName($item);
				$models = $this->Model_model->getModelsWithCount($item);
				$curHTML = '<ul group-value="47" style="">
								<div class="subGroup">'.$makeName.'</div>';
				foreach ($models as $modelItem){
					if($model && array_search($modelItem['id'],$model)!== false)
					$curHTML.='
								<li class="tags flex selected" title="'.$modelItem['name'].'" id="li-model-'.$modelItem['id'].'">
									<input type="checkbox" class="d-none model" value="'.$modelItem['id'].'" id="cb-model-'.$modelItem['id'].'" checked/>	
									<button class="model-btn" data-cb="cb-model-'.$modelItem['id'].'" data-li="li-model-'.$modelItem['id'].'"">
										<span class="divSpan s-name">'.$modelItem['name'].'</span>
										<div class="divBadgeNum">
											<span class="s-num">'.$modelItem['count'].'</span>
										</div>
									</button>
								</li>';
					else
					$curHTML.='
								<li class="tags flex" title="'.$modelItem['name'].'" id="li-model-'.$modelItem['id'].'">
									<input type="checkbox" class="d-none model" value="'.$modelItem['id'].'" id="cb-model-'.$modelItem['id'].'" />	
									<button class="model-btn" data-cb="cb-model-'.$modelItem['id'].'" data-li="li-model-'.$modelItem['id'].'"">
										<span class="divSpan s-name">'.$modelItem['name'].'</span>
										<div class="divBadgeNum">
											<span class="s-num">'.$modelItem['count'].'</span>
										</div>
									</button>
								</li>';

				}
				$curHTML.='</ul>';
				$modelsHTML.=$curHTML;
			}
		}

		$this->load->library('pagination');
		$config =  array();
		$config['base_url'] = base_url();
		$filteredVehicles = $this->Vehicle_model->getFilteredVehicles($minimum_price,$maximum_price
			,$minimum_year,$maximum_year
			, $minimum_kilometers,$maximum_kilometers, $categories, $fuel, $transmission, $options, $make, $model
			, $search, $sortOrder
		);
		$config['total_rows'] = $filteredVehicles['count'];
		$config['per_page'] = 9;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_links'] = '3';
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
//		print_r($page);
//		exit();
		$start = ($page-1)* $config['per_page'];
		$filteredVehicles['vehicles'] = array_slice($filteredVehicles['vehicles'],$start,$config['per_page']);

		$vehiclesHTML = '';
		foreach ($filteredVehicles['vehicles'] as $vehicle){
			$curHTML = '
													<li class="carBoxWrapper" id="'.$vehicle['id'].'" data-carid="'.$vehicle['id'].'">
											<div class="divSpan divSpan12 carBoxOuter  elIsLoaded">
												<div class="divSpan divSpan12 carBoxInner">
													<div class="divSpan divSpan12 carBannerWrapper elIsLoadable"
														 style="">
														<div class="carBanner cBannerColor d-none">
															<span><span class="fa fa-check"></span> new arrivals</span>
														</div>
													</div>
													<div class="divSpan divSpan12 carImage"
														 style="margin-top: 0px; margin-bottom: 0px;">
														<a href="'.base_url().'/vehicles/details/'.$vehicle['id'].'"
														   title="'.$vehicle['name'].'">';
			if (count($vehicle['photos']))
					$curHTML.='<img alt="'.$vehicle['name'].'" class="mainImage elIsLoadable lazyloaded"
																	 data-src="'. base_url() . '/admin/' . $vehicle['thumbnail'] .'"
																	 src="'. base_url() . '/admin/' . $vehicle['thumbnail'] .'">';
			else
					$curHTML.='<img alt="'.$vehicle['name'].'" style="background: #eeeeee;padding:10%;width:80%" class="mainImage elIsLoadable lazyloaded"
																	 data-src="'.base_url() . 'assets/images/usedsrp2/car-bg-image-white.png' .'"
																	 src="'. base_url() . 'assets/images/usedsrp2/car-bg-image-white.png' .'">';

			$curHTML.='</a><div class="divStockTextSelect">Vehicle ID: '.$vehicle['id'].'</div>
													</div>
													<div class="divSpan divSpan12 carInfos">
														<div class="divSpan divSpan12 carBasics" style="height: 81px;">
															<h2 class="divSpan carTitle">
																<a href="'.base_url().'vehicles/details/'.$vehicle['id'].'"
																   title="'.$vehicle['name'].'">
																	<div class="divMake elIsGreyable">
																		'.$vehicle['make'].'&nbsp;
																	</div>
																	<div class="divModelYear elIsGreyable">
																		<span>'.$vehicle['year'].'&nbsp;</span><span>'.$vehicle['model'].'&nbsp;</span>
																	</div>
																	<div class="divTrim elIsGreyable">'.$vehicle['trim_level'].'
																		&nbsp;
																	</div>
																</a>
															</h2>
															<div class="divSpan carPrice elIsLoadable">
															<span data-tooltip="" class="p-base ">
																'. number_format($vehicle['price']) .'																<span
																		class="s-dollarsign sign-tp-big">$</span>
															</span>
																<br>
															</div>
														</div>
													</div>
												</div>
												<div class="divSpan divSpan12 carDescription elIsLoadable">
													<span class="s-desc"><span
																class="s-km">'. number_format($vehicle['kilometers']) .' KM</span>'. ucfirst($vehicle['transmission']) .' '. ucfirst($vehicle['exterior_color']) .' Int: '. ucfirst($vehicle['interior_color']).'</span>
												</div>
											</div>
										</li>
			';
			$vehiclesHTML.=$curHTML;
		}
		$output = array(
			'pagination_link'=> $this->pagination->create_links(),
			'vehicle_list' => $vehiclesHTML,
			'make_models' => $modelsHTML
		);
		echo json_encode($output);
	}
	public function getCounts() {
		$inventoryCount = $this->Vehicle_model->getCount('inventory');
		$under15kCount = $this->Vehicle_model->getCount('under15k');
		$under10kCount = $this->Vehicle_model->getCount('under10k');
		$carCount = $this->Vehicle_model->getCount('cars');
		$suvCount = $this->Vehicle_model->getCount('suv');
		$convertibleCount = $this->Vehicle_model->getCount('convertible');
		$hybridCount = $this->Vehicle_model->getCount('hybrid');
		$makes = array_slice($this->Make_model->getMakesWithCount(),0,10);
		$models = array_slice($this->Model_model->getAllModelsWithCount(),0,10);
		$makeHTML = '';
		$modelHTML = '';
		foreach ($makes as $make){
			$makeHTML .= '<li data-id="USED_ALLINV" id="MainMenu_USED_ALLINV" class="firstItem">
						<a href="'.base_url().'vehicles?make='.$make['id'].'">'.$make['name']
				.' ('.$make['count'].')</a></li>';
		}
		foreach ($models as $model){
			$modelHTML .= '<li data-id="USED_ALLINV" id="MainMenu_USED_ALLINV" class="firstItem">
						<a href="'. base_url() .'vehicles?model='.$model['id'].'&make='.$model['make_id'].'">'.$model['make'].' '.$model['name']
				.' ('.$model['count'].')</a></li>';

		}
		echo json_encode(array(
			'inventory_count' => $inventoryCount
			,'under15k_count' => $under15kCount
			,'under10k_count' => $under10kCount
			,'car_count' => $carCount
			,'suv_count' => $suvCount
			,'convertible_count' => $convertibleCount
			,'hybrid_count' => $hybridCount
			,'makes' => $makeHTML
			,'models' => $modelHTML
		));

	}
}
