<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="PHP Simple Login with CodeIgniter Framework">
	<meta name="author" content="">

	<title>Simple Login - <?= ($page['title'] ?? 'Undefined'); ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= site_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

	<!-- Custom styles for this template-->
	<link href="<?= site_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view('components/navbar.php'); ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view('components/topbar.php'); ?>
				<!-- End topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid"> 

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800"><?= ($page['title'] ?? 'Undefined'); ?></h1>

					<?php if ($this->session->flashdata('success_message')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('success_message'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php elseif ($this->session->flashdata('error_message')) : ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error_message'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php else : ?>
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							Hello, <?= ($user['username'] ?? 'Guest'); ?>.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif; ?>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?php $this->load->view('components/footer.php'); ?>
			<!-- End of Footer -->

		</div>
		
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<?php $this->load->view('components/logoutModal.php'); ?>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>