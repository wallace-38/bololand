<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="bg-azul-claro">
    <main>
        <header class="text-center">
            <img src="logo.png" alt="logotipo Bololand">
        </header>

        <nav class="navbar navbar-expand-lg bg-azul sticky-top">
            <button class="navbar-toggler bg-branco ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="material-icons azul">
                        menu
                    </i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lojas">Lojas</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=cadastro">Cadastro</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Entrar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
        if (isset($_GET["p"])) {
            if ($_GET["p"] == "cadastro") {
                include("formUser.php");
            }
        }
        ?>

        <section class="container bg-branco" id="produtos">
            <div class="row">
                <div class="col-12 col-md-4 itens">
                    <img src="img/produtos/produto01.jpg" class="img-fluid" alt="">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias fugiat sit error earum hic
                        vel perferendis ad distinctio, voluptatem sint. Assumenda deserunt tempora reiciendis quibusdam
                        dolores accusantium qui ab vel?</p>
                </div>
                <div class="col-12 col-md-4 itens">
                    <img src="img/produtos/produto02.jpg" class="img-fluid" alt="">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias fugiat sit error earum hic
                        vel perferendis ad distinctio, voluptatem sint. Assumenda deserunt tempora reiciendis quibusdam
                        dolores accusantium qui ab vel?</p>
                </div>
                <div class="col-12 col-md-4 itens">
                    <img src="img/produtos/produto03.jpg" class="img-fluid" alt="">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias fugiat sit error earum hic
                        vel perferendis ad distinctio, voluptatem sint. Assumenda deserunt tempora reiciendis quibusdam
                        dolores accusantium qui ab vel?</p>
                </div>
            </div>
        </section>

        <div class="container bg-branco" id="propag-1">
            <div class="row">
                <img src="img/propaganda/p200x1000-01-2.jpg" class="col-12 p-0" alt="Propaganda">
            </div>
        </div>

        <section class="container bg-branco" id="clientes">
            <div class="row">
                <div class="col-md-8">
                    <div class="row comentario">
                        <div class="col-md-4 foto">
                            <img src="img/clientes/cliente1.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-8 texto">
                            <h2>Homer Simpson</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem iusto ab
                                nobis possimus expedita molestias! Obcaecati impedit consectetur cumque repellendus
                                repudiandae similique modi laborum magni atque, deleniti odio laboriosam.</p>
                        </div>
                    </div>

                    <div class="row comentario">
                        <div class="col-md-4 foto">
                            <img src="img/clientes/cliente2.png" class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-8 texto">
                            <h2>Bob Esponja</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem iusto ab
                                nobis possimus expedita molestias! Obcaecati impedit consectetur cumque repellendus
                                repudiandae similique modi laborum magni atque, deleniti odio laboriosam.</p>
                        </div>
                    </div>

                    <div class="row comentario">
                        <div class="col-md-4 foto">
                            <img src="img/clientes/cliente3.png" class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-8 texto">
                            <h2>Patrick Estrela</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem iusto ab
                                nobis possimus expedita molestias! Obcaecati impedit consectetur cumque repellendus
                                repudiandae similique modi laborum magni atque, deleniti odio laboriosam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/propaganda/p300x800-01.jpg" class="img-fluid" alt="" id="propag-2">
                </div>
            </div>
        </section>

        <section class="p-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/produtos/p1.jpg" class="d-block w-100" alt="...">
                        <div class="texto-carrosel branco">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/produtos/p2.jpg" class="d-block w-100" alt="...">
                        <div class="texto-carrosel branco">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/produtos/p3.jpg" class="d-block w-100" alt="...">
                        <div class="texto-carrosel branco">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="container bg-branco" id="lojas">
            <div class="row">
                <div class="col-md-6 px-5">
                    <form action="">
                        <div class="form-group">
                            <label for="examplenome">Nome</label>
                            <input type="text" class="form-control" id="examplenome" placeholder="Nome completo">
                        </div>

                        <div class="form-group">
                            <label for="exampleemail">E-mail</label>
                            <input type="email" class="form-control" id="exampleemail" placeholder="nome@email.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleselect">Assunto</label>
                            <select class="form-control" id="exampleselect">
                                <option value="1">Elogio</option>
                                <option value="2">Sugentões</option>
                                <option value="3">Reclamações</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea">Contexto</label>
                            <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
                        </div>

                        <div class="form-group text-right">
                            <button type="button" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 px-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14701.041363083958!2d-43.55107225!3d-22.90376645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1580494472868!5m2!1spt-BR!2sbr" width="98%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <h3 class="py-2">Matriz</h3>
                    <p>R. Ferreira Borges, 58 - Campo Grande, Rio de Janeiro - RJ, 23050-350</p>
                </div>
            </div>
        </section>

        <footer class="bg-azul branco py-5">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#clientes">Clientes</a></li>
                        <li><a href="#lojas">Lojas</a></li>
                        <li><a href="">Referências</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="">Relacionamento</a></li>
                        <li><a href="">Trabalhe Conosco</a></li>
                        <li><a href="">Quen somos</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <a href=""><img src="img\social\limpos\twitter.png" alt="" class="redesocial"></a>
                    <a href=""><img src="img\social\limpos\facebook.png" alt="" class="redesocial"></a>
                    <a href=""><img src="img\social\limpos\youtube.png" alt="" class="redesocial"></a>
                </div>
                <div class="col-md-3">
                    <img src="img\pagamento.jpg" alt="" class="img-fluid">
                </div>
            </div>

        </footer>

    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>