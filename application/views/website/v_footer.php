        <div class="vcamp-footer-three dark-bg">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="logo text-center"><a href="index.html"><img src="<?php echo base_url('') ?>assets/images/logo/logo_ansol_light.png" alt="" style="width:127px"></a></div>
              <ul class="style-none footer-nav d-flex flex-wrap justify-content-center md-pt-20 md-pb-30">
                <li><a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Ketentuan Layanan</a></li>
                <li><a href="<?php echo base_url('kontak_kami') ?>">Kontak Kami</a></li>
              </ul>
              <ul class="d-flex justify-content-center social-icon style-none">
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>


        <button class="scroll-top">
          <i class="bi bi-arrow-up-short"></i>
        </button>

        <a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20Tanya%20info%20soal%20jasa%20Website/Toko%20Online/Apps/Landing%20Page." target="_blank" class="whatsapp">
          <i class="bi bi-whatsapp"></i>
        </a>




        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="<?php echo base_url('') ?>assets/vendor/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AOS js -->
        <script src="<?php echo base_url('') ?>assets/vendor/aos-next/dist/aos.js"></script>
        <!-- Slick Slider -->
        <script src="<?php echo base_url('') ?>assets/vendor/slick/slick.min.js"></script>
        <!-- js Counter -->
        <script src="<?php echo base_url('') ?>assets/vendor/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/vendor/jquery.waypoints.min.js"></script>
        <!-- Fancybox -->
        <script src="<?php echo base_url('') ?>assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
        <!-- validator js -->
        <script src="<?php echo base_url('') ?>assets/vendor/mixitup-3/mixitup.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/vendor/validator.js"></script>

        <!-- Telephone Select -->
        <script src="<?php echo base_url('') ?>assets/vendor/intl-tel/build/js/intlTelInput.min.js"></script>
        <!-- Select js -->
        <script src="<?php echo base_url('') ?>assets/vendor/selectize.js/selectize.min.js"></script>

        <script src="<?php echo base_url('') ?>assets/admin/js/script.js"></script>

        <!-- Theme js -->
        <script src="<?php echo base_url('') ?>assets/js/theme.js"></script>
        <script src="<?php echo base_url('') ?>assets/js/custom.js"></script>
        <script>
          $(".email").on('click',function(){
            var email=$('.form-email').val();
            var csrf=$("input[name=csrf_test_name]").val();
            var method='_post';
            $.ajax({
              url: "<?php echo base_url() ?>",
              type:'POST',
              data:{
                email:email,
                _post:method,
                csrf_test_name:csrf
              },
              success: function(e){
                setTimeout(function (){
                  $(".form-email-group").append('<p class="fs-7 text-success text-center">Terimakasih, kami akan segera kirimkan template Landing Page dan Voucher via Email</p>');
                }, 100);
                // setTimeout(function (){
                //   window.location.href="<?php echo base_url() ?>";
                // }, 500);
              }
            });
          })

          $("#send-message").on('click',function(){
            var email=$('#message .kontak-email').val();
            var nama=$('#message .nama').val();
            var layanan=$('#message .layanan').val();
            var pesan=$('#message .pesan').val();
            var csrf=$("input[name=csrf_test_name]").val();
            var method='_post';
            $.ajax({
              url: "<?php echo base_url('kontak_kami') ?>",
              type:'POST',
              data:{
                nama:nama,
                layanan:layanan,
                pesan:pesan,
                email:email,
                _post:method,
                csrf_test_name:csrf
              },
              success: function(e){
                setTimeout(function (){
                  $("#message .alert-message").append(`
                    <div class="alert alert-success fw-bold" role="alert">
                    Pesan anda telah terkirim
                    </div>`);
                }, 100);
                // setTimeout(function (){
                //   window.location.href="<?php echo base_url() ?>";
                // }, 500);
              }
            });
          })
        </script>
      </div> <!-- /.main-page-wrapper -->
    </body>
    </html>