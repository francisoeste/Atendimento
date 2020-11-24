<!DOCTYPE html>
<?php require_once("../conexao/conexao.php") ?>
<?php require("top.php"); ?>


<html>
    <head>
        <meta lang="pt">
        <meta charset="utf-8">
        <title>Atendimento</title>
    </head>
    <body>
        <main>
        <form class="jumbotron">

        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="form-row d-flex justify-content-center " id="home">
                <div class="form-row justify-content-center container p-3 my-3 bg-dark text-white">
                    <!--- DIV DA NAVEÇÃO HOME-->
                    <div id="home" class="container tab-pane active">
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail4">Nome :</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputPassword4">CNPJ :</label>
                            <input type="text" class="form-control" id="cnpj">
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade">
                        <h3>Teste</h3>
                    </div>
                </div>
            </div>

        </div>
        </form>
        </main>
    </body>
    <footer>
    
    </footer>
</html>