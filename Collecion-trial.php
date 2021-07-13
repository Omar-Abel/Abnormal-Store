<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trial | Abnormal</title>

	<link rel="stylesheet" href="css/productpage-modal.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="css/Seccion-products.css">
	<link rel="stylesheet" href="css/barra-nav.css">
	<link rel="stylesheet" href="css/estilo inicio-video.css">
	<link rel="stylesheet" href="css/footer.css">
	<link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon abnormal.ico">



	<style>
	.titulo-galeria {
		padding: 30px;
		display: block;
		text-align: center;
		font-family: 'Lacquer';
		font-size: 60px;
	}


</style>


</head>
<body>
	
	<?php 

	include("con_db.php")

	?>


	<nav>
		<div class="logo"><a href="index.php">Abnormal</a></div>
		<input type="checkbox" id="click">
		<label for="click" class="menu-boton">
			<i class="fas fa-bars"></i>
		</label>
		<ul>
			<li><a  href="index.php">Inicio</a></li>
			<li><a class="activa" href="Colleciones.php">Colecciones</a></li>
			<li><a href="galeria.php">Galeria</a></li>
			<li><a href="about.php">Nosotros</a></li>
		</ul>
	</nav>

	<h1 class="titulo-galeria">Colecci&oacute;n Trial</h1>

	<div class="grid-productos">

		<?php 
		$tabla = "SELECT * FROM `productos` WHERE coleccion='Trial';";
		$producto_resultado = mysqli_query($conex, $tabla);

		while ($mostrar = mysqli_fetch_array($producto_resultado)) {
		?>

			<div class="box">
				<div class="box-img">
					<img src="img/products/<?php echo $mostrar['imagen']?>.png" alt="">
					<div class="capa-producto">
						<a href="#abrirmodal<?php echo $mostrar['id']?>" class="buy-boton">Comprar ahora</a>
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


			<div class="modal-container<?php echo $mostrar['id']?>" id="abrirmodal<?php echo $mostrar['id']?>" >
				<div class="modal">

					<a href="#abrirmodal" class="boton-cerrar"><i class="fas fa-times"></i></a>

					<div class="grid-modal">
						<!-- INFO DEL PRODUCTO   -->
						<div class="ropa-info">
							<!-- TITULO Y DESCRIPCION  -->
							<div class="shoebrand-name">
								<div>
									<h1 class="brand"><?php echo $mostrar['nombre']?></h1>
								</div>
								<h3 class="small"><?php echo $mostrar['coleccion']?></h3>
							</div>
							<div class="content-details">
								<h3 class="title">Información Del Producto</h3>
								<p class="content-in"><?php echo $mostrar['descripcion']?></p>
							</div>
							<!-- COLOR TAMANO Y CANTIDAD -->
							<div class="colors-fill">
								<h3 class="title">Colores</h3>
								<div class="colors">
									<span class="color active" primary="#444" color="black"></span>
									<span class="color" primary="#f4f4f4" color="white"></span>
								</div>
							</div>

							<div class="size-ofproduct">
								<h3 class="title">Talla</h3>
								<div class="sizes">
									<span class="size active">XS</span>
									<span class="size">S</span>
									<span class="size">M</span>
									<span class="size">L</span>
									<span class="size">XL</span>
								</div>
							</div>

							<div class="price-shoe">
								<button class="comprar"><a href="payment.php">COMPRAR AHORA</a></button>
								<div class="share">
									<select name="cantidad"  class="comprar" id="">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
								<div class="price">
									<h2>$<?php echo $mostrar['precio']?></h2>
								</div>
							</div>
						</div>
						<div class="ropa-foto">
							<img src="img/products/<?php echo $mostrar['imagen']?>.png" alt="">
						</div>
					</div>
				</div>
			</div>

			<style>

			.modal-container<?php echo $mostrar['id']?> {
				display: flex;
				background-color: rgba(0, 0, 0, 0.3);
				align-items: center;
				justify-content: center;
				position: fixed;
				pointer-events: none;
				opacity: 0;  
				top: 0;
				left: 0;
				height: 100vh;
				width: 100vw;
				transition: opacity 0.3s ease;
				font-family: 'Quicksand', sans-serif;
				z-index: 2000;
			}

			#abrirmodal<?php echo $mostrar['id']?>:target{
				opacity: 1;
				pointer-events: auto;
			}

		</style>

		<?php 
	}
	?>  

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


	  
</div>
<br>
<div class="contactanos_container">
  <h2>Si tienes una duda o sugerencia escribenos:</h2>
  <br>
  <br>
  <a href="contacto.php" class="boton-contactanos">Pulsa aqui!</a>
</div>
<!-- Footer -->
<footer>

 <div class="container-footer-all">

  <div class="container-body">

    <div class="colum1">
      <h1>Mas informacion de la compañia</h1>

      <p>Abnormal es una marca de ropa destinada a los jovenes de hoy en dia en busca de una experiencia nueva y unica, para darle un giro a tu vida. Just be different.</p>

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





</body>
</html>