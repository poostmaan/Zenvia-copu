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
    <link href="<?= site_url('public/css/createPlantilla.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('components/topbar.php'); ?>
                <!-- End topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb p-0 m-0 bg-light">
                            <li class="breadcrumb-item"><a href="<?= site_url('home'); ?>">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Plantillas</li>
                            <li class="breadcrumb-item active" aria-current="page">Crear Plantilla</li>
                        </ol>
                    </nav>

                    <h1 class="h3 p-0 my-1 text-gray-800"><?= ($page['title'] ?? 'Undefined'); ?></h1>

                    <!-- JQUERY STEP -->
                    
                    <div class="wrapper">
                        <?= form_open('plantillas/crear', ['class' => 'plantilla']); ?> 
                            <div id="wizard">
                                <!-- SECTION 1 -->
                                <h4></h4>
                                <section> 
                                        <!-- <span>Complete la configuración necesaria para crear una plantilla. </span>  -->
                                    <div class="form-row"> <input type="text" name="nombre" class="form-control <?= (form_error('nombre') ? 'is-invalid' : ''); ?>" placeholder="Nombre plantilla"> </div> 
                                    <div class="form-row"> 
                                    <select 
                                        class="form-control <?= (form_error('sender_ir') ? 'is-invalid' : ''); ?>" 
                                        name="sender_id"
                                    >
                                        <option id="0" selected>Selecciona el telefono que envia</option>
                                        <option id="1">+584243901992</option>
                                    </select> </div>
                                </section> <!-- SECTION 2 --> 
                                <h4></h4>
                                <section>
                                    <div class="d-flex border p-4">
                                        <div class="mr-2">
                                            <input type="hidden" name="tipo_mensaje" id="" value="simple"> 
                                            <input type="checkbox" name="" id="" checked>
                                        </div>
                                        <div><span>Plantilla Simple</span></div> 
                                    </div>
                                </section> <!-- SECTION 3 -->
                                <h4></h4>
                                <section> 
                                    <div><p class="m-0">Ingrese el contenido que desea que tenga su mensaje</p></div> 
                                    <div>
                                        <textarea class="form-control <?= (form_error('mensaje') ? 'is-invalid' : ''); ?>" name="mensaje" id="" cols="30" rows="5" placeholder="Escribe justo aqui..."></textarea>
                                    </div>
                                </section> <!-- SECTION 4 -->
                                <h4></h4>
                                <section> 
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                    </svg>
                                    <p class="success">Tu plantilla sera guardada como <b>Plantilla prueba</b>, gestiona todas tus plantillas en la página de plantillas</p>
                                    <button type="submit" class="btn btn-success">Guardar y cerrar</button>
                                </section>  
                            </div>
                        <?= form_close(); ?>
                    </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

    <script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>

    <script>
        $(function() {
            $("#wizard").steps({
                headerTag: "h4",
                bodyTag: "section",
                transitionEffect: "fade",
                enableAllSteps: true,
                transitionEffectSpeed: 500,
                onStepChanging: function(event, currentIndex, newIndex) {
                    if (newIndex === 1) {
                        $('.steps ul').addClass('step-2');
                    } else {
                        $('.steps ul').removeClass('step-2');
                    }
                    if (newIndex === 2) {
                        $('.steps ul').addClass('step-3');
                    } else {
                        $('.steps ul').removeClass('step-3');
                    }

                    if (newIndex === 3) {
                        $('.steps ul').addClass('step-4');
                        $('.actions ul').addClass('step-last');
                    } else {
                        $('.steps ul').removeClass('step-4');
                        $('.actions ul').removeClass('step-last');
                    } 
                    return true;
                },
                labels: { 
                    // finish: "<button></button>",
                    next: "Siguiente",
                    previous: "Regresar" 
                }
            });
            // Custom Steps Jquery Steps
            $('.wizard > .steps li a').click(function() {
                $(this).parent().addClass('checked');
                $(this).parent().prevAll().addClass('checked');
                $(this).parent().nextAll().removeClass('checked');
            });
            // Custom Button Jquery Steps
            $('.forward').click(function() {
                $("#wizard").steps('next');
            })
            $('.backward').click(function() {
                $("#wizard").steps('previous');
            })
            // Checkbox
            $('.checkbox-circle label').click(function() {
                $('.checkbox-circle label').removeClass('active');
                $(this).addClass('active');
            }) 

            // $('#wizard-p-3').append('<button type="submit" class="btn btn-success">Guardar y cerrar</button>')

        })
    </script>
</body>

</html>