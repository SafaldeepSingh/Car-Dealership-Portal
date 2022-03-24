<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
	.remove-photo{
		color: black;
		font-weight: bold;
		cursor: pointer;
		background: rgba(255,255,255,0.5);
		position: absolute;
		top: 5px;
		right: 20px;
		line-height: 0.8;
		padding: 6px;
	}
	.vehicle-btns{
		position: absolute;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		text-align: center;
	}
	.thumbnail__button:hover {
		color: darkblue;
		background: white;
	}
	.thumbnail__button{
		opacity: 0;
		font-weight: bold;
		background: darkblue;
		color: white;
		box-shadow: none;
		border: none;
		border-radius: 8px;
		padding: 8px;
		cursor: pointer;
	}
	.delete__button:hover {
		color: darkred;
		background: white;
	}
	.delete__button{
		margin-top: 8px;
		opacity: 0;
		font-weight: bold;
		background: darkred;
		color: white;
		box-shadow: none;
		border: none;
		border-radius: 8px;
		padding: 8px;
		cursor: pointer;
	}
	.vehicle-photo:hover .thumbnail__button,
	.vehicle-photo:hover .delete__button{
		opacity: 1;
	}
	.vehicle-photo:hover img{
		filter: blur(5px);
	}
</style>
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="<?=base_url()?>vehicles">Vehicles</a></li>
	<li class="breadcrumb-item active">Edit Vehicle</li>
</ol>

