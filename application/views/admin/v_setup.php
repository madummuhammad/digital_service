<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Setup</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/admin/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendor/toastr/css/toastr.min.css">
	<link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body class="h-100">
	<div class="authincation h-100">
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100 align-items-center">
				<div class="col-md-6">
					<div class="authincation-content">
						<div class="row no-gutters">
							<div class="col-xl-12">
								<div class="auth-form">
									<h4 class="text-center mb-4">Selamat datang Admin</h4>
									<p class="text-center">Silahkan masukan email login admin dan kata sandi. Ingat kredensial login yang Anda perlukan nanti untuk masuk ke akun Anda. Setelah langkah ini, Anda akan diarahkan ke halaman login aplikasi.</p>
									<form action="<?php echo admin_url('login') ?>" method="POST">
										<?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
										<?php echo method('_post') ?>
										<div class="form-group">
											<label><strong>Admin Nama</strong></label>
											<input type="text" name="nama" class="form-control" value="">
										</div>
										<div class="form-group">
											<label><strong>Admin Email</strong></label>
											<input type="email" name="email" class="form-control" value="">
										</div>
										<div class="form-group">
											<label><strong>Admin Password</strong></label>
											<input type="password" name="password" class="form-control" value="">
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary btn-block">Sign Up <span class="spinner-border-sm"></span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="<?php echo base_url() ?>assets/admin/vendor/global/global.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/quixnav-init.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/custom.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/script.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/vendor/toastr/js/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
        <script type="text/javascript">
        	$(document).ready(function(){
        		<?php if (null !== $this->session->flashdata('message')): ?>
        			<?php if ($this->session->flashdata('message')=='success'): ?>
        				toastr.success("Mohon tunggu sebentar", "Setup Admin Berhasil", {
        					timeOut: 500000000,
        					closeButton: !0,
        					debug: !1,
        					newestOnTop: !0,
        					progressBar: !0,
        					positionClass: "toast-top-center",
        					preventDuplicates: !0,
        					onclick: null,
        					showDuration: "300",
        					hideDuration: "1000",
        					extendedTimeOut: "1000",
        					showEasing: "swing",
        					hideEasing: "linear",
        					showMethod: "fadeIn",
        					hideMethod: "fadeOut",
        					tapToDismiss: !1
        				})
        				setTimeout(function (){
        					window.location.href="<?php echo base_url('adminsystem/login') ?>";
        				}, 1000);
        			<?php endif ?>
        			<?php if ($this->session->flashdata('message')=='gagal'): ?>
        				toastr.error("Isi form dengan benar!", "Setup Admin Gagal", {
        					timeOut: 500000000,
        					closeButton: !0,
        					debug: !1,
        					newestOnTop: !0,
        					progressBar: !0,
        					positionClass: "toast-top-center",
        					preventDuplicates: !0,
        					onclick: null,
        					showDuration: "300",
        					hideDuration: "1000",
        					extendedTimeOut: "1000",
        					showEasing: "swing",
        					hideEasing: "linear",
        					showMethod: "fadeIn",
        					hideMethod: "fadeOut",
        					tapToDismiss: !1
        				})
        			<?php endif ?>
        		<?php endif ?>
        	})
        </script>
    </body>
    </html>