<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Harstil</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/Venobox/venobox.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- navigation -->
<section class="fixed-top navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" class="logoHarstil"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="indexlogado.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#pricing">Planos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Suporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastro</a>
          </li>
        </ul>
        <a href="logout.php" class="btn btn-primary ml-lg-3 primary-shadow">Logout</a>
      </div>
    </nav>
  </div>
</section>
<!-- /navigation -->

<!-- contact -->
<section class="section-lg contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Contact</h2>
            </div>
        </div>
        <div class="row contact-bg p-5 rounded mb-5">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <form action="#">
                    <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Seu nome">
                    <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Seu e-mail">
                    <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Assunto">
                    <textarea name="message" id="message" class="form-control mb-3" placeholder="Sua mensagem"></textarea>
                    <button type="submit" value="send" class="btn btn-secondary">MANDAR MENSAGEM</button>
                </form>
            </div>
            <div class="col-lg-5">
                <p class="mb-5">Seja bem-vindo ao suporte! Como podemos ajudar? Tente ser o mais claro possível no seu texto, para facilitar a compreensão.</p>
                <a href="tel:+442081446356" class="text-color h5 d-block">+55 19 8144 6334</a>
                <a href="mailto:info@altostack.io" class="mb-5 text-color h5 d-block">harstilteam@gmail.com</a>
                <p>Rua Pastor Hugo Gegembauer, 265<br>Parque Ortolândia, Hortolândia - SP, 13184-010</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-layers-alt round-icon blue mr-2"></i> Experiência</h5>
                    <p class="mb-0">Conectamos você ao seu estilo! Agende seu corte e sinta a diferença de um atendimento personalizado.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-desktop round-icon green mr-2"></i> Exclusividade</h5>
                    <p class="mb-0">Transformamos o agendamento em um ato de cuidado. Cada cliente merece atenção e um tempo reservado! </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-panel round-icon orange mr-2"></i> Valorização</h5>
                    <p class="mb-0">Facilitamos sua experiência na barbearia, garantindo que cada visita seja especial e sem complicações!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- background shapes -->
    <img class="contact-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
    <img class="contact-bg-2 left-right-animation" src="images/background-shape/green-half-cycle.png" alt="background-shape">
    <img class="contact-bg-3 up-down-animation" src="images/background-shape/green-dot.png" alt="background-shape">
    <img class="contact-bg-4 left-right-animation" src="images/background-shape/service-half-cycle.png" alt="background-shape">
    <img class="contact-bg-5 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
</section>
<!-- /contact -->

<!-- footer -->
<footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
        <!-- logo -->
        <a href="index.html">
          <img class="img-fluid" src="images/logo.png" alt="logo">
        </a>
      </div>
      <!-- footer menu -->
      <nav class="col-lg-8 align-self-center mb-5">
        <ul class="list-inline text-lg-right text-center footer-menu">
          <li class="list-inline-item active"><a href="index.html">Home</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#feature">Feature</a></li>
          <li class="list-inline-item"><a href="about.html">About</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#team">Team</a></li>
          <li class="list-inline-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
          <li class="list-inline-item"><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
      <!-- footer social icon -->
      <nav class="col-12">
        <ul class="list-inline text-lg-right text-center social-icon">
          <li class="list-inline-item">
            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="linkedin" href="#"><i class="ti-linkedin"></i></a>
          </li>
          <li class="list-inline-item">
            <a class="black" href="#"><i class="ti-github"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/Venobox/venobox.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>