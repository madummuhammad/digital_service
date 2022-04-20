						<?php $this->load->view('website/v_header') ?>
						<?php $this->load->view('website/v_navbar') ?>
			<!-- =============================================
				Inside Page Banner
				============================================== -->
				<div class="inside-hero-one hero-spacing">
					<div class="container">
						<h2 class="page-title font-recoleta">Paket & Biaya</h2>
						<h3>Custom Apps</h3>
						<p>Fleksibel & Worth It. Sesuai kebutuhan Anda</p>
					</div>
				</div> <!-- /.inside-hero-one -->

				<div class="box-layout mt-50">
					<div class="bg-wrapper">
						<div class="container">
							<div class="row mb-3">
								<div class="col-xxl-11 m-auto">
									<div class="subscribe-area">
										<div class="row align-items-center">
											<div class="col-md-6">
												<div class="title-style-three sm-pb-20">
													<p>Sebelum cek harga,</p>
													<h4 class="title fs-2">Sudah Pelajari Layanan Kami  ?</h4>
												</div>
											</div>
											<div class="col-md-6">
												<a href="<?php echo base_url('service/apps') ?>" class="theme-btn-four ripple-btn float-lg-end">Pelajari Disini</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-xxl-11 m-auto">
									<div class="subscribe-area">
										<div class="row align-items-center">
											<div class="col-md-6">
												<div class="title-style-three sm-pb-20">
													<h4 class="title fs-2">Sudah Cek Portofolio Kami  ?</h4>
												</div>
											</div>
											<div class="col-md-6">
												<a href="<?php echo base_url('portofolio') ?>" class="theme-btn-four ripple-btn float-lg-end">Cek Disini</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- /.bg-wrapper -->
				</div> <!-- /.vcamp-footer-one -->

				<div class="pricing-section-one mt-150 lg-mt-120">
					<div class="container">
						<div class="row">
							<div class="col-xxl-9 col-xl-10 col-lg-8 col-md-10 m-auto">
								<div class="title-style-one text-center">
									<h2 class="title">Paket Pembuatan Custom Apps/ Software</span></h2>
								</div> <!-- /.title-style-six -->
							</div>
						</div>

						<ul class="nav nav-tabs justify-content-center pricing-nav-one" role="tablist">
							<?php foreach ($this->M_Harga->produk(2) as $key => $value): ?>
								<li class="nav-item" role="presentation">
									<button class="nav-link <?php if ($value['id_produk']==3): ?>
									<?php echo 'active' ?>
									<?php endif ?>" data-bs-toggle="tab" data-bs-target="#website<?php echo $value['id_produk'] ?> " type="button" role="tab"><?php echo $value['nama'] ?></button>
								</li>				
							<?php endforeach ?>
						</ul>


						<div class="pricing-table-area-one">
							<div class="tab-content">
								<?php foreach ($this->M_Harga->produk(2) as $key => $value): ?>
									<div class="tab-pane fade show <?php if ($value['id_produk']==3): ?>
									<?php echo 'active' ?>
									<?php endif ?>" id="website<?php echo $value['id_produk'] ?>">
									<div class="row justify-content-center">
										<?php foreach ($this->M_Harga->harga_fitur($value['id_produk']) as $key => $value): ?>
											<div class="col-lg-4 col-md-6">
												<div class="pr-table-wrapper">
													<div class="pack-name"><?php echo $value['nama'] ?></div>
													<div class="pack-details"><?php echo $value['tagline'] ?></div>
													<div class="top-banner d-flex justify-content-center align-items-center pb-1 pt-3" style="background:#FFF7EB;">
														<p class="px-2">mulai</p>
														<p class="fw-bolder fs-3">IDR <?php echo $value['harga'] ?></p>
													</div>
													<?php foreach ($this->M_Harga->sub_fitur($value['id_harga_fitur']) as $key => $value): ?>
														<ul class="pr-feature py-3">
															<p class="fw-bold"><?php echo $value['nama'] ?></p>
															<?php foreach ($this->M_Harga->isi_fitur($value['id_sub_fitur']) as $key => $value): ?>
																<li>
																	<?php if ($value['coret']==1): ?>
																		<?php echo '<s>' ?>
																	<?php endif ?>
																	<?php echo $value['isi'] ?>
																	<?php if ($value['coret']==1): ?>
																		<?php echo '</s>' ?>
																	<?php endif ?>
																</li>
															<?php endforeach ?>
														</ul>
													<?php endforeach ?>
													<a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20order%20Custom%20Apps%20." target="_blank" class="trial-button">Diskusi Lebih Lanjut</a>
												</div>
											</div>
										<?php endforeach ?>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div> <!-- /.pricing-table-area-one -->
				</div>
			</div> <!-- /.pricing-section-one -->

			<div class="fancy-banner-five mt-150 lg-mt-100">
				<div class="container">
					<div class="row">
						<div class="col-12 m-auto">
							<div class="bg-wrapper dark-bg">
								<div class="row">
									<div class="col-xxl-12 col-md-12 m-auto">
										<h2 class="title font-recoleta">Apps/ Software Premium ? </h2>
										<h2 class="title font-recoleta">Dengan Fitur & Security Terbaik.</h2>
									</div>
									<h4 class="text-white pb-3 font-recoleta">Data driven -  Cutting Edge Technology - Awsome Experience</h4>
								</div>
								<a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20order%20Custom%20Apps%20Premium." target="_blank" class="theme-btn-four ripple-btn">Hubungi Kami</a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-banner-five -->

			<!--=====================================================
				Vcamp Fancy Banner Three
				=====================================================-->
				<div class="vcamp-footer-one box-layout mt-50">
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
				<?php $this->load->view('website/v_footer') ?>