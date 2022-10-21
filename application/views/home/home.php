<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stalkeo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="./css/web.css"> -->
    <link href="<?= site_url('public/css/web.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://static.whatsapp.net/rsrc.php/v3/yP/r/rYZqPCBaG70.png">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</head> 

<body>

    <div class="main">
        <nav>
            <div class="whatsapp_logo part_nav"> 

                <a href="whatsapp web.html">
                    <!-- <img src="https://static.whatsapp.net/rsrc.php/v3/yP/r/rYZqPCBaG70.png" alt="whatsapp_logo" width="40px" height="40px"> -->
                    <span>Stalkeo</span>
                </a>
            </div>
            <ul class="nav_options part_nav">

                <!-- <li><a href="#">WHATSAPP WEB</a></li>
                <li><a href="#">FEATURES</a></li>
                <li><a href="#">DOWNLOAD</a></li> -->
                <li class="px-2"><a href="#">DESCARGAR</a></li>  
                <li class="px-2"><a href="<?php echo $_SERVER['REQUEST_URI'] . 'login'; ?>">INGRESAR</a></li>
                <!-- <li class="dropdown_main"><i class="fas fa-globe"></i> <span> EN <i class="fas fa-sort-down"></i></span>
                </li> -->
            </ul>
            <!-- The navigation bar at mobile screen -->
            <div class="short_nav">
                <span id="dropdown"><i class="fas fa-bars"></i>
                    <ul>
                        <!-- <a href="#"> 
                            <li>WHATSAPP WEB</li>
                        </a>
                        <a href="#">
                            <li>FEATURES</li>
                        </a>
                        <a href="#">
                            <li>DOWNLOAD</li>
                        </a> -->
                        <a href="#">
                            <li>DESCARGAR</li>
                        </a>
                        <a href="#">
                            <li>INGRESAR</li>
                        </a>
                        <!-- <li class="dropdown_main"><i class="fas fa-globe"></i> <span> EN <i class="fas fa-sort-down"></i></span></li> -->
                    </ul>
                </span>
                <!-- <p><a href="whatsapp web.html"><img src="https://static.whatsapp.net/rsrc.php/v3/yP/r/rYZqPCBaG70.png" alt="whatsapp_logo" width="70px" height="70px"></a> <br> WhatsApp</p> -->

            </div>
        </nav>

        <div class="content_body">

            <div class="upper_content">

                <div class="simple_intro">
                    <h2>Simple. Seguro.<br>Mensajeria Confiable.</h2>
                    <p>
                            Con Stalkeo, la mensajería y las llamadas son rápidas, simples, seguras y gratuitas*, disponibles en teléfonos alrededor del mundo.
                        <br> 
                        <br>
                        <!-- <span id="highlight_detail">
                            * Data charges may apply. Contact your provider for details.
                        </span> -->
                    </p>

                    <ul class="details_list">
                        <li><a href="#"><i class="fab fa-android"></i> &nbsp Android</a></li>
                        <!-- <li><a href="#"><i class="fab fa-apple"></i> &nbsp Iphone</a></li>
                        <li><a href="#"><i class="fas fa-desktop"></i> &nbsp Mac or
                                Windows PC</a></li>
                        <li><a href="#"><i class="fab fa-windows"></i> &nbsp Windows Phone</a></li> -->
                    </ul>
                </div>
                <div class="mobile_image">
                    <img src="<?= site_url('public/img/mobile.png'); ?>" alt="Mobile Whatsapp">
                </div>
            </div>
            <div class="lower_content">

                <div class="lower_first">

                    <h2>Stalkeo Business App</h2> 
                    <p>
                        <a href="#" class="marked_business">Stalkeo Business</a> es una aplicación de descarga gratuita desarrollada especialmente para pequeñas empresas. Crea un catálogo para mostrar tus productos y servicios. Conéctate fácilmente con tus clientes gracias a las herramientas que te permiten automatizar, organizar y responder con rapidez los mensajes.

Stalkeo también puede ser útil para las empresas medianas y grandes, ya que pueden usarlo para brindar asistencia y enviar notificaciones importantes a sus clientes. Obtén más información sobre la API de Stalkeo Business.</a>.
                    </p>
                    <br>
                    <img src="<?= site_url('public/img/mobile 2.png'); ?>" alt="image of mobile">
                </div>

                <div class="lower_second">

                    <div class="animated_box">
                        <div id="box_animation">
                            <p>Hola!<i class="fas fa-grin-hearts"></i></p>
                        </div>

                    </div>
                    <p>CIFRADO DE EXTREMO A EXTREMO</p>
                    <h2>Seguridad automática</h2> 
                    <p>
                        Algunos de tus momentos más personales se comparten a través de Stalkeo; es por ello que desarrollamos el cifrado de extremo a extremo en las versiones más recientes de nuestra aplicación. Con el cifrado de extremo a extremo, tus mensajes y llamadas están protegidos para que solo las personas con las que te comunicas los puedan leer o escuchar sin que nadie más, ni siquiera Stalkeo, lo pueda hacer.
                    </p>
                </div>

            </div>
            <!-- <div class="explore_button">
                <a href="#">EXPLORE FEATURES</a>
            </div> -->
        </div>
        <footer class="">
            <!-- <br> -->
            <!-- <div class="bottom_options">
                <ul>
                    <h4>whatsapp</h4>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">WhatsApp Web</a></li>
                    <li><a href="#">business</a></li>
                </ul>
                <ul>
                    <h4>company</h4>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Brand Center</a></li>
                    <li><a href="#">Get In Touch</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
                <ul>
                    <h4>download</h4>
                    <li><a href="#">Mac/PC</a></li>
                    <li><a href="#">Android</a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Windows
                            Phone</a></li>
                    <li><a href="#">Nokia</a></li>
                </ul>
                <ul>
                    <h4>help</h4>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Twiter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div> -->
            <div class="bottom_line">
                <p>2022 &copy; Stalkeo</p>
                <p>Producto por<a href="#"> Neoaplicaciones</a></p>
            </div>
        </footer>

    </div>


</body>

</html>