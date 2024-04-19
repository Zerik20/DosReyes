<div id="header" class="fixed-top navscroll">
    <div class="container">
        <div id="logo-content" class="text-center p-3">
            <img id="logo" src="img/logo-blanco2.png" alt="" style="width: 30%;">
        </div>
        <div id="menu" class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link mx-5 text-white active" aria-current="page" href="index.php">NOSOTROS</a>
                            <a class="nav-link mx-5 text-white" href="productos.php">PRODUCTOS</a>
                            <!--a class="nav-link mx-5 text-white" href="mix_&_food.php">Mix & Food</!--a-->
                            <a class="nav-link mx-5 text-white" href="contacto.php">CONTACTO</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
    </div>
</div>

<div id="header-movil" class="fixed-top navscroll" style="display:none;">
    <div class="container">
        <div class="row">
            <div id="menu" class="col-12">
                <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid justify-content-end">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link mx-5 text-white active" aria-current="page" href="index.php">Nosotros</a>
                                <a class="nav-link mx-5 text-white" href="productos.php">Productos</a>
                                <a class="nav-link mx-5 text-white" href="mix_&_food.php">Mix & Food</a>
                                <a class="nav-link mx-5 text-white" href="contacto.php">Contacto</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="logo-content" class="col-12 text-center p-3">
                <img id="logo" src="img/logo-blanco2.png" alt="" style="width: 30%;">
            </div>
            
        </div>
       
        
    </div>
</div>


<script>
     

        $(function (){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                $('.navscroll').addClass("inscroll");
                } else {
                $(".navscroll").removeClass("inscroll");
                }
            });
        });

        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
       
        
    </script>
