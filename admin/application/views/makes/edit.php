<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url()?>makes">Makes</a></li>
                <li class="breadcrumb-item active">Edit Make</li>
            </ol>

        <form method="POST" action="<?= base_url()?>makes">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?=$result->id?>">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Name</label>
              <div class="col-10">
                <input class="form-control" type="text" value="<?=$result->name?>" placeholder="" name="name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-10">
                <input type="submit" class="btn btn-primary">
              </div>
            </div> 
            

        </form>
