<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos Reyes | Productos</title>
    <?php
    include('templates/link.php');
    ?>
 

</head>
<body>
<?php include('templates/header.php'); ?>
<!--script src="idiomas/leng.js"></script-->

<div id="portada-prod" class="bg-center" style="background-image: url(img/portada3.jpg);">
    <div class="py-5 overlayb">
      
        <div class="cont-portada-prod container py-5">
            
            <div class="row btll-port-prod" style="height: 500px;">
                <div class="col-md-4 text-center">
                    <a class="link-img-prod text-decoration-none" href="#prod1">
                        <img class="img-port-prod w-75" src="img/mezcal1.png" alt="">
                        <h4 class="text-white mt-3">Espadin</h4>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a class="link-img-prod text-decoration-none" href="#prod2">
                        <img class="img-port-prod w-75" src="" alt="">
                        <h4 class="text-white mt-3"></h4>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a class="link-img-prod text-decoration-none" href="#prod3">
                        <img class="img-port-prod w-75" src="img/mezcal3.png" alt="">
                        <h4 class="text-white mt-3">Tobalá</h4>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="sect1" style="z-index: 10; position: relative; margin-bottom: -113px;">
    <div class="container text-center p-5 bg-grey sombra" style="margin-top: -103px;">
        <h1 class="">Nuestros productos</h1>
        <p class="">Explora nuestra colección de mezcales artesanales para encontrar la esencia de Oaxaca en cada botella.</p>
    </div>    
</div>







<div id="prod1" class="row m-0 p-0 w-100">
    <div class="col-md-8 sect-txt-calid">
        <h5 class="subtitulo" style="margin-top: 65px;">Un mezcal de alta calidad</h5>
        <h2 class="">ESPADÍN</h2>
        <img class="img-prod-inf-img-movil" src="img/mzkl.png" alt="" style="margin-top: 135px; margin-left: -161px; display:none;">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active text-black" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Características</button>
                <!--button class="nav-link text-black" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Catas</!--button-->
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <ul>
                    <li><p>39% ALC. VOL.</p></li>
                    <li><p>Elaborados artesanalmete con agaves Angustifolia.</p></li>
                    <li><p>Cocechados despues de 7 años de estar plantados bajo el sol intenso del Istmo de Tehuantepec.</p></li>
                    <li><p>Horneados con leña regional, fermentado en tinas de madera por levadoras nativas y doblemente destilado en alambiques de cobre tradicionales.</p></li>
                    <li><p>Es un mezcal suave y noble insignia de nuestra marca, perfecto para principiantes y conocedores.</p></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia illo tempore harum optio? Nemo maxime a sequi quibusdam. Iste et animi aliquid ab, sunt alias ducimus exercitationem!</p>
            </div>
           
        </div>
        <a class="btn" href="">Más de nuestro producto</a>
    </div>
    <div class="col-md-4 bg-center conte-img-prod" style="background-image: url(img/portada4.jpg);">
        <img class="img-prod-inf-img" src="img/mzkl.png" alt="" style="margin-top: 135px; margin-left: -161px;">
    </div>, 
</div>


<div id="prod2" class="row m-0 p-0 w-100">
    <div class="col-md-4 bg-center conte-img-prod" style="background-image: url(img/bg-agave.jpg);">
        <img class="img-prod-inf-img" src="img/mzkl2.png" alt="" style="margin-top: 135px; margin-left: 161px; z-index: 2; position: relative;">
    </div>
    <div class="col-md-8 sect-txt-calid bg-grey">
        <h5 class="subtitulo" style="margin-top: 65px;">Un mezcal de alta calidad</h5>
        <h2 class="">TOBALÁ</h2>
        <img class="img-prod-inf-img-movil" src="img/mezcal3.png" alt="" style="margin-top: 135px; margin-left: -161px; display:none;">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active text-black" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home2" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Características</button>
                <!--button class="nav-link text-black" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Catas</!--button-->
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active p-3" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <ul>
                    <li><p>40% ALC. VOL.</p></li>
                    <li><p>Elaborado artesanalmente con agaves Potatorum y Seemannian (Magey Tobalá).</p></li>
                    <li><p>Se puede tarda de 10 a 12 años en cocecharse.</p></li>
                    <li><p>Un mezcal con notas florales y minerales, ligeramente afrutado y herbáceo. </p></li>
                    <li><p>Menta y hierba buena se encuentran entre las notas mas faciles de identificar.</p></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia illo tempore harum optio? Nemo maxime a sequi quibusdam. Iste et animi aliquid ab, sunt alias ducimus exercitationem!</p>
            </div>
           
        </div>
        <a class="btn" href="">Más de nuestro producto</a>
    </div>
    
</div>


<!--div id="prod3" class="row m-0 p-0 w-100">
    <div class="col-md-8 sect-txt-calid">
        <h5 class="subtitulo" style="margin-top: 65px;">Un mezcal de</h5>
        <h2 class="">Alta calidad</h2>
        <img class="img-prod-inf-img-movil" src="img/mezcal3.png" alt="" style="margin-top: 135px; margin-left: -161px; display:none;">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active text-black" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home3" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Características</button>
                <button class="nav-link text-black" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile3" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Catas</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active p-3" id="nav-home3" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <ul>
                    <li><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit tenetur quas ex.</p></li>
                    <li><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit tenetur quas ex.</p></li>
                    <li><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit tenetur quas ex.</p></li>
                    <li><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit tenetur quas ex.</p></li>
                    <li><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit tenetur quas ex.</p></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-profile3" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia illo tempore harum optio? Nemo maxime a sequi quibusdam. Iste et animi aliquid ab, sunt alias ducimus exercitationem!</p>
            </div>
           
        </div>
        <a class="btn" href="">Más de nuestro producto</a>
    </div>
    <div class="col-md-4 bg-center conte-img-prod" style="background-image: url(img/portada4.jpg);">
        <img class="" src="img/mzkl.png" alt="" style="margin-top: 135px; margin-left: -161px;">
    </div>
</!--div-->

<?php include('templates/footer.php'); ?>
</body>
</html>

