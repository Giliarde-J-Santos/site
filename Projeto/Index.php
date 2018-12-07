<!DOCTYPE html>
<html>
 <head>
    <title>Astronomia</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="div.css" />
 </head>
 <body>
     <img class="logo" src="Imagens/ifsp.png" alt="Logotipo IFSP" />
     <div class="container border m-4 p-2 mx-auto">
        <h1 class='p-2 m-2 bg-info text-white text-center'>Introdução à astronomia</h1>
        <br /> 
        
                 <?php
         echo "<br />
        <div id='obj_carousel' class='carousel slide w-75 mx-auto' data-ride='carousel'>

         <ol class='carousel-indicators'>";
         for($i = 0; $i < 8; $i++) {
         if ($i == 0 ) {
         echo "<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>";
         }
         else {
         echo "<li data-target='#obj_carousel' data-slide-to='$i'></li>";
         }
         }
        echo "</ol>

         <div class='carousel-inner'>";

         for($i = 1; $i < 9; $i++) {
         if ($i == 1 ) {
         echo "<div class='carousel-item active'>";
         }
        else {
         echo "<div class='carousel-item'>";
         }
         echo "<img class='w-100' src='Imagens/$i.jpg' alt='Imagem sobre astronomia' />
         </div>";
         }
         echo "</div>

         <a class='carousel-control-prev' href='#obj_carousel' role='button' data-slide='prev'>
         <span class='carousel-control-prev-icon' aria-hidden='true'></span>
         <span class='sr-only'>Anterior</span>
         </a>
         <a class='carousel-control-next' href='#obj_carousel' role='button' data-slide='next'>
         <span class='carousel-control-next-icon' aria-hidden='true'></span>
         <span class='sr-only'>Próximo</span>
         </a>
         </div>"; // Fecha a div obj_carousel
                ?>
         
        <form action="Listar.php" method="post">
        <h4 class='p-2 m-2'> Assunto:
        <select name="assunto">
             <option disabled selected>Selecione...</option>
             <option value="Estrelas"> Estrelas </option>
             <option value="Galaxias"> Galáxias </option>
             <option value="Planetas"> Planetas </option>
        </select>
        </h4>
        <p class='p-2 m-2'> <input type="submit" class="btn btn-primary btn-md activ" value="Procurar" /> </p>
        </form>
     </div>
     <hr />
        <div class="dados">
            <p>IFSP - Câmpus Guarulhos
                <br />
            Análise e Desenvolvimento de sistemas - 2º Semestre - Linguagem de programação 1
                <br />
            Giliarde José dos Santos
                <br />
            gu3001598
                <br />
            Data de entrega: 09/10/2018
            </p>
        </div>
 </body>
</html>
