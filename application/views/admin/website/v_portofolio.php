									<?php $this->load->view('admin/website/v_header') ?>
									<?php $this->load->view('admin/website/v_navbar') ?>
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
											<div class="d-flex justify-content-center">
												<button class="mx-1" data-bs-toggle="modal" data-bs-target="#portofolioedit<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></button>
												<button class="mx-1" data-bs-toggle="modal" data-bs-target="#portofoliodelete<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
											</div>
										</div>
										<div class="modal fade" tabindex="-1" id="portofolioedit<?php echo $value['id'] ?>">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<form action="<?php echo admin_url('website/portofolio') ?>" method="POST" enctype="multipart/form-data">
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
																	<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/portofolio/<?php echo $value['gambar'] ?>" alt="<?php echo $value['gambar'] ?>" data-toggle="gambar">
																	<input type="file" name="gambar" class="form-control">
																	<label for="" class="mt-2">Link</label>
																	<input type="text" name="link" class="form-control mt-2" value="<?php echo $value['link'] ?>">
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary">Simpan</button>
														</div>
													</form>
												</div>
											</div>
										</div>
										<form action="<?php echo admin_url('website/portofolio') ?>" method="POST">
											<div class="modal fade" id="portofoliodelete<?php echo $value['id'] ?>">
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
															<button type="submit" class="btn btn-outline-primary">Hapus</button>
															<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									<?php endforeach ?>
								</div> <!-- /.mixitUp-container -->
								<div class="d-flex justify-content-center">
									<button class="mx-1 mt-4" data-bs-toggle="modal" data-bs-target="#portofoliotambah"><i class="fas fa-plus"></i> Tambah Portofolio</button>
								</div>
								<div class="modal fade" tabindex="" id="portofoliotambah">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<form action="<?php echo admin_url('website/portofolio') ?>" method="POST" enctype="multipart/form-data">
												<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
												<?php echo method('_post') ?>
												<div class="modal-header">
													<h5 class="modal-title">Tambah Portofolio</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-12">
															<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/portofolio/default.png" alt="" data-toggle="gambar">
															<input type="file" name="gambar" class="form-control">
															<label for="" class="mt-2">Link</label>
															<input type="text" name="link" class="form-control mt-2">
															<label for="" class="mt-2">Kategori</label>
															<select class="form-select mt-2" aria-label="Default select example" name="jenis">
																<option selected>Pilih Kategori</option>
																<?php foreach ($jenis_portofolio as $key => $value): ?>
																	<option value="<?php echo $value['id_jenis'] ?>"><?php echo $value['jenis'] ?></option>
																<?php endforeach ?>
															</select>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
											</form>
										</div>
									</div>
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
				<?php $this->load->view('admin/website/v_footer') ?>