<form method="POST" enctype="multipart/form-data" action="<?=base_url()?>vehicles">
	<input type="hidden" name="action" value="edit">
	<input type="hidden" name="id" value="<?=$result['id']?>">
	<div class="form-group row">
		<div class="col-12">
			<h4>Basic Details</h4>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-6">
			<label for="name">Name <span style="color: red">*</span></label>
			<input class="form-control" id="name" type="text" value="<?=$result['name']?>"  name="name" required>
		</div>
		<div class="col-6">
			<label for="description">Description</label>
			<textarea class="form-control" rows="4" id="description" type="text"  name="description"><?=$result['description']?></textarea>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-3">
			<label for="make">Make <span style="color: red">*</span></label>
			<select class="form-control" name="make" id="make" required>
				<option>Select Make *</option>
				<?php
				foreach ($makes as $make){
					if($result['make_id'] == $make['id'])
						echo '<option value="'.$make['id'].'" selected>'.$make['name'].'</option>';
					else
						echo '<option value="'.$make['id'].'">'.$make['name'].'</option>';

				}
				?>
			</select>
		</div>
		<div class="col-3">
			<label for="model">Model <span style="color: red">*</span></label>
			<select class="form-control" name="model" id="model" required>
				<option>Select Model *</option>
				<?php
				foreach ($models as $model){
					if($result['model_id'] == $model['id'])
						echo '<option value="'.$model['id'].'" selected>'.$model['name'].'</option>';
					else
						echo '<option value="'.$model['id'].'">'.$model['name'].'</option>';

				}
				?>
			</select>
		</div>
		<div class="col-3">
			<label for="price">Price <span style="color: red">*</span></label>
			<input class="form-control" id="price" type="number" value="<?=$result['price']?>"  name="price" required>
		</div>
		<div class="col-3">
			<label for="kilometers">Kilometers <span style="color: red">*</span></label>
			<input class="form-control" id="kilometers" type="number" value="<?=$result['kilometers']?>" name="kilometers" required>
		</div>
		<div class="col-3 mt-3">
			<label for="year">Year <span style="color: red">*</span></label>
			<input class="form-control" id="year" type="number" value="<?=$result['year']?>" name="year" required>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12">
			<h4>Pictures <span style="color: red">*</span></h4>
			<input type="file" class="form-control"  accept="image/*" name="photos[]" id="photos" multiple>
		</div>
	</div>
	<div class="form-group row" id="display_photos">
		<?php foreach ($photos as $photo){?>
			<div class="col-3 mb-3 " id="display_photo_<?=$photo['id']?>">
				<div class="vehicle-photo position-relative">
<!--					<span class="remove-photo" onclick="removeVehiclePhoto(--><?//=$photo['id']?>
<!--					)">-->
<!--					X</span>-->
					<img class="img-fluid" src="<?= base_url().$photo['path']?>" alt="">
					<div class="vehicle-btns">
					<button type="button" class="thumbnail__button" onclick="setThumbnail(<?=$photo['id']?>,<?=$result['id']?>)" >Set as Thumbnail</button>
					<button type="button" class="delete__button" onclick="removeVehiclePhoto(<?=$photo['id']?>)" >Delete</button>
					</div>
				</div>
			</div>
		<?php }?>
	</div>

	<div class="form-group row">
		<div class="col-12">
			<h4>Specifications</h4>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-3">
			<label for="drive_train">Drive Train <span style="color: red">*</span></label>
			<select class="form-control" id="drive_train"   name="drive_train" required>
				<option >Select Drive Train</option>
				<option value="All Wheel Drive"
				<?php if ($result['drive_train'] == "All Wheel Drive") echo 'selected'?>
				>All Wheel Drive (AWD)</option>
				<option value="Front Wheel Drive"
						<?php if ($result['drive_train'] == "Front Wheel Drive") echo 'selected'?>
				>Front Wheel Drive (FWD)</option>
				<option value="Rear Wheel Drive"
				<?php if ($result['drive_train'] == "Rear Wheel Drive") echo 'selected'?>
				>Rear Wheel Drive (RWD)</option>
				<option value="4 Wheel Drive"
				<?php if ($result['drive_train'] == "4 Wheel Drive") echo 'selected'?>
				>4 Wheel Drive (4WD)</option>
			</select>
		</div>
		<div class="col-10 col-lg-3">
			<label for="transmission">Transmission <span style="color: red">*</span></label>
			<select class="form-control" id="transmission"  name="transmission" required>
				<option >Select Transmission</option>
				<option value="automatic"
						<?php if ($result['transmission'] == "automatic") echo 'selected'?>
				>Automatic</option>
				<option value="semi-automatic"
						<?php if ($result['transmission'] == "semi-automatic") echo 'selected'?>
				>Semi Automatic</option>
				<option value="manual"
						<?php if ($result['transmission'] == "manual") echo 'selected'?>
				>Manual</option>
			</select>
		</div>
		<div class="col-10 col-lg-3">
			<label for="category">Category <span style="color: red">*</span></label>
			<select class="form-control" id="category"   name="category" required>
				<option >Select Category *</option>
				<option value="cars"
						<?php if ($result['category'] == "cars") echo 'selected'?>
				>Cars</option>
				<option value="convertible"
						<?php if ($result['category'] == "convertible") echo 'selected'?>
				>Convertible</option>
				<option value="suv"
						<?php if ($result['category'] == "suv") echo 'selected'?>
				>SUV</option>
				<option value="mini_van"
						<?php if ($result['category'] == "mini_van") echo 'selected'?>
				>Mini-Van</option>
				<option value="commercial_car"
						<?php if ($result['category'] == "commercial_car") echo 'selected'?>
				>Commercial Car</option>
				<option value="truck"
						<?php if ($result['category'] == "truck") echo 'selected'?>
				>Truck</option>
			</select>
		</div>
		<div class="col-10 col-lg-3">
			<label for="trim_level">Trim Level</label>
			<input type="text" class="form-control" name="trim_level"
				  value="<?=$result['trim_level']?>" >
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-3">
			<label for="engine">Engine</label>
			<input class="form-control" type="text"
				   value="<?=$result['engine']?>" name="engine" id="engine" >
		</div>
		<div class="col-10 col-lg-3">
			<label for="cyclinders">Cyclinders</label>
			<input class="form-control" value="<?=$result['cyclinders']?>" type="text" name="cyclinder" >
		</div>
		<div class="col-10 col-lg-3">
			<label for="exterior_color">Exterior Color <span style="color: red">*</span></label>
			<input class="form-control" value="<?=$result['exterior_color']?>" type="text" name="exterior_color" required>
		</div>
		<div class="col-10 col-lg-3">
			<label for="interior_color">Interior Color <span style="color: red">*</span></label>
			<input class="form-control" type="text"
				    value="<?=$result['interior_color']?>" name="interior_color" required>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-3">
			<label for="doors">Doors <span style="color: red">*</span></label>
			<input class="form-control" type="text" class="form-control"
				   value="<?=$result['doors']?>" name="doors" required>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12">
			<h4>Technical Specifications</h4>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-3">
			<label for="kilometers">Fuel <span style="color: red">*</span></label>
