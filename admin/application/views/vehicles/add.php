<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url()?>vehicles">Vehicles</a></li>
                <li class="breadcrumb-item active">Add Vehicle</li>
            </ol>

        <form method="POST" enctype="multipart/form-data" action="<?=base_url()?>vehicles">
            <input type="hidden" name="action" value="add">
			<div class="form-group row">
				<div class="col-12">
					<h4>Basic Details</h4>
				</div>
			</div>
            <div class="form-group row">
              <div class="col-6">
				  <label >Name <span style="color: red">*</span></label>
                <input class="form-control" id="name" type="text" value="" name="name" required>
              </div>
				<div class="col-6">
					<label >Description</label>
					<textarea class="form-control" rows="4" id="description" type="text"  name="description"></textarea>
				</div>
            </div>
            <div class="form-group row">
				<div class="col-3">
					<label >Make <span style="color: red">*</span></label>
					<select class="form-control" name="make" id="make" required>
						<option>Select Make </option>
						<?php
						foreach ($makes as $make){
							echo '<option value="'.$make['id'].'">'.$make['name'].'</option>';
						}
						?>
					</select>
				</div>
				<div class="col-3">
					<label >Model <span style="color: red">*</span></label>
					<select class="form-control" name="model" id="model" required>
						<option>Select Model</option>
					</select>
				</div>
				<div class="col-3">
					<label >Price <span style="color: red">*</span></label>
					<input class="form-control" id="price" type="number" value="" name="price" required>
				</div>
				<div class="col-3">
					<label >Kilometers <span style="color: red">*</span></label>
					<input class="form-control" id="kilometers" type="number" value=""  name="kilometers" required>
				</div>
				<div class="col-3 mt-3">
					<label for="year">Year <span style="color: red">*</span></label>
					<input class="form-control" id="year" type="number" name="year" required>
				</div>
            </div>

			<div class="form-group row">
				<div class="col-12">
					<h4>Pictures <span style="color: red">*</span></h4>
					<input type="file" class="form-control"  accept="image/*" name="photos[]" id="photos" multiple required>
				</div>
			</div>
			<div class="form-group row" id="display_photos"></div>

			<div class="form-group row">
				<div class="col-12">
					<h4>Specifications</h4>
				</div>
			</div>
            <div class="form-group row">
              <div class="col-10 col-lg-3">
				  <label >Drive Train  <span style="color: red">*</span></label>
                <select class="form-control" id="drive_train"   name="drive_train" required>
					<option >Select Drive Train</option>
					<option value="All Wheel Drive">All Wheel Drive (AWD)</option>
					<option value="Front Wheel Drive">Front Wheel Drive (FWD)</option>
					<option value="Rear Wheel Drive">Rear Wheel Drive (RWD)</option>
					<option value="4 Wheel Drive">4 Wheel Drive (4WD)</option>
				</select>
            </div>
			  <div class="col-10 col-lg-3">
				  <label >Transmission <span style="color: red">*</span></label>
					<select class="form-control" id="transmission" name="transmission" required>
						<option >Select Transmission</option>
						<option value="automatic">Automatic</option>
						<option value="semi-automatic">Semi Automatic</option>
						<option value="manual">Manual</option>
					</select>
				</div>
			  <div class="col-10 col-lg-3">
				  <label >Category <span style="color: red">*</span></label>
					<select class="form-control" id="category"   name="category" required>
						<option >Select Category *</option>
						<option value="cars">Cars</option>
						<option value="convertible">Convertible</option>
						<option value="suv">SUV</option>
						<option value="mini_van">Mini-Van</option>
						<option value="commercial_car">Commercial Car</option>
						<option value="truck">Truck</option>
					</select>
				</div>
				<div class="col-10 col-lg-3">
					<label >Trim level</label>
					<input type="text" class="form-control" name="trim_level" >
				</div>
			</div>
            <div class="form-group row">
              <div class="col-10 col-lg-3">
				  <label >Engine</label>
				  <input class="form-control" type="text" name="engine">
              </div>
			  <div class="col-10 col-lg-3">
				  <label >Cyclinder</label>
				  <input class="form-control" type="text" name="cyclinder">
			  </div>
			  <div class="col-10 col-lg-3">
				  <label >Exterior Color <span style="color: red">*</span></label>
				  <input class="form-control" type="text" name="exterior_color" required>
			  </div>
			  <div class="col-10 col-lg-3">
				  <label >Interior Color <span style="color: red">*</span></label>
					<input class="form-control" type="text" name="interior_color" required>
			  </div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-3">
					<label >Doors <span style="color: red">*</span></label>
					<input class="form-control" type="text" class="form-control" name="doors" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-12">
					<h4>Technical Specifications</h4>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-3">
					<label >Fuel <span style="color: red">*</span></label>
