<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Produto Oficial</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">

    <!-- plugins -->
    <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2"
        style="font-display: optional;">
    <link href="{{ asset("plugins/bootstrap/bootstrap.min.css") }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">
    <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- navigation -->
    <header class="sticky-top bg-white border-bottom border-default">
        <div class="container mx-auto text-center">
            <nav class="navbar navbar-expand-lg navbar-white">
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid" width="250px" src="{{ asset('img/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </nav>
        </div>
    </header>
    <!-- /navigation -->
    <section class="section" style="padding: 30px 20px 20px 0px; text-align: center;">
        <div class="container">
            <div class="row">
                <h1>Comece hoje mesmo a estudar quando e onde quiser!</h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12  mb-5 mb-lg-0">

                    @forelse ($produtos as $produto)
                        <article class="row mb-5">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="post-slider slider-sm">
                                    <img loading="lazy" src="{{ asset("storage/$produto->foto") }}" class="img-fluid" alt="post-thumb"
                                        style="height:200px; width: 510px; object-fit: cover;">
                                </div>
                            </div> 
                            <div class="col-md-8">
                                <h3 class="h5"><a class="post-title"
                                        href="{{ $produto->link }}">{{ $produto->titulo }}</a></h3>
                                <p>{{ $produto->descricao }}</p><a href="{{ $produto->link }}"
                                    class=" btn	btn-outline-primary">Ver curso</a>
                            </div>
                        </article>
                    @empty
                        <div class="alert alert-danger" role="alert">
                            Nenhum produto encontrado!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <footer class="section-sm pb-0 border-top border-default">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 mb-4">
                    <a class="mb-4 d-block" href="index.html">
                        <img class="img-fluid" width="150px" src="{{ asset('img/logo.png') }}" alt="LogBook">
                    </a>
                    <p>Aqui você encontra os melhores cursos em formato digital!</p>
                </div>

                <!-- <div class="col-lg-2 col-md-3 col-6 mb-4">
     <h6 class="mb-4">Quick Links</h6>
     <ul class="list-unstyled footer-list">
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="privacy-policy.html">Privacy Policy</a></li>
      <li><a href="terms-conditions.html">Terms Conditions</a></li>
     </ul>
    </div> -->

                <!-- <div class="col-lg-2 col-md-3 col-6 mb-4">
     <h6 class="mb-4">Social Links</h6>
     <ul class="list-unstyled footer-list">
      <li><a href="#">facebook</a></li>
      <li><a href="#">twitter</a></li>
      <li><a href="#">linkedin</a></li>
      <li><a href="#">github</a></li>
     </ul>
    </div> -->

                <!-- <div class="col-md-3 mb-4">
     <h6 class="mb-4">Inscreva-se para novidades!</h6>
     <form class="subscription" action="javascript:void(0)" method="post">
      <div class="position-relative">
       <i class="ti-email email-icon"></i>
       <input type="email" class="form-control" placeholder="Seu e-mail">
      </div>
      <button class="btn btn-primary btn-block rounded" type="submit">Inscreva-se</button>
     </form>
    </div> -->
            </div>
            <div class="scroll-top">
                <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
            </div>
            <div class="text-center">
                <p class="content">&copy; 2024 - Produto Oficial &amp; Desenvolvido por <a
                        href="https://github.com/willhc1984" target="_blank">William Henrique</a></p>
            </div>
        </div>
    </footer>


    <!-- JS Plugins -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }} "></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>

    <!--Main Script -->
    <script src="{{ asset('js/script_home.js') }}"></script>

</body>

</html>
