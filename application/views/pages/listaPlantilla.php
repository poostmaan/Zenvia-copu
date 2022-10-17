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
                <div class="container-fluid animate__animated animate__backInUp">

                    <!-- Page Heading -->
                    <nav aria-label="breadcrumb bg-none">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Plantillas</li>
                        </ol>
                    </nav>

                    <h1 class="h3 mb-4 text-gray-800">Plantillas</h1>
                    <div class="d-flex justify-content-between"> 
                        <div><input type="text" placeholder="Buscar plantilla" class="form-control"></div>
                        <div><a href="<?= site_url('plantillas/crear'); ?>"><button class="btn btn-primary">Crear nueva plantilla</button></a></div>
                    </div>

                    <table class="table table-hover my-3">
                        <thead>
                            <tr>
                                <th scope="col">Id. plantilla</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ult. modificación</th>
                                <th scope="col">Opciones</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <th scope="row">98a7e70a-9bb5-492e-acca-0ad1ed28b7c1</th>
                                <td>Plantilla prueba</td>
                                <td>2022-10-10 15:11:30</td>
                                <td>
                                    <div class="btn-group">   
                                        <a href="<?= site_url('plantillas/modificar'); ?>"><button class="btn btn-success">Modificar</button></a>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal">X</button> 
                                    </div>
                                </td>
                            </tr> -->
                            <?php foreach ($page['listaPlantillas'] as $plantilla) { ?>
                            <tr>
                                <th scope="row"><?php echo $plantilla->id_plantilla;?></th>
                                <td><?php echo $plantilla->nombre;?></td>
                                <td><?php echo $plantilla->fecha_modificacion;?></td>
                                <td>
                                    <div class="btn-group">    
                                        <a href="<?= site_url('plantillas/modificar?id_plantilla='.$plantilla->id_plantilla); ?>"><button class="btn btn-success">Modificar</button></a>
                                        <a href="<?= site_url('plantillas/eliminar?id_plantilla='.$plantilla->id_plantilla); ?>">
                                            <button class="btn btn-danger">&times</button> 
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
        
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

    <?php $this->load->view('components/eliminarModal.php'); ?>   

    <!-- Bootstrap core JavaScript-->
    <script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>