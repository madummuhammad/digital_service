									<?php $this->load->view('website/v_header') ?>
									<?php $this->load->view('website/v_navbar') ?>
			<!-- =============================================
				Inside Page Banner
				============================================== -->
				<div class="inside-hero-two mb-3" style="background-image: url(<?php echo base_url('') ?>assets/images/media/img_46.jpg);">
					<div class="container">
						<h2 class="page-title">Portofolio</h2>
						<p>Berikut beberapa hasil kerja, sebagian konten sudah diubah/fiktif demi privacy dan hak cipta</p>
					</div>
					<img src="<?php echo base_url('') ?>assets/images/shape/shape_38.svg" alt="" class="shapes shape-one">
				</div> <!-- /.inside-hero-two -->

				<div class="case-study-three full-width mt-150 lg-mt-120">
					<div class="container-fluid">
						<div class="controls control-nav-one text-center mb-50 lg-mb-30">
							<button type="button" class="control" data-filter="all">Semua</button>
							<?php foreach ($jenis_portofolio as $key => $value): ?>
								<button type="button" class="control" data-filter=".filter<?php echo $value['id_jenis'] ?>"><?php echo $value['jenis'] ?></button>
							<?php endforeach ?>
						</div>

						<div class="row">
							<div class="col-12 m-auto">
								<div class="mixitUp-container clearfix">
									<?php foreach ($portofolio as $key => $value): ?>
										<div class="mix filter<?php echo $value['id_jenis'] ?>">
											<div class="case-block-three position-relative">
												<img src="<?php echo base_url('') ?>assets/images/portofolio/<?php echo $value['gambar'] ?>" alt="" class="screen">
												<div class="overlay-content d-flex align-items-end">
													<a href="<?php echo $value['link'] ?>" target="_blank" class="d-flex justify-content-between align-items-center" tabindex="0">
														<span><?php echo $value['link'] ?></span>
														<img src="<?php echo base_url('') ?>assets/images/icon/icon_28.svg" alt="<?php echo $value['gambar'] ?>">
													</a>
												</div> <!-- /.overlay-content -->
											</div> <!-- /.case-block-three -->
										</div>
									<?php endforeach ?>
								</div> <!-- /.mixitUp-container -->
								<div class="mt-4 py-4">
									<h3 class="font-recoleta text-center">Dan Masih Banyak Lagi</h3>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.case-study-three -->

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