
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website de Saúde</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Banner -->
    <div id="banner" class="container-fluid">
        <div class="banner-content">
            <h1>Bem-vindo ao Nosso Site de Saúde</h1>
            <p>Cuidando da sua saúde com excelência e compaixão.</p>
            <a href="#about_us" class="btn btn-primary">Saiba Mais</a>
        </div>
    </div>

    <!-- Sobre Nós -->
    <section id="about_us" class="container-fluid sobre-nos">
        <div class="container">
            <div class="inner-title">
                <h2>Sobre Nós</h2>
                <p>Conheça nossa história e missão</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Somos uma clínica dedicada a fornecer atendimento de qualidade, focando sempre no bem-estar de nossos pacientes. Nossa equipe de profissionais está aqui para oferecer os melhores tratamentos e cuidados para sua saúde.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/about-us.jpg" class="img-responsive" alt="Sobre Nós">
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="services" class="container-fluid servicos">
        <div class="container">
            <div class="inner-title">
                <h2>Serviços</h2>
                <p>O que oferecemos</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <h3>Consultas Médicas</h3>
                        <p>Atendimento especializado para diversas áreas da saúde com os melhores médicos da região.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h3>Exames Laboratoriais</h3>
                        <p>Realize seus exames com precisão e segurança em nosso laboratório próprio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h3>Cuidados de Enfermagem</h3>
                        <p>Serviços de enfermagem completos para o melhor cuidado da sua saúde.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <div id="gallery" class="container-fluid galeria">
        <div class="container">
            <div class="inner-title">
                <h2>Galeria</h2>
                <p>Veja momentos de nossa clínica</p>
            </div>
            <div class="row">
                <div align="center">
                    <button class="btn btn-default filter-button" data-filter="all">Todos</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Tratamentos</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Pacientes</button>
                    <button class="btn btn-default filter-button" data-filter="spray">Hospital</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Médicos</button>
                </div>
                <br />

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive" alt="Imagem da Galeria 1">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive" alt="Imagem da Galeria 2">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive" alt="Imagem da Galeria 3">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive" alt="Imagem da Galeria 4">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive" alt="Imagem da Galeria 5">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive" alt="Imagem da Galeria 6">
                </div>
            </div>
        </div>
    </div>

    <!-- Contato -->
    <section id="contact_us" class="container-fluid contato">
        <div class="container">
            <div class="inner-title">
                <h2>Contato</h2>
                <p>Envie-nos uma mensagem</p>
            </div>
            <div class="contact-form row">
                <div class="col-sm-6">
                    <form name="query" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" placeholder="Digite seu Nome Completo" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="emailid" class="form-control" placeholder="Digite seu E-mail" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mobileno" class="form-control" placeholder="Digite seu Telefone" required maxlength="10" pattern="[0-9]+">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="Digite sua Mensagem" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-warning" name="submit">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 contact-address">
                    <?php
                    $ret = mysqli_query($con, "SELECT * FROM tblpage WHERE PageType='contactus'");
                    while ($row = mysqli_fetch_array($ret)) {
                        echo '<h3>' . $row['PageTitle'] . '</h3>';
                        echo '<p>' . $row['PageDescription'] . '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="container-fluid">
        <div class="container">
            <div class="footer">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <ul class="f-link">
                            <li><a href="#">Início</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Galeria</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="copyright">
                            <p>© 2023 Todos os Direitos Reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
