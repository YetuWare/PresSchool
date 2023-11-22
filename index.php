<?php

include 'conexao.php';

if(isset($_POST['nomeM'])){
  $nomeM = $_POST['nomeM'];
  $emailM = $_POST['emailM'];
  $telefoneM = $_POST['telefoneM'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];

  $queryM = "INSERT INTO mensagem (nome,email,telefone,assunto,mensagem) VALUES ('$nomeM','$emailM','$telefoneM','$assunto','$mensagem')";

  mysqli_query($conexao, $queryM);
}

$query1 = "select * from imagem";
$dados2 = mysqli_query($conexao,$query1);
if($dados2){
         $total2 = mysqli_num_rows($dados2);
         if($total2 > 0){          
             while($linha2 = mysqli_fetch_assoc($dados2)){
             //$id1 =  $linha2['id'];
             $titulo = $linha2["titulo"];
             $img = $linha2["imagem"];
             $resultado = "";
             $resultado .="
             <div class='col-lg-4 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src='admin/uploads/".$img."' class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4><a>".$titulo."</a></h4>
                <div>
                  <a href='admin/uploads/".$img."' data-gallery='portfolioGallery' title='".$titulo."' class='portfolio-lightbox link-preview'><i class='bi bi-plus'></i></a>
                </div>
              </div>
            </div>
          </div>
             ";
             }
         }
}

$query2 = "select * from contadores";
    $dados3 = mysqli_query($conexao,$query2);
    if($dados3){
            $total3 = mysqli_num_rows($dados3);
            if($total3 > 0){          
                while($linha3 = mysqli_fetch_assoc($dados3)){
                //$id1 =  $linha2['id'];

                $talunos1 = $linha3["talunos"];
                $nalunos1 = $linha3["nalunos"];
                $ialunos1 = $linha3["ialunos"];
                $tformadores1 = $linha3["tformadores"];
                $resultado1 = "";
                $resultado1 .="
                <div class='row counters' data-aos='fade-up' data-aos-delay='100'>

          <div class='col-lg-3 col-6 text-center'>
            <span data-purecounter-start='0' data-purecounter-end='".$talunos1."' data-purecounter-duration='1' class='purecounter'></span>
            <p>Total de Alunos</p>
          </div>

          <div class='col-lg-3 col-6 text-center'>
            <span data-purecounter-start='0' data-purecounter-end='".$nalunos1."' data-purecounter-duration='1' class='purecounter'></span>
            <p>Alunos Nacionais</p>
          </div>

          <div class='col-lg-3 col-6 text-center'>
            <span data-purecounter-start='0' data-purecounter-end='".$ialunos1."' data-purecounter-duration='1' class='purecounter'></span>
            <p>Alunos Internacionais</p>
          </div>

          <div class='col-lg-3 col-6 text-center'>
            <span data-purecounter-start='0' data-purecounter-end='".$tformadores1."' data-purecounter-duration='1' class='purecounter'></span>
            <p>Total de Formadores</p>
          </div>

        </div>
                ";
                }
              }
            }

