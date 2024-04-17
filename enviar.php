<?php
include('templates/link.php');
?>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$asunto = 'Formulario Rellenado';
$email = $_POST['email'];
$mensaje = "Nombre: " . $nombre . " Email: " . $email . " Teléfono: " . $telefono . " Mensaje:" . $_POST['mensaje'];

if (mail('erikaban14@gmail.com', $asunto, $mensaje)) {
    // Mensaje de correo enviado correctamente
    $mensaje_enviado = '<html>
                        
                        <head>
                            <title>Correo enviado correctamente</title>
                            <style>
                                body {
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    background-image: url(img/contacto.jpg);
                                    background-size: cover;
                                    background-position: center;
                                }
                                .container {
                                    max-width: 500px;
                                    margin: 0 auto;
                                    padding: 30px;
                                    background-color: #fff;
                                    border-radius: 5px;
                                    box-shadow: 0 0px 17px rgb(0 0 0);
                                }
                                h1 {
                                    color: #333;
                                }
                                p {
                                    color: #666;
                                }
                                .btn {
                                    
                                    font-size: 13px !important;
                                    
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <h2 class="text-center">Correo enviado</h2>
                                <p class="text-center">Tu mensaje ha sido enviado con éxito.</p>
                                <div class="text-center">
                                    <a class="btn" href="index.php"><i class="fas fa-home"></i> volver a inicio</a>
                                    <a class="btn" href="contacto.php"><i class="far fa-envelope"></i> Mandar un nuevo mensaje</a>
                                </div>
                            </div>
                        </body>
                        </html>';

    echo $mensaje_enviado;
}
?>