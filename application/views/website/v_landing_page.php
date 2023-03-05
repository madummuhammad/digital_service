						<?php $this->load->view('website/v_header') ?>
						<?php $this->load->view('website/v_navbar') ?>
			<!-- =============================================
				Inside Page Banner
				============================================== -->
				<div class="inside-hero-two">
					<img src="<?php echo base_url('') ?>assets/images/media/foto_13.jpg">
					<div class="container">
						<h2 class="page-title">Landing Page Creation</h2>
						<p>Bangun Landing Page yang Persuasif. Yang Lebih Menjual.</p>
					</div>
					<!-- <img src="<?php echo base_url('') ?>assets/images/shape/shape_38.svg" alt="" class="shapes shape-one"> -->
				</div> <!-- /.inside-hero-two -->

				<!--=====================================================
				Vcamp Text Block Fifteen	
				=====================================================-->
				<div class="vcamp-text-block-fifteen dark-bg mb-70 pt-150 pb-150 lg-pt-100 lg-pb-100">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-5">
								<div class="text-wrapper md-pb-40">
									<div class="title-style-one white-vr">
										<div class="upper-title mb-50">Solusi Landing Page Terpercaya</div>
										<h2 class="title px-0">Apakah Anda Mengalaminya ?</h2>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-7">
								<ul class="ui-list-item-three style-none">
									<li>Mau ngiklan, butuh Landing Page, tapi ga punya waktu membuatnya</li>
									<li>Mau buat Landing page sendiri tapi ga ngerti caranya</li>
									<li>Bingung, bagaimana supaya iklan tidak boncos terus.</li>
									<li>Merasa sulit meramu copywriting jualan yang bagus.</li>
									<li>Belum tau trik agar Landing Page lebih menjual.</li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-text-block-fifteen -->

				<div class="vcamp-text-block-five mt-10 lg-mt-120">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xxl-6 col-xl-7 col-lg-5">
								<div class="text-wrapper pe-4rem pe-mobile-0">
									<div class="title-style-five pe-4rem pe-mobile-0">
										<!-- <div class="upper-title">About us</div> -->
										<h2 class="title text-justify text-center-mobile">Tenang, kami punya solusinya</h2>
										<p class="text-justify text-center-mobile">Kami siap buatkan Landing Page berkonversi tinggi untuk bisnis Anda</p>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-6 ms-auto">
								<div class="accordion accordion-style-one md-mt-40" id="accordionOne">
									<div class="accordion-item">
										<div class="accordion-header" id="headingOne">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Landing Page berbeda dengan Website
											</button>
										</div>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
											<div class="accordion-body">
												<p>Landing Page hanya 1 halaman. Seperti brosur digital, yang berisi penawaran khusus produk/jasa Anda. Fokus dan simple, tapi persuasif hingga calon customer mengklik </p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Landing Page biasa saja tidak cukup
											</button>
										</div>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOne">
											<div class="accordion-body">
												<p>Desain udah pasti harus keren. Copywriting harus powerfull sehingga mampu "menggiring" calon customer untuk take action. Dan tentu didukung plugin premium agar load speed cepat, fitur profesional dan bounce rate-nya rendah.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Kuncinya di Sales Copywriting
											</button>
										</div>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOne">
											<div class="accordion-body">
												<p>Percuma desain bagus, tapi tidak cukup meyakinkan calon customer untuk "membeli"/take action. Nah, kami punya tim copywriting yang handal dan berpengalaman.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-text-block-five -->

				<div class="vcamp-feature-section-nine pt-170 lg-pt-120" id="about">
					<div class="container">
						<div class="title-style-seven text-center pb-60 lg-pb-20">
							<h2 class="title fs-60px fs-mobile-40px"><span>Lebih Menjual dengan Copywriting yang Persuasif + Desain yang menarik<img class="d-none-mobile" src="<?php echo base_url('') ?>assets/images/shape/shape_53.svg" alt=""></span></h2>
							<p>Tinggal terima beres, dan nikmati sales conversion yang tinggi. InshaAllah</p>
						</div> <!-- /.title-style-seven -->
					</div>
				</div> <!-- /.vcamp-feature-section-nine -->

				<div class="hero-banner-one md-mt-140 mt-100">
					<div class="partner-slider-one md-mt-80">
						<div class="container">
							<p class="text-center">Sudah banyak brand menggunakan jasa Landing Page kami</p>
							<div class="partnerSliderOne">
								<?php foreach ($logo as $key => $value): ?>
									<div class="item">
										<div class="img-meta d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['logo'] ?>" alt=""></div>
									</div>
								<?php endforeach ?>
							</div>
						</div>
					</div> <!-- /.partner-slider-one -->
				</div> <!-- /.hero-banner-one -->

				<div class="vcamp-feature-section-four mt-150 lg-mt-150 md-mt-120">
					<img src="<?php echo base_url('') ?>assets/images/shape/shape_05.svg" alt="" class="shapes shape-one">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-5 col-lg-6" data-aos="fade-right">
								<div class="text-wrapper mb-130 lg-mb-70">
									<div class="title-style-one">
										<h2 class="title">Jadi dengan Landing Page, Anda bisa ...</h2>
									</div>
									<p class="meta-info-text text-lg">Dapatkan berbagai manfaat menarik dari Landing Page kami untuk mepromosikan produk/jasa Anda secara online</p>
									<a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20Tanya%20info%20soal%20jasa%20Website/Toko%20Online/Apps/Landing%20Page." target="_blank" class="theme-btn-three">Hubungi Kami <i class="fas fa-angle-right"></i></a>
								</div> <!-- /.text-wrapper -->
							</div>
							<div class="col-lg-6 ms-auto">
								<div class="row gx-5">
									<div class="col-sm-6" data-aos="fade-up">
										<div class="card-style-four mb-130 lg-mb-70">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_29.svg" alt="" class="tran3s"></div>
											<h4 class="title">Fokus Menjual, Efisiensi Waktu</h4>
											<p>Hasil lebih optimal, dikerjakan oleh ahlinya. Anda fokus pada follow up dan pelayanan.</p>
										</div> <!-- /.card-style-four -->
									</div>
									<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
										<div class="card-style-four mb-130 lg-mb-70">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_30.svg" alt="" class="tran3s"></div>
											<h4 class="title">Raih Konversi Tinggi</h4>
											<p>Prospek akan lebih tertarik dan tersugesti.</p>
										</div> <!-- /.card-style-four -->
									</div>
									<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
										<div class="card-style-four mb-130 lg-mb-70">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_31.svg" alt="" class="tran3s"></div>
											<h4 class="title">Mendulang Database</h4>
											<p>Semakin banyak yang "Click to action", maka kontak nya bisa Anda simpan untuk di follow up kembali.</p>
										</div> <!-- /.card-style-four -->
									</div>
									<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
										<div class="card-style-four mb-130 lg-mb-70">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_32.svg" alt="" class="tran3s"></div>
											<h4 class="title">Beriklan secara efektif</h4>
											<p>Landing Page ini efektif untuk Google Ads, IG/FB Ads dan Email marketing. </p>
										</div> <!-- /.card-style-four -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-feature-section-four -->

				<div class="feedback-section-three dark-bg mt-110 lg-mt-70">
					<img src="<?php echo base_url('') ?>assets/images/shape/shape_06.svg" alt="" class="shapes shape-one">
					<div class="inner-content d-lg-flex align-items-center clearfix">
						<div class="text-wrapper">
							<div class="title-style-one white-vr">
								<h2 class="title">Landing Page yang terus berkembang</h2>
							</div>
							<p>Kami akan terus berinovasi terkait pendekatan desain, teknologi dan tentunya copywriting untuk menghadirkan pengalaman terbaik serta tingkat konversi yang lebih tinggi.</p>
							<a href="<?php echo base_url('portofolio') ?>" class="theme-btn-three white-vr">Lihat Portofolio Landing Page <i class="fas fa-angle-right"></i></a>
						</div><!--  /.text-wrapper -->

						<div class="slider-wrapper">
							<div class="feedback_slider_three">
								<?php foreach ($portofolio as $key => $value): ?>
									<div class="item">
										<div class="block-wrapper">
											<img src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['gambar'] ?>" alt="" class="screen">
											<div class="overlay-content d-flex align-items-end">
												<a href="portfolio-detailsV1.html" class="d-flex justify-content-between align-items-center">
													<span><?php echo $value['link'] ?></span>
													<img src="<?php echo base_url('') ?>assets/images/icon/icon_28.svg" alt="">
												</a>
											</div> <!-- /.overlay-content -->
										</div> <!-- /.block-wrapper -->
									</div>
								<?php endforeach ?>
							</div> <!-- /.feedback_slider_three -->
						</div> <!-- /.slider-wrapper -->
					</div> <!-- /.inner-content -->
				</div> <!-- /.feedback-section-three -->


				<div class="vcamp-feature-section-eight mt-200 lg-mt-120 mb-50 mb-mobile-3">
					<div class="container">
						<div class="row">
							<div class="col-xxl-11 m-auto">
								<div class="row align-items-center mb-80 lg-mb-20">
									<div class="col-lg-12 col-md-12">
										<div class="title-style-four">
											<h2 class="title">Landing Page Anda punya Fitur Hebat</h2>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_55.svg" alt=""></div>
											<h4>Ngebut dengan Speed WP Rocket</h4>
											<p>Landing Page (LP) dengan load time yang cepat. Sehingga mengurangi bounce rate (orang yang langsung kabur, sebelum lihat LP secara utuh)</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="100">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_56.svg" alt=""></div>
											<h4>Mobile Friendly</h4>
											<p>Lebih dari 75% orang saat ini menggunakan smartphone untuk online. LP yang kami buat akan disesuaikan dengan tampilan perangkat smartphone dengan content dan desain yang responsive.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Copywriting Persuasif</h4>
											<p>Kami akan siapkan konten yang inshaAllah secara emosional mensugesti calon customer untuk segera Action (klik, beli, download dll)</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Domain & Hosting</h4>
											<p>Kita bantu setting. Sepenuhnya milik Anda.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Theme Premium Design</h4>
											<p>Software Kasir, Payment Online System, QR, Order Online (Self Order,Take away, Dine in, Reservasi, Delivery)</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Kontrol Visitor (Analytics/Pixel)</h4>
											<p>Dengan Google Analytics, Search Console dan FB Pixel, pantau berapa, darimana dan bagaimana perilaku visitor ketika mengunjungi LP Anda.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Custom CTA</h4>
											<p>Bisa request pasang tombol Click to Action dimana saja, dan dalam bentuk apa saja. (Direct WA/Call, Daftar, Order, Download, Subscribe dll)</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Integrasi Platform</h4>
											<p>Melayani integrasi dengan WooCommerce, Payment, Email Marketing Software, Form Order, Cek Ongkir, Chatbot dan lainnya</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Full Support 24/7</h4>
											<p>Free maintenance. Kami akan segera merespon Anda jika terdapat bug atau kendala atau kebutuhan update/upgrade content/ fitur Landing Page Anda.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-feature-section-eight -->

			<!--=====================================================
				Vcamp Text Block Thirteen
				=====================================================-->
				<div class="vcamp-text-block-thirteen mb-130 lg-mb-80">
					<div class="container">
						<div class="img-media mb-80 lg-mb-40"><img src="images/media/img_89.jpg" alt="" class="w-100"></div>
						<div class="row">
							<div class="col-lg-6">
								<ul class="ui-list-item-one style-none">
									<li>Landing Page akan dioptimasi On Page dan On Site</li>
									<li>Free Premium Photo dan Ilustrasi dari Shutterstock</li>
									<li>Free instalasi Plugin tambahan sesuai kebutuhan</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul class="ui-list-item-one style-none">
									<li>Email Profesional sesuai nama domain</li>
									<li>Free revisi minor*</li>
									<li>Dapatkan potongan 10% untuk order Website</li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-text-block-thirteen -->

				<div class="vcamp-feature-section-nine pt-170 lg-pt-120 dark-bg" id="about">
					<div class="container">
						<div class="title-style-seven text-center pb-60 lg-pb-20">
							<h2 class="title text-white fs-60px fs-mobile-40px">Biaya Landing Page Online Kami Sangat Worth It <img src="images/shape/shape_53.svg" alt=""></span></h2>
							<!-- <a class="text-white py-5" href="<?php echo base_url('pricing/landing_page') ?>"><u>Cek Di sini</u></a> -->

							<a class="text-white py-5"><u>Cek Di sini</u></a>
						</div>
					</div>
				</div> <!-- /.vcamp-feature-section-nine -->

				<div class="vcamp-feature-section-three lg-mt-150 mt-100 md-mt-120 mb-mobile-5">
					<div class="container">
						<div class="row align-items-center mb-75 lg-mb-50 md-mb-20">
							<div class="col-xl-6 col-lg-5" data-aos="fade-right">
								<div class="title-style-one">
									<h2 class="title mb-mobile-5">Setelah Landing Page selesai, <span>lalu apa</span>?</h2>
									<p>Ada <u>Diskon Khusus</u> untuk Klien Kami</p>
								</div>
							</div>
							<div class="col-lg-5 ms-auto" data-aos="fade-left">
								<p class="meta-info-text text-lg ps-xxl-5 md-pt-20">Kami bekerja sama dengan agency Digital Marketing dengan keahlian di bidangnya masing-masing, untuk membantu menjadikan  Apps Anda lebih menjual dan profitable.</p>
								<a class="fw-bold mt-4" href="<?php echo base_url('service/promo_digital_marketing') ?>"><u>Boleh juga ></u></a>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-feature-section-three -->

				<!--=============================================
				Theme Hero Banner
				============================================== -->
				<div class="hero-banner-ten py-5">
					<div class="d-flex align-items-center justify-content-center h-100">
						<div class="container">
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-7 col-lg-6">
									<h1 class="hero-heading font-recoleta fs-70px fs-mobile-55px">Gratis 3 Template Landing Page Exclusive</h1>
									<p class="hero-sub-heading pe-xl-5">Yang bisa dipakai untuk keperluan iklan atau informasi bisnismu. Bisa kami bantu install ke domain dan hosting supaya online.</p>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!--=====================================================
				Vcamp Fancy Banner Three
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
				<?php $this->load->view('website/v_footer') ?>