<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">novo usuario</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar" aria-expanded="false">
                    listar usuario
                </a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col mt-5">
                            <?php
                                include("config.php");
                                switch(@$_REQUEST["page"]){
                                    case "novo":
                                        include("novo_usuario.php");
                                    break;
                                    case "listar":
                                        include("listar_usuario.php");
                                    break;
                                    case "salvar":
                                        include("salvar.php");
                                    break;
                                    case "editar":
                                        include("editar.php");
                                    default:
                                    echo " boas vindas";
                                }

                    
                            ?>
                </div>
            </div>
        </div>


    <script src=" js/bootstrap.bundle.min.js"></script>
  </body>
</html>

