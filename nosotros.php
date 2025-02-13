<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TRANSFORMETAL</title>
  <link
    href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" />
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
  <link rel="stylesheet" href="assets/css/styleNosotros.css" />
  <link rel="stylesheet" href="assets/css/chatbot.css">
</head>
<style>
  .bannner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    /* Black overlay with 50% opacity */
    z-index: 1;
  }
</style>
<script>
  $(function() {
    $("#footerConte").load("index.php #footer");
  });
</script>

<body>
  <div id="loader">
  </div>


  <!--Header Inicio-->
  <!--Header Inicio-->|
  <header id="header">

    <div class="container-hero  position: fixed;">
      <div class="container hero">
        <div class="customer-support">
          <i class=""></i>
          <div class="content-customer-support">
            <span class="text"></span>
            <span class="number"></span>
          </div>
        </div>
        <div class="container-logo">
          <a href="./">
            <i><img src="assets/img/logotipo.png" alt="100px" style="width: 500px; height: 100px; "></i>

          </a>
        </div>
        <div class="container-user">
          <i class=""></i>
          <i class=""></i>
          <div class="">
            <span class="text"></span>
            <span class="number"></span>
          </div>
        </div>
      </div>
    </div>

    <!--MEnu Inicio-->
    <div class="container-navbar">
      <nav class="navbar container">
        <input type="checkbox" id="check">
        <ul class="menu"><!--Menu-->
          <li id="nav2">
            <a href="#" id="productos-link" class="TituloMenu">Productos</a>
            <ul class="nav-menu" id="productos-submenu">
              <li>
                <a href="#" class="main-category">Telecomunicaciones e IT<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu ">
                  <li><a href="productos.php">Gabinetes</a></li>
                  <li><a href="productos.php#section2">Racks</a></li>
                  <li><a href="productos.php#section9">Bandejas</a></li>
                  <li><a href="productos.php#section3-1">Riel</a></li>
                  <li><a href="productos.php#section4-1">Escalerilla</a></li>
                  <li><a href="productos.php#section85">Planta Externa</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Planta Externa y Electricidad<i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu plantaExterna">
                  <li><a href="productos.php">Gabinetes</a></li>
                  <li><a href="productos.php#section50">Cajas</a></li>
                  <li><a href="productos.php#section70">Herrajes</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Exhibición y Almacenes <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu Almacenes">
                  <li><a href="productos.php#Gondolas">Góndolas </a></li>
                  <li><a href="productos.php#Estanteria">Estanterías </a></li>
                  <li><a href="productos.php#RackIndustrial">Racks Industrial</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Arquitectónicos y Panales Decorativos <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu paneles">
                  <li><a href="productos.php#Arquitectonicos">Paneles decorativos</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Mobiliario Urbano <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu Mobiliario">
                  <li><a href="productos.php#Mobiliario">Basureros</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="main-category">Torres <i class="fa-sharp fa-solid fa-arrow-right arrow-icon"></i></a>
                <ul class="nav-submenu TorresIrios">
                  <li><a href="productos.php#section25">Torres Arriostradas y Accesorios</a></li>
                  <li><a href="productos.php#section14">Sistemas de puestas a tierra</a></li>
                  <li><a href="#">Balizas</a></li>
                  <li><a href="#">Interconexión a tierra </a></li>
                  <li><a href="#">Soportes y Herrajes</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <!--menu2-->

          <!--menu2-->
          <!--fin menu-->
          <li id="nav2">
            <a href="#" id="industrias-link" class="TituloMenu">Sectores</a>
            <ul class="nav-menu" id="industrias-submenu">
              <li><a href="industrias.php#telecom">Telecomunicaciones</a></li>
              <li><a href="industrias.php#Electrico">Electricidad</a></li>
              <li><a href="industrias.php#Mobiliario">Mobiliario Urbano</a></li>
              <li><a href="industrias.php#Exhibicion">Exhibición y Almacenaje </a></li>
            </ul>
          </li>

          <li id="nav2">
            <a href="maquinaria.php" id="servicios-link" class="TituloMenu">Maquinaria</a>
          </li>

          <li>
            <a href="#" id="nosotros-link" class="TituloMenu">Nosotros</a>
            <ul class="nav-menu" id="nosotros-submenu">
              <li><a href="nosotros.php">Nosotros</a></li>
              <li><a href="nosotros.php#staff">Equipo de gestión administrativa y comercial</a></li>
              <li><a href="#">Planta de Transformetal</a></li>
              <li><a href="#">Política de calidad</a></li>
              <li><a href="#">Responsabilidad Social Empresarial</a></li>
            </ul>
          </li>
          <li><a href="./contacto.php" class="TituloMenu">Contacto</a></li>
          <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </ul>
        <!-- Barra de búsqueda actualizada -->
        <form class="search-form" action="busqueda.php" method="get">
          <input type="search" name="query" placeholder="Buscar..." required>
          <button class="btn-search" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

        <!--<i class="fas fa-shopping-cart" style="color: #fff; font-size: 25px; cursor: pointer;"></i>-->
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
      </nav>
    </div>
    <!--menu fin -->
  </header>

  <!--Header FIN-->



  <div class="contet-body" style="top:0px;">
    <div class="bannner" style="background-image: url(assets/img/servicio/Pnosotros.png);  height: 400px; top:140px;">
      <div class="bannner-content">
        <h1>Acerca de nosotros</h1>
        <p>
          Transformetal se distingue por su experiencia y excelencia en la industria metalmecánica, ofreciendo soluciones
          de alta calidad que cumplen con los estándares más exigentes del mercado. Nuestro compromiso es proporcionar productos
          confiables y eficientes, adaptados a las necesidades específicas de cada cliente.
        </p>
      </div>
    </div>
    <div class="space" style="height: 150px;"></div>
    <div class="content">
      <img src="assets/img/Staff Transformetal.jpg" alt="Nuestra empresa">
      <div>
        <h2>Nuestra empresa</h2>
        <p>
          Innovación y Calidad en Metalmecánica

          Con más de 27 años de experiencia, Transformetal transforma materia prima metálica en productos de alta calidad utilizando
          tecnología CNC y procesos avanzados. Nuestro equipo altamente calificado y nuestro enfoque en soluciones personalizadas garantizan
          innovación, eficiencia y satisfacción total para nuestros clientes. Somos su mejor elección en la industria metalmecánica.
        </p>
      </div>
    </div>

    <div class="contenido">
      <!--Nosotros-->
      <section id="nosotros">
        <div class="time-lime">
          <h1>Historia de Transformetal</h1>

          <div class="process-wrapper">
            <div id="progress-bar-container">
              <ul>
                <li class="step step01 active">
                  <div class="step-inner">2001</div>
                </li>
                <li class="step step02">
                  <div class="step-inner">2002</div>
                </li>
                <li class="step step03">
                  <div class="step-inner">2003</div>
                </li>
                <li class="step step04">
                  <div class="step-inner">2004</div>
                </li>
                <li class="step step05">
                  <div class="step-inner">2005</div>
                </li>
              </ul>
              <div id="line">
                <div id="line-progress"></div>
              </div>
            </div>
            <div id="progress-content-section">
              <div class="section-content discovery active">
                <h2>2001</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  neque justo, consequat non fermentum ac, tempor eu turpis.
                  Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper
                  ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante
                  consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                  fringilla ex consequat eu. Praesent pulvinar tincidunt leo et
                  condimentum. Maecenas volutpat turpis at felis egestas
                  malesuada. Phasellus sem odio, venenatis at ex a, lacinia
                  suscipit orci.
                </p>
              </div>

              <div class="section-content strategy">
                <h2>2002</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  neque justo, consequat non fermentum ac, tempor eu turpis.
                  Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper
                  ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante
                  consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                  fringilla ex consequat eu. Praesent pulvinar tincidunt leo et
                  condimentum. Maecenas volutpat turpis at felis egestas
                  malesuada. Phasellus sem odio, venenatis at ex a, lacinia
                  suscipit orci.
                </p>
              </div>

              <div class="section-content creative">
                <h2>2003</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  neque justo, consequat non fermentum ac, tempor eu turpis.
                  Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper
                  ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante
                  consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                  fringilla ex consequat eu. Praesent pulvinar tincidunt leo et
                  condimentum. Maecenas volutpat turpis at felis egestas
                  malesuada. Phasellus sem odio, venenatis at ex a, lacinia
                  suscipit orci.
                </p>
              </div>

              <div class="section-content production">
                <h2>2004</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  neque justo, consequat non fermentum ac, tempor eu turpis.
                  Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper
                  ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante
                  consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                  fringilla ex consequat eu. Praesent pulvinar tincidunt leo et
                  condimentum. Maecenas volutpat turpis at felis egestas
                  malesuada. Phasellus sem odio, venenatis at ex a, lacinia
                  suscipit orci.
                </p>
              </div>

              <div class="section-content analysis">
                <h2>2005</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  neque justo, consequat non fermentum ac, tempor eu turpis.
                  Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper
                  ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante
                  consequat placerat ut sed eros. Nullam porttitor mattis mi, id
                  fringilla ex consequat eu. Praesent pulvinar tincidunt leo et
                  condimentum. Maecenas volutpat turpis at felis egestas
                  malesuada. Phasellus sem odio, venenatis at ex a, lacinia
                  suscipit orci.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Staf Inicio-->

    </div>
    <div class="services-container">
      <div class="service-card">
        <img src="assets/img/icon/mision.png" alt="Misión">
        <h2>Misión</h2>
        <p>Fabricar y comercializar productos de la mas alta calidad en metalmecanica, con personal altamnete califcado y con maquinario industrial adecuado para su elaboración logrando satisfacer las necesidades de nuestris clientes, obtenuendo sostenibilidad de la empresa y bienestar de nuestros empleado</p>
      </div>
      <div class="service-card">
        <img src="assets/img/icon/vision.png" alt="Calidad de energía eléctrica">
        <h2>Visión</h2>
        <p>Posicionar la empresa, en la mente de nuestros clientes, como un proveedor de innovación en soluciones de metalmecánica.</p>
      </div>
      <div class="service-card">
        <img src="assets/img/icon/objetivo.png" alt="Estudios y consultoría eléctrica">
        <h2>Objetivos</h2>
        <p>Ser una empresa líder en la industria metalmecánica, transformando la materia prima metálica en producto terminado, satisfaciendo las necesidades de innovación tecnológica del cliente.</p>
      </div>
      <div class="service-card">
        <img src="assets/img/icon/valores.png" alt="Venta de equipos y materiales">
        <h2>Valores</h2>
        <p style="margin-right: 100px; padding:10px;">Innovación <br>
          Compromiso <br>
          Colaboración <br>
          Integridad</p>
      </div>
    </div>
    </section>
    <!--Staf Fin-->

    <!--Staf Inicio-->
    <section id="equipo" class="equipo">

      <div class="organigrama">
        <h1>Organigrama</h1>
        <!--Inicio-->
        <div class="tree">
          <ul>
            <li>
              <a><img src="assets/img/icon/persona.png" /><span>Gerente Transformetal</span></a>
              <ul>
                <li>
                  <a><img src="assets/img/icon/persona.png" /><span>Sub-Gerente TF</span></a>
                  <ul>
                    <li>
                      <a><img src="assets/img/icon/persona.png" /><span>Administración</span></a>
                      <ul>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>Centro de costos</span></a>
                        </li>
                        <li>
                          <a href="#"><img src="assets/img/icon/persona.png" /><span>Organización</span></a>
                          <ul>
                            <li>
                              <a><img src="assets/img/icon/persona.png" /><span>Secretaria</span></a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>Bodega</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a><img src="assets/img/icon/persona.png" /><span>Jefe de Operaciones</span></a>
                      <ul>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>Operaciones</span></a>
                        </li>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>Maquinaria</span></a>
                        </li>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>Q.A</span></a>
                        </li>
                    </li>

                  </ul>
                </li>
                <li>
                  <a><img src="assets/img/icon/persona.png" /><span>Mercadeo</span></a>
                  <ul>
                    <li>
                      <a><img src="assets/img/icon/persona.png" /><span>Diseño Industrial</span></a>
                    </li>
                    <li>
                      <a><img src="assets/img/icon/persona.png" /><span>Ventas</span></a>
                    </li>
                    <li>
                      <a><img src="assets/img/icon/persona.png" /><span>Marketing</span></a>
                      <ul>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>E-Marketing</span></a>
                        </li>
                        <li>
                          <a><img src="assets/img/icon/persona.png" /><span>Diseño Gráfico</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          </li>
          </ul>
        </div>
        <!--Fin-->
      </div>
      <!--Staf Fin-->


    </section>
  </div>

  </div>

  <!--chatbot Inicio-->
  <!--chatbot de whatsapp-->
  <div class="message-wrapper">
    <div class="message-toggle">
      <a href="https://api.whatsapp.com/send/?phone=50237673705&type=phone_number&app_absent=0" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
      </a>

    </div>
  </div>
  <!--whatsapp Fin-->

  <!--Chat Incio-->
  <!-- Chat bot UI start -->
  <div class="chat-screen">
    <div class="chat-header">
      <div class="chat-header-title">Asistente Transformetal</div>
    </div>
    <!-- Prueba de chatbot pedido de datos inicio -->
    <form id="chat-form" method="POST" action="">
      <div class="chat-mail">
        <div class="row">
          <div class="chat-description">
            <p style="font-size: 14px; top:-50px;">
              Bienvenido/a. Estamos aquí para atenderle de la mejor manera posible.
              Por favor, proporcione la siguiente información para comenzar.
            </p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input
                style="width: 280px;  height:30px;"
                required
                type="text"
                class="form-control input-nombre"
                placeholder="Ingrese su nombre..."
                name="nombre" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input
                style="width: 280px;  height:30px;"
                required
                type="email"
                class="form-control input-email"
                placeholder="Ingrese su correo electronico..."
                name="email" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input
                style="width: 280px;  height:30px;"
                required
                type="number"
                class="form-control input-telefono"
                placeholder="Ingrese su numero telefonico..."
                name="telefono" />
            </div>
          </div>
          <div class="col-md-12 btn">
            <center>
              <button
                type="submit"
                class="btn btn-primary btn-form">
                Iniciar
              </button>
            </center>
          </div>
        </div>


      </div>

      <!-- Este es el nuevo div que se activará con un botón -->
      <div id="activate-chat-body" class="chat-body hide" style="display: none;">
        <!-- Aquí irán los mensajes del chat -->
      </div>
      <div class="chat-input hide" style="display: none;">
        <input
          type="text"
          placeholder="Escriba su mensaje..."
          id="user-input"
          name="user-input" />
        <div class="input-action-icon">
          <a id="send-message">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-send"
              id="enviar">
              <line x1="22" y1="2" x2="11" y2="13"></line>
              <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
            </svg>
          </a>
        </div>

      </div>
    </form>
  </div>
  <div class="chat-bot-icon">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="feather feather-message-square animate">
      <path
        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      class="feather feather-x">
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
  </div>
  <!-- Chat Bot UI Ends -->
  <!--Chat FIn-->

  <!--Chatbot Fin-->


  <script src="assets/js/menu.js"></script>
  <script src="assets/js/scriptNosotros.js"></script>
  <script src="assets/js/chat.js"></script>
  <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>