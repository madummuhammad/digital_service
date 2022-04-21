									<?php $this->load->view('admin/website/v_header') ?>
									<?php $this->load->view('admin/website/v_navbar') ?>
			<!-- =============================================
				Inside Page Banner
				============================================== -->
				<div class="inside-hero-two mb-3" style="background-image: url(<?php echo base_url('') ?>assets/images/media/img_46.jpg);">
					<div class="container">
						<h2 class="page-title">Promo Digital MARKETING</h2>
						<p>Perluas jangkauan bisnis Anda dengan campaign digital yang dikelola oleh agency partner kami. Tentunya dengan PROMO KHUSUS.</p>
					</div>
					<img src="<?php echo base_url('') ?>assets/images/shape/shape_38.svg" alt="" class="shapes shape-one">
				</div> <!-- /.inside-hero-two -->

				<div class="hero-banner-one md-mt-140 mt-60">
					<div class="partner-slider-one md-mt-80">
						<div class="container">
							<p class="text-center">Agency Partner Kami yang akan membersamai tumbuhnya bisnis Anda</p>
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
								<form action="<?php echo admin_url('website/layanan/digital_marketing_logo') ?>" method="POST" enctype="multipart/form-data">
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
					<form action="<?php echo admin_url('website/layanan/digital_marketing_logo') ?>" method="POST">
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
							<form action="<?php echo admin_url('website/layanan/digital_marketing_logo') ?>" method="POST" enctype="multipart/form-data">
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

			<!--=====================================================
				Vcamp Feature Section Eight
				=====================================================-->
				<div class="vcamp-feature-section-eight mt-200 lg-mt-120 mb-100">
					<div class="container">
						<div class="row">
							<div class="col-xxl-11 m-auto">
								<div class="row align-items-center mb-80 lg-mb-20">
									<div class="col-lg-5 col-md-6">
										<div class="title-style-four">
											<h2 class="title">Layanan Digital Marketing langsung dari ahlinya</h2>
										</div>
									</div>
									<div class="col-lg-5 col-md-6 ms-auto">
										<p class="text-lg theme-mb-0 sm-mt-20">Kami bermitra dengan agency Digital Marketing dengan expertise di bidangnya masing-masing untuk membantu bisnis online Anda semakin bertumbuh.</p>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_55.svg" alt=""></div>
											<h4>Google Ads</h4>
											<p>Menurut data, 90 % transaksi pembelian terjadi setelah visitor mengunjungi halaman 1 Google. Kami siap bantu munculkan Bisnis Anda di halaman 1 Google dengan strategi </p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="100">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_56.svg" alt=""></div>
											<h4>Search Engine Optimization (SEO)</h4>
											<p>Bangun presence yang kuat di halaman pencarian Google secara jangka panjang dengan SEO. Bisnis Anda akan "menjual dirinya" 24 jam non stop sesuai Keyword yang di-set.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Email Marketing</h4>
											<p>Bangun engagement yang kuat dengan database Anda, dengan edukasi/info/promo dengan biaya rendah. Mau upsell, cross-sell atau re-sell jadi lebih mudah.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>FB/ Instagram Ads</h4>
											<p>Bangun iklan yang lebih tertarget, kreatif dan dinamis di Instagram. Dapatkan ROI tinggi dengan budget lebih rendah.</p>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 mb-2" data-aos="fade-up" data-aos-delay="150">
										<div class="card-style-eight h-100 pb-0 pt-4">
											<div class="icon d-flex align-items-end"><img src="<?php echo base_url('') ?>assets/images/icon/icon_57.svg" alt=""></div>
											<h4>Jasa Artikel/Konten Website</h4>
											<p>Tidak ada waktu untuk mengisi konten artikel website Anda ? Partner kami siap melayani artikel untuk beragam niche, objectives dan panjang karakter.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-feature-section-eight -->

				<div class="vcamp-feature-section-nine pt-170 lg-pt-120" id="about">
					<div class="container">
						<div class="title-style-seven text-center pb-60 lg-pb-20">
							<h2 class="title">Diskon hingga 30% untuk semua layanan <span>partner kami<img src="<?php echo base_url('') ?>assets/images/shape/shape_53.svg" alt=""></span></h2>
							<div class="text-center mt-80 lg-mt-20"><a href="portfolioV2.html" class="theme-btn-four ripple-btn">Lihat lebih lanjut</a></div>
						</div> <!-- /.title-style-seven -->
					</div>
				</div> <!-- /.vcamp-feature-section-nine -->

				<div class="vcamp-text-block-thirteen pt-40 lg-pt-100">
					<div class="container">
						<div class="row">
							<div class="col-lg-5">
								<div class="title-style-one md-pb-40">
									<div class="upper-title">Mengapa melalui kami ?</div>
									<h2 class="title">Kualitas Layanan Premium</h2>
									<p>Dengan harga lebih murah</p>
								</div>
							</div>
							<div class="col-xl-6 col-lg-7 ms-auto">
								<ul class="ui-list-item-one style-none">
									<li>Pelajari, lalu bebas pilih layanan Digital Marketing yang Anda mau. Bisa pilih lebih dari 1 layanan.</li>
									<li>Agency partner kami berisi talenta expert, berpengalaman dan certified</li>
									<li>Data driven, market research, creative approach & A/B Testing.</li>
									<li>Powerfull Copywriting, Proven Method dan Recent Technologies/Platform</li>
									<li>Optimasi Campaign untuk improve Return On Investment (ROI).</li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-text-block-thirteen -->

				<div class="vcamp-feature-section-five mt-100 lg-mt-80">
					<div class="feature_slider_one">
						<?php foreach ($portofolio as $key => $value): ?>
							<div class="item">
								<div class="d-flex justify-content-end">
									<button class="mx-1" data-bs-toggle="modal" data-bs-target="#portofolioedit<?php echo $key ?>"><i class="fas fa-edit"></i></button>
									<button class="mx-1" data-bs-toggle="modal" data-bs-target="#portofoliodelete<?php echo $key ?>"><i class="fas fa-trash"></i></button>
								</div>
								<div class="card-style-five">
									<img src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['gambar'] ?>" alt="" class="img-meta">
									<div class="hover-content">
										<h3 class="font-recoleta title"><a><?php echo $value['judul'] ?></a></h3>
										<p><?php echo $value['agency'] ?></p>
										<p><?php echo $value['tagline'] ?></p>
									</div>
								</div> <!-- /.card-style-five -->
							</div> <!-- /.item -->
						<?php endforeach ?>
					</div>
					<div class="d-flex justify-content-center">
						<button class="mx-1 mt-4" data-bs-toggle="modal" data-bs-target="#portofoliotambah"><i class="fas fa-plus"></i> Tambah Portofolio</button>
					</div>
				</div> <!-- /.vcamp-feature-section-five -->
				<?php foreach ($portofolio as $key => $value): ?>
					<div class="modal fade" tabindex="-1" id="portofolioedit<?php echo $key ?>">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form action="<?php echo admin_url('website/layanan/digital_marketing') ?>" method="POST" enctype="multipart/form-data">
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
												<label for="" class="mt-2">Judul</label>
												<input type="text" name="judul" class="form-control mt-2" value="<?php echo $value['judul'] ?>">
												<label for="" class="mt-2">Agency</label>
												<input type="text" name="agency" class="form-control mt-2" value="<?php echo $value['agency'] ?>">
												<label for="" class="mt-2">Tagline</label>
												<input type="text" name="tagline" class="form-control mt-2" value="<?php echo $value['tagline'] ?>">
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
					<form action="<?php echo admin_url('website/layanan/digital_marketing') ?>" method="POST">
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
							<form action="<?php echo admin_url('website/layanan/digital_marketing') ?>" method="POST" enctype="multipart/form-data">
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
											<input type="file" name="gambar" class="form-control">
											<label for="" class="mt-2">Judul</label>
											<input type="text" name="judul" class="form-control mt-2" value="">
											<label for="" class="mt-2">Agency</label>
											<input type="text" name="agency" class="form-control mt-2" value="">
											<label for="" class="mt-2">Tagline</label>
											<input type="text" name="tagline" class="form-control mt-2" value="">
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
				<div class="vcamp-text-block-one mt-200 lg-mt-120">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xxl-5 col-lg-6 order-lg-last" data-aos="fade-left">
								<div class="text-wrapper ps-xxl-5 pt-0 md-pb-40">
									<div class="title-style-one">
										<p>Mitra Kami, </p>
										<h2 class="title">Agency Digital Marketing Pilihan</h2>
									</div>
									<p class="meta-info-text text-lg">Kami tidak asal pilih. Semua mitra sudah memenuhi standar kualitas layanan kami.</p>
									<a href="about-usV2.html" class="theme-btn-two">Lebih Lanjut</a>
								</div>
							</div>
							<div class="col-xxl-7 col-lg-6" data-aos="fade-right">
								<img src="<?php echo base_url('') ?>assets/images/assets/ils_02.svg" alt="" class="illustration">
							</div>
						</div>
					</div>
				</div> <!-- /.vcamp-text-block-one -->

							<!-- 
			=============================================
				Vcamp Feature Section Two
			============================================== 
		-->
		<div class="vcamp-feature-section-two mt-130 md-mt-110">
			<div class="container">
				<div class="row gx-5">
					<div class="col-xxl-11 m-auto">
						<div class="row gx-5">
							<?php foreach ($agency as $key => $value): ?>
								<div class="col-lg-4 col-sm-6" data-aos="fade-up">
									<div class="card-style-two">
										<div class="d-flex justify-content-end">
											<button class="mx-1" data-bs-toggle="modal" data-bs-target="#agency<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></button>
											<button class="mx-1" data-bs-toggle="modal" data-bs-target="#agencydelete<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
										</div>
										<div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['logo'] ?>" alt="" class="tran3s"></div>
										<h4 class="title"><?php echo $value['judul'] ?></h4>
										<p class="pe-xxl-5"><?php echo $value['isi'] ?></p>
									</div> <!-- /.card-style-two -->
								</div>
							<?php endforeach ?>
							<div class="d-flex justify-content-center py-4">
								<button class="mx-1" data-bs-toggle="modal" data-bs-target="#agencytambah"><i class="fas fa-plus"></i> Tambah Agency</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.vcamp-feature-section-two -->
		<?php foreach ($agency as $row => $value): ?>
			<div class="modal fade" tabindex="-1" id="agency<?php echo $value['id'] ?>">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<form action="<?php echo admin_url('website/layanan/agency') ?>" method="POST" enctype="multipart/form-data">
							<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
							<?php echo method('_patch') ?>
							<?php echo get_id($value['id']) ?>
							<div class="modal-header">
								<h5 class="modal-title">Edit Agency</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-12">
										<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/layanan/<?php echo $value['logo'] ?>" alt="" data-toggle="gambar" style="width: 3rem;">
										<input type="file" name="gambar" class="form-control mt-2">
										<label for="" class="mt-2">Nama Agency</label>
										<input type="text" name="judul" class="form-control mt-2" value="<?php echo $value['judul'] ?>">
										<label for="" class="mt-2">Isi</label>
										<textarea name="isi" id="" cols="30" rows="10" class="form-control"><?php echo $value['isi'] ?></textarea>
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
			<form action="<?php echo admin_url('website/layanan/agency') ?>" method="POST">
				<div class="modal fade" id="agencydelete<?php echo $value['id'] ?>">
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
		<div class="modal fade" tabindex="-1" id="agencytambah">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form action="<?php echo admin_url('website/layanan/agency') ?>" method="POST" enctype="multipart/form-data">
						<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
						<?php echo method('_post') ?>
						<?php echo get_id($value['id']) ?>
						<div class="modal-header">
							<h5 class="modal-title">Tambah Agency</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<img class="img-fluid w-25" src="<?php echo base_url('') ?>assets/images/layanan/default.png" alt="" data-toggle="gambar" style="width: 15rem;">
									<input type="file" name="gambar" class="form-control mt-2">
									<label for="" class="mt-2">Nama Agency</label>
									<input type="text" name="judul" class="form-control mt-2" value="">
									<label for="" class="mt-2">Isi</label>
									<textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
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