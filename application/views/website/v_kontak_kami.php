						<?php $this->load->view('website/v_header') ?>
						<?php $this->load->view('website/v_navbar') ?>
			<!-- 
			=============================================
				Inside Page Banner
			============================================== 
		-->
		<div class="inside-hero-two" style="background-image: url(<?php echo base_url('') ?>assets/images/media/img_63.jpg);">
			<div class="container">
				<h2 class="page-title">Kontak Kami</h2>
				<p>Kami dengan senang hati merespon request, pertanyaan dan saran/kritik dari Anda</p>
			</div>
			<img src="<?php echo base_url('') ?>assets/images/shape/shape_24.svg" alt="" class="shapes shape-one">
		</div> <!-- /.inside-hero-two -->



			<!-- 
			=============================================
				Contact Section Six
			============================================== 
		-->
		<div class="contact-section-six mt-160 mb-60 lg-mt-120">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="form-style-three ps-0 sm-pb-80">
							<form action="">
								<div class="messages"></div>
								<div class="row controls">
									<div class="col-12">
										<div class="input-group-meta form-group mb-25">
											<label>Nama</label>
											<input type="text" placeholder="Masukan Nama Anda" name="name" required="required" data-error="Name is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-12">
										<div class="input-group-meta form-group mb-25">
											<label>Email</label>
											<input type="email" placeholder="Masukan Alamat Email Anda" name="email" required="required" data-error="Valid email is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-12">
										<div class="input-group-meta form-group mb-40">
											<label>Pilih Layanan*</label>
											<select class="theme-select-menu" placeholder="Pilih layanan...." name="category" required="required">
												<option value="">Pilih layanan....</option>
												<option value="Digital Marketing">Website & Toko Online</option>
												<option value="Website Design">Custom Apps</option>
												<option value="WordPress">Landing Page</option>
												<option value="Web Analytics">Promo Digital Marketing</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-12">
										<div class="input-group-meta form-group mb-35">
											<textarea placeholder="Pesan Anda" name="message" required="required" data-error="Please,leave us a message."></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-12"><button class="theme-btn-one ripple-btn w-100">Kirim</button></div>
								</div>
							</form>
						</div> <!-- /.form-style-three -->
					</div>
					<div class="col-lg-5 col-md-6 ms-auto">
						<div class="address-block-three mb-80 lg-mb-40 d-block-mobile">
							<div class="icon"><img src="images/icon/icon_17.svg" alt=""></div>
							<div class="text">
								<h5 class="title">Alamat Kami</h5>
								<p>Nerada Estate Blok B4-12A, Cipayung, Ciputat, Tangerang Selatan. 15411</p>
							</div>
						</div> <!-- /.address-block-three -->
						<div class="address-block-three mb-80 lg-mb-40">
							<div class="icon"><img src="images/icon/icon_18.svg" alt=""></div>
							<div class="text">
								<h5 class="title">Info Kontak</h5>
								<p>Chat kami via Whatsapp atau Telepon di  <br><a href="tel:+62878-8682-2468" class="call">0878-8682-2468</a></p>
							</div>
						</div> <!-- /.address-block-three -->
						<div class="address-block-three">
							<div class="icon"><img src="images/icon/icon_19.svg" alt=""></div>
							<div class="text">
								<h5 class="title">Operasional</h5>
								<p>Senin sd Sabtu, jam 08.00 sd 20.00 <br>Minggu on appointment</p>
							</div>
						</div> <!-- /.address-block-three -->
					</div>
				</div>
			</div>

			<div class="map-area-one mt-150 lg-mt-100">
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe class="gmap_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.517565669281!2d106.75157671419457!3d-6.3269095636683215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efba3f851edf%3A0x1125b6b7ea2d950c!2sNerada%20Estate!5e0!3m2!1sid!2sid!4v1650440493959!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div> <!-- /.contact-section-six -->

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
							<h1 class="hero-heading font-recoleta fs-70px fs-mobile-45px text-center-mobile">Gratis 3 Template Landing Page Exclusive</h1>
							<p class="hero-sub-heading pe-xl-5 text-center-mobile">Yang bisa dipakai untuk keperluan iklan atau informasi bisnismu. Bisa kami bantu install ke domain dan hosting supaya online.</p>
						</div>
						<div class="col-xl-5 col-lg-6">
							<div class="form-style-four md-mt-40">
								<h3>Plus Voucher Diskon Pembuatan Website senilai Rp 100.000</h3>
								<form action="<?php echo base_url() ?>" id="contact-fom" method="POST">
									<?php echo method('_post') ?>
									<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
									<div class="messages"></div>
									<div class="row controls">
										<div class="col-12">
											<div class="input-group-meta form-email-group form-group mb-15">
												<label>Masukkan Email Anda </label>
												<input type="email" class="form-email" placeholder="febrinanda@gmail.com" name="email" required="required" data-error="Valid email is required.">
											</div>
										</div>
										<div class="col-12"><button type="button" class="theme-btn-one ripple-btn fs-8 px-0 mt-10 email">Download Landing Page & Voucher Diskon</button></div>
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
				Footer
			=====================================================
		-->
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
		<?php $this->load->view('website/v_footer') ?>