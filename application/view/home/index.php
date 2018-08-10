<!DOCTYPE html> 
<html>
   <head>
      <title>Rookye</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      <style> .rokye{
         text-transform:uppercase;
         color:#0c0818;
         font-family: "Rhinos";
         font-size: 24px;
         }
         body {
         position: relative;
         }
         .affix {
         top:0;
         width: 100%;
         z-index: 9999 !important;
         }
         .navbar {
         margin-bottom: 0px;
         }
         .affix ~ .container-fluid {
         position: relative;
         top: 50px;
         }

           .banner {
    width:99%; 
}
 .Encabezado {
    text-align: center;
    color: #fff;
    padding: 0;
    position: absolute;
    top: 5%;
    left: 0;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}

 .Encabezadomini {
    text-align: center;
    color: #fff;
    padding: 0;
    position: absolute;
    top: 2%;
    left: 30%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}

.Encabezado h1,  {
    font-size: 40px;
}

.Encabezadomini h1 {

    font-size: 20px;
} 

      </style>

      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Chelsea+Market|Quicksand");
html, body {
  margin: 0;
  padding: 0;
  background: -webkit-linear-gradient(top, #8279C1, #fff);
  background: linear-gradient(left top, #8279C1, #fff);
}

.presentacion
{
  width: 300px;
    height: 100px;
     
    position: absolute;
     
    right: 10px;
    -webkit-transform: translate(0, -50%);
    -moz-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
    z-index: 3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background-color: #4c4c4c;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}
.presentacion p
{
  font-size: 14px;
  margin-top: 5px;
  }

  .btn {
    font-weight: 700;
    text-transform: uppercase;
    border: none;
    border-radius: 300px;
    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;

    }

    .btn-primary {
    background-color: #0c0818;
    border-color: #0c0818;
}

.serviceBox{
    padding-bottom: 20px;
    text-align: center;
    position: relative;
}
.serviceBox:before{
    content: "";
    width: 100%;
    height: 2px;
    background: #1d1a3f;
    position: absolute;
    bottom: 0;
    left: 0;
    transform: scale(0);
    transition: all 0.5s ease 0s;
}
.serviceBox:hover:before{ transform: scale(1); }
.serviceBox .title{
    font-size: 22px;
    font-weight: 700;
    color: #1d1a3f;
    text-transform: uppercase;
    margin: 0 0 5px 0;
}
.serviceBox .service-icon{
    display: inline-block;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 3px solid #1d1a3f;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    margin: 50px 0;
    position: relative;
}
.serviceBox .service-icon:before,
.serviceBox .service-icon:after{
    content: "";
    width: 3px;
    height: 40px;
    background: #1d1a3f;
    margin: 0 auto;
    position: absolute;
    top: -40px;
    left: 0;
    right: 0;
}
.serviceBox .service-icon:after{
    top: auto;
    bottom: -40px;
}
.serviceBox .service-icon span{
    display: block;
    font-size: 50px;
    color: #a49dd1;
    line-height: 130px;
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    z-index: 999 ;
}
.serviceBox .service-icon span:before{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #fa5f69;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.5s ease 0s;
}
.serviceBox:hover .service-icon span:before{ transform: rotateY(180deg); }
.serviceBox .description{
    font-size: 15px;
    color: #505050;
    line-height: 27px;
    margin: 0;
}
.serviceBox.blue .service-icon span:before{ background: #0babc7; }
.serviceBox.yellow .service-icon span:before{ background: #fa679c1
5b43b; }
.serviceBox.green .service-icon span:before{ background: #2e9749; }
@media only screen and (max-width:990px){
    .serviceBox{ margin-bottom: 30px; }
}

.blue {
    color: blue;
}
  
.pricingTable{
    text-align: center;
    background: #a679c1;
    border-radius: 102px 0 102px 0;
    overflow: hidden;
    transition: all 0.3s ease 0s;
}
.pricingTable:hover{ box-shadow: 0 0 10px rgba(0,0,0,0.5); }
.pricingTable .pricingTable-header{
    margin: -2px -5px 0;
    position: relative;
}
.pricingTable .pricing-content{
    padding: 0;
    margin: -25px 0 0 0;
    list-style: none;
}
.pricingTable .pricing-content li{
    font-size: 20px;
    color: #fff;
    line-height: 50px;
    letter-spacing: 1px;
    border-bottom: 1px solid #fff;
}
.pricingTable .pricing-content li.disable{ color: rgba(255,255,255,0.5); }
.pricingTable .pricing-content li:last-child{ border-bottom: none; }
.pricingTable .pricingTable-signup{
    padding: 25px 0;
}
.pricingTable .pricingTable-signup a path,
.pricingTable .pricingTable-signup a text{ transition: all 0.3s ease 0s; }
.pricingTable .pricingTable-signup a:hover path{
    fill: #34454d;
    stroke: #fff;
    stroke-dasharray: 5,3;
}
.pricingTable .pricingTable-signup a:hover text{ fill: #fff; }
@media only screen and (max-width: 990px){
    .pricingTable{ margin-bottom: 30px; }
}

a:hover,a:focus{
    text-decoration: none;
    outline: none;
}
.tab .nav-tabs{
    border: none;
    margin: 0 0 20px 0;
}
.tab .nav-tabs li a{
    padding: 10px 20px;
    margin-right: 10px;
    font-size: 17px;
    font-weight: 600;
    color: #293241;
    text-transform: uppercase;
    border: none;
    border-radius: 0;
    background: transparent;
    z-index: 1;
    position: relative;
    transition: all 0.3s ease 0s;
}
.tab .nav-tabs li a:hover,
.tab .nav-tabs li.active a{
    border: none;
    color: #fff;
}
.tab .nav-tabs li a:before{
    content: "";
    width: 8%;
    height: 100%;
    background: #a679c1;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.tab .nav-tabs li.active a:before,
.tab .nav-tabs li a:hover:before{ width: 100%; }
.tab .tab-content{
    padding: 30px;
    background: #293241;
    outline: 3px solid #e0fbfc;
    outline-offset: -8px;
    font-size: 17px;
    color: #e0fbfc;
    letter-spacing: 1px;
    line-height: 30px;
    position: relative;
}
.tab .tab-content h3{ margin-top: 0; }
@media only screen and (max-width: 479px){
    .tab .nav-tabs li{
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
    }
}

.modal-footer #valido {
text-align: left;
  }

  .navbar-form .form-control {
    
    width: 100% !important;
  }

  .modal-footer {
  
    border-top: 0px !important;
}
</style>


   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container">
    <div class="row hidden-xs">
      <img class="banner" src="<?php echo URL;
                           ?>img/home/rookye_creacion_paginas_web.jpg" alt="Crea tu pagina web">
                         </div>
      <div class="Encabezado hidden-sm hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-4 col-sm-offset-4 col-md-4 col-lg-offset-3 col-lg-6 col-sm-4">
             <h1>Creamos tu página web</h1>
              <div class="row">
              <div id="btnAncla" class="col-xs-offset-3 col-xs-6 col-sm-6">
               <a data-toggle="modal" data-target="#rookye_modal" class="btn btn-primary active">
                <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Agenda tu cita</a>
           
              </div>
            </div>
          </div>
          <div class="col-md-offset-9 col-md-3 col-lg-offset-9 col-lg-3 hidden-sm hidden-xs">
            <div class="presentacion">
              <p>Somos una empresa que brinda soluciones informaticas a la medida de las necesidades de la empresa,
                con una vision hacia el futuro con eficiencia y eficacia desde los inicios.</p>
            </div> 
        </div>
      </div>
    </div></div>
    <div class="Encabezadomini hidden-lg hidden-md  hidden-xs" >
      <div class="col-xs-offset-1 col-xs-12 ">
             <h1>Creamos tu página web</h1>
           
           <div>
             <a href="#contacto" class="btn btn-primary active">
                <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Agenda tu cita</a>
           </div>
         </div>
      

    </div>
      <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
         <div class="container-fluid">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand rokye" href="#">Rookye</a> </div>
            <div>
               <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                     <li><a href="#acerca">ACERCA DE</a></li>
                     <li><a href="#servicios">SERVICIOS</a></li>
                     <li><a href="#proyecto">PROYECTOS</a></li>
                     <li><a href="#contacto">CONTACTO</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <div id="acerca" class="container-fluid">
         <section  id="about">
          <br><br>
          <div class="container">

        <div class="row">
          <br>
          <div class="col-lg-3 col-md-6 text-center">

            <div class="serviceBox red">
                <h3 class="title">Con un  Diseño  adaptable</h3>
                <div class="service-icon">
                    <span> <i class="glyphicon glyphicon-blackboard" aria-hidden="true"></i> </span>
                </div>
                <p class="description">
                    Una interfaz amigable, personalizada y a la medida de cualquier dispositivo segun las necesidades del cliente.
                </p>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 text-center">

            <div class="serviceBox blue">
                <h3 class="title">Encaja a la perfección</h3>
                <div class="service-icon">
                    <span><i class="glyphicon glyphicon-globe"></i></span>
                </div>
                <p class="description">
                    Programacion perzonalizada para cada aspecto de su negocio aumentando la productividad.
                </p>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 text-center">

            <div class="serviceBox green">
                <h3 class="title">Ultimas tecnologias</h3>
                <div class="service-icon">
                    <span><i class="glyphicon glyphicon-wrench"></i></span>
                </div>
                <p class="description">
                    Desarrollamos nuestras tecnologias mediante PHP, MySQL, JavaScript, AJAX, jQuery y muchos más.
                </p>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 text-center">

            <div class="serviceBox yellow">
                <h3 class="title">Hechas con amor y personalidad</h3>
                <div class="service-icon">
                    <span><i class="glyphicon glyphicon-heart-empty"></i></span>
                </div>
                <p class="description">
                    A travez del tiempo hemos perfeccionado una solida base de experiencia en tecnologias para aplicarlas en estrategias comerciales y administrativas.
                </p>
            </div>
          </div>
        </div>
      </div>
             


             
         </section>
      </div>
      <div id="servicios" class="container-fluid">
         <section id="services" >
<br>
<div class="visible-xs"> 

 <div class="col-xs-12">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">Basico</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">$</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="58.1472" font-weight="600">1000</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">Inicia</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                        <li>Ideal para iniciar</li>
                         </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="10" font-weight="600">Contratar</text>
                            </a>
                        </svg>
                    </div>
                </div>
            </div>

</div>
          <div class="hidden-xs" >
    <div class="container"><br>
        <div class="row"><br>
            <div class="col-md-3 col-xs-4">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">Basico</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">$</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="58.1472" font-weight="600">1000</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">Iniciando</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                        <li>Dominio</li>
                        <li>Etc</li>
                        <li>Etc</li>
                        <li class="disable">no tiene</li>
                        <li class="disable">le falta</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="10" font-weight="600">Contratar</text>
                            </a>
                        </svg>
                    </div>
                </div>
            </div>
             <div class="col-sm-3    hidden-lg hidden-md"> </div>
            <div class="col-md-3 col-xs-4">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">Pyme</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">$</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="58.1472" font-weight="600">4000</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">Inicia</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                        <li>Paquete Basico</li>
                        <li>email</li>
                        <li>Etc</li>
                        <li>Etc</li>
                        <li class="disable">Etc</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="10" font-weight="600">Contratar</text>
                            </a>
                        </svg>
                    </div>
                </div>
            </div>

             <div class="col-md-3 col-xs-4">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">Ejecutivo</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">$</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="58.1472" font-weight="600">6000</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">Inicia</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                        <li>Paquete Pyme</li>
                        <li>Mas</li>
                        <li>Etc</li>
                        <li>Etc</li>
                        <li class="disable">Etc</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="10" font-weight="600">Contratar</text>
                            </a>
                        </svg>
                    </div>
                </div>
            </div>
<div class="col-sm-3    hidden-lg hidden-md"> </div>
             <div class="col-md-3 col-xs-4">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <svg x="0px" y="0px" viewBox="0 0 260 180">
                            <path fill="#34454d" stroke-dasharray="5,5" stroke="#fff" d="M0,180.928c0,0,0-108.489,0-143.333C1.637,23.582,8.907,0,42.088,0C75.271,0,260,0,260,0v72.841
                            c0,0-2.667,37.424-43.877,45.563C177.693,125.992,6.26,130.42,0,180.928z"></path>
                            <text transform="matrix(1.0078 0 0 1 75.9497 33.8887)" fill="#fff" font-size="23.726">Plus</text>
                            <g>
                                <text transform="matrix(1.0078 0 0 1 98.5996 65.9434)" fill="#fff" font-size="23.726">$</text>
                                <text transform="matrix(1.076 0 0 1 112.0176 88.458)" fill="#fff" font-size="58.1472" font-weight="600">9000</text>
                                <text transform="matrix(1.0078 0 0 1 107.9326 106.832)" fill="#fff" font-size="16.2415">Inicia</text>
                            </g>
                        </svg>
                    </div>
                    <ul class="pricing-content">
                        <li>Paquete Ejecitivo</li>
                        <li>mas</li>
                        <li>Etc</li>
                        <li>Etc</li>
                        <li class="disable">Etc</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <svg x="0" y="0" viewBox="-35 0 160 30">
                            <a href="#">
                                <path fill="#fff" d="M13.12,5.867c17.786-0.834,68.654-5.473,68.654-5.473s8.203-1.945,7.445,5.473
                                c-0.757,7.417-4.037,16.782-4.037,16.782s-1.667,5.881-9.719,6.932c-8.961,0.852-50.858-0.983-67.771,0
                                c-2.718,0.158-9.935,0.256-7.446-7.66c2.736-9.18,3.408-10.459,3.408-10.459S5.647,5.86,13.12,5.867z"></path>
                                <text transform="matrix(1 0 0 1 15.5055 21.0098)" fill="#34454D" font-size="10" font-weight="600">Contratar</text>
                            </a>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
                
 
        </section>
       </div>
              
      <div id="proyecto" class="container-fluid">
         <section class="p-0" id="portfolio">
<br><br><br>
          <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Control Escolar</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">ALgo Mas</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Otra cosa</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h3>Control Escolar</h3>
                        <p>Es un proyecto ........</p>
                        <p>Ver Demo</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h3>Section 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
           
             
         </section>
      </div>
     
      <div id="contacto" class="container-fluid">
         <section id="contact">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12  mx-auto text-center">
                     <h2 class="section-heading">Contactanos!</h2>
                     <a class="btn btn-xl" data-toggle="modal" data-target="#rookye_modal">Enviar mensaje a Rookye</a> 
                     <hr class="my-4">
                     <p class="mb-5">Ponte en contacto con nosotros para conocer tus necesidades y darte una solucion basados en tu presupuesto </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-2 mx-auto text-center"></div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-8 mx-auto text-center">
                     <div class="card">
                        <img src="<?php echo URL;
                           ?>img/avatar_r.jpg" alt="" /> 
                        <h1>Ricardo <br>Garcia</h1>
                        <p>Web Developer</p>
                        <p> <img src="<?php echo URL;
                           ?>img/php.png"> <img src="<?php echo URL;
                           ?>img/css.png"> <img src="<?php echo URL;
                           ?>img/sql.png"> <img src="<?php echo URL;
                           ?>img/mysql.png"> <img src="<?php echo URL;
                           ?>img/js.png"></p>
                        <a href="<?php echo URL;
                           ?>home/CV_Ricardo" target="_blank" class="btndetalles">Detalles</a> 
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-8 mx-auto text-center">
                     <div class="card">
                        <img src="<?php echo URL;
                           ?>img/avatar_e.jpg" alt="" /> 
                        <h1>Eibar<br> Ponce</h1>
                        <p>Web Developer</p>
                        <p> <img src="<?php echo URL;
                           ?>img/csharp.png"> <img src="<?php echo URL;
                           ?>img/php.png"> <img src="<?php echo URL;
                           ?>img/css.png"> <img src="<?php echo URL;
                           ?>img/sql.png"> <img src="<?php echo URL;
                           ?>img/mysql.png"> <img src="<?php echo URL;
                           ?>img/js.png"> </p>
                        <a href="<?php echo URL;
                           ?>home/CV_Eibar" target="_blank" class="btndetalles">Detalles</a> 
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-8 mx-auto text-center">
                     <div class="card">
                        <img src="<?php echo URL;
                           ?>img/avatar_i.jpg" alt="" /> 
                        <h1>Ismael<br>"Juarez"</h1>
                        <p>Web Developer</p>
                        <p> <img src="<?php echo URL;
                           ?>img/php.png"> </p>
                        <a href="<?php echo URL;
                           ?>home/CV_Isma" target="_blank" class="btndetalles">Detalles</a> 
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <br><br><br><br>
      <div id="rookye_modal" class="modal fade col-xs-offset-2 col-md-8 col-lg-offset-3 col-lg-6" role="dialog">
         <form name="form_contacto" class="navbar-form navbar-left" role="search" method="POST" action="../../app/GuardaContacto.php">
            <div class="modal-dialog">
               <!-- Modal content--> 
               <div class="modal-content">
                  <div class="modal-header">
                    <div class="col-xs-11" ><h4 class="modal-title">Contacto</h4></div>
                     
                     <div class="col-xs-1" ><button type="button" class="btn" data-dismiss="modal">X</button> </div>
                  </div>
                  <div class="modal-body">
                    
                    <div class="row"> 
                      <div class="col-md-8 col-xs-8 "> <input type="text" class="form-control" placeholder="Asunto" name="asunto" aria-describedby="basic-addon2"> </div>
                    </div><br>
                    <div class="row"> 
                     <div class="col-sm-5 col-xs-8"> <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre" aria-describedby="basic-addon2"> </div><div class="visible-xs">  <br><br> </div>
                     <div class="col-sm-5 col-xs-8"> <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" aria-describedby="basic-addon2"> </div>
                   </div><br>
                    <div class="row"> 
                     <div class="col-sm-5 col-xs-8"> <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon2"> </div><div class="visible-xs">  <br><br> </div>
                     <div class="col-sm-5 col-xs-8"> <input type="text" class="form-control" placeholder="Teléfono" name="telefono" aria-describedby="basic-addon2"> </div>
                    </div>
                    <br>
                   <div class="row"> 
                     <div class="col-md-10"> <textarea class="form-control" rows="5" name="mensaje" id="comment"></textarea> </div>
                    </div>
                  </div><br>
                  <div class="modal-footer">

 <div class="col-md-8"> <div class="alert alert-danger" id="valido" role="alert">...</div> </div>
<div class="col-md-4" > <button type="button" class="btn btn-primary active" name="guardarContacto" onclick="enviarCorreo();
                        ">Enviar</button> </div>
                 
                  </div>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>