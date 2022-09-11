<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta hotelpance122</title>
</head>

<style>

  *{
      padding:0;
      margin:0;
   }

   .container{
    width: 78% !important;
    margin: 0 auto !important;
   }

   .txt-own{
    font-size: 20px;
    color: #2a2929;
   }


   .txt-near-footer{
      bottom: 350px;
      position: absolute;
      margin:0 auto;
   }

   .footer{
       position: absolute;
       width: 100%;
       bottom: 0px;
       height: 300px;
   }
</style> 
<body>
    <header>
       <img src="http://localhost/qihotels-tarjetas/assets/modelo_carta/header_carta.png" style="width: 100%;" />
    </header>
     
     <main class="container"> 
        <div>  
            <p class="txt-own">Te invitamos a vivir una experiencia encantadora en nuestro Hotel, 
            donde podrás disfrutar de un espacio agradable, tranquilo y exclusivo.
            Estarás rodeado de la fauna y flora  que caracteriza nuestro sector.</p>
            <br><br>

            <p class="txt-own">Bono  emitido a : <?php  echo $_SESSION['recibe_bono'] ?> </p>
            <p class="txt-own"> Valor : <?php echo $_SESSION['valor_bono'] ?> </p>
            <p class="txt-own"> Descripcion : <?php echo $_SESSION['descripcion'] ?> </p>
        </div>

        <div> 
            <p class="txt-own txt-near-footer"> 
                Recuerda validar la información en recepción o comunicándote con nosotros <br>
                por medio de nuestros canales digitales. FOLIO 004253 <br>

                <br>
                Gerencia: ______________________________________
            </p>
        </div>
     </main>

    <footer class="footer">  
        <img class="footer" src="http://localhost/qihotels-tarjetas/assets/modelo_carta/footer_carta.png" style="width: 100%;" />
    </footer>  
</body>
</html>