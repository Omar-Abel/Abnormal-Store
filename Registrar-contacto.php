 <?php 
 include("con_db.php");
 if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['asunto']) >= 1 && strlen($_POST['message']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $asunto = trim($_POST['asunto']);
        $message = trim($_POST['message']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO `contactar-registro`(`nombre`, `email`, `asunto`, `mensaje`, `fecha`) VALUES ('$name','$email','$asunto','$message','$fecha')";

        $destinatario = 'abnormalgrupo3@gmail.com';
         $header = "Enviado desde Abnormal Website:";
        $mensajeentero = $message . "\nAtentamente: " . $nombre;
         mail($destinatario, $asunto, $mensajeentero);

        $resultado = mysqli_query($conex,$consulta);
    

        if ($resultado) {

            ?>
            <div class="fondo">
           <div class="content">
                <div class="header">
                    <h2>¡Mensaje Enviado!</h2>
                    <!--boton x-->
                   <a href="contacto.php"> <label class="fas fa-times"></label></a>
                </div>
                <!--icono de cotejo-->
                <label class="fas fa-check"></label>
                <!--parrafo-->
                <p class="text-modal">Gracias por contactar con nosotros, te responderemos lo mas rapido posible</p>
                <!--linea que separa el boton close de lo demas-->
                <div class="line"></div>
                <!--boton de cerrar-->
                <a href="contacto.php"><label class="close-btn">Cerrar</label></a>
            </div>
        </div>



            <?php

        } else {
            echo "<script>alert('Llene bien los campos')</script>";
        }

    }   else {

            echo "<script>alert('Lo sentimos hubo un error, intentelo mas tarde! ')</script>";
            echo "<script>setTimeout(\"location.href='contacto.php'\",1000')</script>";

    }
}

 ?>        