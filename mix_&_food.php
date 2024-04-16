<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos Reyes | Mix & food</title>
    <?php
    include('templates/link.php');
    ?>
 

</head>
<body>
<?php include('templates/header.php'); ?>
<!--script src="idiomas/leng.js"></script-->

<div id="portada-prod" class="bg-center" style="background-image: url(img/portada5.jpg); height: 500px;">
    <div class="py-5 overlayb d-flex justify-content-center align-items-end">
      
       <h1 class="text-center text-white">DRINKS Y MARIDAJE</h1>

    </div>
</div>

<div class="p-5"></div>


<div class="container">
    <h5 class="subtitulo text-center">Mix & Food</h5>
    <h2 class="text-center">Mezcal dos reyes</h2>
    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus inventore, deleniti dignissimos laboriosam magnam iure odio, ipsa ea deserunt aperiam, quasi necessitatibus totam.</p>




    <!--container start-->
    <div class="container">
        <!--main section start-->
        <div class="wrapper">
        <ul class="image-filter d-flex justify-content-center my-5">
            <li class="filter-item mx-5 active" data-image-type="all"><a href="#Fixme" title="All"><p class="text-black m-0 p-0">Todo</p> </a></li>
            <li class="filter-item mx-5" data-image-type="faciles"><a href="#Fixme" title="faciles"><p class="text-black m-0 p-0">Fáciles</p> </a></li>
            <li class="filter-item mx-5" data-image-type="elaborados"><a href="#Fixme" title="elaborados"><p class="text-black m-0 p-0">Elaborados</p> </a></li>
            <li class="filter-item mx-5" data-image-type="dulces"><a href="#Fixme" title="dulces"><p class="text-black m-0 p-0">Dulces</p> </a></li>
            <li class="filter-item mx-5" data-image-type="salados"><a href="#Fixme" title="salados"><p class="text-black m-0 p-0">Salados</p> </a></li>
        </ul>
        <ul class="image-gallary">
            <li data-image-type="all,faciles">
            <a class="text-center w-100" href="#Fixme" title="Image1">
                <img class="w-100" src="img/NAKEDANDFAMOUS.png" alt="Image1">
                <div class="overlay">
                <span class="title">NAKED AND FAMOUS</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,faciles">
            <a class="text-center w-100" href="#Fixme" title="Image2">
                <img class="w-100" src="img/NegroniEquivocado.png" alt="Image2">
                <div class="overlay">
                <span class="title">Negroni Equivocado</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,faciles">
            <a class="text-center w-100" href="#Fixme" title="Image3">
                <img class="w-100" src="img/ZICATELA.png" alt="Image3">
                <div class="overlay">
                <span class="title">ZICATELA</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,elaborados">
            <a class="text-center w-100" href="#Fixme" title="Image4">
                <img class="w-100" src="img/YAGA.png" alt="Image4">
                <div class="overlay">
                <span class="title">YAGA</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,elaborados">
            <a class="text-center w-100" href="#Fixme" title="Image5">
                <img class="w-100" src="img/ÓLEOAMBAR.png" alt="Image5">
                <div class="overlay">
                <span class="title">ÓLEO AMBAR</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,elaborados">
            <a class="text-center w-100" href="#Fixme" title="Image6">
                <img class="w-100" src="img/NOPALITA.png" alt="Image6">
                <div class="overlay">
                <span class="title">NOPALITA</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,dulces">
            <a class="text-center w-100" href="#Fixme" title="Image8">
                <img class="w-100" src="img/chocolate.png" alt="Image8">
                <div class="overlay">
                <span class="title">CHOCOLATES</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,dulces">
            <a class="text-center w-100" href="#Fixme" title="Image8">
                <img class="w-100" src="img/chocolate.png" alt="Image8">
                <div class="overlay">
                <span class="title">CHOCOLATES</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,dulces">
            <a class="text-center w-100" href="#Fixme" title="Image8">
                <img class="w-100" src="img/chocolate.png" alt="Image8">
                <div class="overlay">
                <span class="title">CHOCOLATES</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,salados">
            <a class="text-center w-100" href="#Fixme" title="Image11">
                <img class="w-100" src="img/BOTANAS.png" alt="Image11">
                <div class="overlay">
                <span class="title">BOTANAS</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,salados">
            <a class="text-center w-100" href="#Fixme" title="Image12">
                <img class="w-100" src="img/TACOSALPASTOR.png" alt="Image12">
                <div class="overlay">
                <span class="title">TACOS AL PASTOR</span>
                
                </div>
            </a>
            </li>
            <li data-image-type="all,salados">
            <a class="text-center w-100" href="#Fixme" title="Image13">
                <img class="w-100" src="img/SIRLOIN.png" alt="Image13">
                <div class="overlay">
                <span class="title">SIRLOIN</span>
                
                </div>
            </a>
            </li>
            
        </ul>
        </div>
        <!--main section ends-->
    </div>
    <!--container end-->
