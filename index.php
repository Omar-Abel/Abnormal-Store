<!DOCTYPE html>
<html lang="es">
<head>
 <title>Abnormal Store</title>
 <!-- Meta tags -->
 <meta charset="utf-8">
 <meta name="author" content="Grupo #3">
 <meta name="keywords" content="Abnormal, clothes, Fashion">
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
 <!-- Nonscript for non-js -->
 <noscript>
  Para utilizar las funcionalidades completas de este sitio es necesario tener
  JavaScript habilitado. Aquí están las <a href="https://www.enable-javascript.com/es/">
  instrucciones para habilitar JavaScript en tu navegador web</a>.
</noscript>

<!-- External Links -->
<link rel="stylesheet" href="css/estilo inicio-video.css">
<link rel="stylesheet" href="css/Seccion-products.css">
<link rel="stylesheet" href="css/barra-nav.css">
<link rel="stylesheet" href="css/productpage-modal.css">
<link rel="stylesheet" href="css/Slider-inicio.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="shortcut icon" href="img/icon abnormal.ico">
<link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>
<body>

  <?php 
  
  include("con_db.php")

  ?>

  <!-- Initial background video -->
  <header>
    <div class="capa-video"></div>
    <video onloadstart="this.muted=true" autoplay loop>
      <source src="video/video-inical.mp4">
      </video>
      <div class="absolute">
        <h1><span class="texto-video"></span></h1>
      </div>
    </header>

    <!-- Bar.nav sticky -->
    <nav>
      <div class="logo"><a href="index.php">Abnormal</a></div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-boton">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="activa" href="#">Inicio</a></li>
        <li><a href="Colleciones.php">Colecciones</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="about.php">Nosotros</a></li>
      </ul>
    </nav>


    <!-- Slider -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- Slider 1 -->
        <div class="swiper-slide">
         <picture>
           <source media="(min-width: 910px)" srcset="img/slider/1_1.png">
            <source media="(min-width: 549px)" srcset="img/slider/1_2.png">
              <source media="(min-width: 399px)" srcset="img/slider/1_3.png">
                <img src="img/slider/1_4.png" >
              </picture>
            </div>
            <!-- Slieder 2 -->
            <div class="swiper-slide">
              <picture>
               <source media="(min-width: 1049px)" srcset="img/slider/2_1.png">
                <source media="(min-width: 763px)" srcset="img/slider/2_2.png">
                  <source media="(min-width: 424px)" srcset="img/slider/2_3.png">
                    <img src="img/slider/2_4.png" >
                  </picture></div>
                  <!-- Slider 3 -->
                  <div class="swiper-slide">
                   <picture>
                     <source media="(min-width: 769px)" srcset="img/slider/3_1.png">
                      <source media="(min-width: 426px)" srcset="img/slider/3_2.png">
                        <img src="img/slider/3_3.png" >
                      </picture>
                    </div>
       <!--  <div class="swiper-slide"><img src="img/slider/4.png" alt=""></div>
        <div class="swiper-slide"><img src="img/slider/5.png" alt=""></div>
        <div class="swiper-slide"><img src="img/slider/6.png" alt=""></div>
        <div class="swiper-slide"><img src="img/slider/7.png" alt=""></div>
        <div class="swiper-slide"><img src="img/slider/8.png" alt=""></div>
        <div class="swiper-slide"><img src="img/slider/9.png" alt=""></div>
        <div class="swiper-slide"><img src="img/slider/10.png" alt=""></div> -->
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- ... -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>

    
    <br>

    <h2 class="tittle-descuentos">Proximamente</h2>
    <br>
    <!-- Recent products section -->
    <div class="grid-productos">



      <?php 

      $tabla = "SELECT * FROM `productos` WHERE coleccion='Próximamente';";
      $producto_resultado = mysqli_query($conex, $tabla);

      while ($mostrar = mysqli_fetch_array($producto_resultado)) {

       ?>

       <div class="box">

        <div class="box-img">
          <img src="img/products/<?php echo $mostrar['imagen']?>.png" alt="">
          <div class="capa-producto">


            <a class="buy-boton">No disponible</a>

          </div>
        </div>
        <div class="detalles-box">
          <div class="texto-box">
            <a><?php echo $mostrar['nombre'] ?></a>
            <span><?php echo $mostrar['coleccion'] ?></span>
          </div>
          <a id="open" class="precio-box">$<?php echo $mostrar['precio']?></a>
        </div>
      </div>


      

    <?php 
  }
  ?>    
  <script>


  </script>


</div>



<!-- JS PRODUCTOS -->
  <script>
    const sizes=document.querySelectorAll('.size');
    const colors=document.querySelectorAll('.color');
    const shoes=document.querySelectorAll('.shoes');
    const bgcolors=document.querySelectorAll('.bgcolor');
    const shoebgs=document.querySelectorAll('.shoebg');


    let prevColor="";
    let animationEnd=true;

    function changeSize(){
      sizes.forEach(size=>size.classList.remove('active'));
      this.classList.add('active');
    }

    function changeColor(){
      if(!animationEnd)return;
      let primary=this.getAttribute('primary');
      let color=this.getAttribute('color');
      let shoe=document.querySelector(`.shoe[color="${color}"]`); 
      let bgcolor=document.querySelector(`.bgcolor[color="${color}"]`);
      let prevBgcolor=document.querySelector(`.bgcolor[color="${prevColor}"]`);

      if(color==prevColor) return;

      colors.forEach(c=> c.classList.remove('active'));
      this.classList.add('active');

      document.documentElement.style.setProperty('--primary',primary)

      shoes.forEach(s=>s.classList.remove('show'));
      shoe.classList.add('show');

      bgcolors.forEach(g => g.classList.remove('first', 'second'));
      bgcolor.classList.add('first');
      prevBgcolor.classList.add('second');

      prevBcolor=color;
      animationEnd=false;

      bgcolor.addEventListener('animationend',()=>{
       animationEnd=true;
     })
    }  

    sizes.forEach(size=>size.addEventListener('click',changeSize));
    colors.forEach(c=> c.addEventListener('click',changeColor));
  </script>