<!--			<input type="text" class="form-control"-->
<!--				   value="--><?//=$result['fuel']?><!--" name="fuel" >-->
			<select name="fuel" id="fuel" class="form-control" required>
				<option>Select Fuel</option>
				<option value="gas" <?php if($result['fuel']=='gas') echo 'selected'?>>Gas</option>
				<option value="hybrid" <?php if($result['fuel']=='hybrid') echo 'selected'?>>Hybrid</option>
				<option value="diesel" <?php if($result['fuel']=='diesel') echo 'selected'?>>Diesel</option>
			</select>
		</div>
		<div class="col-10 col-lg-3">
			<label for="trunk_space">Trunk Space(in litres)</label>
			<input type="text" class="form-control"
				   value="<?=$result['trunk_space']?>" name="trunk_space" >
		</div>
		<div class="col-10 col-lg-3">
			<label >Fuel Efficiency(City)</label>
			<input type="text" class="form-control"
				   value="<?=$result['fuel_efficiency_city']?>" name="fuel_efficiency_city" >
		</div>
		<div class="col-10 col-lg-3">
			<label >Fuel Efficiency(Highway)</label>
			<input type="text" class="form-control"
				   value="<?=$result['fuel_efficiency_highway']?>" name="fuel_efficiency_highway" >
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-3">
			<label >Horse Power</label>
			<input type="text" class="form-control"
				   value="<?=$result['horse_power']?>" name="horse_power" >
		</div>
		<div class="col-10 col-lg-3">
			<label >Length(in mm)</label>
			<input type="number" class="form-control"
				   value="<?=$result['length']?>" name="length" >
		</div>
		<div class="col-10 col-lg-3">
			<label >Width(in mm)</label>
			<input type="number" class="form-control"
					value="<?=$result['width']?>" name="width" >
		</div>
		<div class="col-10 col-lg-3">
			<label >Height(in mm)</label>
			<input type="number" class="form-control"
				   value="<?=$result['height']?>" name="height" >
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
						<input type="checkbox" name="Cruise Control"
								<?php if(array_search('Cruise_Control',$options) !== false) echo 'checked' ?>
						> Cruise Control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="CD Player"
						<?php if(array_search('CD_Player',$options) !== false) echo 'checked' ?>
						> CD Player
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="MP3 Player"
						<?php if(array_search('MP3_Player',$options) !== false) echo 'checked' ?>
						> MP3 Player
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power Doors"
						<?php if(array_search('Power_Doors',$options) !== false) echo 'checked' ?>
						> Power Doors
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Satellite Radio"
						<?php if(array_search('Satellite_Radio',$options) !== false) echo 'checked' ?>
						> Satellite Radio
					</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Onboard computer"
						<?php if(array_search('Onboard_computer',$options) !== false) echo 'checked' ?>
						> Onboard computer
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Backup camera"
						<?php if(array_search('Backup_camera',$options) !== false) echo 'checked' ?>
						> Backup camera
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="AM / FM radio"
						<?php if(array_search('AM_/_FM_radio',$options) !== false) echo 'checked' ?>
						> AM / FM radio
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Auto_on/off_Headlamps"
						<?php if(array_search('Auto_on/off_Headlamps',$options) !== false) echo 'checked' ?>
						> Auto on/off Headlamps
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Backup_Sensor"
						<?php if(array_search('Backup_Sensor',$options) !== false) echo 'checked' ?>
						> Backup Sensor
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bluetooth"
						<?php if(array_search('Bluetooth',$options) !== false) echo 'checked' ?>
						> Bluetooth
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Audio_Voice_Control"
						<?php if(array_search('Audio_Voice_Control',$options) !== false) echo 'checked' ?>
						> Audio Voice Control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Auto-Dimming_R/V_Mirror"
						<?php if(array_search('Auto-Dimming_R/V_Mirror',$options) !== false) echo 'checked' ?>
						> Auto-Dimming R/V Mirror
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bose_Sound_System"
						<?php if(array_search('Bose_Sound_System',$options) !== false) echo 'checked' ?>
						> Bose Sound System
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Climate_Control"
						<?php if(array_search('Climate_Control',$options) !== false) echo 'checked' ?>
						> Climate Control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Color_TV"
						<?php if(array_search('Color_TV',$options) !== false) echo 'checked' ?>
						> Color TV
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Adaptive_Cruise_Control"
						<?php if(array_search('Adaptive_Cruise_Control',$options) !== false) echo 'checked' ?>
						> Adaptive Cruise Control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Dual_Climate_Control"
						<?php if(array_search('Dual_Climate_Control',$options) !== false) echo 'checked' ?>
						> Dual Climate Control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Electronic_Compass"
						<?php if(array_search('Electronic_Compass',$options) !== false) echo 'checked' ?>
						> Electronic Compass
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="JBL_Sound_System"
						<?php if(array_search('JBL_Sound_System',$options) !== false) echo 'checked' ?>
						> JBL Sound System
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Navigation_System"
						<?php if(array_search('Navigation_System',$options) !== false) echo 'checked' ?>
						> Navigation System
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Seat"
						<?php if(array_search('Power_Seat',$options) !== false) echo 'checked' ?>
						> Power Seat
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Sunroof"
						<?php if(array_search('Power_Sunroof',$options) !== false) echo 'checked' ?>
						> Power Sunroof
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Remote_Fuel_Cover_Release"
						<?php if(array_search('Remote_Fuel_Cover_Release',$options) !== false) echo 'checked' ?>
						> Remote Fuel Cover Release
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Reverse_Park_Assist"
						<?php if(array_search('Reverse_Park_Assist',$options) !== false) echo 'checked' ?>
						> Reverse Park Assist
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Keyless_Entry"
						<?php if(array_search('Keyless_Entry',$options) !== false) echo 'checked' ?>
						> Keyless Entry
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Mirrors"
						<?php if(array_search('Power_Mirrors',$options) !== false) echo 'checked' ?>
						> Power Mirrors
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Sliding_Doors"
						<?php if(array_search('Power_Sliding_Doors',$options) !== false) echo 'checked' ?>
						> Power Sliding Doors
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Windows"
						<?php if(array_search('Power_Windows',$options) !== false) echo 'checked' ?>
						> Power Windows
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rain_Sensor_Wipers"
						<?php if(array_search('Rain_Sensor_Wipers',$options) !== false) echo 'checked' ?>
						> Rain Sensor Wipers
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Defroster"
						<?php if(array_search('Rear_Defroster',$options) !== false) echo 'checked' ?>
						> Rear Defroster
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Remote_Start"
						<?php if(array_search('Remote_Start',$options) !== false) echo 'checked' ?>
						> Remote Start
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Hill_Ascent_Control"
						<?php if(array_search('Hill_Ascent_Control',$options) !== false) echo 'checked' ?>
						> Hill Ascent Control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Hydraulic_lift"
						<?php if(array_search('Hydraulic_lift',$options) !== false) echo 'checked' ?>
						> Hydraulic lift
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Intermittent_Wipers"
						<?php if(array_search('Intermittent_Wipers',$options) !== false) echo 'checked' ?>
						> Intermittent Wipers
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Lane_Departure_Warning"
						<?php if(array_search('Lane_Departure_Warning',$options) !== false) echo 'checked' ?>
						> Lane Departure Warning
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Adjustable_Seat"
						<?php if(array_search('Power_Adjustable_Seat',$options) !== false) echo 'checked' ?>
						> Power Adjustable Seat
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_lift_Gates"
						<?php if(array_search('Power_lift_Gates',$options) !== false) echo 'checked' ?>
						> Power lift Gates
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Rear_Sunshade"
						<?php if(array_search('Power_Rear_Sunshade',$options) !== false) echo 'checked' ?>
						> Power Rear Sunshade
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Steering"
						<?php if(array_search('Power_Steering',$options) !== false) echo 'checked' ?>
						> Power Steering
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_view_Camera"
						<?php if(array_search('Rear_view_Camera',$options) !== false) echo 'checked' ?>
						> Rear view Camera
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Remote_Trunk_Release"
						<?php if(array_search('Remote_Trunk_Release',$options) !== false) echo 'checked' ?>
						> Remote Trunk Release
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Trip_Computer"
						<?php if(array_search('Trip_Computer',$options) !== false) echo 'checked' ?>
						> Trip Computer
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Tachometer"
						<?php if(array_search('Tachometer',$options) !== false) echo 'checked' ?>
						> Tachometer
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
						<input type="checkbox" name="Vehicle stability control"
						<?php if(array_search('Vehicle_stability_control',$options) !== false) echo 'checked' ?>
						> Vehicle stability control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Child locks"
						<?php if(array_search('Child_locks',$options) !== false) echo 'checked' ?>
						> Child locks
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Alarm System"
						<?php if(array_search('Alarm_System',$options) !== false) echo 'checked' ?>
						> Alarm System
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Keyless entry"
						<?php if(array_search('Keyless_entry',$options) !== false) echo 'checked' ?>
						> Keyless entry
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Anti-theft system"
						<?php if(array_search('Anti-theft_system',$options) !== false) echo 'checked' ?>
						> Anti-theft system
					</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power brakes"
						<?php if(array_search('Power_brakes',$options) !== false) echo 'checked' ?>
						> Power brakes
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Traction Control"
						<?php if(array_search('Traction_Control',$options) !== false) echo 'checked' ?>
						> Traction control
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Collison_Avoidance_System"
						<?php if(array_search('Collison_Avoidance_System',$options) !== false) echo 'checked' ?>
						> Collison Avoidance System
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Driver_Side_Airbag"
						<?php if(array_search('Driver_Side_Airbag',$options) !== false) echo 'checked' ?>
						> Driver Side Airbag
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="ABS"
						<?php if(array_search('ABS',$options) !== false) echo 'checked' ?>
						> ABS
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Dual_Airbag"
						<?php if(array_search('Dual_Airbag',$options) !== false) echo 'checked' ?>
						> Dual Airbag
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Passenger_Airbag"
						<?php if(array_search('Passenger_Airbag',$options) !== false) echo 'checked' ?>
						> Passenger_Airbag
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Stability_Control"
						<?php if(array_search('Stability_Control',$options) !== false) echo 'checked' ?>
						> Stability_Control
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
						<input type="checkbox" name="Intermittent wipers"
						<?php if(array_search('Intermittent_wipers',$options) !== false) echo 'checked' ?>
						> Intermittent wipers
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power seats"
						<?php if(array_search('Power_seats',$options) !== false) echo 'checked' ?>
						> Power seats
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Electric windows"
						<?php if(array_search('Electric_windows',$options) !== false) echo 'checked' ?>
						> Electric windows
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Air conditioning"
						<?php if(array_search('Air_conditioning',$options) !== false) echo 'checked' ?>
						> Air conditioning
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bucket seats"
						<?php if(array_search('Bucket_seats',$options) !== false) echo 'checked' ?>
						> Bucket seats
					</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Illuminated driver's side vanity mirror"
						<?php if(array_search('Illuminated_driver\'s_side_vanity_mirror',$options) !== false) echo 'checked' ?>
						> Illuminated driver's side vanity mirror
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Digital_Clock"
						<?php if(array_search('Digital_Clock',$options) !== false) echo 'checked' ?>
						> Digital Clock
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Cup_Holder"
						<?php if(array_search('Cup_Holder',$options) !== false) echo 'checked' ?>
						> Cup Holder
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Bench_Seating"
						<?php if(array_search('Bench_Seating',$options) !== false) echo 'checked' ?>
						> Bench Seating
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Door_Map_Pockets"
						<?php if(array_search('Door_Map_Pockets',$options) !== false) echo 'checked' ?>
						> Door Map Pockets
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Auxilary_12v_outlet"
						<?php if(array_search('Auxilary_12v_outlet',$options) !== false) echo 'checked' ?>
						> Auxilary 12v outlet
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Cloth_Interior"
						<?php if(array_search('Cloth_Interior',$options) !== false) echo 'checked' ?>
						> Cloth Interior
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heated_Seats"
						<?php if(array_search('Heated_Seats',$options) !== false) echo 'checked' ?>
						> Heated Seats
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Leather_Interior"
						<?php if(array_search('Leather_Interior',$options) !== false) echo 'checked' ?>
						> Leather Interior
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Lift_out_roof"
						<?php if(array_search('Lift_out_roof',$options) !== false) echo 'checked' ?>
						> Lift out roof
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Memory_Seats"
						<?php if(array_search('Memory_Seats',$options) !== false) echo 'checked' ?>
						> Memory Seats
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Air_and_Heat"
						<?php if(array_search('Rear_Air_and_Heat',$options) !== false) echo 'checked' ?>
						> Rear Air and Heat
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Seat_Audio_Controls"
						<?php if(array_search('Rear_Seat_Audio_Controls',$options) !== false) echo 'checked' ?>
						> Rear Seat Audio Controls
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Split_folding_Rear_Seats"
						<?php if(array_search('Split_folding_Rear_Seats',$options) !== false) echo 'checked' ?>
						> Split folding Rear Seats
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Steering_Wheel_Audio_Controls"
						<?php if(array_search('Steering_Wheel_Audio_Controls',$options) !== false) echo 'checked' ?>
						> Steering Wheel Audio Controls
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Trip_Odometer"
						<?php if(array_search('Trip_Odometer',$options) !== false) echo 'checked' ?>
						> Trip Odometer
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heads_up_display"
						<?php if(array_search('Heads_up_display',$options) !== false) echo 'checked' ?>
						> Heads up display
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Panoramic_Sunroof"
						<?php if(array_search('Panoramic_Sunroof',$options) !== false) echo 'checked' ?>
						> Panoramic Sunroof
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Wood_Trim_Interior"
						<?php if(array_search('Wood_Trim_Interior',$options) !== false) echo 'checked' ?>
						> Wood Trim Interior
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Storage_box"
						<?php if(array_search('Storage_box',$options) !== false) echo 'checked' ?>
						> Storage box
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Reclining_Seats"
						<?php if(array_search('Reclining_Seats',$options) !== false) echo 'checked' ?>
						> Reclining Seats
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Adjustable_Pedals"
						<?php if(array_search('Adjustable_Pedals',$options) !== false) echo 'checked' ?>
						> Adjustable Pedals
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Analog_Gauges"
						<?php if(array_search('Analog_Gauges',$options) !== false) echo 'checked' ?>
						> Analog Gauges
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
						<input type="checkbox" name="Heated mirrors"
						<?php if(array_search('Heated_mirrors',$options) !== false) echo 'checked' ?>
						> Heated mirrors
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power mirrors"
						<?php if(array_search('Power_mirrors',$options) !== false) echo 'checked' ?>
						> Power mirrors
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Automatic headlights"
						<?php if(array_search('Automatic_headlights',$options) !== false) echo 'checked' ?>
						> Automatic headlights
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Alloy_Wheels"
						<?php if(array_search('Alloy_Wheels',$options) !== false) echo 'checked' ?>
						> Alloy Wheels
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Fog_Lights"
						<?php if(array_search('Fog_Lights',$options) !== false) echo 'checked' ?>
						> Fog Lights
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Halogen_Headlamps"
						<?php if(array_search('Halogen_Headlamps',$options) !== false) echo 'checked' ?>
						> Halogen Headlamps
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Power_Antenna"
						<?php if(array_search('Power_Antenna',$options) !== false) echo 'checked' ?>
						> Power Antenna
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Premium/oversized_wheels"
						<?php if(array_search('Premium/oversized_wheels',$options) !== false) echo 'checked' ?>
						> Premium/oversized wheels
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Removable_Panels"
						<?php if(array_search('Removable_Panels',$options) !== false) echo 'checked' ?>
						> Removable Panels
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Two_toned_Paint"
						<?php if(array_search('Two_toned_Paint',$options) !== false) echo 'checked' ?>
						> Two toned Paint
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Leather_Wrap_Wheel"
						<?php if(array_search('Leather_Wrap_Wheel',$options) !== false) echo 'checked' ?>
						> Leather Wrap Wheel
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Luggage_Rack"
						<?php if(array_search('Luggage_Rack',$options) !== false) echo 'checked' ?>
						> Luggage Rack
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Off_Road_Tires"
						<?php if(array_search('Off_Road_Tires',$options) !== false) echo 'checked' ?>
						> Off Road Tires
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Removable_Roof"
						<?php if(array_search('Removable_Roof',$options) !== false) echo 'checked' ?>
						> Removable Roof
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Step_Bumper"
						<?php if(array_search('Step_Bumper',$options) !== false) echo 'checked' ?>
						> Step Bumper
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Truck_Cap"
						<?php if(array_search('Truck_Cap',$options) !== false) echo 'checked' ?>
						> Truck Cap
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Flood_Lights"
						<?php if(array_search('Flood_Lights',$options) !== false) echo 'checked' ?>
						> Flood Lights
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Heated_Exterior_Mirrors"
						<?php if(array_search('Heated_Exterior_Mirrors',$options) !== false) echo 'checked' ?>
						> Heated Exterior Mirrors
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="On_Glass_Antenna"
						<?php if(array_search('On_Glass_Antenna',$options) !== false) echo 'checked' ?>
						> On Glass Antenna
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Privacy_Glass"
						<?php if(array_search('Privacy_Glass',$options) !== false) echo 'checked' ?>
						> Privacy Glass
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Aerodynamic_Spoiler"
						<?php if(array_search('Rear_Aerodynamic_Spoiler',$options) !== false) echo 'checked' ?>
						> Rear Aerodynamic Spoiler
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Rear_Mounted_Spare"
						<?php if(array_search('Rear_Mounted_Spare',$options) !== false) echo 'checked' ?>
						> Rear Mounted Spare
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Removable_Roof_Panel"
						<?php if(array_search('Removable_Roof_Panel',$options) !== false) echo 'checked' ?>
						> Removable Roof Panel
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Roof_Rack"
						<?php if(array_search('Roof_Rack',$options) !== false) echo 'checked' ?>
						> Roof Rack
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Tinted_Windows"
						<?php if(array_search('Tinted_Windows',$options) !== false) echo 'checked' ?>
						> Tinted Windows
					</span>
		</div>
		<div class="col-10 col-lg-2 mx-3">
					<span>
						<input type="checkbox" name="Xenon_Headlights"
						<?php if(array_search('Xenon_Headlights',$options) !== false) echo 'checked' ?>
						> Xenon_Headlights
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
	// $(document).ready(function () {
	// });

</script>
