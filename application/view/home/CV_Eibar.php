<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Eibar Ponce - Desarrollador web</title>
 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/stylepage.css"> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>js/bootstrap.min.js"></script>

<script type="text/javascript">
	
	$(function() {
  $('.progress-bar').each(function() {
    var bar_value = $(this).attr('aria-valuenow') + '%';                
    $(this).animate({ width: bar_value }, { duration: 800, easing: 'easeOutCirc' });
  });
});


</script>
</head>
<style type="text/css">
	body{background:  #D9D9D9 !important;}
	h1{	font-size: 36px !important;}
	h2{	font-size: 30px !important;}
	h3{	font-size:24px !important;}	
	h4{	font-size:20px !important;}	

	section#skills-pgr {
  padding: 3px 10px 0;
}
#skills-pgr div.progress {
  font-weight: bolder;
  color: #33a4c9;
  background-color: #e1e1e1;
  border: 0px none;
  box-shadow: none;
  height:1em;
}
div.progress-bar > span {
    float: left;
    position: relative;
    top: -3px;
    left: 2%;
    font-size: 12px;
}

.card .card-reveal p {
font-size: 9px;
	}


</style>

<body>
	<div class="container">
 
	<header role="banner">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
				<hgroup>
					<h1 >Eibar Ponce Garcia</h1>
					<h2 >Desarrollador Web</h2>
				</hgroup>
			 
				<figure class="hidden-xs">
					<img src="<?php echo URL; ?>img/avatar_e.jpg" alt="avatar">
				</figure>
			</div>
		</div>
	</header>
	
 	<section class="hide">
		<div class="col-lg-11">
			<h3>Contactame</h3>
			<p>Completa el formulario y me comunicare contigo lo antes posible. 
			<br><em>Todos los campos son requeridos</em></p>
			<form novalidate="novalidate" method="post" action="#" name="contact" class="grid_16">
				<p class="grid_10"><textarea name="message" placeholder="Votre message" class="required"></textarea></p>
				<p class="grid_6">
					<input name="nom" placeholder="Nom - Prénom" class="required" type="text">
					<input name="email" placeholder="Adresse email" class="required" type="email">	
					<input name="envoi" value="Envoyer le message" class="required" type="submit">
					<span class="messageform"></span>
				</p>
			</form>
		</div>
	</section> 
	<div class="row graybackground">
	<section   class="col-md-10 col-md-offset-1">
		<div class="row"> 
			<div class="col-md-6 col-xs-12">
				 
				
				 
				<h3><i class="small material-icons">account_circle</i> Resumen</h3>
				 
				<p>Especialista en el desarrollo de programas y mantenimiento de sistemas con más de cinco años de experiencia. Capacitado para trabajar en todas las etapas del desarrollo de programas. Con iniciativa propia, responsabilidad y liderazgo.</p>
			</div>
			 
					 
			<div class="col-md-offset-1 col-md-5 col-xs-12">
				<h3><i class="small material-icons">computer</i>  Habilidades </h3>
				<section id="skills-pgr">
				  <div class="progress">
				    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
				      <span>HTML5/CSS3</span>
				    </div>
				  </div>
				  <div class="progress">
				    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
				      <span>C#</span>
				    </div>
				  </div>
				  <div class="progress">
				    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
				      <span>PHP</span>
				    </div>
				  </div>
				  <div class="progress">
				    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
				      <span>JavaScript/jQuery</span>
				    </div>
				  </div>
				  <div class="progress">
				    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
				      <span>SQL/MySQL</span>
				    </div>
				  </div>
				   <div class="progress">
				    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
				      <span>Boostrap/Materialize</span>
				    </div>
				  </div>
				</section>
			</div>
		</div>
		<div class="row"> 
			<div secc class="col-md-12 ">
				<h3><i class="small material-icons">business</i>Experiencia</h3>
				<div class="row">	
					<div class="col-md-11">			
						<h4><strong>Desarrollador Web </strong> Grupo Escalante</h4>
					</div>
					<div class="col-md-4">
						<span class="lugar">Auxiliar de Calidad</span>
					</div>
					<div class="col-md-7">
						<span class="dates">Octubre 2017 - Actual</span>
					</div>
					<div class="col-md-11">	
						<ul class="collection">
						<li class="collection-item">Desarrollo web</li>
						 <li class="collection-item">Desarrollo de soluciones a través de PHP</li>
						 <li class="collection-item">Creación de en documentos de Excel a través de consultas a BD</li>
						 <li class="collection-item">Carga de Información a BD a través de documentos de Excel </li>
						  <li class="collection-item">Maquetado de interfaces</li>
					      <li class="collection-item">Generación de archivos de validación por medio de consultas SQL</li>
					      <li class="collection-item">Desarrollo de funcionalidades para módulos existentes.</li> 

						 <ul>
					</div>
				</div>
				
				<div class="row">	
					<div class="col-md-11">
						<h4><strong>Desarrollador Web </strong> Skypos</h4>
				</div>
					<div class="col-md-4">
						<span class="lugar">Desarrollador</span>
					</div>
					<div class="col-md-7">
						<span class="dates">Diciembre 2015 - Octubre 2017 </span>
					</div>
					<div class="col-md-11">
						<ul class="collection">
						<li class="collection-item">Desarrollo web</li>
						<li class="collection-item">Implementación de HTML responsivo a través de BoosTrap y Materialize</li>
						<li class="collection-item">Desarrollo de soluciones a través de MVC</li>
						<li class="collection-item">Creación de cargas masivas a través de documentos de Excel</li>
						<li class="collection-item"> Atención a clientes</li>
						<li class="collection-item"> Creación de Json a través de soluciones REST</li>
						</ul>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-11">
						<h4><strong>Desarrollador Web </strong> Suprema Corte de la Justica de la Nación </h4>
					</div>
					<div class="col-md-4">
						<span class="lugar">Desarrollador</span>
					</div>
					<div class="col-md-7">
						<span class="dates">Marzo 2015 - Diciembre 2015</span>
					</div>
					<div class="col-md-11">
						<ul class="collection">
						<li class="collection-item">Creación de Meta data para el buscador Interamericano</li>
						<li class="collection-item">Manejo del documentos y clasificación de los mismos</li>
						<li class="collection-item">Creación de webpart para carga de archivos a la base de datos</li> 
						<li class="collection-item">	Implementación del portal de SharePoint del sitio</li> 
						<li class="collection-item">	Creación de Búsqueda por medio de una webpart de mapa de árbol</li>  
					</div>
				</div>
				<div class="row">	
					<div class="col-md-11">
						<h4><strong>Desarrollador Web</strong> Sociedad Hipotecaria Federal </h4>
					</div>
					<div class="col-md-4">
						<span class="lugar">Administrador Sharepoint</span>
					</div>
					<div class="col-md-7">
						<span class="dates">Julio 2012 - Marzo 2014</span>
						</div>
					<div class="col-md-11">
						<ul class="collection">
						<li class="collection-item">Publicación de webparts</li>
						<li class="collection-item">Administración de los contenidos de sitio</li>
						<li class="collection-item">Administración de los perfiles de usuarios</li>
						<li class="collection-item">Administración de contenido</li>
						<li class="collection-item">Creación de Copias de seguridad SQL server </li>
						<li class="collection-item">Administración de Layouts y Masterpages
							<li class="collection-item">Creación de webparts</li>
							  </ul>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-11">
						<h4><strong>Desarrollador Web </strong> Ziam Solutions </h4>
					</div>
						<div class="col-md-4">
						<span class="lugar">Desarrollador</span>
						</div>
					<div class="col-md-7">
						<span class="dates">Mayo 2012 - Diciembre 2015	</span>
					</div>
					<div class="col-md-11">
					<ul class="collection">
					<li class="collection-item">Desarrollo de webparts</li>
					<li class="collection-item">Publicación de webparts</li>
					<li class="collection-item">Depuración de webparts</li>
					<li class="collection-item">Implementación de webparts</li>
					<li class="collection-item">Instalación de granjas SharePoint</li>
					<li class="collection-item">Instalación y desarrollo de FAST for SharePoint</li>
					<li class="collection-item">Administración de SharePoint 2010</li>  
				</ul>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-11">
						<h4><strong>Desarrollador Web </strong>Abargon </h4>
					</div>
						<div class="col-md-4">
						<span class="lugar">Desarrollador</span>
					</div>
					<div class="col-md-7">
						<span class="dates">Noviembre 2011 - Abril 2012	</span>
					</div>
					<div class="col-md-11">
						<ul class="collection">
							<li class="collection-item">Mantenimiento Web</li>
							<li class="collection-item">Programación Web</li></li>
							<li class="collection-item">Redacción de contenido web</li>
							<li class="collection-item">Administración del contenido web</li>
						    <li class="collection-item">Elaboración de documentación</li>
						 	<li class="collection-item">Realización de páginas web</li>
							<li class="collection-item">Depuración de páginas web</li>
							<li class="collection-item">Administración de contenido en SharePoint</li>
							<li class="collection-item">Creación de sitios en SharePoint</li>
							<li class="collection-item">Administración de sitios en SharePoint</li>
							<li class="collection-item">Administración de información en SharePoint</li>
							<li class="collection-item">Personalización de listas en SharePoint</li>
							<li class="collection-item">Creación de listas en SharePoint </li> </ul>
				</div>
				</div> 
			</div>
		</div>
		<div class="row">
			<div secc class="col-md-12 ">
				<h3><i class="small material-icons">book</i> Educación</h3>
			</div>
			<div class="col-md-12">
						<h4><strong>Ingeneria en Sistemas Computacionales</strong> Tecnológico de estudios Superiores Ixtapaluca</h4>
			</div>
			<div class="col-md-4">
						<span class="lugar">Licenciatura </span>
			</div>
				<div class="col-md-7">
						<span class="dates">Septiembre 2007 – Febrero 2012</span>
					</div>
		</div>
		
		<div class="row"> 
			<div class="col-md-12">
				<h3><i class="small material-icons">free_breakfast</i>Manejo del Conocimiento </h3>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>C#</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>
						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p>Creacion webparts.</p>
					       <p>Creacion de CMS C#/SQL.</p>
					       <p>Creacion de DashBoards.</p>
					       <p>Creacion de Sistemas de control.</p>
					        <p>Uso de MVC.</p>
					    </div>
						<div class="card-action center">
							<a class="activator">5 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="card">
						<div class="card-title center">
		             		<p>PHP</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>
						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p>Desarrollo de CMS PHP/Mysql.</p>
					       <p>Consultas y Creacion de reportes EXCEL/PDF.</p>
					        <p>Creacion de DashBoards.</p>
					         <p>Uso de MVC.</p>
					    </div>
						<div class="card-action center">
							<a  class="activator" >3 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>CSS</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>

						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					       <p>Maquetado Web.</p>
					       <p>Responsive desing.</p>
					       <p>Páginas web semánticas.</p>
					     </div>
						<div class="card-action center">
							<a class="activator" >5 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>BoosTrap</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>

						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					       <p>Maquetado Web</p>
					       <p>Responsive desing.</p>
					       <p>Páginas web semánticas.</p>
					     </div>
						<div class="card-action center">
							<a class="activator">2 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>Materialize</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>
						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					       <p>Maquetado Web</p>
					       <p>Responsive desing.</p>
					       <p>Páginas web semánticas.</p>
					     </div>
						<div class="card-action center">
							<a class="activator">2 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>SQL</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>
						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					       <p>Crear y presentar informes derivados de consultas</p>
					       <p>Mantenimiento de la integridad de las bases de datos.</p>
					       
					     </div>
						<div class="card-action center">
							<a class="activator">4 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>MySQL</p>
		             	</div>
						<div class="card-content center">
							<p>Usado actualmente.</p>
						</div>
						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					       <p>Crear y presentar informes derivados de consultas</p>
					       <p>Mantenimiento de la integridad de las bases de datos.</p>
					       
					     </div>
						<div class="card-action center">
							<a class="activator">2 años de uso</a>
						</div>
		            </div>
				</div>

				<div class="col-xs-12 col-sm-6 col-sm-6 col-md-4 col-lg-3 ">
					<div class="card">
						<div class="card-title center">
		             		<p>SharePoint</p>
		             	</div>
						<div class="card-content center">
							<p>No en Uso.</p>
						</div>
						<div class="card-reveal">
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					       <p>Creacion de Webparts 2013 y 2015 </p>
					       <p>Mantenimiento y control de portales 2013 y 2015.</p>
					       <p>Creación de plantillas</p>
					       <p>Instalacion de instancias desde 0</p>
					     </div>
						<div class="card-action center">
							<a  class="activator" >3 años de uso</a>
						</div>
		            </div>
				</div>

 
				 
					 
			</div>
	 </div>
		<div class="row"> 
			 
			<!-- Contact -->
			<div class="col-md-12 Contact">
				<h3>Contacto</h3>
				<div class="col-md-6 col-sm-12">
					 <div class="col-md-12 col-sm-6">
						<img src="<?php echo URL; ?>img/map-marker.png"> <span >  Mexico, Estado de México</span> 
					</div> 
					<div class="col-md-12 col-sm-6">
						<img src="<?php echo URL; ?>img/skype.png"><span > eibar.ponce</span>
					</div>  
					 <br>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="col-md-12 col-sm-6">
					<img src="<?php echo URL; ?>img/whatsapp.png" target="_blank"><a href="https://api.whatsapp.com/send?phone=+5215547839036&text=Hola,me gustaria contratar tus servicios?">  5547839036</a>
				</div> 
				<div class="col-md-12 col-sm-6">
					<img src="<?php echo URL; ?>img/gmail.png"> <span ><a href="mailto:eibar.ing@gmail.com">eibar.ing@gmail.com</a></span>
				</div> <div class="col-md-12 col-sm-6">
					<img src="<?php echo URL; ?>img/web.png"> <span ><a href="http://www.rookye.com.mx">http://www.rookye.com.mx</a></span>
				</div>
				 <br>
			</div>
					
				 
			</div>
			</div>
			<br>
	</section>
</div>
 
</div>
<br>
<br>	

</body></html>
