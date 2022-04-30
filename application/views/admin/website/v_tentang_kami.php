<?php $this->load->view('admin/website/v_header') ?>
<?php $this->load->view('admin/website/v_navbar') ?>
<!--=============================================
				Inside Page Banner
				============================================== -->
				<div class="inside-hero-two" style="background-image: url(<?php echo base_url('') ?>assets/images/media/img_46.jpg);">
					<div class="container">
						<h2 class="page-title">Tentang Kami</h2>
						<p>Developer web berpengalaman, menggabungkan imajinasi dan teknologi untuk membuat visi digital Anda menjadi nyata</p>
					</div>
					<img src="images/shape/shape_24.svg" alt="" class="shapes shape-one">
				</div> <!-- /.inside-hero-two -->

			<!--
			=====================================================
				Vcamp Text Block Five
			=====================================================
		-->
		<div class="vcamp-text-block-five mt-170 lg-mt-120">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xxl-6 col-xl-7 col-lg-5">
						<div class="text-wrapper">
							<div class="title-style-five">
								<!-- <div class="upper-title">About us</div> -->
								<h2 class="title">Talenta digital dengan passion global</h2>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 ms-auto">
						<div class="accordion accordion-style-one md-mt-40" id="accordionOne">
							<div class="accordion-item">
								<div class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Siapa kami ?
									</button>
								</div>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Aggregator website yang berkolaborasi dengan developer pilihan dari beberapa agency website/apps ternama dan berpengalaman.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Apa Visi kami ?
									</button>
								</div>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Membantu bisnis dan organisasi Indonesia untuk semakin berdaya dan relevan secara digital, serta terus berkembang dengan aplikasi teknologi secara kreatif.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<div class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Value Kami
									</button>
								</div>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Customer First. Invest on Best Talent & Go to extra mile to deliver awesome service</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.vcamp-text-block-five -->

					<!--
			=====================================================
				Vcamp Fancy Banner Two
			=====================================================
		-->
		<div class="container">
			<div class="fancy-banner-two sm mt-170 lg-mt-100" data-aos="fade-up">
				<div class="inner-content h-100 position-relative d-flex align-items-center justify-content-center">
					<!-- <a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
						<img src="<?php echo base_url('') ?>assets/images/icon/icon_43.svg" alt="">
					</a> -->
				</div>
			</div>
		</div>

      <!--=====================================================
        Counter Section One
        =====================================================-->
        <div class="counter-section-one mt-170 md-mt-120">
        	<div class="inner-container">
        		<div class="row">
        			<button data-bs-toggle="modal" data-bs-target="#counter"><i class="fas fa-edit"></i></button>
        			<div class="col-lg-4 col-sm-6" data-aos="fade-up">
        				<div class="counter-block-one text-center mb-45">
        					<div class="main-count font-recoleta"><span class="counter"><?php echo $counter['satu'] ?></span></div>
        					<p class="theme-mb-0">Website & Toko Online</p>
        				</div> <!-- /.counter-block-one -->
        			</div>
        			<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
        				<div class="counter-block-one text-center mb-45">
        					<div class="main-count font-recoleta"><span class="counter"><?php echo $counter['dua'] ?></span></div>
        					<p class="theme-mb-0">Custom Apps & Software</p>
        				</div> <!-- /.counter-block-one -->
        			</div>
        			<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
        				<div class="counter-block-one text-center mb-45">
        					<div class="main-count font-recoleta"><span class="counter"><?php echo $counter['tiga'] ?></span></div>
        					<p class="theme-mb-0">Klien yang puas</p>
        				</div> <!-- /.counter-block-one -->
        			</div>
        		</div>
        	</div>
        </div>
        <div class="modal fade" tabindex="-1" id="counter">
        	<div class="modal-dialog modal-dialog-centered modal-lg">
        		<div class="modal-content">
        			<form action="<?php echo admin_url('website') ?>" method="POST">
        				<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        				<?php echo method('_counter') ?>
        				<div class="modal-header">
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        				</div>
        				<div class="modal-body">
        					<div class="row">
        						<div class="col">
        							<label for="">Website & Toko Online</label>
        							<input type="text" class="form-control" name="value1" value="<?php echo $counter['satu'] ?>">
        						</div>
        						<div class="col">
        							<label for="">Custom Apps & Software</label>
        							<input type="text" class="form-control" name="value2" value="<?php echo $counter['dua'] ?>">
        						</div>
        						<div class="col">
        							<label for="">Klien yang puas</label>
        							<input type="text" class="form-control" name="value3" value="<?php echo $counter['tiga'] ?>">
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

			<!-- 
			=============================================
				Vcamp Feature Section Five
			============================================== 
		-->
		<div class="vcamp-feature-section-five mt-100 lg-mt-80">
			<div class="feature_slider_one">
				<div class="item">
					<div class="card-style-five">
						<img src="<?php echo base_url('') ?>assets/images/media/img_41.jpg" alt="" class="img-meta">
						<div class="hover-content">
							<h3 class="font-recoleta title"><a >Wordpress Expert</a></h3>
							<p>Pakar wordpress yang bekerja dengan premium plugin untuk mengeksekusi desain & fitur custom web Anda</p>
						</div>
					</div> <!-- /.card-style-five -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="card-style-five">
						<img src="<?php echo base_url('') ?>assets/images/media/img_42.jpg" alt="" class="img-meta">
						<div class="hover-content">
							<h3 class="font-recoleta title"><a >Value for Business</a></h3>
							<p>Tim kami akan mendesain website/apps sesuai profil dan market bisnis Anda termasuk ragam fitur bisnis di dalamnya.</p>
						</div>
					</div> <!-- /.card-style-five -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="card-style-five">
						<img src="<?php echo base_url('') ?>assets/images/media/img_43.jpg" alt="" class="img-meta">
						<div class="hover-content">
							<h3 class="font-recoleta title"><a >Security & Support</a></h3>
							<p>Kami menjaga website tetap stabil & aman. Begitu juga melayani update fitur & content</p>
						</div>
					</div> <!-- /.card-style-five -->
				</div> <!-- /.item -->
				<div class="item">
					<div class="card-style-five">
						<img src="<?php echo base_url('') ?>assets/images/media/img_44.jpg" alt="" class="img-meta">
						<div class="hover-content">
							<h3 class="font-recoleta title"><a >Best Framework for Apps</a></h3>
							<p>Kami membuat ERP, Online Courses, Sales tracking dashboard, HRIS dan lainnya. Dengan teknologi & framework terkini.</p>
						</div>
					</div> <!-- /.card-style-five -->
				</div> <!-- /.item -->
			</div>
		</div> <!-- /.vcamp-feature-section-five -->

			<!--
			=====================================================
				Partner Section Three
			=====================================================
		-->
		<div class="partner-section-three mt-200 lg-mt-120">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-4 col-md-8">
						<div class="title-style-one">
							<h2 class="title">Partner kami untuk <span>pertumbuhan</span> bisnis Anda.</h2>
						</div>
					</div>

					<div class="col-xl-6 col-lg-7 ms-auto">
						<p class="info-text">Boosting up website Anda dengan layanan Digital Marketing Partner Kami</p>
						<div class="row">
							<?php foreach ($partner as $key => $value): ?>
								<div class="col-sm-4 col-6">
									<div class="logo d-flex align-items-center mb-4"><a><img src="<?php echo base_url('') ?>assets/images/logo/<?php echo $value['logo'] ?>" alt="" class="tran3s"></a></div>
									<div class="d-flex">
										<button class="mx-1" data-bs-toggle="modal" data-bs-target="#partner<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></button>
										<button class="mx-1" data-bs-toggle="modal" data-bs-target="#partnerdelete<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
									</div>
								</div>
							<?php endforeach ?>
							<div class="col-sm-4 col-6 d-flex align-items-center">
								<button class="mx-1" data-bs-toggle="modal" data-bs-target="#partnertambah"><i class="fas fa-plus"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.partner-section-three -->
		<?php foreach ($partner as $row => $value): ?>
			<div class="modal fade" tabindex="-1" id="partner<?php echo $value['id'] ?>">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<form action="<?php echo admin_url('website/tentang_kami/partner') ?>" method="POST" enctype="multipart/form-data">
							<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
							<?php echo method('_patch') ?>
							<?php echo get_id($value['id']) ?>
							<div class="modal-header">
								<h5 class="modal-title">Edit Partner</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-12">
										<img class="img-fluid" src="<?php echo base_url('') ?>assets/images/logo/<?php echo $value['logo'] ?>" alt="" data-toggle="gambar">
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
			<form action="<?php echo admin_url('website/tentang_kami/partner') ?>" method="POST">
				<div class="modal fade" id="partnerdelete<?php echo $value['id'] ?>">
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
		<div class="modal fade" tabindex="-1" id="partnertambah">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form action="<?php echo admin_url('website/tentang_kami/partner') ?>" method="POST" enctype="multipart/form-data">
						<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
						<?php echo method('_post') ?>
						<div class="modal-header">
							<h5 class="modal-title">Tambah Klien</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<img data-toggle="gambar" class="img-fluid w-25 mb-4" src="<?php echo base_url('') ?>assets/images/logo/default.png" alt="">
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
				Feedback Section Nine
				=====================================================-->
				<div class="feedback-section-nine box-layout mt-200 lg-mt-120">
					<div class="bg-wrapper">
						<div class="container">
							<div class="row align-items-center justify-content-between">
								<div class="col-xl-7 col-lg-6 col-md-8 m-auto">
									<div class="title-style-one text-center">
										<h2 class="title">Mengapa Memilih Kami ?</h2>
									</div>
								</div>
							</div>
						</div>

						<div class="feedback_slider_seven">
							<div class="item">
								<div class="testimonial-block-one">
									<div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_15.svg" alt=""></div>
									<blockquote class="fs-5">
										Kami bukan generalis. Kami hanya menawarkan layanan dimana kami ahli di dalamnya : Web Design, Web Development, Custom Apps + Software Development
									</blockquote>
									<div class="name fs-6 fw-bold">Kami Adalah Spesialis</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-block-one">
									<div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_15.svg" alt=""></div>
									<blockquote class="fs-5">
										Kami peduli dengan dampak pekerjaan kami terhadap bisnis atau organisasi Anda—bukan bagaimana tampilannya dalam portofolio kami atau dalam "showcase" penghargaan.
									</blockquote>
									<div class="name fs-6 fw-bold">Fokus Pada Hasil</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-block-one">
									<div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_15.svg" alt=""></div>
									<blockquote class="fs-5">
										Kami membatasi jumlah klien yang kami terima setiap tahun untuk memastikan setiap klien memiliki customer experience yang baik. Kami siap merespon dengan cepat.
									</blockquote>
									<div class="name fs-6 fw-bold">Kami Responsive</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-block-one">
									<div class="icon d-flex align-items-center justify-content-center"><img src="<?php echo base_url('') ?>assets/images/icon/icon_15.svg" alt=""></div>
									<blockquote class="fs-5">
										Profesional itu wajib. Lebih dari itu kami memandang bekerja sama dengan Anda layaknya partner bisnis. Kami mencoba terus mengupdate Anda dengan "digital best.
									</blockquote>
									<div class="name fs-6 fw-bold">Kami Bekerja Ekstra</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.feedback-section-nine box-layout -->

			<!--=====================================================
				Vcamp Fancy Banner Three
				=====================================================-->
				<div class="box-layout mt-30 lg-mt-120 mb-50">
					<div class="fancy-banner-three">
						<div class="inner-content position-relative">
							<div class="mx-4">
								<div class="row align-items-center">
									<div class="col-xxl-6 col-lg-6 col-md-6">
										<h2 class="title font-recoleta text-center text-md-start fs-50px">Punya ide project ?</h2>
									</div>
									<div class="col-lg-6 col-md-6 d-flex justify-content-md-end justify-content-center flex-column">
										<p class="text-white">Atau ada pertanyaan yang buat penasaran ?</p>
										<a target="_blank" href="https://api.whatsapp.com/send?phone=6287886822468&text=Halo%20Ansol.Dev,%20saya%20mau%20Tanya%20info%20soal%20jasa%20Website/Toko%20Online/Apps/Landing%20Page." class="theme-btn-four ripple-btn sm-mt-30">Yuk Diskusi</a>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- /.fancy-banner-three -->
				</div>
				<?php $this->load->view('admin/website/v_footer') ?>