?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PRES SCHOOL</title>
  <meta content="Aprender inglês é na PRES SCHOOL" name="description">
  <meta name="author" content="YetuWare">
  <meta content="english,presschool,school" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
   <link rel="icon" href="assets/img/logo1.png">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
       
        <a href="index.php"><img  src="assets/img/logo1.png" style="width: 70pt; height: 200px !important;"   alt="PresSchool" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Ínicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre Nós</a></li>
          <li><a class="nav-link scrollto" href="#services">Níveis de aprendizado</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Galeria</a></li>
        
      
          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/about-extra-1.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2 id="typewriter"></h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Se inscrever Agora</a>
          <a href="#services" class="btn-services scrollto">Nossos Serviços</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Sobre Nós</h3>
          <p>Bem-vindo à PRES SCHOOL,  a academia de inglês que vai revolucionar a forma como você aprende o idioma! Nosso programa moderno e interativo foi projetado pensando em você, para proporcionar uma experiência de aprendizado única e eficaz</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Na PRES SCHOOL, acreditamos que aprender inglês deve ser divertido e inspirador. Nossos cursos são ministrados por professores altamente qualificados, apaixonados por ensinar, que o acompanharão em cada passo do caminho. Com aulas dinâmicas e materiais didáticos envolventes, você se sentirá motivado(a) a progredir constantemente.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Competência</a></h4>
              <p class="description">Garantimos um sistema de ensino competente</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Inovador</a></h4>
              <p class="description">Primamos pela construção de metódos invodares de ensino</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Compromisso</a></h4>
              <p class="description">Nos comprometemos a honrar o compromisso da sua formação de qualidade.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
            <h4>Na PRES SCHOOL, ajudamos os nossos alunos a serem mais eficientes nos seus desafios.</h4>
            <p>
              Aqui ajudamos-te a a apresentar vantagens competitivas na procura de novas oportunidades de trabalho.</p>     </p>
          </div>
        </div>

     
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Níveis</h3>
          <p>
            Na nossa academia online, oferecemos um programa abrangente que atende a estudantes de todos os níveis, desde iniciantes até proficiência avançada.
          </p>
        </header>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h4 class="title"><a href="">A1</a></h4>
              <p class="description">
                Nesse nível, introduzimos os fundamentos essenciais do inglês. Os alunos aprenderão a estrutura básica das frases, o vocabulário cotidiano e as habilidades fundamentais de audição.
                </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h4 class="title"><a href="">A2 </a></h4>
              <p class="description">
                Para aqueles que já possuem uma compreensão básica do inglês, o nível intermediário expande as habilidades linguísticas, permitindo que os alunos participem de conversas mais complexas. Aprofundaremos o vocabulário.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h4 class="title"><a href="">B2</a></h4>
              <p class="description">
                No nível avançado, os alunos aprimoram suas habilidades em inglês para um nível quase nativo. Concentramo-nos em tópicos mais sofisticados, discutindo questões sociais, culturais.
                </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <h4 class="title"><a href="">C1</a></h4>
              <p class="description">
                Para aqueles que desejam alcançar a fluência completa, oferecemos um nível de proficiência que permitirá aos alunos se comunicarem com total confiança e precisão.
              </p>
            </div>
          </div>

       

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Porquê a PRES SCHOOL?</h3>
          <p style="text-align: center;">
            Porque a  PRES SCHOOL é a escolha ideal para aprimorar o seu inglês, oferecendo uma experiência de aprendizado interativa, professores qualificados e flexibilidade para se adaptar à sua rotina. Desperte seu potencial linguístico e conquiste fluência com confiança!
          </p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-calendar4-week"></i>
              <div class="card-body">
                <h5 class="card-title">Aulas Presencias</h5>
                <p class="card-text">Com o nosso programa projetado para o sucesso, a presschool conta com um ensino de excelência.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Aulas Online</h5>
                <p class="card-text">Apostamos no ensino a distância.</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-chat-square-text"></i>
              <div class="card-body">
                <h5 class="card-title">Chats Online</h5>
                <p class="card-text">É na prática que se ganha experiência, na Pres School incentivamos o bate-papo online. </p>
       
              </div>
            </div>
          </div>

        </div>

        <?=$resultado1?>

      </div>
    </section>
    <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Galeria</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app">Nossos Espaços</li>
              <li data-filter=".filter-card">Parceiros</li>
              <li data-filter=".filter-web">Formandos</li>
            </ul>
          </div>
        </div>

        <?=$resultado?>
          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aso="zoom-in">

        <header class="section-header">
          <h3>Testumhos dos Alunos</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <h3>Lukeny da Cunha</h3>
                    <h4>Formando</h4>
                    <p>
                      A escola oferece um ambiente acolhedor e amigável, o que torna o processo de aprendizagem muito agradável. Os materiais didáticos são modernos e envolventes, e as aulas são sempre bem estruturadas. 
                    </p>
                  </div>
                </div>
                
                <!-- End testimonial item -->
               
                
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= 
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Nossa Equipa</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kelvin Domingos</h4>
                  <span>Gestor de Clientes</span> 
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Zaqueu Damião</h4>
                  <span>Formador</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/formador.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Paulo Reis</h4>
                  <span>CEO - Formador</span>
                  <div class="social">
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Beatriz Amanda</h4>
                  <span>Secretária</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Nossos Parceiros</h3>
          <p>Veja as Empresas que estão com a gente no mercado de ensino!<p>
        </div>

        <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/LogoYetu.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3>Contacta-nos</h3>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15766.928253227565!2d13.1836237!3d-8.904483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f52da312dda9%3A0x68c273218a651df2!2sPres%20School!5e0!3m2!1spt-PT!2sao!4v1697060641750!5m2!1spt-PT!2sao" frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-4 info">
                <i class="bi bi-geo-alt"></i>
                <p>Luanda, Talatona - Morro Bento</p>
              </div>
              <div class="col-md-4 info">
                <i class="bi bi-envelope"></i>
                <p>paulocanga20@gmail.com</p>
              </div>
              <div class="col-md-4 info">
                <i class="bi bi-phone"></i>
                <p>+244 928 952 570</p>
              </div>
            </div>

            <div class="form">
              <form method="post" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="nomeM" class="form-control" id="name" placeholder="Seu Nome" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="emailM" id="email" placeholder="Seu email" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="tel" class="form-control" name="telefoneM" id="telefone" placeholder="Seu número de telefone" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="assunto" id="subject" placeholder="Assunto" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
                </div>
                <div class="my-3">
                  <div class="sent-message">Obrigado pela sua mensagem</div>
                </div>
                <div class="text-center"><button type="submit" name="sendMessage" class="btn btn-primary" title="Enviar Mensagem">Enviar mensagem</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>PRES School</h3>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Rapidos</h4>
            <ul>
              <li><a href="#">Pagina Principal</a></li>
              <li><a href="#">Sobre Nós</a></li>
              <li><a href="#">Galeria</a></li>
              <li><a href="#">Equipa</a></li>
              <li><a href="#">Conctato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacta-nos</h4>
            <p>
              Angola , Luanda - Morro Bento <br>
              <br>
             
              <strong>Telefone:</strong>+244 928 952 570<br>
              <strong>Email:</strong> paulocanga20@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.youtube.com/@Pres_english" class="twitter"><i class="bi bi-youtube"></i></a>
              <a href="https://www.instagram.com/pres_english" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@pres_english" class="tiktok"><i class="bi bi-tiktok"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PRES School</strong>.Todos Os Direitos Reservados!
      </div>
      <div class="credits">
        Desenvolvido Por <a href="https://www.yetuware.com"> <strong>YetuWare</strong> </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/write.js"></script>

</body>

</html>