<div class="wrapper">
    <h1>Que opinan los famosos</h1>
    <div class="our_team">
        <div class="team_member">
          <div class="member_img">
             <img src="https://nuevodiario-assets.s3.us-east-2.amazonaws.com/wp-content/uploads/2021/03/DISENADOR.png" alt="our_team">

          </div>
          <h3>Alexander Wang</h3>

          <p>"Como amante de la ropa con colores neutros, abnormal se ha convertido en unas de mis marcas favortias, sus diseños tanto abnormal y de trail me encantan"</p>
        </div>
        <div class="team_member">
           <div class="member_img">
             <img src="https://ocdn.eu/pulscms-transforms/1/KS5ktkuTURBXy9iYzhiODM5YS1kOGMwLTQ2M2UtYjExYy0zYzNhNDBlNDY3MGEuanBlZ5GVAs0DpQDCww" alt="our_team">
          </div>
          <h3>Marc Jacobs</h3>

          <p>"Para nada va conmigo, pero he de admitir que tiene un diseño muy atractivo y atrapante para la modernidad de ahora, a los jóvenes les encantarán"</p>
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="https://25gramos.com/wp-content/uploads/2020/10/galliano-25-gramos.jpg" alt="our_team">
          </div>
          <h3>John Galliano</h3>
          
          <p>"Atractivo cuanto menos, me lo pondria varios dias para salir, me encantan el diseño del Cycle"</p>
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/Anna_Wintour_2019_crop.jpg" alt="our_team">
          </div>
          <h3>Anna Wintour</h3>
          
          <p>"Para ser un diseño muy raro, funciona, sus diseños modernos mas con los colores neutros son la mejor combinación"</p>
      </div>  
    </div>
</div>



<div class="contactanos_container">
  <h2>Si tienes una duda o sugerencia escribenos:</h2>
  <br>
  <br>
  <a href="contacto.php" class="boton-contactanos">Pulsa aqui!</a>
</div>

<!-- Full screen modal -->

<!-- Footer -->
<footer>

 <div class="container-footer-all">

  <div class="container-body">

    <div class="colum1">
      <h1>Mas informacion de la compañia</h1>

      <p>Abnormal es una marca de ropa destinada a los jovenes de hoy en dia en busca de una experiencia nueva y unica, para darle un giro a tu vida. Just be different.</p>
      <br>

      <ul>
        <li>Modern Style</li>
        <br>
        <li>Unique experience</li>
        <br>
        <li>High quality</li>
      </ul>


    </div>

    <div class="colum2">

      <h1>Redes Sociales</h1>

      <div class="row">
        <img src="img/icon-footer/facebook.png">
        <label>Siguenos en Facebook</label>
      </div>
      <div class="row">
        <img src="img/icon-footer/twitter.png">
        <label>Siguenos en Twitter</label>
      </div>
      <div class="row">
        <img src="img/icon-footer/instagram.png">
        <label>Siguenos en Instagram</label>
      </div>
      <div class="row">
        <img src="img/icon-footer/google-plus.png">
        <label>Siguenos en Google Plus</label>
      </div>
      <div class="row">
        <img src="img/icon-footer/pinterest.png">
        <label>Siguenos en Pinteres</label>
      </div>


    </div>

    <div class="colum3">

      <h1>Informacion Contactos</h1>

      <div class="row2">
        <img src="img/icon-footer/house.png">
        <label>Somos una tienda virtual</label>
      </div>

      <div class="row2">
        <img src="img/icon-footer/smartphone.png">
        <label>+1-xxx-xxx-xxxx</label>
      </div>

      <div class="row2">
        <img src="img/icon-footer/contact.png">
        <label>abnormal@gmail.com</label>
      </div>

    </div>

  </div>

</div>

<div class="container-footer">
 <div class="footer">
  <div class="copyright">
    © 2021 Todos los Derechos Reservados | <a href="">Abnormal</a>
  </div>

  <div class="information">
    <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
  </div>
</div>
</div>
</footer>



  <div class="aviso-cookies" id="aviso-cookies">

    <h3 class="titulo">¡Aviso!</h3>
    <p class="parrafo">Esta página web es un proyecto estudiantil, por lo que toda la informacion de la página no es veridica y esta hecha con un fin eduactivo. Un saludo!</p>
    <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
  </div>
  <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

  <script type="text/javascript">
    const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
const avisoCookies = document.getElementById('aviso-cookies');
const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

dataLayer = [];

if(!localStorage.getItem('cookies-aceptadas')){
  avisoCookies.classList.add('activo');
  fondoAvisoCookies.classList.add('activo');
} else {
  dataLayer.push({'event': 'cookies-aceptadas'});
}

botonAceptarCookies.addEventListener('click', () => {
  avisoCookies.classList.remove('activo');
  fondoAvisoCookies.classList.remove('activo');

  localStorage.setItem('cookies-aceptadas', true);

  dataLayer.push({'event': 'cookies-aceptadas'});
}); 
  </script>









</body>
</html>



