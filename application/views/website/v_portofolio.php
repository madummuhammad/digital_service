									<?php $this->load->view('website/v_header') ?>
									<?php $this->load->view('website/v_navbar') ?>
									<div class="inside-hero-two mb-3">
										<img src="<?php echo base_url('') ?>assets/images/media/foto_19.jpg">
										<div class="container">
											<h2 class="page-title">Portofolio</h2>
											<p>Berikut beberapa hasil kerja, sebagian konten sudah diubah/fiktif demi privacy dan hak cipta</p>
										</div>
										<!-- <img src="<?php echo base_url('') ?>assets/images/shape/shape_38.svg" alt="" class="shapes shape-one"> -->
									</div>

									<div class="case-study-three full-width mt-150 lg-mt-120">
										<div class="container-fluid">
											<div class="controls control-nav-one text-center mb-50 lg-mb-30">
												<a href="<?php echo base_url('portofolio?page=1') ?>" class="<?php if(!isset($_GET['id_jenis'])){echo 'mixitup-control-active';}  ?>" >Semua</a>
												<?php foreach ($jenis_portofolio as $key => $value): ?>
													<a href="<?php echo base_url('portofolio?').'id_jenis='.$value['id_jenis'].'&page=1' ?>" class="control
														<?php 
														if(isset($_GET['id_jenis'])){
															if($_GET['id_jenis']==$value['id_jenis']){
																echo 'mixitup-control-active';
															}
														}
														?>
														
														"><?php echo $value['jenis'] ?></a>
													<?php endforeach ?>
												</div>

												<div class="row">
													<div class="col-12 m-auto">
														<div class="mixitUp-container clearfix">
															<?php foreach ($portofolio as $key => $value): ?>
																<div class="mix filter<?php echo $value['id_jenis'] ?>">
																	<div class="case-block-three position-relative">
																		<!-- 	<img src="http://localhost/digital_service/assets/images/portofolio/portofolio1.jpg" alt="" class="screen"> -->
																		<img src="<?php echo base_url('') ?>assets/images/portofolio/<?php echo $value['gambar'] ?>" alt="" class="screen">
																		<div class="overlay-content d-flex align-items-end">
																			<a href="<?php echo $value['link'] ?>" target="_blank" class="d-flex justify-content-between align-items-center" tabindex="0">
																				<span><?php echo $value['link'] ?></span>
																				<img src="<?php echo base_url('') ?>assets/images/icon/icon_28.svg" alt="<?php echo $value['gambar'] ?>">
																			</a>
																		</div>
																	</div>
																</div>
															<?php endforeach ?>
														</div>
														<div class="mt-4 py-4">
															<div class="d-flex justify-content-center">
																<nav aria-label="Page navigation example">
																	<ul class="pagination">
																		<li class="page-item"><a class="page-link" href="<?php echo $pagination['prev_page'] ?>">Previous</a></li>
																		<?php foreach ($pagination['links'] as $key => $value) {?>
																			<li class="page-item <?php 
																			if($pagination['current_page']==$key+1)
																			echo 'active'
																		?>"><a class="page-link" href="<?php echo $value['links'] ?>"><?php echo $key+1 ?></a></li>
																	<?php } ?>
																	<li class="page-item"><a class="page-link" href="<?php echo $pagination["next_page"] ?>">Next</a></li>
																</ul>
															</nav>
														</div>
														<h3 class="font-recoleta text-center">Dan Masih Banyak Lagi</h3>
													</div>
												</div>
											</div>
										</div>
									</div>

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
																	<a href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20Tanya%20info%20soal%20jasa%20Website/Toko%20Online/Apps/Landing%20Page." target="_blank" class="theme-btn-four ripple-btn">Yuk Diskusi</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php $this->load->view('website/v_footer') ?>