</div>

<div class="p-5"></div>

<script>
    var filter = document.querySelectorAll('.filter-item');
var imageItem = document.querySelectorAll('.image-gallary li');

filter.forEach(function(value,index){
    value.addEventListener("click", function(){
        elementData = value.dataset.imageType;
        showImage(elementData);
        showActiveTab(index);
    })
})

function showImage(n){
    for(var i=0;i<imageItem.length;i++){
        var arr1 =  imageItem[i].dataset.imageType.split(',');
        (arr1.includes(n))?imageItem[i].classList.remove('hide'):
        imageItem[i].classList.add('hide');
        arr1 = [];
    }
}

function showActiveTab(m){
    for(var j=0;j<filter.length;j++){
        (j==m)?filter[m].classList.add('active'):
        filter[j].classList.remove('active');            
    }
}
</script>


<?php include('templates/footer.php'); ?>
</body>
</html>

<style>
    @charset "utf-8";
/* ==========================================================================
   1. CSS Reset Code
   ========================================================================== */

/* 1.1. Eric Meyers Reset
   http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
   ========================================================================== */


/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

/* Force scrollbar */
html { overflow-y: scroll; }

/* Align radios and text inputs with their label */

input[type='radio'] { vertical-align: text-bottom; }

/* Hand cursor on clickable input elements */
label,
input[type='button'],
input[type='submit'],
button { cursor: pointer; }

strong {
  font-weight: bold;
  font-family: inherit;
  font-size: inherit;
}
li.filter-item.mx-5.active {
    background: #c18b26;
    padding: 7px 23px;
    box-shadow: 0px 0px 23px #0000005e;
}
li.filter-item.mx-5 {
    border: 2px solid #c18b26;
    padding: 7px 23px;
}
li.filter-item.mx-5:hover {
    background: #c18b26;
    transition: 0.5s
}
em { font-style: italic; }

img {
  width: 100%;
  border: 0;
  vertical-align: middle;
}

sub,
sup {
  vertical-align: baseline;
  position: relative;
  font-size: 55%;
  line-height: 0;
}

sup { top: -.7em; }
sub { bottom: -.25em; }

/* 1.2. Clear Fix
   ========================== */

.cf:before,
.cf:after {
  display: table;
  content: " ";
}

.cf:after { clear: both; }
.cf { *zoom: 1; }

/*for all*/

a { 
  display: inline-block;
  text-decoration: none; 
}

