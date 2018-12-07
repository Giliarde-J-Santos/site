<!DOCTYPE html>
<html>
 <head>
    <title>Detalhes do tema</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="div.css" />
 </head>
    <body>
        <img class="logo" src="Imagens/ifsp.png" alt="Logotipo IFSP" />
        <div class="container border m-4 p-2 mx-auto">
            <h1 class='p-2 m-2 bg-info text-white text-center'>Introdução à astronomia</h1>
            <br />
            <?php
           include "Matriz_Temas.inc";
            if(isset($_GET['lin'])){
            $ind= $_GET['lin'];
            echo"<div class='container border w-75'>
                <div class='row'>
                    <div class='col text-center'>
                        <div class='p-2 m-2 bg-info text-white text-center'>".$matriz_temas[$ind][1]."</div>
                        <figure>
                        <img class='img-thumbnail 'src='". $matriz_temas[$ind][4] . "' alt='Foto da Notícia' />
                        <figcaption>".$matriz_temas[$ind][5]."</figcaption>
                        </figure>
                        <br /><br />
                        <p class='text-justify'>".$matriz_temas[$ind][3]."</p>
                        </div>
                </div>
        </div>";
            }
            ?>
        <input type="submit" value="Voltar" class="btn btn-primary btn-md activ" onclick="history.go(-1)" />
        </div>
    </body>
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
</html>