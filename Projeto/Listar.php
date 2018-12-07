<!DOCTYPE html>
<html>
 <head>
         <title>Tema</title>
         <meta charset="utf-8" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
         <link rel="stylesheet" href="div.css" />
     </head>
 <body>
    <img class="logo" src="Imagens/ifsp.png" alt="Logotipo IFSP" />
    <div class="container border m-4 p-2 mx-auto">
    <br />
    <?php
    if (isset($_POST['assunto'])) {
         $assunto = $_POST['assunto'];
         echo "<h1 class='p-2 m-2 bg-info text-white text-center'>Introdução à corpos celestes - <span class='textwarning'>$assunto</span></h1>";

         include "Matriz_Temas.inc";
         echo "<div class='container w-100'>
                <div class='row w-100'>";
        for($i = 0; $i < count($matriz_temas); $i++) {
                if ($matriz_temas[$i][0] == $assunto ) {
                    echo "<div class='col text-center'>
                        <a href='Detalhes.php?lin=$i'>
                            <p class='font-weight-bold'>" . $matriz_temas[$i][1] . "</p>
                        </a>
                        <img class='img-thumbnail 'src='". $matriz_temas[$i][4] . "' alt='Foto da Notícia' />
                       <p class='text-justify'>" . $matriz_temas[$i][2] . "</p> 
                    </div>";
                }
         }
         echo "</div>
         </div>";
         }
         else {
         echo "<p class='p-2 bg-warning text-white'>Selecione um Assunto!</p>";
         }
    ?>
        <br /><br />
    <input type="button" class="btn btn-primary btn-md activ" value="Voltar" onclick="history.go(-1)" />
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