<div class="container" style="padding: 100px"><br><br>

<!--  Profile sebelum diperbarui
<div class="jumbotron m-auto py-4" style="text-align: center; width: 30%; border-radius: 30px;">
  <h1 class="display-2"><i class="fa fa-user"></i></h1>
  <hr class="my-1">
  <br>
  <p class="lead">Username :&emsp;&emsp; <?php echo $user['username']; ?></p>
  <p class="lead">Role &emsp;&emsp;&emsp;:&emsp;&emsp; <?php echo $user['role']; ?></p>
   

   <hr class="my-4">
  <p>Password: <?php echo $user['password']; ?></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Reveal Password</a>
  </p>


</div>
<br><br> -->

<div class="card_profile">
  <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="foto_profile" style="width:100%">
  <br><br>
  <h3><?php echo $user['nama']; ?></h3>
  <?php if ($user['role'] == 'admin'): ?>
    <p class="title_profile">Role: <?php echo $user['role']; ?></p>
  <?php endif; ?>
  
  <?php if ($user['role'] == 'admin'): ?>
    <p>Teknisi Lab Elband</p>  
  <?php else: ?>
    <p>Pengguna Aplikasi</p>
  <?php endif; ?>
  
  <!-- <a href="#" class="profile"><i class="fa fa-dribbble"></i></a>
  <a href="#" class="profile"><i class="fa fa-twitter"></i></a>
  <a href="#" class="profile"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="profile"><i class="fa fa-facebook"></i></a>
  <p><button class="profile">Contact</button></p> -->
  
  <br>
</div>
</div>


