<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos Reyes | Mezcal Artesanal</title>
    <?php
    include('templates/link.php');
    ?>
    <link rel="stylesheet" href="style/styles.css"> <!-- Agrega estilos personalizados si lo deseas -->
</head>
<body>
<!-- Tarjeta de verificación de edad -->
<div id="ageVerification" class="modal">
        <div class="modal-content">
            <img src="img/logo-blanco2.png" alt="Logo" class="logo">
            <h2>¿Eres mayor de edad?</h2>
            <div class="options">
                <button onclick="continueToSite()">Sí</button>
                <button onclick="leaveSite()">No</button>
            </div>
        </div>
    </div>
<?php include('templates/header.php'); ?>
<!--script src="idiomas/leng.js"></script-->




<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div id="portada" class="bg-center" style="background-image: url(img/portada5.jpg);">
            <div class="py-5 overlayb d-flex justify-content-start align-items-end">
                <div class="container ps-5">
                    <h5 class="subtitulo">Descubre el Legado</h5>
                    <h2 class="text-white tit-slider" style="font-size: 57px;">Mezcal <br> Artesanal</h2>
                </div>
                
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div id="portada" class="bg-center" style="background-image: url(img/contacto.jpg);">
            <div class="py-5 overlayb d-flex justify-content-start align-items-end">
                <div class="container ps-5">
                    <h5 class="subtitulo">Calidad</h5>
                    <h2 class="text-white tit-slider" style="font-size: 57px;">en Cada Gota</h2>
                </div>
                
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div id="portada" class="bg-center" style="background-image: url(img/portada4.jpg);">
            <div class="py-5 overlayb d-flex justify-content-start align-items-end">
                <div class="container ps-5">
                    <h5 class="subtitulo">Explora la Esencia Única </h5>
                    <h2 class="text-white tit-slider" style="font-size: 57px;">del mezcal <br> Dos Reyes</h2>
                </div>
                
            </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





<div class="sect1" style="background-image: url(img/portada4.jpg); background-size: cover; background-attachment: fixed;">
    <div class="py-5 overlay1">
        <div class="container text-center p-5">
            <h1 class="text-white">Conocenos</h1>
            <p class="text-white">Nuestro mezcal combina tradición y calidad, elaborado con métodos artesanales transmitidos de generación en generación. Nos comprometemos con el respeto a la naturaleza y las comunidades locales, ofreciendo una experiencia única en cada sorbo. Únete a nosotros para descubrir la esencia de México en cada botella. ¡Salud!</p>
        </div>
    </div>
    
</div>



<div class="py-5">
    <div class="py-5 text-center">
        <h2>Mezcal dos reyes</h2>
        <p class="text center">Calidad destilada en cada gota.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="" src="img/mzkl.png" alt="">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h5 class="subtitulo" style="text-align: center;">Sobre</h5>
                    <h2 style="text-align: center;">Nosotros</h2>
                    <p style= "text-align:center;">¡Bienvenidos a 2 Reyes!</p>
                    <p style= "text-align: justify;">
                        Somos una destilería de mezcal artesanal fundada en el corazón de Oaxaca, México. Nuestra pasión por la excelencia se refleja en cada gota de mezcal que producimos.
                    </p>
                    <p style= "text-align: justify;">
                        Nos enorgullece nuestra conexión con la tierra y las tradiciones ancestrales de Oaxaca y Mexico. 
                    </p>
                    <p style= "text-align: justify;">
                        Seleccionamos cuidadosamente agaves de la región y empleamos técnicas de destilación artesanal para crear un destilado excepcional, capturando la esencia única de nuestra tierra.
                    </p>
                    <p style= "text-align: justify;">
                        Colaboramos estrechamente con agricultores y artesanos locales, contribuyendo al desarrollo sostenible y fortaleciendo nuestras raíces culturales.
                    </p>
                    <p style= "text-align: center; color: #c08a16;">
                        Te invitamos a descubrir la magia ¡Salud!
                    </p>
                    <br>
                    <p style= "text-align:center; font-size:25px; ">Atentamente Yolanda Taboada 3ª Genracion</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row w-100 p-0 m-0" style="background-image: url(img/bg-agave.jpg); background-size: cover; background-position: center;">
    <div class="overlay-white pt-5">
        <div class="container py-5 text-center">
            <h5 class="subtitulo text-center">Nuestros</h5>
            <h2 class="text-center">productos</h2>
            <p class="text-center">Explora nuestra colección de mezcales artesanales, donde la tradición se fusiona con la innovación para ofrecerte experiencias únicas en cada sorbo.</p>
            <a href="productos.php" class="btn text-center mb-5">Todos nuestros productos</a>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/mezcal1.png" alt="">
                    <h4>Espadín</h4>
                    <a class="btn" href="contacto.php">Más información</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/mezcal3.png" alt="">
                    <h4>Tobalá</h4>
                    <a class="btn" href="contacto.php">Más información</a>
                </div>
            </div>
        </div>
    </div>
    
</div>


<div class="row m-0 p-0 w-100">
    <div class="col-md-6 sect-txt-calid">
        <h5 class="subtitulo">Un mezcal de</h5>
        <h2 class="">Alta calidad</h2>
        <p style= "text-align: justify;">Sumérgete en la experiencia de un mezcal excepcional con nuestra colección de alta calidad. Cada botella representa la culminación de un proceso meticuloso, desde la selección de agaves premium hasta la destilación artesanal. </p>
        <p style= "text-align: justify;">Descubre el equilibrio perfecto entre tradición y perfección en cada sorbo, una verdadera obra maestra de Oaxaca para el mundo . ¡Salud!</p>
        <a class="btn" href="contacto.php">Más de nuestro producto</a>
    </div>
    <div class="col-md-6 bg-center" style="background-image: url(img/agave.jpg);">
    </div>
</div>


<div class="w-100 bg-oro">
    <div class="container p-5 text-center">
        <h5 class="subtitulo text-center text-white">¿Quieres más información?</h5>
        <h2 class="text-center">Contáctanos</h2>
        <p class="text-center">¿Listo para conectarte con nosotros? ¡Estamos aquí para escucharte! Envíanos un mensaje y te responderemos lo antes posible. ¡Esperamos saber de ti pronto!</p>
        <a class="text-center btn2" href="contacto.php">Ir a contacto</a>
    </div>
</div>

<?php include('templates/footer.php'); ?>
<script src="script/script.js"></script> <!-- Agrega tu archivo JavaScript -->
</body>
</html>
