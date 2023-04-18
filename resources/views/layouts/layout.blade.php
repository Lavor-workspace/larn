@php
    use Illuminate\Support\Facades\Auth;
@endphp
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (Request::is('login'))
    <link rel="stylesheet" href="/assets/css/style.css">
    @endif
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Larn</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    @if (!Route::is('offline'))
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                <div class="btn ">
                                    <input type="checkbox" checked data-toggle="toggle" data-size="small" data-on="Online" data-off="Offline" data-onstyle="primary" data-offstyle="info">
                                </div>
                            </li>
                            <li><a href="/" class="active">Inicio</a></li>
                            <li><a href="/documentation">Documentacion</a></li>
                            <li><a            data-bs-toggle="collapse"
                                data-bs-target="#collapseExample"
                                aria-expanded="false"
                                aria-controls="collapseExample" href="javaScript:void(0)"><i class="fas fa-envelope fa-lg"></i><span class="badge bg-danger badge-dot"></span></a></li>
                            @if (!Auth::user())
                                <li><a href="/login">Join <img src="assets/images/indecisive.png" alt=""></a></li>
                            @else
                                <li><a href="/profile">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    @endif
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
            @yield('content')
        </div>
      </div>
    </div>
  </div>

  <style>
    #chat4 .form-control {
    border-color: transparent;
    }

    #chat4 .form-control:focus {
    border-color: transparent;
    box-shadow: inset 0px 0px 0px 1px transparent;
    }

    #chat5 .form-control {
    border-color: transparent;
    }

    #chat5 .form-control:focus {
    border-color: transparent;
    box-shadow: inset 0px 0px 0px 1px transparent;
    }

    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }

    .pax{
        position: fixed;
        bottom: 0;
        right: 0;
    }

    .notif{
        position: fixed;
        top: 14%;
        right: 0;
    }
</style>

  <section>
    <div class="container py-5">

      <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">

          <!-- Collapsed content -->
          <div class="collapse mt-3 notif" id="collapseExample2">
            <div class="card overflow-auto" id="chat5">
              <div class="card-body overflow-auto" style="position: relative; height: 400px">

                <div class="d-flex flex-row justify-content-start">
                  <img src="/assets/images/colaborator.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Hi</p>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">How are you
                      ...???</p>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">What are you
                      doing
                      tomorrow? Can we come up a bar?</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted">23:58</p>
                  </div>
                </div>

                <div class="divider d-flex align-items-center mb-4">
                  <p class="text-center mx-3 mb-0" style="color: #a2aab7;">Today</p>
                </div>

                <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                  <div>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Hiii, I'm good.</p>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">How are you doing?</p>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Long time no see! Tomorrow
                      office. will
                      be free on sunday.</p>
                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:06</p>
                  </div>
                  <img  src="/assets/images/indecisive.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                </div>

                <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="/assets/images/colaborator.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Okay</p>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">We will go on
                      Sunday?</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted">00:07</p>
                  </div>
                </div>

                <div class="d-flex flex-row justify-content-end mb-4">
                  <div>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">That's awesome!</p>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">I will meet you Sandon Square
                      sharp at
                      10 AM</p>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Is that okay?</p>
                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:09</p>
                  </div>
                  <img  src="/assets/images/indecisive.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                </div>

                <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="/assets/images/colaborator.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Okay i will meet
                      you on
                      Sandon Square</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted">00:11</p>
                  </div>
                </div>

                <div class="d-flex flex-row justify-content-end mb-4">
                  <div>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Do you have pictures of Matley
                      Marriage?</p>
                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:11</p>
                  </div>
                  <img  src="/assets/images/indecisive.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                </div>

                <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="/assets/images/colaborator.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Sorry I don't
                      have. i
                      changed my phone.</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted">00:13</p>
                  </div>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <div>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-info">Okay then see you on sunday!!
                    </p>
                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:15</p>
                  </div>
                  <img  src="/assets/images/indecisive.png"
                    alt="avatar 1" style="width: 45px; border-radius: 20%; height: 100%;">
                </div>

              </div>
              <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                <img src="/assets/images/colaborator.png"
                  alt="avatar 3" style="width: 40px; height: 100%;">
                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput3"
                  placeholder="Type message">
                <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a>
                <a class="ms-3 link-info" href="#!"><i class="fas fa-paper-plane"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
</section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>2023 <a target="_blank" href="https://blinke.maximoprandi.tech">Blinke</a><br> Open source project</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/tabs.js"></script>
  <script src="/assets/js/popup.js"></script>
  <script src="/assets/js/custom.js"></script>


  </body>

</html>
