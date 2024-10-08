<?php
include_once('hms/include/config.php');
$translations = include 'translations.php';
$custom = include  'customization.php';



if (isset($_POST['submit'])) {
    // Função para sanitizar entradas de texto, removendo caracteres indesejados
    function sanitize_input($data) {
        return htmlspecialchars(trim($data));
    }

    // Sanitiza os dados de entrada do usuário
    $name = sanitize_input($_POST['fullname']);
    $email = filter_var($_POST['emailid'], FILTER_SANITIZE_EMAIL); // Sanitiza o email
    $mobileno = sanitize_input($_POST['mobileno']);
    $description = sanitize_input($_POST['description']);

    // Verifica se o email é válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('E-mail inválido!');</script>";
        exit;
    }

    // Consulta preparada para evitar SQL Injection
    $stmt = $con->prepare("INSERT INTO tblcontactus (fullname, email, contactno, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobileno, $description);

    // Executa a consulta e verifica o resultado
    if ($stmt->execute()) {
        echo "<script>alert('Suas informações foram enviadas com sucesso!');</script>";
        echo "<script>window.location.href ='index.php';</script>";
    } else {
        echo "<script>alert('Ocorreu um erro ao enviar suas informações. Tente novamente mais tarde.');</script>";
    }

    // Fecha a consulta preparada
    $stmt->close();
}
?>

<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $translations['Nome_app']; ?></title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

</head>

    <body>



    <!-- ################# Header Starts Here#######################--->

      <header id="menu-jk">
           <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;"><?= $translations['sigla'] ?>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#"><?= $translations['home'] ?></a></li>
                            <li><a href="#services"><?= $translations['services'] ?></a></li>
                            <li><a href="#about_us"><?= $translations['about_us'] ?></a></li>
                            <li><a href="#gallery"><?= $translations['gallery'] ?></a></li>
                            <li><a href="#contact_us"><?= $translations['contact_us'] ?></a></li>
                            <li><a href="#logins"><?= $translations['logins'] ?></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php"><?= $translations['book_appointment'] ?></a>
                    </div>
                </div>

            </div>
        </div>
    </header>

     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>





            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/slider_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown"><?= $translations['Nome_app']; ?></h5>



                    </div>
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider_3.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown"><?= $translations['Nome_app']; ?></h5>



                    </div>

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"><?= $translations['previous']; ?></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?= $translations['next']; ?></span>
            </a>
        </div>


    </div>

  <!--  ************************* Logins ************************** -->


     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2><?= $translations['logins']; ?></h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6><?= $translations['patient_login']; ?></h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm"><?= $translations['click_here']; ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6><?= $translations['doctor_login']; ?></h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm"><?= $translations['click_here']; ?></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6><?= $translations['admin_login']; ?></h6>

                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm"><?= $translations['click_here']; ?></button>
                                </a>
                            </div>
                        </div>
                    </div>






                </div>
            </div>

        </div>
    </section>







    <!-- ################# Our Departments Starts Here#######################--->

<!--
    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>

--->


    <!--  ************************* About Us Starts Here ************************** -->

    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">

            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>

<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
            </div>
        </div>
    </section>


            <!--  ************************* Gallery Starts Here **************************
        <div id="gallery" class="gallery">
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">


        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Laboratry</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>


       </div>
       -->
        <!-- ######## Gallery End ####### -->


     <!--  ************************* Contact Us Starts Here **************************

    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>

        </div>
    </section>

    -->



  <!-- ################# Footer Starts Here #######################-->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <!-- Contato -->
            <div class="col-md-6 col-sm-12">
                <h2 class="mb-4">Contato</h2>
                <address class="mb-4">
                    <?php
                    $ret = mysqli_query($con, "select * from tblpage where PageType='contactus'");
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                        <p class="mb-2">
                            <?= $row['PageDescription']; ?>
                        </p>
                        <p class="mb-2">
                            Fone: <?= $row['MobileNumber']; ?>
                        </p>
                        <p class="mb-2">
                            E-mail: <a href="mailto:<?= $row['Email']; ?>" class="text-white"><?= $row['Email']; ?></a>
                        </p>
                        <p class="mb-0">
                            Expediente: <?= $row['OpenningTime']; ?>
                        </p>
                    <?php } ?>
                </address>
            </div>
        </div>

        <div class="row justify-content-center align-items-center text-center pt-4">

</div>

    </div>
</footer>
<div>
<!-- Inclua o footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/hms/master/sass/includes/footer_datavisio.php'; ?>
</div>


    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>
