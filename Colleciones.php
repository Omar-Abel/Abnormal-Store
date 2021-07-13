<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Grupo #3">
	<meta name="keywords" content="Abnormal, clothes, Fashion">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Colleciones | Abnormal</title>

	<!-- External Links -->
  
  <link rel="stylesheet" href="css/barra-nav.css">
  <link rel="stylesheet" href="css/Slider-colecciones.css">

  <link rel="stylesheet" href="css/footer.css">
  <link rel="shortcut icon" href="img/icon abnormal.ico">
  <link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




</head>
<body>

 <!-- Bar.nav sticky -->
    <nav>
      <div class="logo"><a href="index.php">Abnormal</a></div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-boton">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a class="activa" href="#">Colecciones</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="about.php">Nosotros</a></li>

      </ul>
    </nav>

	<!-- Slider -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><a href="Collecion-trial.php"><img src="img/colec trial.png" alt=""></a></div>
    <div class="swiper-slide"><a href="Coleccion-abrnormal.php"><img src="img/colec abnormal.png" alt=""></a></div>
    <div class="swiper-slide"><a href="Coleccion-cycle.php"><img src="img/colec cycle.png" alt=""></a></div>
  </div>
  <div class="swiper-pagination"></div>
</div>



</body>

<style>
  body {
  background: #fff;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 14px;
  color:#000;
  margin: 0;
  padding: 0;
}
.swiper-container {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}
.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 450px;
  height: 450px;
}

.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@media(max-width: 532px){

  .swiper-slide{
    width: 80%;
    height: 100%;
  }

}

</style>
  

<script>
  var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflow: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows : true
  },
  loop: false
});
</script>

</html>