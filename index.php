<?php
    require_once("modules/mod_menu/default.php");
    require_once("modules/mod_slide/default.php");
    require_once("modules/mod_formitarea/default.php");
    require_once("modules/mod_comentarios/default.php");
    require_once("modules/mod_preguntas/default.php");
    require_once("modules/mod_pasos/default.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tarea</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaQueries.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" integrity="sha512-jGR1T3dQerLCSm/IGEGbndPwzszJBlKQ5Br9vuB0Pw2iyxOy+7AK+lJcCC8eaXyz/9du+bkCy4HXxByhxkHf+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/slick.min.js"></script>
    <link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
    <script src="js/banner-slides.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>
    <div class="pagecolor">
        <header id="header">
            <div class="container">
                <?php displayMenus(); ?>
            </div>
        </header>
        <div class="contbanner">
            <div class="contmucha">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slidepri">
                                <?php displaySlideprin() ?>
                            </div>   
                            <div class="paises">
                                <h2>Estamos en toda <br> latinoamerica y el mundo</h2>
                                <img src="img/paises-mitarea.png" alt="">
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="titleform">
                                <h1>¿Qué trabajo necesitas?</h6>
                                <h6>Llena este formulario con tus datos, espera la cotización y recibe tu trabajo</h3>
                                <h4>¡Cotización gratis!</h4>
                            </div>
                            <?php displayFormitarea(); ?>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
        <div class="contamos">
            <h1>Contamos con <img src="img/mano2-mitarea.png" alt=""></h1>
            <div class="container iconosmitarea">
                <div class="conticonmitarea">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 "><img src="img/asesores-mitarea.png" alt=""><h3>400+</h3><span>Asesores</span></div>
                        <div class="col-6 col-sm-6 col-md-3"><img src="img/estudiantes-mitarea.png" alt=""><h3>30.000+</h3><span>Estudiantes</span></div>
                        <div class="col-6 col-sm-6 col-md-3"><img src="img/asesorias-mitarea.png" alt=""><h3>10.000+</h3><span>Asesorias <br> exitosas</span></div>
                        <div class="col-6 col-sm-6 col-md-3"><img src="img/seguidores-mitarea.png" alt=""><h3>50.000+</h3><span>Seguidores</span></div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="opremitarea container">
            <div class="row">
                <div class="col-lg-6 opinionesmi">
                    <div class="comentarios container-fluid" id="comentariosPage">
                        <h1><img src="img/mano3-mitarea.png" alt=""> Opiniones</h1>
                        
                        <div class="contcomentarios">
                            <?php displayCometarios() ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php displayPreguntas() ?>
                </div>
            </div>    
        </div>
        <a href="" class="cta"><img src="img/mano4-mitarea.png" alt="">Cotizar Aquí</a>
        <div class="comofuncionahome container">
            <?php displaypasoshome(); ?>
        </div>    
        <a href="" class="cta"><img src="img/mano4-mitarea.png" alt="">Cotizar Aquí</a>
        <div class="videohome container">
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/f6ileqYq27I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tesis-mitarea">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 "><h1>Te asesoramos en la realización de tu propuesta de grado</h1>
                    <a href="" class="cta"><img src="img/mano4-mitarea.png" alt="">Cotizar Aquí</a>
                </div>
                    <div class="col-md-6"> <img src="img/mitarea-tesis.png" alt="" class="imgasesoriahome"> </div>
                </div>
            </div>      
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 queesmitarea">
                        <img src="img/icon-mitarea.png" alt="" class="iconblamitarea">
                        <p>MI TAREA es una plataforma que conecta a Estudiantes Universitarios que necesitan asesoría, orientación y apoyo con la realización de sus tareas, trabajos y/o proyectos.
                        <br> Realizamos ensayos, talleres, proyectos, mapas conceptuales, tesis, artículos, anteproyectos, trabajos de grado y mucho más  💪</p>
                        <h3><i class="fab fa-whatsapp"></i> +57 321 5209276 <i class="fas fa-envelope"></i> info@mitarea.co</h3>
                        <img src="img/acompanamiento.png" alt="">
                    </div>
                    <div class="col-md-6 metodoshome">
                        <h1><img src="img/bombillo-mitarea.png" alt=""> Métodos de pago</h1>
                        <img src="img/metodos-de-pago-mitarea.png" alt="" class="imgmetodos">
                    </div>
                </div>
                <div class="contlogos">
                    <div class="row">
                            <div class="col-6 col-sm-3"><img src="img/gobierno-de-colombia.png" alt=""></div>
                            <div class="col-6 col-sm-3"><img src="img/codaltec.png" alt=""></div>
                            <div class="col-6 col-sm-3"><img src="img/suricata.png" alt=""></div>
                            <div class="col-6 col-sm-3"><img src="img/halltec.png" alt=""></div>
                    </div>   
                </div>     
            </div>
            <a href="#header"><img src="img/regresar-mitara.png" alt="" class="regrearriba"></a>
        </footer>
    </div>    
    
    <script src="js/comentarios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>

</html>