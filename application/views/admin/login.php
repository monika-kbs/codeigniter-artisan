<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo css('style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo css('custom.css') ?>">
</head>
<body>
<div class="container" style="padding-top: 231px;">
  <div class="row justify-content-md-center">
    <div class="col col-lg-3">
      
    </div>

    <div class="col col-lg-6">
    <?php if($error = $this->session->flashdata('invalid_credential')):?>
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong><?php echo $error; ?></strong>
    </div>
    <?php endif;?>
    <?php echo form_open('admin/login',array('name' => 'login','class' => 'form-horizontal')); ?>
      <fieldset>
        <legend>Login</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input class="form-control" id="inputEmail" placeholder="Email"  value="<?php echo set_value('email'); ?>" type="text" name="email">
            <?php echo form_error('email'); ?>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input class="form-control" id="inputPassword" placeholder="Password"  value="<?php echo set_value('password'); ?>" type="password" name="password"> 
            <?php echo form_error('password'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </fieldset>
    <?php echo form_close(); ?>
    </div>

    <div class="col col-lg-3">
      
    </div>
  </div>
</div>
</body>
</html>