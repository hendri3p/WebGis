<div class="container">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

       <!-- Check Logged In-->
       <?php if($this->session->userdata('logged_in')): ?>
        <?php redirect('home'); ?>
      <?php endif; ?>


            <div class="card o-hidden border-0 shadow-lg my-5" style="padding: 50px;" >
                <div class="card-body p-0" >
                    <!-- Nested Row within Card Body -->
                    <div class="row"> 
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4" style="size:80px;">Login Admin!</h1>
                                </div>
                                <?php if ($this->session->flashdata('wrong_password')): ?>
                                    <?php echo '<br><p class= "alert alert-danger">'.$this->session->flashdata('wrong_password').'</p><br>'; ?>
                                <?php endif; ?>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input style="width: 100%" type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input style="width: 100%; text-align: center"  type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>