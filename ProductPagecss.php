<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Page</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
    
        <div class="container">
            <div class="row">
                <div class="content-info">
                    <div class="shoebrand-name">
                        <div>
                            <h1 class="brand">Camiseta negra</h1>
                        </div>
                        <h3 class="small">Abnormal series</h3>
                    </div>
                    <div class="content-details">
                        <h3 class="title">Información Del Producto</h3>
                        <p class="content-in">Camiseta abnormal el cual posee un diseño extravagante realizado con los mejores materiales de calidad para la satisfacion del cliente</p>
                    </div>
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
                        <a href="payment.php" class="price-of">COMPRAR AHORA</a>
                        <div class="share">
                            <a href="" class="car-bag">AÑADIR CARRITO</a>
                        </div>
                        <div class="price">
                            <h2> $211.00 </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--LEFT SIDE OF THE CARD SHOE HERE-->
            <div class="container-card">
                <img class="img-product" src="img/products/hombre/ab-cami-ne.png" alt="">
                </div>
            </div>
        </div>
    </body>

    <style>
    
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap');
   


    :root
    {
        --primary:#333;

    }

    *
    {
        margin: 0;
        font-family: 'Poppins',sans-serif;
        box-sizing: border-box;
    }

    body
    {
        background-color: #f5f5f5;
    }

    .section-title
    {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 40px;
    }

    .section-title h1
    {
        display: inline-block;
        font-size: 35px;
        font-weight: 700px;
        color: #000;
        margin: 0 0 20px;
        position: relative;
    }

    .section-title h1::before
    {
        content: '';
        height: 2px;
        background-color: gray;
        position: absolute;
        bottom: 0;
        width: 50px;
        left: 0;
        right: 0;
        margin: auto;
        transition: all .6s ease !important;
    }

    .section-title h1:hover::before
    {
        width: 100% !important;
    }

    .text-center
    {
        text-align: center !important;
    }

    /* ROW OF THE PAGE STARTS HERE*/
    .row
    {
        display: flex;
        flex-wrap: wrap;
    }

    .container
    {
        height: 800px;
        min-height: 70vh;
        display: flex;
        justify-content: space-between;
        max-width: fit-content;
        margin-left: 8px;
        padding: 100px;
        overflow: hidden;
    }

    .content-info
    {
        width: 100%;
        background-color: #ffffff;
        z-index: 0;
        padding: 50px 100px;
        padding-top: 8px;
        box-shadow: 15px 0 35px rgba(0, 0, 0, 0.1), 
        0 -15px 35px rgba(0, 0, 0, 0.1);

    }

    .shoebrand-name
    {
        padding: 0 0 10px;
    }

    .shoebrand-name div
    {
        display: flex;
        align-items: center;
    }

    .shoebrand-name div .brand 
    {
        margin-top: 20px;
        font-size: 35px;
        color: #333;
        
    }

    .shoebrand-name .small
    {
        font-weight: 500;
        color: #444;
        margin-top: 3px;
        text-transform: uppercase;
    }

    .shoebrand-name , .content-details , .colors-fill .size-ofproduct
    {
        border-bottom: 2px solid #eeeeee;
    }

    .content-details
    {
        padding: 10px;
    }

    .title
    {
        color: #444;
        font-weight: 600;
        font-size: 15px;
        text-transform: uppercase;
    }

    .price-shoe
    {
        color: #555;
        font-size: 17px;
    }

    .colors-fill
    {
        padding: 10px 16px;
    }

    .colors
    {
        padding: 8px 0;
        display: flex;
        align-items: center;
    }


    .color
    {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        margin: 0 10px;
        border: 5px solid;
        cursor: pointer;
        transition: .6s;
    }

    .color[color="black"]
    {
        background-color: black;
        border-color: black;
    }

    .color[color="white"]
    {
        background-color: white;
        border-color: #DCDCDC;
    }

    
    .color.active
    {
        border-color: #A6A6A6;
        box-shadow: 0 0 10px .5px rgba(0, 0, 0, 0.2);
        transform: scale(1.1);
    }

    .size-ofproduct
    {
        padding: 10px 16px;
        margin-bottom: 10px;
    }

    .sizes
    {
        padding: 8px;
        display: flex;
        align-items: center;
    }

    .size
    {
        width: 40px;
        height: 40px;
        border-radius: 50px;
        background-color: #eee;
        margin: 0 10px;
        text-align: center;
        line-height: 40px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: .3s;
    }

    .size.active
    {
        background-color: var(--primary);
        color: #cccccccc;
        transition: .5s;
    }

    .price-shoe
    {
        padding: 15px 0 0 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
       
    }

    .bag-of{
        padding: 10px 8px;
        background-color: #f5f5f5;
        text-decoration: none;
        color: black;
        justify-content: center;
       
        font-weight: 500;
        font-size: 15px;
        margin-right: 15px;
    }
    .car-bag{
        padding: 10px 8px;
        
        text-decoration: none;
        color: black;
        justify-content: center;
       
        
        font-size: 15px;
        margin-right: 15px;

    }

    .price-of ,
    .share
    {
        padding: 10px 8px;
        background-color: #f5f5f5;
        text-decoration: none;
        color: black;
        justify-content: center;
       
        font-weight: 500;
        font-size: 15px;
        margin-right: 15px;
    }

    .price-of:hover , 
    .share:hover
    {
        background-color: #000111;
        color: #f5f5f5;
    }
    .car-bag:hover{
        color: white;
    }

    .price-of 
    {
        margin-right: 10px;
    }

    .container-card
    {
        flex: 0 0 100%;
        position: relative;
        max-width: 100%;
        display: flexbox;
        justify-content: center;

    }

    .img-product{
        object-fit: cover;
        height: 600px;
    }




    




    </style>

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














</html>
