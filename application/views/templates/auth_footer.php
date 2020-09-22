 <!-- footer start -->
 <footer class="footer">
     <div class="footer_logo" style="padding : 20px; position: relative ; left: 45%;">
         <a href="#">
             <img src="<?php echo base_url('assets/'); ?>img/354px-LOGO_KABUPATEN_TULANG_BAWANG.png" alt="" style="width: 80px; height: 120px; display: block; margin: 0 auto; text-align: center" ;>
         </a>
     </div>

     <div class="copy-right_text">
         <div class="container">
             <div class="footer_border"></div>
             <div class="row">
                 <div class="col-xl-12">
                     <p class="copy_right text-center">
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                         Copyright &copy;<script>
                             document.write(new Date().getFullYear());
                         </script> All rights reserved | Developed by <a href="http://tulangbawangkab.go.id" target="_blank">Kabupaten Tulang Bawang</a>
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--/ footer end  -->

 <!-- JS here -->
 <script>
     var modal = document.getElementById("myModal");
     var btn = document.getElementById("myBtn");

     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName("close")[0];

     // When the user clicks on the button, open the modal
     btn.onclick = function() {
         modal.style.display = "block";
     }

     // When the user clicks on <span> (x), close the modal
     span.onclick = function() {
         modal.style.display = "none";
     }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
         if (event.target == modal) {
             modal.style.display = "none";
         }
     }
 </script>
 <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/isotope.pkgd.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/ajax-form.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/waypoints.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/imagesloaded.pkgd.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/scrollIt.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/nice-select.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.slicknav.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/gijgo.min.js"></script>

 <!--contact js-->
 <script src="<?php echo base_url('assets/'); ?>js/contact.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.form.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/jquery.validate.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/mail-script.js"></script>

 <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
 <script>
     $('#datepicker').datepicker({
         iconsLibrary: 'fontawesome',
         icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
     });
     $('#datepicker2').datepicker({
         iconsLibrary: 'fontawesome',
         icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

     });
 </script>

 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
 </body>

 </html>