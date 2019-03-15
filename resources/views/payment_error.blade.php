<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Quando|Quicksand|Roboto|Barlow+Semi+Condensed"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./public/css/index.css" />
    <title>Tailoring</title>
   
  </head>
  <body>
        <header>
                <main>
                  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                    <div class="container-fluid">
                        <a href="/"  class="navbar-brand">
                          <i class="fas fa-play" style="color:rgb(224, 14, 77);font-size:8px;"></i> <img src="./public/images/logo.png" height="50px" alt="Tailoring">
                        </a>
          
                      <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#tailoring"
                        aria-controls="tailoring"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                      >
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="collapse navbar-collapse " id="tailoring">
                            <ul class="navbar-nav  ml-auto ">
                                <li class="nav-item">
                                  <a href="./index.html#how" class="nav-link ">How It Works</a>
                                </li>
                                <li class="nav-item">
                                  <a href="./about.html" class="nav-link">  About</a>
                                </li>
                                <li class="nav-item">
                                  <a href="./service.html" class="nav-link"><i class="fas fa-play" style="color:rgb(224, 14, 77);font-size:8px;"></i>Our Services</a>
                                </li>
                                <li class="nav-item">
                                  <a href="#" class="nav-link">FAQ</a>
                                </li>
                              </ul>
                        </div>
                      </div>
                    </div>
                  </nav>
                  <!-- END OF NAVBAR -->
                </main>
              </header>
              <section class="section">
                <div class="container">
                    <div class="row" style="margin-top: 72px;">
                        <div class="col-md-3"></div>
                         <div class="col-md-6 text-center">
                                <h1 class="h1-tag">{{$message}}</h1>
                            </div>
                            <div class="col-md-3"></div>
                    </div>
                </div>
              </section>
                 <!-- scroll to top section -->
       <div id="scroll-top" class="scroll-up">
            <div class="scroll-top-txt">
              <a class="scroll-back" style="text-decoration:none;color:#fff" href="#main">top</a>
            </div>
          </div>
      
      <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/js/mdb.min.js"></script>
    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
    <script src="./public/js/index.js"></script>
  </body>
</html>
