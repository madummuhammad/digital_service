<?php $this->load->view('admin/website/v_header') ?>
<?php $this->load->view('admin/website/v_navbar') ?>
<div class="hero-banner-nine">
  <div class="hero_slider_three">
    <div class="item">
      <div class="bg-wrapper d-flex align-items-center justify-content-center" style="background-image:url(<?php echo base_url('') ?>assets/images/media/img_73.jpg);">
        <div class="container">
         <div class="row">
          <div class="col-xxl-8 col-xl-10 col-md-8 m-auto">
            <div class="text-wrapper text-center">
              <h1 class="hero-heading font-recoleta fs-90px">Kami membuat <br><span id="changing">Website</span> yang<br> Menjual.</h1>
              <p class="hero-sub-heading text-lg">Kami peduli dengan bisnis Anda. Kami akan siapkan Website yang "Communicate Clearly, Stand Out & Sell More" </p>
              <a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20Tanya%20info%20soal%20jasa%20Website/Toko%20Online/Apps/Landing%20Page." target="_blank" class="theme-btn-four ripple-btn">Yuk, diskusi dengan kami</a>
            </div> <!-- /.text-wrapper -->
          </div>
        </div>
      </div>
    </div> <!-- /.bg-wrapper -->
  </div>
</div> <!-- /.hero_slider_three -->
</div> <!-- /.hero-banner-nine -->

      <!-- 
      =============================================
        Vcamp Text Block One
      ============================================== 
    -->
    <div class="vcamp-text-block-one mt-300 xl-mt-200 md-mt-120">
      <div class="container">
        <div class="row">
          <div class="col-xxl-5 col-xl-6 col-lg-7 ms-auto">
            <div class="text-wrapper pt-0">
              <p class="meta-info-text text-lg pt-0 pb-0">Kami sudah membuat lebih dari</p>
              <div class="title-style-two mt-0">
                <h3 class="title"><?php echo $section2['satu'] ?> <span><button data-bs-toggle="modal" data-bs-target="#home1"><i class="fas fa-edit"></i></button></span> website keren & <?php echo $section2['dua'] ?> <span><button data-bs-toggle="modal" data-bs-target="#home2"><i class="fas fa-edit"></i></button></span> custom apps </h3>
              </div>
              <p class="meta-info-text text-lg pt-1 pb-1">Selama lebih dari 2 tahun terakhir ini. Klien happy, kami pun puas.</p>
              <a  class="theme-btn-one ripple-btn fst-italic">-Semoga Anda salah satunya</a>
            </div>
          </div>
        </div>
      </div>
      <div class="left-img-meta">
        <img src="<?php echo base_url('') ?>assets/images/media/img_04.jpg" alt="">
        <img src="<?php echo base_url('') ?>assets/images/shape/shape_04.svg" alt="" class="shapes shape-one">
      </div>
      <img src="<?php echo base_url('') ?>assets/images/shape/shape_05.svg" alt="" class="shapes shape-two">
    </div> <!-- /.vcamp-text-block-one -->
    <div class="modal fade" tabindex="-1" id="home1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="<?php echo admin_url('website') ?>" method="POST">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php echo method('_section2satu') ?>
              <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
              <input type="text" class="form-control" name="value" value="<?php echo $section2['satu'] ?>">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" tabindex="-1" id="home2">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="<?php echo admin_url('website') ?>" method="POST">
            <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
            <?php echo method('_section2dua') ?>
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control" name="value" value="<?php echo $section2['dua'] ?>">
            </div>
            <div class="modal-footer">
             <button type="submit" class="btn btn-outline-primary">Simpan</button>
           </div>
         </form>
       </div>
     </div>
   </div>

      <!-- 
      =============================================
        Vcamp Feature Section Nine
      ============================================== 
    -->
    <div class="vcamp-feature-section-nine pt-170 lg-pt-120" id="about">
      <div class="container">
        <div class="title-style-seven text-center pb-60 lg-pb-20">
          <p>Bukan cuma keren,</p>
          <h2 class="title">Website Anda juga akan dilengkapi dengan fitur penunjang bisnis digital. <span><a class="scrollto" data-target="#fitur-bisnis">Cek di sini.<img src="<?php echo base_url('') ?>assets/images/shape/shape_53.svg" alt=""></a></span></h2>
        </div> <!-- /.title-style-seven -->
      </div>
    </div> <!-- /.vcamp-feature-section-nine -->
      <!-- 
      =============================================
        Vcamp Feature Section One
      ============================================== 
    -->
    <div class="vcamp-feature-section-one box-layout mt-75">
      <div class="bg-wrapper">
        <img src="images/shape/shape_01.svg" alt="" class="shapes shape-one">
        <div class="container">
          <div class="row">
            <div class="col-xxl-4 col-lg-5 pe-5" data-aos="fade-right">
              <div class="title-style-one">
                <div class="upper-title">Apa yang kami kerjakan</div>
                <h2 class="title fs-2 text-justify">Integrated Web Agency untuk Bisnis.</h2>
              </div>
              <p class="meta-info-text text-lg fs-6 text-justify">Kami mendukung transformasi digital bisnis Anda dengan kreativitas dan teknologi inovatif. Stay Relevant, Grow Bigger.</p>
              <a href="<?php echo base_url('service/website_dan_toko_online') ?>" class="theme-btn-one ripple-btn">Pelajari Lebih Lanjut <img src="<?php echo base_url('') ?>assets/images/icon/icon_03.svg" alt=""></a>
            </div>

            <div class="col-lg-7 ms-auto" data-aos="fade-left">
              <div class="row ps-5">
                <div class="col-sm-6">
                  <div class="card-style-one">
                    <div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_04.svg" alt="" class="tran3s"></div>
                    <h4 class="title fs-5">Website Development</h4>
                    <p class="fs-6">Layanan desain, content hingga  development untuk website baru atau redesign/perbaikan website lama Anda</p>
                    <a href="<?php echo base_url('service/website_dan_toko_online') ?>" class="arrow-icon"><img src="<?php echo base_url('') ?>assets/images/icon/icon_08.svg" alt="" class="tran3s"></a>
                  </div> <!-- /.card-style-one -->
                </div>
                <div class="col-sm-6">
                  <div class="card-style-one">
                    <div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_05.svg" alt="" class="tran3s"></div>
                    <h4 class="title fs-5">Online Shop & Marketplace</h4>
                    <p class="fs-6">Datangkan lebih banyak customer online dengan fitur online shop yang lengkap dan terintegrasi.</p>
                    <a href="<?php echo base_url('service/website_dan_toko_online') ?>" class="arrow-icon"><img src="<?php echo base_url('') ?>assets/images/icon/icon_08.svg" alt="" class="tran3s"></a>
                  </div> <!-- /.card-style-one -->
                </div>
                <div class="col-sm-6">
                  <div class="card-style-one">
                    <div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_06.svg" alt="" class="tran3s"></div>
                    <h4 class="title fs-5">Custom Apps & Software</h4>
                    <p class="fs-6">Buat aplikasi mobile atau software fungsional dengan fitur custom sesuai kebutuhan bisnis dan customer  Anda. </p>
                    <a href="<?php echo base_url('service/apps') ?>" class="arrow-icon"><img src="<?php echo base_url('') ?>assets/images/icon/icon_08.svg" alt="" class="tran3s"></a>
                  </div> <!-- /.card-style-one -->
                </div>
                <div class="col-sm-6">
                  <div class="card-style-one">
                    <div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_07.svg" alt="" class="tran3s"></div>
                    <h4 class="title fs-5">Landing Page Creation</h4>
                    <p class="fs-6">Tingkatkan konversi prospek Anda dengan Landing page yang impresif dan "lebih menjual"</p>
                    <a href="<?php echo base_url('service/landing_page') ?>" class="arrow-icon"><img src="<?php echo base_url('') ?>assets/images/icon/icon_08.svg" alt="" class="tran3s"></a>
                  </div> <!-- /.card-style-one -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.bg-wrapper -->
    </div> <!-- /.vcamp-feature-section-one -->


      <!--=====================================================
        Counter Section One
        =====================================================-->
        <div class="counter-section-one mt-170 md-mt-120">
          <div class="inner-container">
            <div class="row">
              <button data-bs-toggle="modal" data-bs-target="#counter"><i class="fas fa-edit"></i></button>
              <div class="col-lg-4 col-sm-6" data-aos="fade-up">
                <div class="counter-block-one text-center mb-45">
                  <div class="main-count font-recoleta"><span class="counter"><?php echo $counter['satu'] ?></span></div>
                  <p class="theme-mb-0">Website & Toko Online</p>
                </div> <!-- /.counter-block-one -->
              </div>
              <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="counter-block-one text-center mb-45">
                  <div class="main-count font-recoleta"><span class="counter"><?php echo $counter['dua'] ?></span></div>
                  <p class="theme-mb-0">Custom Apps & Software</p>
                </div> <!-- /.counter-block-one -->
              </div>
              <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="counter-block-one text-center mb-45">
                  <div class="main-count font-recoleta"><span class="counter"><?php echo $counter['tiga'] ?></span></div>
                  <p class="theme-mb-0">Klien yang puas</p>
                </div> <!-- /.counter-block-one -->
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" tabindex="-1" id="counter">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <form action="<?php echo admin_url('website') ?>" method="POST">
                <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                <?php echo method('_counter') ?>
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <label for="">Website & Toko Online</label>
                      <input type="text" class="form-control" name="value1" value="<?php echo $counter['satu'] ?>">
                    </div>
                    <div class="col">
                      <label for="">Custom Apps & Software</label>
                      <input type="text" class="form-control" name="value2" value="<?php echo $counter['dua'] ?>">
                    </div>
                    <div class="col">
                      <label for="">Klien yang puas</label>
                      <input type="text" class="form-control" name="value3" value="<?php echo $counter['tiga'] ?>">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <!--=====================================================
        Vcamp Feature Section Eight
        =====================================================-->
        <div class="vcamp-feature-section-eight mt-200 lg-mt-120 bg-dark py-4">
          <div class="container">
            <div class="row">
              <div class="col-xxl-11 m-auto">
                <div class="row align-items-center mb-80 lg-mb-20">
                  <div class="col-lg-5 col-md-6">
                    <div class="title-style-four">
                      <h2 class="title text-white">Apa Keunggulan Website yang kami buat ?</h2>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-6 ms-auto">
                    <p class="text-lg theme-mb-0 sm-mt-20 text-white">Kami berikan lebih dari sekedar website. Sebuah kredibilitas online dan mesin uang digital Anda.</p>
                  </div>
                </div>

                <div class="row pb-4">
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_55.svg" alt=""></div>
                      <h4>Desain Custom & Profesional</h4>
                      <p>Desain akan dibuat menarik sesuai keinginan Anda. Kami terbuka dengan benchmark desain sesuai website tertentu. Kami juga memiliki beberapa referensi sebagai inspirasi.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_56.svg" alt=""></div>
                      <h4>Mobile Friendly</h4>
                      <p>Lebih dari 75% orang saat ini menggunakan smartphone untuk mengakses website. Sehingga  website yang kami buat akan disesuaikan dengan tampilan perangkat smartphone dengan content dan desain yang responsive.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
                      <h4>SEO Friendly</h4>
                      <p>Kami akan meriset kata kunci yang tepat sesuai produk/jasa Anda melalui Google Trends & Keyword Planner. Sehingga Website Anda mudah ditemukan di Google.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_58.svg" alt=""></div>
                      <h4>Optimasi GT Metrix</h4>
                      <p>Kami mengoptimasi  berbagai variable dalam GT Metrix agar website Anda memiliki kecepatan yang tinggi ketika diakses.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_59.svg" alt=""></div>
                      <h4>Website Stabil & Aman</h4>
                      <p>Free maintenance. Uptime website hingga 99%, didukung SSL, anti virus, anti spam dan anti brute-force.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_60.svg" alt=""></div>
                      <h4>Garansi Layanan & Update</h4>
                      <p>Garansi Proyek Selesai sesuai brief. Free Perbaikan Bug. <span class="fw-bold">Gratis 1 kali upgrade fitur minor pada website.</span></p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_59.svg" alt=""></div>
                      <h4>Email Profesional</h4>
                      <p>Kami akan memberikan email bisnis dengan domain Anda sendiri untuk meningkatkan kredibilitas Anda. Jumlahnya sesuai permintaan.</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_60.svg" alt=""></div>
                      <h4>Admin Dashboard- CMS</h4>
                      <p>Jika mau, Anda bisa mengelola konten sendiri setelah website selesai. Kami akan memberikan training khusus untuk me-managenya.</span></p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="card-style-eight bg-white h-100 pb-0 pt-4">
                      <div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_60.svg" alt=""></div>
                      <h4>Full Support 24/7</h4>
                      <p>Kami akan segera merespon Anda jika terdapat bug atau kendala atau kebutuhan update/upgrade content/ fitur website Anda.</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.vcamp-feature-section-eight -->

        <!--=====================================================
        Vcamp Text Block Four
        =====================================================-->
        <div class="vcamp-text-block-four mt-200 lg-mt-120">
          <div class="row g-0">
            <div class="col-lg-6 ms-auto px-5">
              <div class="accordion accordion-style-one md-mt-30" id="accordionOne">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Google Analytics
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
                    <div class="accordion-body">
                      <p>Anda bisa cek jumlah pengunjung, waktu ramai pengunjung,  konten website yang paling diminati hingga perilaku pengunjung ketika berselancar di website Anda. Data tersebut tentunya sangat insightful untuk bisnis Anda.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Google My Business
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOne">
                    <div class="accordion-body">
                      <p>Bisnis Anda akan muncul di Google Maps ketika calon customer melakukan pencarian di Google. Anda bisa update alamat, profil, jam operasional, produk/jasa, hingga promosi terbaru. </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Google Ads Management
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOne">
                    <div class="accordion-body">
                      <p>Kami bantu Anda untuk datangkan customer ke website dengan setting dan kelola iklan Google Ads selama 1 bulan pertama</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      Google Search Console
                    </button>
                  </div>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionOne">
                    <div class="accordion-body">
                      <p>Kontrol performa website di pencarian Google,  keyword terpopuler, trafik website organik, kinerja website di perangkat mobile, dan masih banyak lainnya.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Promo Digital Marketing
                    </button>
                  </div>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionOne">
                    <div class="accordion-body">
                      <p>Diskon khusus dari rekanan kami  untuk jasa SEO, jasa Google Ads, jasa Email marketing, jasa Sosial media management dan jasa Artikel Website. Pelajari Lebih Lanjut</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex right-side" id="fitur-bisnis">
              <div class="content-wrapper w-100 h-100 position-relative">
                <div class="text-wrapper position-relative me-auto pb-1" data-aos="fade-left">
                  <h2 class="title">Fitur Bisnis Untuk Website Anda. GRATIS</h2>
                  <p>Kami akan bantu settingkan layanan tambahan untuk membuat website Anda lebih siap "Menjual". </p>
                  <a class="more-button ripple-btn"><i class="bi bi-chevron-right"></i></a>
                </div> <!-- /.text-wrapper -->
              </div> <!-- /.content-wrapper -->
            </div> <!-- /.right-side -->
          </div>
        </div> <!-- /.vcamp-text-block-four -->

        <!--=====================================================
        Partner Section Two
        =====================================================-->
        <div class="partner-section-two pt-180 lg-pt-50 lg-mb-100">
          <img src="images/shape/shape_13.svg" alt="" class="shapes shape-one">
          <div class="container">
            <div class="row d-flex justify-content-between">
              <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                <div class="title-style-one text-start">
                  <h2 class="title">Berikut beberapa <span>klien</span> kami:</h2>
                </div>
              </div>
              <div class="col-lg-6 col-md-8 col-sm-10 m-auto d-flex justify-content-lg-end">
                <a href="<?php echo base_url('portofolio') ?>" class="theme-btn-four ripple-btn">Lihat Portofolio Kami</a>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-11 m-auto">
                <div class="feedback_slider_seven">
                  <?php for ($i=0; $i < $jml_klien; $i++) { 
                    ?>
                    <div class="item">
                      <div class="partent-logos">
                        <div class="row g-0">
                         <?php foreach ($klien as $row => $value): ?>
                          <?php if ($row+1 <=8*($i+1) AND $row+1>(8*($i+1))-8 ): ?>
                          <div class="col-md-3 col-6">
                            <div class="d-flex mb-4">
                              <button class="mx-1" data-bs-toggle="modal" data-bs-target="#klien<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></button>
                              <button class="mx-1" data-bs-toggle="modal" data-bs-target="#kliendelete<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
                            </div>
                            <div class="logo d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/logo/<?php echo $value['logo'] ?>" alt="" class="tran3s"></div>
                          </div>
                        <?php endif ?>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <button class="mx-1" data-bs-toggle="modal" data-bs-target="#klientambah"><i class="fas fa-plus"></i></button>
        </div>
      </div>
    </div> <!-- /.partner-section-two -->

    <?php foreach ($klien as $row => $value): ?>
      <div class="modal fade" tabindex="-1" id="klien<?php echo $value['id'] ?>">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="<?php echo admin_url('website/klien') ?>" method="POST" enctype="multipart/form-data">
              <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
              <?php echo method('_patch') ?>
              <?php echo get_id($value['id']) ?>
              <div class="modal-header">
                <h5 class="modal-title">Edit Klien</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <img class="img-fuid" src="<?php echo base_url('') ?>assets/images/logo/<?php echo $value['logo'] ?>" alt="" data-toggle="gambar" style="width: 10rem;">
                    <input type="file" name="gambar" class="form-control">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <form action="<?php echo admin_url('website/klien') ?>" method="POST">
        <div class="modal fade" id="kliendelete<?php echo $value['id'] ?>">
          <div class="modal-dialog modal-dialog-centered">
            <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
            <?php echo method('_get') ?>
            <?php echo get_id($value['id']) ?>
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Hapus</h4>
                <a type="button" class="close" data-bs-dismiss="modal">&times;</a>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    <?php endforeach ?>
    <div class="modal fade" tabindex="-1" id="klientambah">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="<?php echo admin_url('website/klien') ?>" method="POST" enctype="multipart/form-data">
            <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
            <?php echo method('_post') ?>
            <div class="modal-header">
              <h5 class="modal-title">Tambah Klien</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <img data-toggle="gambar" class="img-fluid w-25 mb-4" src="<?php echo base_url('') ?>assets/images/logo/default.png" alt="">
                  <input type="file" class="form-control" name="gambar">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="box-layout">
      <div class="case-study-four border-top">
        <div class="mixitUp-container">
          <div class="mix">
            <div class="case-block-four position-relative" style="background: #DFF2E9;">
              <div class="container">
                <div class="row">
                  <div class="col-xl-6 col-md-8">
                    <div class="text-wrapper" data-aos="fade-right">
                      <div class="icon d-flex align-items-center justify-content-center mb-20">
                        <img src="<?php echo base_url('') ?>assets/images/icon/icon_50.svg" alt="">
                      </div>
                      <blockquote>
                        “Tim Ansol cukup detail dan mampu memahami kebutuhan digital bisnis kami. Mulai dari desain sampai copywriting, hasilnya memuaskan.”
                      </blockquote>
                      <div class="d-flex align-items-center info-meta">
                        <img src="<?php echo base_url('') ?>assets/images/media/img_02.jpg" alt="" class="avatar">
                        <div class="name">Rudi. <span>Asricon</span></div>
                        <a href="portfolio-detailsV1.html" class="more"><i class="bi bi-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img src="<?php echo base_url('') ?>assets/images/media/img_50.png" alt="" class="screen screen-right" data-aos="fade-left">
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- =============================================
        Vcamp Feature Section Three
        ============================================== -->
        <div class="vcamp-feature-section-three mt-200 lg-mt-150 md-mt-120">
          <div class="container">
            <div class="row align-items-center mb-75 lg-mb-50 md-mb-20">
              <div class="col-xl-6 col-lg-5" data-aos="fade-right">
                <div class="title-style-one">
                  <h2 class="title">Setelah Website selesai,  <span>lalu apa ?</span></h2>
                </div>
              </div>
              <div class="col-lg-5 ms-auto" data-aos="fade-left">
                <p class="meta-info-text text-lg ps-xxl-5 md-pt-20">Kami bekerja sama dengan agency Digital Marketing dengan keahlian di bidangnya masing-masing, untuk membantu menjadikan Website Anda lebih <span class="text-decoration-underline">menjual dan profitable.</span></p>
                <a href="<?php echo base_url('service/promo_digital_marketing') ?>" class="theme-btn-one ripple-btn mt-30">Boleh Juga <img src="<?php echo base_url('') ?>assets/images/icon/icon_03.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>

      <!-- 
      =============================================
        Theme Hero Banner
      ============================================== 
    -->
    <div class="hero-banner-ten">
      <div class="d-flex align-items-center justify-content-center h-100">
        <div class="container">
          <div class="row justify-content-between align-items-center">
           <div class="col-xxl-6 col-xl-7 col-lg-6">
            <h1 class="hero-heading font-recoleta fs-70px">Gratis 3 Template Landing Page Exclusive</h1>
            <p class="hero-sub-heading pe-xl-5">Yang bisa dipakai untuk keperluan iklan atau informasi bisnismu. Bisa kami bantu install ke domain dan hosting supaya online.</p>
          </div>
          <div class="col-xl-5 col-lg-6">
            <div class="form-style-four md-mt-40">
              <h3>Plus Voucher Diskon Pembuatan Website senilai Rp 100.000</h3>
              <form action="inc/contact.php" id="contact-form"  data-toggle="validator">
                <div class="messages"></div>
                <div class="row controls">
                  <div class="col-12">
                    <div class="input-group-meta form-group mb-15">
                      <label>Masukkan Email Anda </label>
                      <input type="email" placeholder="febrinanda@gmail.com" name="email" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-12"><button class="theme-btn-one ripple-btn fs-8 px-0 mt-10">Download Landing Page & Voucher Diskon</button></div>
                </div>
              </form>
            </div> <!-- /.form-style-four -->
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.hero-banner-ten -->

        <!--
      =====================================================
        Vcamp Text Block Five
      =====================================================
    -->
    <div class="vcamp-text-block-five mt-170 lg-mt-120">
      <div class="container">
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 ms-auto d-block-mobile d-none-pc mb-40">
            <div class="text-wrapper">
              <div class="title-style-five">
                <h2 class="title">Mengapa memilih kami?</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 ms-auto px-5 px-mobile-3">
            <div class="text-wrapper">
              <h4 class="fw-bold">Kami spesialis. Hanya Fokus pada Website & Apps</h4>
              <p class="meta-info-text-two py-1">Kami membatasi jumlah klien yang kami terima setiap tahun untuk memastikan setiap klien memiliki customer experience yang baik. Kami siap merespon dengan cepat kebutuhan Anda.</p>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 ms-auto d-none-mobile">
            <div class="text-wrapper">
              <div class="title-style-five">
                <h2 class="title">Mengapa memilih kami?</h2>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- /.vcamp-text-block-five -->

    <!--
      =====================================================
        FAQ Section Three
      =====================================================
    -->
    <div class="faq-section-three mt-120">
      <div class="container">
        <div class="title-style-nine text-center pb-80 lg-pb-50">
          <h2 class="title">Pertanyaan Umum</h2>
        </div>

        <div class="row">
          <div class="col-xxl-10 col-xl-11 m-auto">
            <form action="#" class="faq-search-filter mb-70">
              <input type="text" placeholder="Search here..">
              <button class="tran3s"><i class="bi bi-search"></i></button>
            </form>
            <div class="accordion accordion-style-four" id="accordionThree">
              <div class="row">
                <div class="col-lg-6">
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                      <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#qacollapse1">
                        Apa beda website yang dibuat Ansol ?
                      </button>
                    </div>
                    <div id="qacollapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Website Anda full custom sesuai profil bisnis Anda. Kami juga melengkapi website Anda dengan banyak fitur bisnis, agar website Anda bisa lebih "menjual".</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse2" >
                        Saya sangat awam dengan dunia IT. Bagaimana nanti saya bisa mengoperasikan website ?
                      </button>
                    </div>
                    <div id="qacollapse2" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Kami akan memberikan training online bagaimana menggunakan website dan mengupdate konten secara mandiri. Semuanya dibuat mudah.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse3" >
                        Berapa lama proses pembuatan Website ?
                      </button>
                    </div>
                    <div id="qacollapse3" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Durasi pembuatan website tergantung banyaknya halaman, fitur dan layout website Anda. Paling cepat 3 hari, web Anda sudah live.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse4" >
                        Bagaimana metode pembayaran website di Ansol ?
                      </button>
                    </div>
                    <div id="qacollapse4" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Kami menerima pembayaran via bank transfer di muka 50% sebagai tanda jadi, dan sisanya setelah serah terima website.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse5" >
                        Bagaimana jika tidak memperpanjang biaya tahunan ?
                      </button>
                    </div>
                    <div id="qacollapse5" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Biaya tahunan digunakan untuk membayar hosting, domain dan maintenance. Jika Anda tidak ingin melanjutkan layanan kami, maka kami akan memberikan akses domain dan hosting Anda.</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- /.col- -->
                <div class="col-lg-6">
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse6">
                        Bagaimana memilih desain website yang cocok ?
                      </button>
                    </div>
                    <div id="qacollapse6" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Kami akan memberikan beberapa preview desain web setelah mendapatkan briefing terkait kebutuhan Anda. Anda bisa memilih salah satu yang paling cocok dengan selera Anda.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse7">
                        Apakah ada garansi website sesuai briefing ?
                      </button>
                    </div>
                    <div id="qacollapse7" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Kami berikan garansi 100% uang kembali jika website Anda tidak sesuai kesepakatan. Batasnya 3 hari setelah website selesai.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse8">
                        Apakah saya sewaktu-waktu bisa mengubah konten dan fitur website ?
                      </button>
                    </div>
                    <div id="qacollapse8" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Bisa. Setelah website live, Anda bisa mengubah konten dan fitur maksimal 3 halaman/bulan. Selama tidak merubah layout.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingEight">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse9">
                        Berapa jumlah halaman, foto dan video maksimal ?
                      </button>
                    </div>
                    <div id="qacollapse9" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Bebas. Kami bisa membuat custom sesuai dengan kebutuhan Anda. </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingEight">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#qacollapse10">
                        Bagaimana menggunakan fitur bisnis dari Ansol ?
                      </button>
                    </div>
                    <div id="qacollapse10" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                      <div class="accordion-body">
                        <p>Fitur bisnis seperti Google Analytics, Google My Business, Google Search Console akan kami bantu dan kami pandu untuk mengoperasikannya melalui training online.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- /.accordion-style-four -->
          </div>
        </div>
      </div>
    </div> <!-- /.faq-section-three -->

      <!--=====================================================
        Footer
        =====================================================-->
        <div class="vcamp-footer-one box-layout">
          <div class="bg-wrapper">
            <div class="container">
              <div class="row">
                <div class="col-xxl-11 m-auto">
                  <div class="subscribe-area">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <div class="title-style-three sm-pb-20">
                          <h4 class="title">Punya ide project ?</h4>
                        </div>
                        <div class="w-50">
                          <img src="<?php echo base_url('') ?>assets/images/assets/ils_03.svg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p>Atau ada pertanyaan yang buat penasaran?</p>
                        <a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20Tanya%20info%20soal%20jasa%20Website/Toko%20Online/Apps/Landing%20Page." target="_blank" class="theme-btn-four ripple-btn">Yuk Diskusi</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- /.bg-wrapper -->
        </div> <!-- /.vcamp-footer-one -->
        <?php $this->load->view('admin/website/v_footer') ?>
        <script>
          $(document).ready(function(){
            const Toast = Swal.mixin({
              toast: true,
              position: 'top',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'success',
              title: 'asdfasdf',
            })
          })
        </script>