<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<style>
	.fa-star.featured{
		color: gold;
	}
</style>


            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Vehicles</li>
            </ol>
 

            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Vehicles <a href="<?=base_url()?>vehicles/add">
						<button class="btn btn-primary">+</button></a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($vehicles as $v) { ?>
                                <tr>
                                    <td><?=$v["id"]?></td>
                                    <td><?=$v["name"]?></td>
                                    <td>
										<i class="fa fa-star mr-2 <?php if ($v['featured']) echo 'featured'?>" id="feature-v-<?=$v['id']?>" onclick="featureVehicle(<?=$v['id']?>)"></i>
										<a href="<?=base_url()?>vehicles/edit/<?=$v["id"]?>"><button class="btn btn-primary">Edit</button></a>
										<form method="POST" action="" style="display:inline;"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?=$v["id"]?>"><input type="submit" class="btn btn-primary" value="Delete"></form>
									</td>
                                </tr>
                            <?php } ?> 
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
	function featureVehicle(id){
		var status = $('#feature-v-'+id).hasClass('featured');
		if(status)
			status = 1;
		else status = 0;
		// console.log(id);
		$.ajax({
			url: '<?=base_url()?>vehicles/featureVehicle',
			type: 'POST',
			dataType: 'JSON',
			data: {id: id,status: status},
			success: function (data) {
				console.log(data);
				$('#feature-v-'+id).toggleClass('featured');
			}
		})
	}
</script>