li {
  display: inline-block;
  list-style-type: none;
}
/* Common styling */
.grey { color: #666; }
.cap { text-transform: capitalize; }
.up { text-transform: uppercase; }
.center { text-align: center; }
.bold { font-weight: bold; }
.transition { transition: 1s all ease; }

/*for wrapper*/
.wrapper {
  max-width: 1350px;
  width: 95%; 
  margin: 0 auto;
}
/*=================================
  Header styling starts here
=================================*/


/*=================================
  Header styling ends here
=================================*/  

/*=================================
  main styling starts here
=================================*/


.image-filter a:hover {
  
  transition: all .5s ease-in-out;
}





.image-gallary { 
  display: flex;
  flex-wrap: wrap;
  transition: all .5s ease-in-out;
  margin-bottom: 50px;
}

.image-gallary li{
  flex-shrink: 0;
  width: 33.3%;
  position: relative;
  transition: fadeAndScale .8s ease-in-out;    
  animation-duration: .8s;
  animation-name: fadeAndScale;
  animation-timing-function: cubic-bezier(.71,.55,.62,1.4);
}

.image-gallry img {
  width: 100%;
  height: auto;
}

.overlay {
  background: #000000cf;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: all .5s ease-in-out;
}

.overlay span { 
  color: #FFF;
  display: block;
  text-align: center;
  font-weight: 700;
  width: 100%;
}

.title {
  font-size: 20px;
  text-transform: capitalize;
  margin-top: 40px;
}

.overlay span:nth-of-type(2) { font-size: 12px }

.overlay:before {
  content: "\f002";
  font-family: "Font Awesome 5 Free";
  font-weight: 700;
  font-size: 25px;
  position: absolute;
  top: 40%;
  left: 0%;
  padding: 10px;
  background: #FFF;
  color: black;
  opacity: 0;
}

.overlay:after {
  content: "\f15b";
  font-family: "Font Awesome 5 Free";
  font-weight: 700;
  font-size: 25px;
  position: absolute;
  top: 40%;
  right: 0%;
  padding: 10px;
  background: #FFF;
  color: black;
  opacity: 0;
}

li:hover .overlay{
  top:0px;
  left: 0px;
  opacity: 1;
  transition: all .5s ease-in-out;
}

li:hover .overlay:after {
  right: 35%;
  transition: all .5s ease-in-out;
  opacity: 1;
}

li:hover .overlay:before {
  left: 35%;
  transition: all .5s ease-in-out;
  opacity: 1;
}

.hide { display: none; }

@keyframes fadeAndScale {
  from {
      opacity: 0;
      transform: scale(.7, .7);
  }
  to {
      opacity: 1;
      transform: scale(1, 1);
  }
}


/*=================================
  main styling ends here
=================================*/

/*=================================
  footer styling starts here
=================================*/ 







 /*=================================
  footer styling ends here
=================================*/ 

/*media query starts*/
/*media query for 995px starts here*/
@media only screen and (max-width: 1200px) {
  .image-gallary li{
    flex-shrink: 0;
    width: 33.3%;
    position: relative;
    transition: all .8s ease-in-out;
  }
  }  
  
  @media only screen and (max-width: 995px) {
  .image-gallary li{
    flex-shrink: 0;
    width: 50%;
    position: relative;
    transition: all .8s ease-in-out;
  }
  
  nav li { 
    margin: 0px 14px; 
    padding-bottom: 17px;
  }
  
  .wrapper { 
    width: 72.5%; 
    min-width: 700px;
  }
  .center-list { margin: 0px; }
  .footer-links { display: block; }
  .flicker-gallary li { display: block; }
  
  .recent-posts { 
    width: 100%; 
    margin-bottom: 10px;
  }

  .recent-posts li {
    display: block; 
    width: 100%;
   }
  
   .tags-list { margin-bottom: 10px }
  }  
  
  @media only screen and (max-width: 768px){
  
  header { border-bottom: 1px solid #DDD; }
  header .wrapper { padding:15px 0px; }
  
  .wrapper { 
    width: 92%; 
    min-width: 340px;
  }
  
  nav ul { display: none; }
  
  nav ul {
    position: absolute;
    top: 80px;
    width: 100%;
    left: 0;
    background: #1F1F1F;
    overflow-x: scroll;
  }
  
  nav li {
    padding: 10px;
  }
  
  .menu { display: block; }  
  nav:hover > ul { display : block; }  
  
  .copyright {
    display: block;
    text-align: center;
  }
  
  .flicker-gallary img {
    width: 60px;
    height: 60px;
  }
  }
  
  @media only screen and (max-width: 540px){
  
  .wrapper { 
    width: 85%; 
    min-width: 220px;
  }
  
  .image-gallary { flex-direction: column; }
  
  .image-gallary li {
    flex-shrink: 0;
    width: 100%;
  }

  .image-gallary li a { display: block; }
  
  }
</style>