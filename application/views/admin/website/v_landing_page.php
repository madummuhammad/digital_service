						<?php $this->load->view('admin/website/v_header') ?>
						<?php $this->load->view('admin/website/v_navbar') ?>
			<!-- =============================================
				Inside Page Banner
				============================================== -->
				<div class="inside-hero-two" style="background-image: url(<?php echo base_url('') ?>assets/images/media/img_46.jpg);">
					<div class="container">
						<h2 class="page-title">Landing Page Creation</h2>
						<p>Bangun Landing Page yang Persuasif. Yang Lebih Menjual.</p>
					</div>
					<img src="<?php echo base_url('') ?>assets/images/shape/shape_38.svg" alt="" class="shapes shape-one">
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
								<div class="text-wrapper pe-4rem">
									<div class="title-style-five pe-4rem">
										<!-- <div class="upper-title">About us</div> -->
										<h2 class="title text-justify">Tenang, kami punya solusinya</h2>
										<p class="text-justify">Kami siap buatkan Landing Page berkonversi tinggi untuk bisnis Anda</p>
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
							<h2 class="title"><span>Lebih Menjual dengan Copywriting yang Persuasif + Desain yang menarik<img src="<?php echo base_url('') ?>assets/images/shape/shape_53.svg" alt=""></span></h2>
							<p>Tinggal terima beres, dan nikmati sales conversion yang tinggi. InshaAllah</p>
						</div> <!-- /.title-style-seven -->
					</div>
				</div> <!-- /.vcamp-feature-section-nine -->

				<div class="hero-banner-one md-mt-140 mt-100">
					<div class="partner-slider-one md-mt-80">
						<div class="container">
							<p class="text-center">Sudah lebih dari 100 brand menggunakan jasa Landing Page kami</p>
							<div class="partnerSliderOne">
								<?php foreach ($logo as $key => $value): ?>
									<div class="item">
										<div class="d-flex">
											<button class="mx-1" data-bs-toggle="modal" data-bs-target="#klien<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></button>
											<button class="mx-1" data-bs-toggle="modal" data-bs-target="#kliendelete<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
										</div>
										<div class="img-meta d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['logo'] ?>" alt=""></div>
									</div>
								<?php endforeach ?>
							</div>
							<div class="d-flex justify-content-center pt-4">
								<button class="mx-1" data-bs-toggle="modal" data-bs-target="#logotambah"><i class="fas fa-plus"></i> Tambah Logo</button>
							</div>
						</div>
					</div> <!-- /.partner-slider-one -->
				</div> <!-- /.hero-banner-one -->
				<?php foreach ($logo as $row => $value): ?>
					<div class="modal fade" tabindex="-1" id="klien<?php echo $value['id'] ?>">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form action="<?php echo admin_url('website/layanan/landing_page_logo') ?>" method="POST" enctype="multipart/form-data">
									<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
									<?php echo method('_patch') ?>
									<?php echo get_id($value['id']) ?>
									<div class="modal-header">
										<h5 class="modal-title">Edit Logo</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-12">
												<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/logo/<?php echo $value['logo'] ?>" alt="" data-toggle="gambar" style="width: 15rem;">
												<input type="file" name="gambar" class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-outline-dark">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<form action="<?php echo admin_url('website/layanan/landing_page_logo') ?>" method="POST">
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
										<button type="submit" class="btn btn-outline-danger">Hapus</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				<?php endforeach ?>
				<div class="modal fade" tabindex="-1" id="logotambah">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<form action="<?php echo admin_url('website/layanan/landing_page_logo') ?>" method="POST" enctype="multipart/form-data">
								<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
								<?php echo method('_post') ?>
								<div class="modal-header">
									<h5 class="modal-title">Tambah Klien</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-12">
											<img data-toggle="gambar" class="img-fluid w-25 mb-4" src="<?php echo base_url('') ?>assets/images/logo/default.png" alt="" style="width: 15rem;">
											<input type="file" class="form-control" name="gambar">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-outline-dark">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
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
									<a href="about-usV2.html" class="theme-btn-three">Hubungi Kami <i class="fas fa-angle-right"></i></a>
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
							<a href="portfolioV1.html" class="theme-btn-three white-vr">Lihat Portofolio Landing Page <i class="fas fa-angle-right"></i></a>
						</div><!--  /.text-wrapper -->
						<div class="slider-wrapper">
							<div class="feedback_slider_three">
								<?php foreach ($portofolio as $key => $value): ?>
									<div class="item">
										<div class="d-flex justify-content-end">
											<button class="mx-1 text-white" data-bs-toggle="modal" data-bs-target="#portofolioedit<?php echo $key ?>"><i class="fas fa-edit"></i></button>
											<button class="mx-1 text-white" data-bs-toggle="modal" data-bs-target="#portofoliodelete<?php echo $key ?>"><i class="fas fa-trash"></i></button>
										</div>
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
							<div class="d-flex justify-content-center">
								<button class="mx-1 mt-4 text-white" data-bs-toggle="modal" data-bs-target="#portofoliotambah"><i class="fas fa-plus"></i> Tambah Portofolio</button>
							</div>
						</div> <!-- /.slider-wrapper -->
					</div> <!-- /.inner-content -->
				</div> <!-- /.feedback-section-three -->
				<?php foreach ($portofolio as $key => $value): ?>
					<div class="modal fade" tabindex="-1" id="portofolioedit<?php echo $key ?>">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form action="<?php echo admin_url('website/layanan/landing_page') ?>" method="POST" enctype="multipart/form-data">
									<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
									<?php echo method('_patch') ?>
									<?php echo get_id($value['id']) ?>
									<div class="modal-header">
										<h5 class="modal-title">Edit Portofolio</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-12">
												<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['gambar'] ?>" alt="<?php echo $value['gambar'] ?>" data-toggle="gambar" style="width: 15rem;">
												<input type="file" name="gambar" class="form-control">
												<label for="" class="mt-2">Link</label>
												<input type="text" name="link" class="form-control mt-2" value="<?php echo $value['link'] ?>">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-outline-dark">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<form action="<?php echo admin_url('website/layanan/landing_page') ?>" method="POST">
						<div class="modal fade" id="portofoliodelete<?php echo $key ?>">
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
										<button type="submit" class="btn btn-outline-danger">Hapus</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				<?php endforeach ?>

				<div class="modal fade" tabindex="" id="portofoliotambah">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<form action="<?php echo admin_url('website/layanan/landing_page') ?>" method="POST" enctype="multipart/form-data">
								<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
								<?php echo method('_post') ?>
								<div class="modal-header">
									<h5 class="modal-title">Tambah Portofolio</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-12">
											<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/portofolio/default.png" alt="" data-toggle="gambar" style="width: 15rem;">
											<input type="file" name="gambar" class="form-control mt-2">
											<label for="" class="mt-2">Link</label>
											<input type="text" name="link" class="form-control mt-2">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-outline-dark">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>


				<div class="vcamp-feature-section-eight mt-200 lg-mt-120 mb-50">
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
				<div class="vcamp-text-block-thirteen mb-130 lg-pt-100 lg-mb-80">
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
							<h2 class="title text-white">Biaya Landing Page Online Kami Sangat Worth It <img src="images/shape/shape_53.svg" alt=""></span></h2>
							<a class="text-white py-5" href=""><u>Cek Di sini</u></a>
						</div>
					</div>
				</div> <!-- /.vcamp-feature-section-nine -->

				<div class="vcamp-feature-section-three lg-mt-150 mt-100 md-mt-120">
					<div class="container">
						<div class="row align-items-center mb-75 lg-mb-50 md-mb-20">
							<div class="col-xl-6 col-lg-5" data-aos="fade-right">
								<div class="title-style-one">
									<h2 class="title">Setelah Landing Page selesai, <span>lalu apa</span>?</h2>
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
														<label>Masukan Email Anda*</label>
														<input type="email" placeholder="febrinanda@gmail.com" name="email" required="required" data-error="Valid email is required.">
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-12"><button class="theme-btn-one ripple-btn px-0 fs-8">Download Landing Page & Voucher Diskon</button></div>
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
												<a href="contactV3.html" class="theme-btn-four ripple-btn">Yuk Diskusi</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.vcamp-footer-one -->
				<?php $this->load->view('admin/website/v_footer') ?>