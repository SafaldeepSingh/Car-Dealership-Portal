<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$make = array_pop($uriSegments); ?>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url()?>models/make/<?=$make?>">Models</a></li>
                <li class="breadcrumb-item active">Add Model</li>
            </ol>

        <form method="POST" action="<?=base_url()?>models/make/<?= $make?>">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="make_id" value="<?=$make?>">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Name</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-10">
                <input type="submit" class="btn btn-primary">
              </div>
            </div> 
            

        </form>
