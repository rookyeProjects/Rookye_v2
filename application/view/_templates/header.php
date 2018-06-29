<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rookye</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template --> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Custom styles for this template -->

    <link href="<?php echo URL; ?>css/creative.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/main.css" rel="stylesheet">
 <!-- Bootstrap core JavaScript -->
    <script src="<?php echo URL; ?>js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>js/bootstrap.bundle.min.js"></script> 
    <script src="<?php echo URL; ?>js/handler.js"></script> 
 <!-- script google -->
    <script type="application/ld+json">
      {
        "@context": "http://rookye.com.mx",
        "@type": "Product",
        "name": "Sitio Web Basico",
        "image": [
          "http://rookye.com.mx/Rookye/img/portfolio/fullsize/6.jpg",
          "http://rookye.com.mx/Rookye/img/portfolio/fullsize/1.jpg",
          "http://rookye.com.mx/Rookye/img/portfolio/fullsize/2.jpg"
         ],
        "description": "Una pagina web basica que contiene galería de imágenes formulario de contacto, Informacion sobre la empresa, Conexiones con redes sociales, Administracion del contenido, Hosting, Dominio, Correo Electronico, Roles de usuario.",
        "mpn": "925872",
        "brand": {
          "@type": "Thing",
          "name": "Pagina Web"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.4",
          "reviewCount": "89"
        },
        "offers": {
          "@type": "Offer",
          "priceCurrency": "MX",
          "price": "5000",
          "priceValidUntil": "2019-01-01" 
        }
      }
</script>
<script type="text/javascript">
  $(function() {
!function(a){
    "use strict";
    a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){
        if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){
            var e=a(this.hash);
            if((e=e.length?e:a("[name="+this.hash.slice(1)+"]")).length)return a("html, body").animate({
                scrollTop:e.offset().top-57
            }
            ,1e3,"easeInOutExpo"),!1
        }
    }
    ),a(".js-scroll-trigger").click(function(){
        a(".navbar-collapse").collapse("hide")
    }
    ),a("body").scrollspy({
        target:"#mainNav",offset:57
    }
    );
    var e=function(){

        if( $("#mainNav").offset().top>100 )
        {
            $("#mainNav").addClass("navbar-shrink");
        }
        else
        {
        $("#mainNav").removeClass("navbar-shrink");
        }
        
    }
    ;
    e(),a(window).scroll(e) 
}
(jQuery);
});
</script>
</head>