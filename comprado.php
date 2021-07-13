<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Producto Comprado!</title>
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	 <link rel="shortcut icon" href="img/icon abnormal.ico">
</head>
<body>	
	   <div class="fondo">
           <div class="content">
                <div class="header">
                    <h2>¡Producto Comprado!</h2>
                    <!--boton x-->
                   <a href="index.php"> <label class="fas fa-times"></label></a>
                </div>
                <!--icono de cotejo-->
                <label class="fas fa-check"></label>
                <!--parrafo-->
                <p class="text-modal">Gracias por comprar nuestro producto, esperamos que lo disfrutes!</p>
                <!--linea que separa el boton close de lo demas-->
                <div class="line"></div>
                <!--boton de cerrar-->
                <a href="index.php"><label class="close-btn">Cerrar</label></a>
            </div>
        </div>

<style>


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

	/* Pop up */
.content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
 
    height: 100vh;
    

}


}

.click-me:hover{
    background: gray;
}

.content{
   position: fixed;
    width: 400px;
    height: 350px;
    background: white;
    border-radius: 3px;

    box-shadow: 1px 3px 3px 5px grey;
}



.header{
    height: 68px;
    background: black;
    overflow: hidden;
    border-radius: 3px 3px 0 0;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .2);
}

.header h2{
    color: white;
    padding-top: 20px;
    padding-left: 32px;
    font-weight: normal;
}

.fa-times{
    position: absolute;
    right: 20px;
    top: 20px;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}

.fa-check{
    font-size: 120px;
    color: black;
    font-weight: bold;
    width: 90px;
    height: 80px;
    text-align: center;
    padding-top: -5px;
    box-sizing: border-box;
    margin: 30px 0 0 145px;

}

.text-modal{
    padding-top: 10px;
    font-size: 19px;
    color: #1a1a1a;
    text-align: center;
}

.line{
    position: absolute;
    bottom: 65px;
    width: 100%;
    height: 1px;
    background: silver;
}

.close-btn{
    position: absolute;
    bottom: 12px;
    right: 25px;
    border: 1px solid black;
    border-radius: 3px;
    color: black;
    padding: 8px 10px;
    font-size: 18px;
    cursor: pointer;
}

.close-btn:hover{
    background: black;
    color: white;
    transition: .5s;
}      

.fondo {
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index: 500;
        top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}

#todo-modal{
   opacity: 0;
   pointer-events: none;
}

#todo-modal:target{
   opacity: 1;
   pointer-events: auto;
}





</style>

	
</body>
</html>