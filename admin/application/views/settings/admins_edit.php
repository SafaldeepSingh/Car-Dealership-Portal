<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item"><a href="<?=base_url()?>settings/admins">Admins</a></li>
                <li class="breadcrumb-item active">Edit Admin</li>
            </ol>

        <form method="POST" action="">
            <input type="hidden" name="action" value="edit">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Username</label>
              <div class="col-10">
                <input class="form-control" type="text" readonly value="<?=$result->username?>" placeholder="" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Password (leave blank to keep)</label>
              <div class="col-10">
                <input class="form-control" type="password" value="" placeholder="" name="password">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Password Verify (leave blank to keep)</label>
              <div class="col-10">
                <input class="form-control" type="password" value="" placeholder="" name="password2">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Email</label>
              <div class="col-10">
                <input class="form-control" type="email" value="<?=$result->email?>" placeholder="" name="email">
              </div>
            </div>
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
