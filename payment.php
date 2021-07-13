

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Realizar Pago</title>
    <link href="css/payment.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon abnormal.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>

<body>
   <div class="wrapper">
       <h2>Realizar Pago</h2>
       <form method="POST">
           <h4>Cuenta</h4>
           <div class="input-group">
               <div class="input-box">
                   <input type="text"
                   placeholder="Nombre" required class="name">
                   <i class="fa fa-user icon"></i> 
               </div>
               <div class="input-box">
               </div>
               <div class="input-box">
                 <input type="text"
                 placeholder="Usuario" required
                 class="name">
                 <i class="fa fa-user icon"></i>
             </div>
         </div>

         <div class="input-group">
            <div class="input-box">
                <input type="email"
                placeholder="Correo electronico" required
                class="name">
                <i class="fa fa-envelope icon"></i>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <h4>Fecha de nacimiento</h4>
                <input type="tel" placeholder="DD"
                class="dob">
                <input type="tel" placeholder="MM"
                class="dob">
                <input type="tel"
                placeholder="YYYY" class="dob">
            </div>
            <div class="input-box">
                <h4>Genero</h4>
                <input type="radio" id="b1"
                name="gendar" checked class="radio">
                <label for="b1">Hombre</label>
                <input type="radio" id="b2"
                name="gendar" class="radio">
                <label for="b2">Mujer</label>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <h4>Detalles del pago</h4>
                <input type="radio" name="pay" id="bc1" checked class="radio">
                <label for="bc1"><span><i class="fa fa-cc-visa"></i>Tarjeta de credito</span></label>
                <input type="radio" name="pay"
                id="bc2" class="radio">
                <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <input type="tel" placeholder="Numero de Tarjeta" required class="name">
                <i class="fa fa-credit-card icon"></i>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <input type="password" placeholder="Tarjeta CVC" required class="name">
                <i class="fa fa-user icon"></i>
            </div>
            <div class="input-box">
                <select>
                    <option>13 / julio</option>
                    <option>14 / julio</option>
                    <option>15 / julio</option>
                    <option>19 / julio</option>
                    <option>22 / julio</option>
                    <option>23 / julio</option>
                    <option>28 / julio</option>
                </select>
                <select>

                    <option>2021</option>

                </select>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
               <a href="index.php" class="botones">CANCELAR</a>
               <button type="submit" class="botones" onclick="location.href='comprado.php';" >PAGAR</button>
           
    
           </div>
        </div> 
    </form>
</div>

         


</body>
</html>