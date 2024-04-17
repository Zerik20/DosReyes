<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos Reyes | Contacto</title>
    <?php
    include('templates/link.php');
    ?>
 

</head>
<body>
<?php include('templates/header.php'); ?>
<!--script src="idiomas/leng.js"></script-->

<div id="portada-prod" class="bg-center" style="background-image: url(img/contacto.jpg); height: 500px;">
    <div class="py-5 overlayb d-flex justify-content-center align-items-end">
      
       <h1 class="text-center text-white">Contacto</h1>

    </div>
</div>

<div class="row m-0 p-0 w-100">
    
    <div class="col-md-6 bg-center" style="background-image: url(img/img-cont.jpg);">
    </div>
    <div class="col-md-6 sect-txt-calid bg-grey">
        <h5 class="subtitulo">Envíanos un</h5>
        <h2 class="">Correo</h2>
        <p>¿Listo para conectarte con nosotros? ¡Estamos aquí para escucharte! Envíanos un mensaje y te responderemos lo antes posible. ¡Esperamos saber de ti pronto!</p>



        <form action="https://formsubmit.co/25f509882166613c0f4ff0fabd9ada2a" method="POST"">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Apellido">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+52 999 123 45 67">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-white">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-white">Mensaje:</label>
                <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
            </div>
            <button href="" type="submit" class="btn">ENVIAR</button>

        </form>




    </div>
</div>










<?php include('templates/footer.php'); ?>
</body>
</html>

