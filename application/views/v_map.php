<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEB GIS</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

  <link href="<?= base_url()?>assets/css/BootSideMenu.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/leaflet/leaflet.css" rel="stylesheet">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/');?>img/354px-LOGO_KABUPATEN_TULANG_BAWANG.png">
<!-- CSS here -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/style.css">

<style type="text/css">
/* script menghilangkan Horizontal Scroll */
html, body {
        max-width: 100%;
        overflow-x: hidden;
        }

  .user{
    padding:5px;
    margin-bottom: 5px;
  }
  #mapid { height: 480px; }

  
</style>
</head>
<body>

 <!-- header-start -->
 <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-5">
                                
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        <li><a class="active" href="<?= base_url('c_home/index')?>">Beranda</a></li>
                                            <li><a href="<?= base_url('c_about/index')?>">Info</a></li>
                                            <li><a href="<?= base_url('c_kontak/index')?>">Kontak</a></li>
                                            <li><a href="<?= base_url('Auth/index')?>"> Admin</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i>0726 21213</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

  <!--Normale contenuto di pagina-->
  <div class="container">
    

    <div class="row">
    	<div class="col-md-12">
		  <h1>WEB GIS</h1>
		  <div id="mapid"></div>
		</div>
      </div>
	</div>

    

  </div>
  <!--Normale contenuto di pagina-->

  <div id="map"></div>

  <div id="mymodal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Confirm</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/js/BootSideMenu.js"></script>
  <script src="<?= base_url()?>assets/leaflet/leaflet.js"></script>

  <script type="text/javascript">
    // $('#test').BootSideMenu({side:"left", autoClose:false});
    var map = L.map('mapid').setView([-4.4948981, 105.2181757], 13);
    var base_url = "<?=base_url()?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var myFeatureGroup = L.featureGroup().addTo(map).on("click", groupClick);
var bangunanMarker;

$.getJSON(base_url+"c_map/bangunan_json", function(data){
    $.each(data, function(i, field){

      var v_lat = parseFloat(data[i].bangunan_lat);
      var v_long = parseFloat(data[i].bangunan_long);
      var icon_bangunan = L.icon({
        iconUrl : base_url+"assets/img/congress.png",
        iconSize : [30, 30]
      });

      bangunanMarker = L.marker([v_long, v_lat], {icon : icon_bangunan})
              .addTo(myFeatureGroup)
              .bindPopup(data[i].bangunan_nama + "<br>" + data[i].bangunan_lat);

      bangunanMarker.id = data[i].bangunan_nama;

     bangunanMarker = L.marker([v_long, v_lat], {icon : icon_bangunan}).addTo(map)
              .bindPopup(data[i].bangunan_nama)
              .openPopup();
    });
  });

    function groupClick(event){
      // console.log("Clicked on Marker " + event.layer.id);
      var option = {
        "backdrop" : "static",
        "show" : true
      } 
    }
     
  </script>

  <!-- footer start -->
    <footer class="footer">
        <div class="footer_logo" style="padding : 20px;position: relative ; left: 45%;">
            <a href="#">
                <img src="<?php echo base_url('assets/');?>img/354px-LOGO_KABUPATEN_TULANG_BAWANG.png" alt="" style="width: 80px; height: 120px; display: block; margin: 0 auto; text-align: center";>
            </a>
        </div>
                   
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="http://tulangbawangkab.go.id" target="_blank">Kabupaten Tulang Bawang</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
</body>
</html>