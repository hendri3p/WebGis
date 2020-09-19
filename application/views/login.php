<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BTP - login</title>


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_login.css">
  </head>

  <body>
      <!-- Check Logged In-->
      <?php if($this->session->userdata('logged_in')): ?>
        <?php redirect('home'); ?>
      <?php endif; ?>
    
    <!-- Sign-In Form -->
    <?php echo form_open('login', 'class="form-signin"'); ?>
      <div class="text-center mb-4 ">

        <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
        <?php endif; ?>

        <img class="mb-4" src="<?php echo base_url(); ?>assets/img/logo.png" alt="" width="84">
        <h1 class="h3 mb-3 font-weight-normal" style="cursor: default;">Laboratorium Elektronika Bandara</h1>
        </div>
      
      <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p style="color : red;">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>  

      <div class="form-label-group">
        <input type="username" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputEmail">Username</label>
      </div>
      
      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      
      <!-- Checkbox gadipake gangerti session
      <div class="checkbox mb-3">
        <label>
          <input name="checkbox" type="checkbox" value="1"> Remember me
        </label>
      </div>
      -->
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Ditjen Perhubungan Udara</p>
    <?php echo form_close(); ?>
  </body>
</html>