<!--					<input type="text" class="form-control" name="fuel" >-->
					<select name="fuel" id="fuel" class="form-control" required>
						<option>Select Fuel</option>
						<option value="gas">Gas</option>
						<option value="hybrid">Hybrid</option>
						<option value="diesel">Diesel</option>
					</select>
				</div>
				<div class="col-10 col-lg-3">
					<label >Trunk Space(in litres)</label>
					<input type="text" class="form-control" name="trunk_space" >
				</div>
				<div class="col-10 col-lg-3">
					<label >Fuel Efficiency(City)</label>
					<input type="text" class="form-control" name="fuel_efficiency_city" >
				</div>
				<div class="col-10 col-lg-3">
					<label >Fuel Efficiency(Highway)</label>
					<input type="text" class="form-control" name="fuel_efficiency_highway" >
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-3">
					<label >Horse Power</label>
					<input type="text" class="form-control" name="horse_power" >
				</div>
				<div class="col-10 col-lg-3">
					<label >Length(in mm)</label>
					<input type="number" class="form-control" name="length" >
				</div>
				<div class="col-10 col-lg-3">
					<label >Width(in mm)</label>
					<input type="number" class="form-control" name="width" >
					</div>
				<div class="col-10 col-lg-3">
					<label >Height(in mm)</label>
					<input type="number" class="form-control" name="height" >
				</div>
			</div>

			<div class="form-group row">
				<div class="col-12">
					<h4>Options</h4>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12">
					<h6 class="ml-2">Technology</h6>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Cruise Control"> Cruise Control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="CD Player"> CD Player
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="MP3 Player"> MP3 Player
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power Doors"> Power Doors
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Satellite Radio"> Satellite Radio
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Auto on/off Headlamps"> Auto on/off Headlamps
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Backup_Sensor"> Backup Sensor
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bluetooth"> Bluetooth
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Audio_Voice_Control"> Audio Voice Control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Auto-Dimming_R/V_Mirror"> Auto-Dimming R/V Mirror
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bose_Sound_System"> Bose Sound System
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Climate_Control"> Climate Control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Color_TV"> Color TV
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Adaptive_Cruise_Control"> Adaptive Cruise Control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Dual_Climate_Control"> Dual Climate Control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Electronic_Compass"> Electronic Compass
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="JBL_Sound_System"> JBL Sound System
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Navigation_System"> Navigation System
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Seat"> Power Seat
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Sunroof"> Power Sunroof
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Remote_Fuel_Cover_Release"> Remote Fuel Cover Release
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Reverse_Park_Assist"> Reverse Park Assist
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Keyless_Entry"> Keyless Entry
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Mirrors"> Power Mirrors
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Sliding_Doors"> Power Sliding Doors
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Windows"> Power Windows
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rain_Sensor_Wipers"> Rain Sensor Wipers
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Defroster"> Rear Defroster
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Remote_Start"> Remote Start
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Hill_Ascent_Control"> Hill Ascent Control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Hydraulic_lift"> Hydraulic lift
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Intermittent_Wipers"> Intermittent Wipers
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Lane_Departure_Warning"> Lane Departure Warning
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Adjustable_Seat"> Power Adjustable Seat
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_lift_Gates"> Power lift Gates
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Rear_Sunshade"> Power Rear Sunshade
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Steering"> Power Steering
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_view_Camera"> Rear view Camera
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Remote_Trunk_Release"> Remote Trunk Release
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Trip_Computer"> Trip Computer
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Tachometer"> Tachometer
					</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Onboard computer"> Onboard computer
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Backup camera"> Backup camera
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="AM / FM radio"> AM / FM radio
					</span>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-12">
					<h6 class="ml-2">Security</h6>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Vehicle stability control"> Vehicle stability control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Child locks"> Child locks
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Alarm System"> Alarm System
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Keyless entry"> Keyless entry
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Anti-theft system"> Anti-theft system
					</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power brakes"> Power brakes
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Traction Control"> Traction control
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Collison_Avoidance_System"> Collison Avoidance System
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Driver_Side_Airbag"> Driver Side Airbag
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="ABS"> ABS
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Dual_Airbag"> Dual Airbag
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Passenger_Airbag"> Passenger Airbag
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Stability_Control"> Stability Control
					</span>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-12">
					<h6 class="ml-2">Interior</h6>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Intermittent wipers"> Intermittent wipers
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power seats"> Power seats
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Electric windows"> Electric windows
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Air conditioning"> Air conditioning
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bucket seats"> Bucket seats
					</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Illuminated driver's side vanity mirror"> Illuminated driver's side vanity mirror
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Digital_Clock"> Digital Clock
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Cup_Holder"> Cup Holder
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bench_Seating"> Bench Seating
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Door_Map_Pockets"> Door Map Pockets
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Auxilary_12v_outlet"> Auxilary 12v outlet
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Cloth_Interior"> Cloth Interior
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heated_Seats"> Heated Seats
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Leather_Interior"> Leather Interior
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Lift_out_roof"> Lift out roof
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Memory_Seats"> Memory Seats
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Air_and_Heat"> Rear Air and Heat
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Seat_Audio_Controls"> Rear Seat Audio Controls
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Split_folding_Rear_Seats"> Split folding Rear Seats
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Steering_Wheel_Audio_Controls"> Steering Wheel Audio Controls
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Trip_Odometer"> Trip Odometer
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heads_up_display"> Heads up display
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Panoramic_Sunroof"> Panoramic Sunroof
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Wood_Trim_Interior"> Wood Trim Interior
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Storage_box"> Storage box
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Reclining_Seats"> Reclining Seats
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Adjustable_Pedals"> Adjustable Pedals
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Analog_Gauges"> Analog Gauges
					</span>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-12">
					<h6 class="ml-2">Exterior</h6>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heated mirrors"> Heated mirrors
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power mirrors"> Power mirrors
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Automatic headlights"> Automatic headlights
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Alloy_Wheels"> Alloy Wheels
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Fog_Lights"> Fog Lights
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Halogen_Headlamps"> Halogen Headlamps
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Antenna"> Power Antenna
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Premium/oversized_wheels"> Premium/oversized wheels
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Removable_Panels"> Removable Panels
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Two_toned_Paint"> Two toned Paint
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Leather_Wrap_Wheel"> Leather Wrap Wheel
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Luggage_Rack"> Luggage Rack
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Off_Road_Tires"> Off Road Tires
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Removable_Roof"> Removable Roof
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Step_Bumper"> Step Bumper
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Truck_Cap"> Truck Cap
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Flood_Lights"> Flood Lights
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heated_Exterior_Mirrors"> Heated Exterior Mirrors
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="On_Glass_Antenna"> On Glass Antenna
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Privacy_Glass"> Privacy Glass
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Aerodynamic_Spoiler"> Rear Aerodynamic Spoiler
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Mounted_Spare"> Rear Mounted Spare
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Removable_Roof_Panel"> Removable Roof Panel
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Roof_Rack"> Roof Rack
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Tinted_Windows"> Tinted Windows
					</span>
				</div>
				<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Xenon_Headlights"> Xenon Headlights
					</span>
				</div>
			</div>


			<div class="form-group row">
              <div class="col-12 text-center mt-3">
                <input type="submit" class="btn btn-primary">
              </div>
            </div> 
            

        </form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
	$('#make').on('change', function(){
		// console.log($(this).val());
		$.ajax({
				url: "<?=base_url()?>models/get/"
				,type: 'POST'
				,data: {make: $(this).val()}
				,success: function(result){
				// console.log(JSON.parse(result));
				var models = JSON.parse(result);
				$('#model').html('');
				var html = '<option>Select Model</option>';
				for(var i=0; i< models.length; i++)
				{
					// console.log(moe);
					html+='<option value="'+models[i].id+'">'+models[i].name+' </option>'
				}
				$('#model').html(html);
		}});
	});

	// $('#photos').on('change',function () {
	// 	var input= $(this);
	// 	if (input.files && input.files[0]) {
	// 		// var b=$(input).attr('id');
	// 		$('#display_photos').html('');
	// 		var html = '';
	// 		for(var i=0; i< input.files.length; i++) {
	// 			var reader = new FileReader();
	// 			reader.onload = function (e) {
	// 				// $('.'+b).attr('src', e.target.result);
	// 				html+='<div class="col-lg-4 col-12"><img src="'+e.target.result+'"/></div>'
	// 			};
	// 			reader.readAsDataURL(input.files[0]);
	//
	// 		}
	// 		$('#display_photos').html(html);
	//
	// 	}
	// }
</script>
