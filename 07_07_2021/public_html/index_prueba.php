<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('estebanjuarezfotografia@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php#form1-4");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Ruesch-Esquivel www.ruesch-esquivel.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Esteban Juarez Fotografía</title>
  
  <link rel="shortcut icon" href="assets/images/isologotipo-233x128-33.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="contact.css" />
  
  <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
  
</head>
<body>
<section id="ext_menu-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="navbar-logo"><img src="assets/images/isologotipo-233x128-33.png" alt=""></a>
                        <a class="navbar-caption text-black" href="index.php">FOTOGRAFÍA</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="#msg-box3-2">PORTFOLIO</a></li><li class="nav-item"><a class="nav-link link" href="#form1-4">CONTACTO</a></li><li class="nav-item"><a class="nav-link link" href="https://www.facebook.com/#estebanjuarezfotografia#”><span class="socicon socicon-facebook mbr-iconfont mbr-iconfont-btn"></span></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="#">carousel</a></section><section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="10000" id="slider-1">
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="0" class="active"></li><li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider-1" class="" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" style="background-image: url(assets/images/slider-equipos-2000x1324-88.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">Equipos</h2>
                                        <p class="mbr-section-lead lead">Iluminación de estudio, ópticas de primeras líneas y accesorios profesionales para &nbsp;lograr la mayor calidad en todos nuestros trabajos.<br></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full beneficios" data-bg-video-slide="false" ">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay" style="opacity: 0.5;"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">Beneficios</h2>
                                        <p class="mbr-section-lead lead">Unas fotografías profesionales de tu local o propiedades pueden ser decisivas para cerrar una venta o un alquiler.<br></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/slider-exteriores-2000x1324-69.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">Producción en<br>Locacion o Exteriores</h2>
                                        <p class="mbr-section-lead lead">Llevamos nuestro equipamiento de estudio y el material generado es revisado al momento (equipo de captura y preview). El cliente tiene una visión real del desarrollo de las tomas.<br></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/slider-trabajo-2000x1324-0.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay" style="opacity: 0.5;"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">Forma de Trabajo</h2>
                                        <p class="mbr-section-lead lead">Entregamos las imágenes con la calidad contratada a través de sistema de carpetas &nbsp;compartidas en la nube o reveladas en mano. Si precisas retoques para preimpresión, pedinos presupuesto sin compromiso.<br></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full estudio" data-bg-video-slide="false" >
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay" style="opacity: 0.4;"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">Producción en estudio</h2>
                                        <p class="mbr-section-lead lead">Ofrecemos la realización fotografica en nuestro estudio con el mejor equipo dispuesto para obtener la imagen deseada sin costo adicional.<br></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-1">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-1">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(242, 242, 242); padding-top: 80px; padding-bottom: 40px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Imágenes que inspiran</h3>
                <div class="lead"><p><em>Fotografía de Moda |&nbsp;</em><em>Sociales |&nbsp;</em><em>Fotografía Publicitaria | P</em><em>hoto Book |&nbsp;</em><em>Fiestas de 15 Años</em></p></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-3" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="0" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-7729-editar-2000x2800-93-800x1120-74.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="1" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-2156-editar-2-editar-2000x1289-79-800x515-4.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="2" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-0337-editar-2000x1333-98-800x533-31.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="3" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-9966-editar-2000x3000-87-800x1200-21.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="4" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-0003-editar-2000x2987-64-800x1194-2.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="5" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-1676-editar-2000x2804-92-800x1121-94.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Beautiful" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="6" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-2336-editar-2000x2999-75-800x1199-7.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="7" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc1030-2000x2804-73-800x1121-24.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="8" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-2484-editar-2000x1333-96-800x533-99.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="9" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/sin-ttulo-8637-2000x1431-14-800x572-18.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="10" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-2546-editar-2000x1331-91-800x532-96.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="11" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-6629-editar-2000x3000-75-800x1200-43.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="12" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-3017-editar-2000x1429-13-800x571-2.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="13" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-8601-editar-2000x3000-98-800x1200-83.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="14" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-2556-2000x1333-50-800x533-36.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-3" data-slide-to="15" data-toggle="modal">
                            
                            

                            <img alt="" src="assets/images/dsc-3368-editar-2000x1324-93-800x529-73.jpg">
                            
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="7"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="8"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="9"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="10"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="11"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="12"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" class=" active" data-slide-to="13"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="14"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="15"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img alt="" src="assets/images/dsc-7729-editar-2000x2800-93.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-2156-editar-2-editar-2000x1289-79.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-0337-editar-2000x1333-98.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-9966-editar-2000x3000-87.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-0003-editar-2000x2987-64.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-1676-editar-2000x2804-92.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-2336-editar-2000x2999-75.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc1030-2000x2804-73.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-2484-editar-2000x1333-96.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/sin-ttulo-8637-2000x1431-14.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-2546-editar-2000x1331-91.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-6629-editar-2000x3000-75.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-3017-editar-2000x1429-13.jpg">
                        </div><div class="carousel-item active">
                            <img alt="" src="assets/images/dsc-8601-editar-2000x3000-98.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-2556-2000x1333-50.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/dsc-3368-editar-2000x1324-93.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-3">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-3">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="form1-4" style="background-color: rgb(255, 255, 255); padding-top: 160px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">CONTACTO</h3>
                    <small class="mbr-section-subtitle">Envianos tus datos y nos comunicaremos con vos a la brevedad.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">


                    <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' data-form-title="CONTACTO">

                        <input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
						
						<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for='name' >Nombre<span class="form-asterisk">*</span></label><br/>
									<input class="form-control" type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
									<span id='contactus_name_errorloc' class='error'></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
									<label class="form-control-label" for='email' >Email<span class="form-asterisk">*</span></label><br/>
									<input class="form-control" type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
									<span id='contactus_email_errorloc' class='error'></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
									<label class="form-control-label" for='tel' >Teléfono<span class="form-asterisk">*</span></label><br/>
									<input class="form-control" type='tel' name='tel' id='tel' value='<?php echo $formproc->SafeDisplay('tel') ?>' maxlength="50" /><br/>
									<span id='contactus_email_errorloc' class='error'></span>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
							<label class="form-control-label" for='message' >Mensaje<span class="form-asterisk">*</span></label><br/>
							
							<span id='contactus_message_errorloc' class='error'></span>
							<textarea class="form-control" name='message' rows="7" id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                        </div>

						<div><input class="btn btn-black" type='submit' name='Submit' value='ENVIAR' /></div>

                    </form>
					
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-5" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">(c) 2017 Esteban Juarez Fotografía.</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  <script type='text/javascript'>
	// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Por favor ingrese su nombre");

    frmvalidator.addValidation("email","req","Por favor ingrese su correo");

    frmvalidator.addValidation("email","email","Por favor ngrese un correo válido");

    frmvalidator.addValidation("message","maxlen=2048","Mensaje demasiado largo");

	// ]]>
  </script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>