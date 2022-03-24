<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>



            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Models</li>
            </ol>
 

            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
					<?php
					$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
					$make = array_pop($uriSegments); ?>
                    <i class="fa fa-table"></i> Models <a href="<?=base_url()?>models/add/<?=$make?>">
						<button class="btn btn-primary">+</button></a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
<!--                                    <th>Username</th>-->
<!--                                    <th>Admin Group</th>-->
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
<!--                                    <th>Username</th>-->
<!--                                    <th>Admin Group</th>-->
                                    <th>Action</th> 
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($models as $v) { ?>
                                <tr>
                                    <td><?=$v["id"]?></td>
                                    <td><?=$v["name"]?></td>
<!--                                    <td>--><?//=$v["username"]?><!--</td>-->
<!--                                    <td>--><?//=$v["role"]?><!--</td>-->
                                    <td><form method="POST" action="" style="display:inline;"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?=$v["id"]?>"><input type="submit" class="btn btn-primary" value="Delete"></form> <a href="<?=base_url()?>models/edit/<?=$v["id"]?>"><button class="btn btn-primary">Edit</button></a> </td>
                                </tr>
                            <?php } ?> 
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
