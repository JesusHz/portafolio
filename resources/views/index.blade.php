<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jesus Eduardo Clemente Hernandez</title>

  <!--Icon-->
  <link rel="icon" href="{!! asset('assets/img/icon_github.png') !!}">

  <!--CSS-->
  <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Dancing+Script:wght@600&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

  <!--Animations Scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>

<body>
  <!--Loader-->
  <div class="contenedor_carga">
    <div class="loader">
      <div class="linea"></div>
      <div class="linea"></div>
      <div class="linea"></div>
      <div class="linea"></div>
      <div class="linea"></div>
      <div class="linea"></div>
      <div class="linea"></div>
      <div class="linea"></div>
    </div>
  </div>

  <!--Menu Navbar-->
  <nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index.html"><img src="{!! asset('assets/img/icon_github.png') !!}" width="30" height="30"
        class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#port">Portafolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skillset">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--Header-->
  <header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{!! asset('assets/video/video.mp4') !!}" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3 texto_encima">Jesus Eduardo Clemente Hernandez</h1>
          <p class="lead mb-0 texto_encima_dos">Ingeniero en Sistemas Computacionales</p>
        </div>
      </div>
    </div>
  </header>

  <!--Contenido-->
  <hr />
  <div id="port" class="container-fluid bg-3 text-center">
    <h3 class="margin">PORTAFOLIO</h3><br>
    <hr style="background: linear-gradient(to right, rgb(27, 122, 185), rgb(154, 214, 224), rgb(27, 122, 185));
    height: 5px;">
    <div class="row">
      <div class="col-sm-4">
        <p>Restauran Collection Laravel</p>
        <div class="container">
          <img src="{!! asset('assets/img/screenshot1.jpg') !!}" alt="" class="image" style="height: calc(10em + 6.5vw);">
          <div class="middle">
            <div><button id="btn_uno" class="btn btn-info">Ver más</button></div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <p>Tocani Calli</p>
        <div class="container">
          <img src="{!! asset('assets/img/screenshot2.jpg') !!}" alt="" class="image" style="height: calc(10em + 6.5vw);">
          <div class="middle">
            <div><button id="btn_dos" class="btn btn-info">Ver más</button></div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <p>Restaurant Collection PrimeFaces</p>
        <div class="container">
          <img src="{!! asset('assets/img/screenshot3.jpg') !!}" alt="" class="image" style="height: calc(10em + 6.5vw);">
          <div class="middle">
            <div><button id="btn_tres" class="btn btn-info">Ver más</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div id="myModal_uno" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close_uno">&times;</span>
        <h2>Restaurant Collection Laravel</h2>
      </div>
      <div class="modal-body">
        <p>Proyecto Escolar: Sistema Web hecho con el Framework Laravel empleando HTML5, CSS, JavaScript, JQuery, Bootstrap con el
          objetivo
          de registrar a usuarios (administradores y clientes) para su posterior uso de ventas con un sistemas de
          apartado de comida utilizando
          una conexion a una base de datos relacional con el gestor de base de datos MariaDB.
        </p>
      </div>
      <div class="modal-footer">
        <h3></h3>
      </div>
    </div>

  </div>

  <div id="myModal_dos" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close_dos">&times;</span>
        <h2>Tocani Calli</h2>
      </div>
      <div class="modal-body">
        <p>Sistema de inventarios y ventas desarrollado para la empresa Tocani Calli Metepec México, dedicada a la
          produccion y venta de productos orgánicos.
          Este proyecto esta desarrollado en Java permitiendo la administración y venta de los productos a traves de
          codigo de barras.
        </p>
      </div>
      <div class="modal-footer">
        <h3></h3>
      </div>
    </div>

  </div>

  <div id="myModal_tres" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close_tres">&times;</span>
        <h2>Tocani Calli</h2>
      </div>
      <div class="modal-body">
        <p>Proyecto Escolar: Sistema mejorado a la version Laravel. Ahora cuenta con el sistema de envios a domicilio permitiendo el pago
          online a traves de tarjetas de credito
          y debito. El Framework utilizado cambio de Laravel a PrimeFaces ahora utilizando Java Web.
        </p>
      </div>
      <div class="modal-footer">
        <h3></h3>
      </div>
    </div>

  </div>


  <!--Skills-->

  <hr />
  <br />
  <div id="skillset" class="container-flex text-center portfolio-text"
    style="background: rgb(41, 173, 206); padding-top: 35px;">
    <h3 class="margin" style="color: white;">SKILLS</h3><br>
    <hr style="background: linear-gradient(to right, rgb(96, 163, 207), rgb(255, 255, 255), rgb(96, 163, 207));
    height: 5px;">
    <div class="container">
      <section id="portfolio" class="portfolio">
        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/java.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Java</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/java.svg') !!}" data-gall="portfolioGallery" class="venobox" title="App 1"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/c.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>C</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/c.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/c++.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>C++</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/c++.svg') !!}" data-gall="portfolioGallery" class="venobox" title="App 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/python.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Python</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/python.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/html5.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>HTML5</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/html5.svg') !!}" data-gall="portfolioGallery" class="venobox" title="App 1"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/css.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>CSS</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/css.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/javascript.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>JavaScript</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/javascript.svg') !!}" data-gall="portfolioGallery" class="venobox" title="App 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/bootstrap.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bootstrap</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/bootstrap.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/jquery.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>JQuery</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/jquery.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/primefaces.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PrimeFaces</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/primefaces.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/laravel.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Laravel</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/laravel.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/oracle.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Oracle</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/oracle.svg') !!}" data-gall="portfolioGallery" class="venobox" title="App 1"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/mysql.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MySQL</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/mysql.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/mariadb.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MariaDB</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/mariadb.svg') !!}" data-gall="portfolioGallery" class="venobox" title="App 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/firebase.svg') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Firebase</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/firebase.svg') !!}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/android.png') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Android Studio</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/android.png') !!}" data-gall="portfolioGallery" class="venobox" title="App 1"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/ionic.png') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ionic</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/ionic.png') !!}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{!! asset('assets/img/cisco.png') !!}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cisco CCNA</h4>
                <div class="portfolio-links">
                  <a href="{!! asset('assets/img/cisco.png') !!}" data-gall="portfolioGallery" class="venobox" title="App 1"><i
                      class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--End-->
        </div>
      </section>
    </div>
  </div>

  <!--Contacto-->
  <hr />
  <div id="contact" class="container-fluid bg-3 text-center">
    <h3 class="margin">Contacto</h3><br>
    <hr style="background: linear-gradient(to right, rgb(27, 122, 185), rgb(154, 214, 224), rgb(27, 122, 185));
    height: 5px;">
    <div class="container">
        {!! Form::open(['url'=>'/enviar_correo', 'role'=>'form', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-row">
          <div class="col-md-6 form-group">
            {!! Form::text ('nombre',null,['placeholder'=>'Tu nombre','required','class'=>'form-control']) !!}
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            {!! Form::email ('destinatario',null,['placeholder'=>'Email','required','class'=>'form-control']) !!}
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 form-group">
              {!! Form::tel ('telefono',null,['placeholder'=>'Telefono','required','class'=>'form-control']) !!}
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
                {!! Form::text ('asunto',null,['placeholder'=>'Asunto','required','class'=>'form-control']) !!}
                <div class="validate"></div>
            </div>
          </div>
        <div class="form-group">
          {!! Form::textarea ('contenido_email',null,['placeholder'=>'Mensaje','required','class'=>'form-control']) !!}  
          <div class="validate"></div>
        </div>
        <div class="text-center">{!! Form::submit('ENVIAR',['class' => 'btn btn-primary btn-lg btn-block ']) !!}</div>
      {!! Form::close() !!}
    </div>
  </div>

  <!--Footer-->
  <footer class="container-fluid bg-4 text-center" style="background: rgb(41, 173, 206);">
    <a href="https://github.com/JesusHz" target="_blank"><img src="{!! asset('assets/img/icon_github.png') !!}" width="30px"
        alt="Github"></a>
    <a href="https://www.linkedin.com/in/jclementeh/" target="_blank"><img src="{!! asset('assets/img/linkedin.svg') !!}" width="30px"
        alt="Github"></a>
  </footer>
  <footer class="container-fluid bg-4 text-center">
    <small><span>Developed and designed by&nbsp;</span><a href="mailto: jclementeh@toluca.tecnm.mx">JclementeH</a>. &copy;
      <script type="text/javascript">var d = new Date()
        document.write(d.getFullYear())</script><span class="min-footer">. All rights reserved.</span>
    </small>
  </footer>

  <!--JavaScript-->
  <script src="{!! asset('assets/js/app.js') !!}"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>

</html>