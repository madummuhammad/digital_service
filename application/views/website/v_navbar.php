      <!-- 
      =============================================
        Theme Main Menu
      ============================================== 
    -->
    <!-- <header class="theme-main-menu sticky-menu theme-menu-one white-vr dark-bg dark-dropdown"> -->
      <header class="theme-main-menu sticky-menu theme-menu-one">
        <div class="inner-content">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url('') ?>assets/images/logo/logo_ansol.png" alt="" width="127"></a></div>
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
                 <!--  <li class="nav-item dropdown <?php if ($this->uri->segment(1)=='pricing'): ?>
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
                  </li> -->
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