      <!-- 
      =============================================
        Sidebar Nav
      ============================================== 
    -->
    <div class="offcanvas offcanvas-end sidebar-nav" tabindex="-1" id="offcanvasRight">
      <div class="offcanvas-header">
        <div class="logo"><a href="index.html"><img src="<?php echo base_url('') ?>assets/images/logo/vCamp_01.png" alt="" width="127"></a></div>
        <button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
      </div>

      <div class="sidebar-nav-item">
        <ul class="style-none">
          <li class="nav-item">
            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Home</a>
            <ul class="dropdown-menu">
              <li><a href="index.html" class="dropdown-item"><span>Creative Agency</span></a></li>
              <li><a href="index-2.html" class="dropdown-item"><span>Business</span></a></li>
              <li><a href="index-3.html" class="dropdown-item"><span>Agency Minimal</span></a></li>
              <li><a href="index-4.html" class="dropdown-item"><span>Service Provider</span></a></li>
              <li><a href="index-5.html" class="dropdown-item"><span>Startup</span></a></li>
              <li><a href="index-6.html" class="dropdown-item"><span>Design Studio Light</span></a></li>
              <li><a href="index-7.html" class="dropdown-item"><span>Design Studio Dark</span></a></li>
              <li><a href="index-8.html" class="dropdown-item"><span>Shop Standard</span></a></li>
              <li><a href="index-9.html" class="dropdown-item"><span>Shop Creative</span></a></li>
              <li><a href="index-10.html" class="dropdown-item"><span>Startup Agency</span></a></li>
              <li><a href="index-11.html" class="dropdown-item"><span>Consulting Agency</span></a></li>
              <li><a href="index-12.html" class="dropdown-item"><span>Photographer Portfolio</span></a></li>
              <li><a href="index-13.html" class="dropdown-item"><span>Designer Portfolio</span></a></li>
              <li><a href="index-14.html" class="dropdown-item"><span>Marketing Agency</span></a></li>
              <li><a href="index-15.html" class="dropdown-item"><span>Design Agency Portfolio</span></a></li>
              <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Portfolio</a>
            <ul class="dropdown-menu">
              <li><a href="portfolioV1.html" class="dropdown-item"><span>Portfolio Classic</span></a></li>
              <li><a href="portfolioV7.html" class="dropdown-item"><span>Portfolio Modern</span></a></li>
              <li><a href="portfolioV24.html" class="dropdown-item"><span>Portfolio carousel</span></a></li>
              <li><a href="portfolioV15.html" class="dropdown-item"><span>Portfolio Video Lightbox</span></a></li>
              <li><a href="portfolio-detailsV1.html" class="dropdown-item"><span>Single Portfolio 01</span></a></li>
              <li><a href="portfolio-detailsV2.html" class="dropdown-item"><span>Single Portfolio 02</span></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Pages</a>
            <ul class="dropdown-menu">
              <li><a href="about-usV1.html" class="dropdown-item"><span>About Minimal</span></a></li>
              <li><a href="teamV1.html" class="dropdown-item"><span>Team Standard</span></a></li>
              <li><a href="pricingV2.html" class="dropdown-item"><span>Pricing Standard: Dark</span></a></li>
              <li><a href="serviceV1.html" class="dropdown-item"><span>Service Minimal</span></a></li>
              <li><a href="testimonialV1.html" class="dropdown-item"><span>Testimonial Classic</span></a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="blogV1.html">News</a></li>
          <li class="nav-item"><a href="contactV1.html">Contact us</a></li>
        </ul>
      </div>
      <div><a href="sign-in.html" class="theme-btn-one ripple-btn d-block"><img src="<?php echo base_url('') ?>assets/images/icon/icon_22.svg" alt="" class="me-2 ms-0"> login</a></div>

      <ul class="d-flex social-icon style-none mt-20">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      </ul>
    </div> <!-- /.sidebar-nav -->


      <!-- 
      =============================================
        Theme Main Menu
      ============================================== 
    -->
    <!-- <header class="theme-main-menu sticky-menu theme-menu-one white-vr dark-bg dark-dropdown"> -->
      <header class="theme-main-menu sticky-menu theme-menu-one">
        <div class="inner-content">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo"><a href="index.html"><img src="<?php echo base_url('') ?>assets/images/logo/vCamp_01.png" alt="" width="127"></a></div>
            <nav class="navbar navbar-expand-lg">
              <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
              </button>
              <div class="collapse navbar-collapse dark-style" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="d-block d-lg-none"><div class="logo"><a href="index.html"><img src="images/logo/vCamp_01.png" alt="" width="127"></a></div></li>
                  <li class="nav-item <?php if ($this->uri->segment(1)==''): ?>
                    <?php echo 'active' ?>
                  <?php endif ?>">
                    <a class="nav-link" href="<?php echo base_url('') ?>">Home</a>
                  </li>
                  <li class="nav-item <?php if ($this->uri->segment(1)=='tentang_kami'): ?>
                    <?php echo 'active' ?>
                  <?php endif ?>">
                    <a class="nav-link" href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a>
                  </li>
                  <li class="nav-item <?php if ($this->uri->segment(1)=='service'): ?>
                    <?php echo 'active' ?>
                  <?php endif ?> dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Layanan</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('service/website_dan_toko_online') ?>" class="dropdown-item <?php if ($this->uri->segment(1)=='service' AND $this->uri->segment(2)=='website_dan_toko_online'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Website & Toko Online</span></a></li>
                      <li><a href="<?php echo base_url('service/apps') ?>" class="dropdown-item <?php if ($this->uri->segment(1)=='service' AND $this->uri->segment(2)=='apps'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Apps</span></a></li>
                      <li><a href="<?php echo base_url('service/landing_page') ?>" class="dropdown-item <?php if ($this->uri->segment(1)=='service' AND $this->uri->segment(2)=='landing_page'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Landing Page</span></a></li>
                      <li><a href="<?php echo base_url('service/promo_digital_marketing') ?>" class="dropdown-item <?php if ($this->uri->segment(1)=='service' AND $this->uri->segment(2)=='promo_digital_marketing'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Promo Digital Marketing</span></a></li>
                    </ul>
                  </li>
                  <li class="nav-item <?php if ($this->uri->segment(1)=='portofolio'): ?>
                    <?php echo 'active' ?>
                  <?php endif ?>">
                    <a class="nav-link" href="<?php echo base_url('portofolio') ?>">Portofolio</a>
                  </li>
                  <li class="nav-item dropdown <?php if ($this->uri->segment(1)=='pricing'): ?>
                    <?php echo 'active' ?>
                  <?php endif ?>">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Paket & Harga</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('pricing/website_dan_toko_online') ?>" class="dropdown-item <?php if ($this->uri->segment(1)=='pricing' AND $this->uri->segment(2)=='website_dan_toko_online'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Website & Toko Online</span></a></li>
                      <li><a href="<?php echo base_url() ?>pricing/apps" class="dropdown-item <?php if ($this->uri->segment(1)=='pricing' AND $this->uri->segment(2)=='apps'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Custom Apps</span></a></li>
                      <li><a href="<?php echo base_url() ?>pricing/landing_page" class="dropdown-item <?php if ($this->uri->segment(1)=='pricing' AND $this->uri->segment(2)=='landing_page'): ?>
                        <?php echo 'active' ?>
                      <?php endif ?>"><span>Landing Page</span></a></li>
                    </ul>
                  </li>
                  <li class="nav-item <?php if ($this->uri->segment(1)=='kontak_kami'): ?>
                    <?php echo 'active' ?>
                  <?php endif ?>">
                    <a class="nav-link" href="<?php echo base_url('kontak_kami') ?>">Kontak Kami</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div> <!-- /.inner-content -->
      </header> <!-- /.theme-main-menu -->