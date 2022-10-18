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
                <div class=" animate__animated animate__backInUp"> 

                    <div class="container-fluid"> 
    
                        <!-- Page Heading -->
                        <nav aria-label="breadcrumb bg-none">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= site_url('plantillas'); ?>"><i class="fas fa-long-arrow-alt-left"></i> Regresar</a></li>
                            </ol>
                        </nav>
    
                        <h1 class="h3 mb-4 text-gray-800">Modificar Plantilla</h1>
                    </div>
    
                    <div class="bg-white">
                        <div class="container">
                            
                            
                            <?php foreach ($page['plantilla'] as $plantilla) { ?>
                            <div class="row py-4">
                                <div class="col-md-3">
                                    <div class="font-weight-bold"><span>Nombre Plantilla</span></div>
                                    <div><span><?php echo $plantilla->nombre;?></span></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="font-weight-bold"><span>ID. Plantilla</span></div>
                                    <div><span><?php echo $plantilla->id_plantilla?></span></div>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-md-3">
                                    <div class="font-weight-bold"><span>Sender ID</span></div>
                                    <div><span><?php echo $plantilla->sender_id?></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="font-weight-bold"><span>Creación</span></div>
                                    <div><span><?php echo $plantilla->fecha_creacion;?></span></div> 
                                </div>
                                <div class="col-md-3"> 
                                    <div class="font-weight-bold"><span>Ult. Modificación</span></div>
                                    <div><span><?php echo $plantilla->fecha_modificacion?></span></div>
                                </div>
                            </div>
                            
    
                        </div>
                    </div>
    
                    <div class="container">
                        <h4 class="my-3">Cuerpo del mensaje</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Escribe justo aqui..."><?php echo $plantilla->mensaje;?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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