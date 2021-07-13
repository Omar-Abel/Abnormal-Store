<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos | Abnormal </title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon abnormal.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/contacto.css">


</head>
<body>
 
    <form method="post">
        <div class="form">
          
            <h1>Contactanos </h1>
            <div class="grupo">
                <input type="text" name="name" id="" required=""><span class="barra"></span>
                <label>Nombre</label>
            </div>
            
            <div class="grupo">
                <input type="email" name="email" id="" required=""><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="text" name="asunto" id="" required=""><span class="barra"></span>
                <label>Asunto</label>
            </div>
            <div class="grupo">
                <textarea name="message" id="" rows="3" required=""></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button type="submit" name="register">Enviar</button>
            <a href="index.php">Volver atras</a> 
        </div> 
    </form>

    <?php 
    include("Registrar-contacto.php");
    ?>

</body>


</html>