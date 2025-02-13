<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TRANSFORMETAL</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="assets/css/styleProducts.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- Icono  data-barba="container" data-barba-namespace="home"-->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:400,600,700"
    rel="stylesheet" />


</head>


<body class="scroll-ini">
  <!--Header FIN-->

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


  <div class="productos-main">
    <!--Inicio de secction Telco-->
    <section id="Telecomunicaciones" class="products-boby">
      <!--Secciones principales de productos -->
      <!--Inicio de secction NEMA-->
      <section id="section1" class="section" style="display: none;">
        <section id="racks">
          <div class="area">
            <div class="profile">
              <div class="profile-info">
                <h2>GABINETE</h2>
                <p>
                  Los gabinetes de Transformetal están diseñados para ofrecer una solución confiable
                  y versátil en una amplia variedad de aplicaciones. Con múltiples tamaños disponibles,
                  integran placas traseras universales o específicas que facilitan la instalación de
                  equipos tecnológicos como puntos de acceso (AP) Wi-Fi, Wi-Fi 6 y otros dispositivos.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section6" onclick="showSection('section6'); event.preventDefault();">Indoor</a></li>
                  <li></li>
                  <li><a href="#section7" onclick="showSection('section7'); event.preventDefault();">Outdoor</a></li>
                  <li></li>
                  <li><a href="#section7" onclick="showSection('section7'); event.preventDefault();">Micro Data Center</a></li>
                </ul>
              </div>
            </div>
            <!--Fin COntenido-->
            <div class=" contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">Productos </h2>
                <!--litado de productos-->
                <!--NEma1-->
                <div class="product-item" data-search="caja nema  outdoor pared">
                  <img src="assets/img/product/gabinete/nema1-1.png" alt="Gabinete Outdoor">
                  <div>
                    <h3 style="font-size: 15px">CAJA NEMA OUTDOOR DE PARED-0.76m</h3>
                    <p>GBO-PD-VV-0.76-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product1" class="btnInfo">Mostrar Detalles</a>
                </div>

                <!--Nema2-->
                <div class="product-item" data-search="caja outdoor con bandejas poste">
                  <img src="assets/img/product/gabinete/nema2-1.png" alt="Antena Yagi" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">CAJA OUTDOOR CON BANDEJAS MONTAJE EN POSTE 22/40/50</h3>
                    </a>
                    <p>CJO-BJ-VV-40/22/50/C-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product2" class="btnInfo">Mostrar Detalles</a>
                </div>

                <!--Nema3-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/nema3-1.png" alt="nema3 Con parrillas" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">CAJA OUTDOOR CON PARRILLAS, MONTAJE EN POSTE 22/40/50 cms</h3>
                    </a>
                    <p>CJO-PR-VV-40/22/50/C-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product3" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data1-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab1-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR INDIVIDUAL CON HE
                        a -48 v DE 1.6m.</h3>
                    </a>
                    <p>GBO-HE-SB-14-1.6-1-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product11" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data1 FIN-->
                <!--Data2-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab2-2.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR DOBLE CON A/C a -48V DE 1.76 m.</h3>
                    </a>
                    <p>GBO-D-AC-1.76-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product12" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data2 FIN-->
                <!--Data3-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab3-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR 5G A/C-1m.</h3>
                    </a>
                    <p>GBO-5G-AC-1.0-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product13" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data3 FIN-->
                <!-- FIN de lotados de productso-->
              </div>
            </div>

          </div>
        </section>

      </section>
      <!--FIn de secction NEMA-->
      <!--FIn de secction gabinete-->
      <section id="section2" class="section">

        <!--Inicio de secction gabinete-->
        <section id="gabinete">
          <div class="area">
            <div class="profile">
              <div class="profile-info">
                <h2>Racks</h2>
                <p>
                  Diseñados para ofrecer una solución robusta y eficiente en la
                  gestión de equipos, nuestros racks son ideales para alojar servidores,
                  equipos de telecomunicaciones y otros dispositivos electrónicos.
                  Fabricados con materiales de alta calidad, garantizan seguridad,
                  fácil acceso y una organización optimizada, permitiendo una instalación
                  ordenada y un mantenimiento sencillo. Transformetal, la opción confiable
                  para mantener tus equipos organizados y operativos.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section2" onclick="showSection('section2'); event.preventDefault();" style="color: #d14013;">Rack Industriales</a></li>
                </ul>

              </div>
            </div>


            <!-- inicio Contenido -->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 class="title-product" style="padding: 5px; margin: auto">Productos</h2>
                <!--Inicio gba1-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/Racks/Racks-1.jfif"
                      alt="Antena Yagi" />
                  </center>

                  <div>
                    <a onclick="showDetails('product1-details')">
                      <h3 style="font-size: 15px">
                        RACK DE 7FT PARA EQUIPOS DE TELECOMUNICACIONES
                      </h3>
                    </a>
                    <p>TI-RK-7FT-19-E</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product5" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->

                <!--Inicio gba2-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/Racks/Imagen1.png"
                      alt="Antena Yagi" />
                  </center>
                  <div>
                    <a onclick="showDetails('product1-details') ">

                      <h3 style="font-size: 15px; ">
                        RACK PARA BATERIAS DE 7FT X 23”
                      </h3>
                    </a>
                    <p>TI-RK-7FT-23-B</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product6" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->

                <!--Inicio product-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/Racks/TIRK0032.png"
                      alt="Antena Yagi" />
                  </center>

                  <div>
                    <a onclick="showDetails('product1-details')">
                      <h3 style="font-size: 15px">
                        RACKS RACK DE 4 POSTES 45U
                      </h3>
                    </a>
                    <p>TI-RK-4PT-45</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product7" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->


              </div>
            </div>

        </section>

      </section>
      <!--FIn de secction gabinete-->


      <!--Inicio de secction NEMA-->
      <section id="section6" class="section" style="display: none;">
        <section id="racks">
          <div class="area">
            <div class="profile">
              <div class="profile-info">
                <h2>Gabinetes Indoor </h2>
                <p>
                  Los gabinetes Indoor de Transformetal están diseñados para adaptarse a
                  una amplia variedad de necesidades. Disponibles en múltiples dimensiones,
                  cuentan con características innovadoras como placas traseras universales o
                  específicas, ideales para la integración con equipos como puntos de acceso
                  (AP) Wi-Fi, Wi-Fi 6 y otros dispositivos electrónicos.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section6" onclick="showSection('section6'); event.preventDefault();" style="color: #d14013;">Indoor</a></li>
                  <li></li>
                  <li><a href="#section7" onclick="showSection('section7'); event.preventDefault();">Outdoor</a></li>
                  <li></li>
                  <li><a href="#section8" onclick="showSection('section8'); event.preventDefault();">Micro Data Center</a></li>
                </ul>
              </div>
            </div>
            <!--Fin COntenido-->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">NEMA (Indoor)</h2>
                <!--Caseta para transformador-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/GABINETE PARA GENERADOR 2.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" href="DetalleProduct.php#product1" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px" href="DetalleProduct.php#product1">CASETA PARA TRANSFORMADORES O MOTO GENERADORES</h3>
                    </a>
                    <p>TI-GI-210210117-DES-2P</p>
                  </div>
                  <a href="DetalleProduct.php#product4" class="btnInfo">Mostrar Detalles</a>

                </div>

                <!--indoor-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/nema1-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" href="DetalleProduct.php#product1" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px" href="DetalleProduct.php#product1">CAJA NEMA OUTDOOR DE PARED-0.76m</h3>
                    </a>
                    <p>GBO-PD-VV-0.76-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product1" class="btnInfo">Mostrar Detalles</a>

                </div>

                <!--NEma1-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/nema1-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" href="DetalleProduct.php#product1" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px" href="DetalleProduct.php#product1">CAJA NEMA OUTDOOR DE PARED-0.76m</h3>
                    </a>
                    <p>GBO-PD-VV-0.76-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product1" class="btnInfo">Mostrar Detalles</a>

                </div>
                <!--Nema2-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/nema2-1.png" alt="Antena Yagi" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">CAJA OUTDOOR CON BANDEJAS MONTAJE EN POSTE 22/40/50</h3>
                    </a>
                    <p>CJO-BJ-VV-40/22/50/C-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product2" class="btnInfo">Mostrar Detalles</a>
                </div>

                <!--Nema3-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/nema3-1.png" alt="nema3 Con parrillas" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">CAJA OUTDOOR CON PARRILLAS, MONTAJE EN POSTE 22/40/50 cms</h3>
                    </a>
                    <p>CJO-PR-VV-40/22/50/C-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product3" class="btnInfo">Mostrar Detalles</a>
                </div>

              </div>
            </div>

          </div>
        </section>
      </section>
      <!--FIn de secction NEMA-->

      <!--Inicio de secction Otdoor-->
      <section id="section7" class="section" style="display: none;">
        <section id="racks">
          <div class="area">
            <div class="profile" id="DATE">
              <div class="profile-info">
                <h2> Gabinetes Outdoor</h2>
                <p>

                  Los gabinetes Outdoor de Transformetal están diseñados para resistir las condiciones
                  más exigentes del exterior. Disponibles en múltiples dimensiones, cuentan con características
                  como sellado hermético y placas traseras universales o específicas, ideales para la instalación
                  de equipos como puntos de acceso (AP) Wi-Fi, Wi-Fi 6 y dispositivos de telecomunicaciones.
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section6" onclick="showSection('section6'); event.preventDefault();">Indoor</a></li>
                  <li></li>
                  <li><a href="#section7" onclick="showSection('section7'); event.preventDefault();" style="color: #d14013;">Outdoor</a></li>
                  <li></li>
                  <li><a href="#section8" onclick="showSection('section8'); event.preventDefault();">Micro Data Center</a></li>
                </ul>
              </div>
            </div>
            <!--Fin COntenido-->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">DATA CENTER </h2>
                <!--Data1-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab1-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR INDIVIDUAL CON HE
                        a -48 v DE 1.6m.</h3>
                    </a>
                    <p>GBO-HE-SB-14-1.6-1-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product11" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data1 FIN-->
                <!--Data2-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab2-2.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR DOBLE CON A/C a -48V DE 1.76 m.</h3>
                    </a>
                    <p>GBO-D-AC-1.76-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product12" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data2 FIN-->
                <!--Data3-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab3-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR 5G A/C-1m.</h3>
                    </a>
                    <p>GBO-5G-AC-1.0-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product13" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data3 FIN-->
                <!--Data4-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/Gab4-2.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">ARMARIO ELECTRICO OUTDOOR 1.2X1.2X0.35 MTS DOBLE PUERTA.</h3>
                    </a>
                    <p> TI-GO-1.2X1.2X0.35-DP</p>
                  </div>
                  <a href="DetalleProduct.php#product14" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data4 FIN-->
              </div>
            </div>

          </div>


        </section>

      </section>
      <!--FIn de secction Otdoor-->


      <!--Inicio de secction Otdoor-->
      <section id="section8" class="section" style="display: none;">
        <section id="racks">
          <div class="area">
            <div class="profile" id="DATE">
              <div class="profile-info">
                <h2>Gabinetes de Micro Data Center </h2>
                <p>

                  Los gabinetes de Micro Data Center de Transformetal
                  están diseñados para optimizar el espacio sin comprometer el rendimiento.
                  Perfectos para pequeñas y medianas instalaciones, ofrecen una solución
                  integral con sistemas de enfriamiento, gestión de cables y protección
                  eléctrica incorporados.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section6" onclick="showSection('section6'); event.preventDefault();">Indoor</a></li>
                  <li></li>
                  <li><a href="#section7" onclick="showSection('section7'); event.preventDefault();">Outdoor</a></li>
                  <li></li>
                  <li><a href="#section8" onclick="showSection('section8'); event.preventDefault();" style="color: #d14013;">Micro Data Center</a></li>
                </ul>
              </div>
            </div>
            <!--Fin COntenido-->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">DATA CENTER </h2>
                <!--Data1-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab1-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR INDIVIDUAL CON HE
                        a -48 v DE 1.6m.</h3>
                    </a>
                    <p>GBO-HE-SB-14-1.6-1-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product11" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data1 FIN-->
                <!--Data2-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab2-2.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR DOBLE CON A/C a -48V DE 1.76 m.</h3>
                    </a>
                    <p>GBO-D-AC-1.76-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product12" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data2 FIN-->
                <!--Data3-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/gab3-1.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE OUTDOOR 5G A/C-1m.</h3>
                    </a>
                    <p>GBO-5G-AC-1.0-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product13" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data3 FIN-->
                <!--Data4-->
                <div class="product-item">
                  <img src="assets/img/product/gabinete/Gab4-2.png" alt="Antena Yagi" style="max-width: 200px; max-height: 200px" class="product-image" />
                  <div>
                    <a class="product-title">
                      <h3 style="font-size: 15px">GABINETE ELECTRICO OUTDOOR DOBLE PUERTA.</h3>
                    </a>
                    <p>GBO-5G-AC-1.0-21-01-RM</p>
                  </div>
                  <a href="DetalleProduct.php#product14" class="btnInfo">Mostrar Detalles</a>
                </div>
                <!--Data4 FIN-->
              </div>
            </div>

          </div>


        </section>

      </section>
      <!--FIn de secction Otdoor-->

      <!--Inicio de seciones de bandejas-->
      <!--FIn de secction gabinete-->
      <section id="section9" class="section">

        <!--Inicio de secction gabinete-->
        <section id="gabinete">
          <div class="area">
            <div class="profile">
              <div class="profile-info">
                <h2>Bandejas</h2>
                <p>
                  Las bandejas de Transformetal están diseñadas para ofrecer una solución
                  eficiente en la organización y soporte de equipos electrónicos y componentes.
                  Fabricadas con materiales de alta calidad, brindan una gran capacidad de carga,
                  optimizando el espacio y facilitando el acceso a los dispositivos. Además,
                  los diseños pueden personalizarse según las necesidades específicas de cada
                  cliente, garantizando la máxima protección y eficiencia en sus instalaciones.
                  Ideales para mantener los equipos organizados y permitir un mantenimiento sencillo.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section9" onclick="showSection('section9'); event.preventDefault();" style="color: #d14013;">Bandejas</a></li>
                </ul>

              </div>
            </div>


            <!-- inicio Contenido -->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">Productos</h2>
                <!--Inicio gba1-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/bandejas/bandejabateria.png"
                      alt="Antena Yagi"
                      style="width: 200px; max-height: 200px" />
                  </center>

                  <div>
                    <a onclick="showDetails('product1-details')">
                      <h3 style="font-size: 15px">
                        BANDEJA PARA BATERÍAS 23”X25”X3UR
                      </h3>
                    </a>
                    <p>TI-BD-23X25-3UR</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product16" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->
                <!--Inicio gba2-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/bandejas/Bandeja de 19 PLG x XUR2.png"
                      alt="Antena Yagi"
                      style="width: 200px; height: 150px" />
                  </center>
                  <div>
                    <a onclick="showDetails('product1-details') ">

                      <h3 style="font-size: 15px; ">
                        BANDEJA DE 19”X10.5” X 1 UR
                      </h3>
                    </a>
                    <p>TI-BD-19X10.5-1UR</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product15" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->
              </div>
            </div>

        </section>

      </section>
      <!--FIn de secction gabinete-->
      <!--FIn de secction bandejas-->


      <!--Inicio de secction racks-->

      <!--FIn de secction Telcos-->

      <!--FIn de secction riel-->
      <section id="section3-1" class="section">

        <!--Inicio de secction gabinete-->
        <section id="gabinete">
          <div class="area">
            <div class="profile">
              <div class="profile-info">
                <h2>Riel</h2>
                <p>
                  Los rieles de Transformetal están diseñados para proporcionar una solución robusta y
                  flexible en la instalación de equipos y componentes. Fabricados con materiales de alta
                  calidad, nuestros rieles aseguran una instalación segura y eficiente, permitiendo un
                  fácil montaje y ajuste de sus sistemas. Disponibles en diversas configuraciones y tamaños,
                  son ideales para adaptarse a sus necesidades específicas, garantizando estabilidad y
                  soporte duradero para sus proyectos de infraestructura.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section3-1" onclick="showSection('section3-1'); event.preventDefault();" style="color: #d14013;">Rack Industriales</a></li>
                </ul>

              </div>
            </div>


            <!-- inicio Contenido -->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">Productos</h2>
                <!--Inicio gba1-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/Riel/RIEL BEIGE 0.125plg -10.PNG"
                      alt="Antena Yagi" />
                  </center>

                  <div>
                    <a onclick="showDetails('product1-details')">
                      <h3 style="font-size: 15px">
                        RIEL CANALETA “BEIGE” DE 2.4 MTS X 1/8”
                      </h3>
                    </a>
                    <p>TI-RL-2.4-1/8-BEIGE</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product3-1" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->

              </div>
            </div>

        </section>

      </section>
      <!--FIn de secction riel-->

      <!--Inicio de secction Escalerilla-->
      <section id="section4-1" class="section">

        <!--Inicio de secction gabinete-->
        <section id="gabinete">
          <div class="area">
            <div class="profile">
              <div class="profile-info">
                <h2>Escalerilla</h2>
                <p>
                  Las escalerillas de Transformetal están diseñadas para ofrecer un acceso seguro y
                  cómodo a equipos y sistemas en instalaciones industriales y de telecomunicaciones.
                  Fabricadas con materiales resistentes, garantizan una gran durabilidad y estabilidad.
                  Su diseño modular permite adaptarse a diferentes configuraciones y necesidades, facilitando
                  el montaje y mantenimiento de su infraestructura. Con las escalerillas de Transformetal,
                  asegurará un acceso fácil y seguro, optimizando la eficiencia operativa de sus proyectos.
                </p>
              </div>
            </div>
          </div>
          <!--Conetdio menu-->
          <div class="main-container">
            <div class="categories">
              <h2>Categorias</h2>
              <div class="category-list">
                <ul>
                  <li><a href="#section4-1" onclick="showSection('section4-1'); event.preventDefault();" style="color: #d14013;">Rack Industriales</a></li>
                </ul>

              </div>
            </div>


            <!-- inicio Contenido -->
            <div class="contenido">
              <div class="product-list" style="max-width: 950px">
                <h2 style="padding: 5px; margin: auto">Productos</h2>
                <!--Inicio gba1-->
                <div class="product-item">
                  <center>
                    <img
                      src="assets/img/product/Riel/RIEL BEIGE 0.125plg -10.PNG"
                      alt="Antena Yagi" />
                  </center>

                  <div>
                    <a onclick="showDetails('product1-details')">
                      <h3 style="font-size: 15px">
                        RIEL CANALETA “BEIGE” DE 2.4 MTS X 1/8”
                      </h3>
                    </a>
                    <p>TI-RL-2.4-1/8-BEIGE</p>
                  </div>
                  <center>
                    <a href="DetalleProduct.php#product4-1" class="btnInfo">Mostrar Detalles</a>
                  </center>
                </div>
                <!--Info fin -->

              </div>
            </div>

        </section>

      </section>
      <!--FIn de secction Escalerilla-->


  </div>

  <!--inicio de seccion de planta-->
  <section id="planta">
    <!--Inicio de secction  caja-->
    <section id="section50" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Caja</h2>
              <p>
                Las cajas de Transformetal están diseñadas para brindar seguridad
                y organización a sus equipos electrónicos y de telecomunicaciones.
                Fabricadas con materiales de alta calidad, ofrecen resistencia,
                durabilidad y protección contra condiciones externas. Disponibles
                en diversas dimensiones y configuraciones, nuestras cajas se adaptan
                a sus necesidades específicas, garantizando un acceso fácil y una
                instalación eficiente. Transformetal, su mejor opción para soluciones confiables de resguardo.
              </p>
            </div>
          </div>
        </div>
        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <a href="#section50" onclick="showSection('section50'); event.preventDefault();" style="color: #d14013;">Indoor</a>
                <li></li>

              </ul>
            </div>
          </div>
          <!--Fin COntenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos </h2>
              <!--Platina1-->
              <div class="product-item">
                <img src="assets/img/product/caja/caja para fuente1.png" alt="Antena Yagi" style="width: 250px; height: 200px" class="product-image" href="DetalleProduct.php#produc30" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px" href="DetalleProduct.php#product50">CAJA PARA FUENTE ENERGIA CAJA DE 20.5*23.5*7.5</h3>
                  </a>
                  <p> IE-CI-FE-20.5-23.5</p>
                </div>
                <a href="DetalleProduct.php#product50" class="btnInfo">Mostrar Detalles</a>

              </div>


            </div>
          </div>

        </div>
      </section>

    </section>
    <!--Fin de secction caja-->

    <!--Inicio de secction  caja-->
    <section id="section70" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Herrajes</h2>
              <p>
                Los herrajes de Transformetal están diseñados para garantizar la
                fijación y el soporte óptimos en una amplia variedad de aplicaciones.
                Fabricados con materiales resistentes y de alta calidad, ofrecen durabilidad
                y un desempeño confiable en todo tipo de proyectos. Disponibles en diferentes
                tamaños y diseños, se adaptan perfectamente a sus necesidades, proporcionando
                soluciones seguras y eficientes para la instalación y el mantenimiento de
                su infraestructura.
              </p>
            </div>
          </div>
        </div>
        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <a href="#section70" onclick="showSection('section70'); event.preventDefault();" style="color: #d14013;">Herrajes</a>
                <li></li>

              </ul>
            </div>
          </div>
          <!--Fin COntenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos </h2>
              <!--Platina1-->
              <div class="product-item">
                <img src="assets/img/product/herrajes/Bandeja porta cables1.png" alt="Antena Yagi" style="width: 250px; height: 200px" class="product-image" href="DetalleProduct.php#produc30" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px" href="DetalleProduct.php#product70">BANDEJA PORTA CABLES BANDEJA TIPO ESCALERA </h3>
                  </a>
                  <p>IE-HR-BPC-HG-001</p>
                </div>
                <a href="DetalleProduct.php#product70" class="btnInfo">Mostrar Detalles</a>

              </div>

              <!--Product3-->
              <div class="product-item">
                <img src="assets/img/product/herrajes/SoporteTerminacionTrifisica1.png" alt="Antena Yagi" style="width: 250px; height: 200px" class="product-image" href="DetalleProduct.php#produc30" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px" href="DetalleProduct.php#product71">SOPORTE TERMINACION TRIFASICA </h3>
                  </a>
                  <p>IE-HR-STT-001</p>
                </div>
                <a href="DetalleProduct.php#product72" class="btnInfo">Mostrar Detalles</a>

              </div>
              <!--Inicio product-->
              <div class="product-item">
                <center>
                  <img
                    src="assets/img/product/herrajes/BASEANTISISMICA1.png"
                    alt="Antena Yagi"
                    style="width: 200px; max-height: 190px" />
                </center>

                <div>
                  <a onclick="showDetails('product1-details')">
                    <h3 style="font-size: 15px">
                      HERRAJE BASE ANTISISMICA
                    </h3>
                  </a>
                  <p>IE-HR-BA-001</p>
                </div>
                <center>
                  <a href="DetalleProduct.php#product73" class="btnInfo">Mostrar Detalles</a>
                </center>
              </div>
              <!--Info fin -->
            </div>
          </div>

        </div>
      </section>

    </section>
    <!--Fin de secction caja-->

    <!--Inicio de secction  caja-->
    <!--Inicio de secction caja-->
    <section id="section85" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Planta Externa</h2>
              <p>
                Transformetal ofrece soluciones completas para planta externa, diseñadas
                para soportar condiciones climáticas adversas y garantizar la protección
                de su infraestructura. Nuestros productos, fabricados con materiales de
                alta calidad, incluyen gabinetes, soportes, herrajes y sistemas de fijación
                que aseguran un desempeño confiable y duradero. Adaptables a las necesidades
                específicas de cada proyecto, nuestras soluciones optimizan la instalación y
                el mantenimiento de equipos en exteriores, brindando seguridad y eficiencia a su red.
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section85" onclick="showSection('section85'); event.preventDefault();" style="color: #d14013;">Herrajes</a></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/product/herrajes/CRUCETA DE RESERVA PARA CABLEADO2.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px" href="DetalleProduct.php#product71">CRUCETA DE RESERVA PARA CABLEADO</h3>
                  </a>
                  <p>IE-HR-CRC-002</p>
                </div>
                <a href="DetalleProduct.php#product71" class="btnInfo">Mostrar Detalles</a>
              </div>

              <!--Product 2-->
              <div class="product-item">
                <a href="DetalleProduct.php#product50-1">
                  <img src="assets/img/product/planta/ChapaDeRemateTipoD.png" alt="Remate de Anclaje Chapa de Remate Tipo D" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px" href="DetalleProduct.php#product71">REMATE DE ANCLAJE CHAPA DE REMATE TIPO D</h3>
                  </a>
                  <p>TI-PEI-RA-CRD-001</p>
                </div>
                <a href="DetalleProduct.php#product50-1" class="btnInfo">Mostrar Detalles</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!--Fin de secction planta externa-->

    <!--Fin de secction caja-->

  </section>
  <!--Fin de seccion de planta-->

  <!--Seccion de mobiliario-->
  <section>
    <section id="Mobiliario" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Mobiliario</h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section85" onclick="showSection('section85'); event.preventDefault();" style="color: #d14013;">Cate1</a></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  <!--Fin de mobiliario-->

  <!--Seccion de Exhibición y Almacenes-->
  <section>
    <!--Seccion de Exhibición y Almacenes Inicio-->
    <section id="Exhibicion" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Exhibicion</h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#" onclick="showSection(''); event.preventDefault();" style="color: #d14013;">Cate1</a></li>
                <li></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
    <!--Seccion de Exhibición y Almacenes FIN-->

    <!--Gondalas inicio-->
    <section id="Gondolas" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Gondalas</h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section6" onclick="showSection('section6'); event.preventDefault();" style="color: #d14013;">Categoria</a></li>

              </ul>
            </div>

          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
    <!--Gondalas Fin-->

    <!--Estanteria  inicio-->
    <section id="Estanteria" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Estanteria </h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#" onclick="showSection(''); event.preventDefault();" style="color: #d14013;">Categoria</a></li>
                <li></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
    <!--Estanteria  FIn-->

    <!--RackIndustrial  inicio-->
    <section id="RackIndustrial" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Rack Industrial </h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#" onclick="showSection(''); event.preventDefault();" style="color: #d14013;">Categoria</a></li>
                <li></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
    <!--RackIndustrial  FIn-->

  </section>
  <!--Fin de Exhibición y Almacenes-->

  <!--Seccion de Arquitectónicos y Panales Decorativos-->
  <section>
    <section id="Arquitectonicos" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Arquitectonicos</h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section85" onclick="showSection('section85'); event.preventDefault();" style="color: #d14013;">Cate1</a></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  <!--Fin de Arquitectónicos y Panales Decorativos-->

  <!--Seccion de torres inicio-->
  <Section>
    <!--Sectio de torres inicio en general-->
    <!--Inicio de secction torres-->
    <section id="section25" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Sección de torre arriostradas </h2>
              <p>
                Descubra nuestra amplia gama de torres arriostradas en Transformetal,
                diseñadas para cumplir con sus necesidades en infraestructura de comunicación
                inalámbrica. Con una construcción sólida y estabilidad confiable, nuestras torres
                ofrecen resistencia y durabilidad excepcionales, incluso en condiciones climáticas
                adversas. Fortalezca su red de comunicaciones con seguridad, eligiendo entre
                diversos tamaños y especificaciones que se adaptan perfectamente a sus requerimientos
                específicos. Confíe en Transformetal para ofrecerle soluciones de soporte duraderas
                y de alto rendimiento.
              </p>
            </div>
          </div>
        </div>
        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section25" onclick="showSection('section25'); event.preventDefault();" style="color: #d14013;">Sección de torre arriostradas</a></li>
                <li></li>
                <li><a href="#section26" onclick="showSection('section26'); event.preventDefault();">Accesorios para torres</a></li>
               
              </ul>
            </div>
          </div>
          <!--Fin COntenido-->
          <div class=" contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Secciones </h2>
              <!--NEma1-->
              <div class="product-item">
                <img src="assets/img/product/torres/torre/torreSeccion1.png" alt="remate" style="width: 90px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px; margin-left: 50px;"> Sección de Torre de 6 metros</h3>
                  </a>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-STA-12</p>
                </div>
                <a href="DetalleProduct.php#product21" class="btnInfo">Mostrar Detalles</a>
              </div>
              <!--Nema2-->
              <div class="product-item">
                <img src="assets/img/product/torres/torre/torreSeccion1.png" alt="remate" style="width: 90px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px; margin-left: 50px;"> Sección de Torre de 6 metros</h3>
                  </a>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-STA-18</p>
                </div>
                <a href="DetalleProduct.php#product22" class="btnInfo">Mostrar Detalles</a>
              </div>

              <!--Nema2-->
              <div class="product-item">
                <img src="assets/img/product/torres/torre/torreSeccion1.png" " alt=" remate" style="width: 90px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px; margin-left: 50px;"> Sección de Torre de 6 metros</h3>
                  </a>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-STA-24</p>
                </div>
                <a href="DetalleProduct.php#product23" class="btnInfo">Mostrar Detalles</a>
              </div>

            </div>
          </div>

        </div>
      </section>

    </section>
    <!--FIn de secction torres-->
    <!--Inicio de secction torres-->
    <section id="section26" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Accesorios </h2>
              <p>
                Transformetal ofrece una amplia gama de accesorios para torres arriostradas,
                diseñados para garantizar una instalación segura y estable. Contamos con anclas
                de sujeción de alta resistencia, bases para torres arriostradas y bases de cimentación
                que proporcionan el soporte necesario para su infraestructura. Estos accesorios, fabricados
                con materiales duraderos, aseguran que su torre esté firmemente anclada y protegida, optimizando
                su rendimiento y estabilidad en cualquier condición.
              </p>
            </div>
          </div>
        </div>
        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section25" onclick="showSection('section25'); event.preventDefault();">Sección de torre arriostradas</a></li>
                <li></li>
                <li><a href="#section26" onclick="showSection('section26'); event.preventDefault();" style="color: #d14013;">Accesorios para torres</a></li>
                <li></li>
               
              </ul>
            </div>
          </div>
          <!--Fin COntenido-->
          <div class=" contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos </h2>
              <!--NEma1-->
              <div class="product-item">
                <img src="assets/img/product/torres/acces/anclas-torre1.png" alt="remate" style="width: 200px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px; margin-left: 50px;">Anclas para sujeccion de torre arriostradas</h3>
                  </a>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-AN-7</p>
                </div>
                <a href="DetalleProduct.php#product24" class="btnInfo">Mostrar Detalles</a>
              </div>
              <!--product2-->
              <div class="product-item">
                <img src="assets/img/product/torres/acces/baseParaTorres1.png" alt="remate" style="width: 200px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px; margin-left: 50px;"> Base para torres arriostradas</h3>
                  </a>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-BTA-001</p>
                </div>
                <a href="DetalleProduct.php#product25" class="btnInfo">Mostrar Detalles</a>
              </div>

              <!--product3-->
              <div class="product-item">
                <img src="assets/img/product/torres/acces/remateTorres1.png" alt="remate" style="width: 200px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px; margin-left: 50px;"> Remate superior de torre</h3>
                  </a>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-RS-001</p>
                </div>
                <a href="DetalleProduct.php#product26" class="btnInfo">Mostrar Detalles</a>
              </div>

              <!--product2-->
              <div class="product-item">
                <img src="assets/img/product/torres/acces/BaseDeComentacion1.png" alt="remate" style="width: 200px; height: 200px; margin-left: 60px; padding: 5px;" class="product-image" />
                <div>
                  <a class="product-title">
                  </a>
                  <h3 style="font-size: 15px; margin-left: 50px;">Base de cimentacion</h3>
                  <p style="font-size: 15px; margin-left: 50px;">TR-TAA-BC-001</p>
                </div>
                <a href="DetalleProduct.php#product27" class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>

          </div>
      </section>

    </section>
    <!--FIn de secction torres-->




    <!--Inicio de secction sistemas de tierras-->
    <!--Balizas Inicio-->
    <section id="Balizas" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Arquitectonicos</h2>
              <p>
                Esta sección se agregara próximamente
              </p>
            </div>
          </div>
        </div>

        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <li><a href="#section85" onclick="showSection('section85'); event.preventDefault();" style="color: #d14013;">Cate1</a></li>
              </ul>
            </div>
          </div>

          <!--Fin Contenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos</h2>

              <!--Product 1-->
              <div class="product-item">
                <a href="DetalleProduct.php#product71">
                  <img src="assets/img/logo.png" alt="Cruceta de Reserva para Cableado" class="product-image" />
                </a>
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">Productos</h3>
                  </a>
                  <p>PRO-DUC-TO</p>
                </div>
                <a class="btnInfo">Mostrar Detalles</a>
              </div>


            </div>
          </div>
        </div>
      </section>
    </section>
    <!--Balizas Fin-->
    <!--Fin de secction sistemas de tierras-->

    <!--Fin de secction platinas-->
    <!--Inicio de secction platinas-->
    <section id="section14" class="section" style="display: none;">
      <section id="racks">
        <div class="area">
          <div class="profile">
            <div class="profile-info">
              <h2>Platinas</h2>
              <p>
                Las platinas de Transformetal están diseñadas para ofrecer soporte
                y estabilidad en una amplia variedad de aplicaciones. Fabricadas
                con materiales de alta calidad, nuestras platinas garantizan una
                excelente resistencia mecánica y durabilidad. Disponibles en
                diferentes tamaños y especificaciones, son ideales para adaptarse
                a las necesidades específicas de su proyecto, proporcionando una
                solución confiable y eficiente para reforzar su infraestructura.
              </p>
            </div>
          </div>
        </div>
        <!--Conetdio menu-->
        <div class="main-container">
          <div class="categories">
            <h2>Categorias</h2>
            <div class="category-list">
              <ul>
                <a href="#section6" onclick="showSection('section14'); event.preventDefault();" style="color: #d14013;">Platina</a>
                <li></li>
              </ul>
            </div>
          </div>
          <!--Fin COntenido-->
          <div class="contenido">
            <div class="product-list" style="max-width: 950px">
              <h2 style="padding: 5px; margin: auto">Productos </h2>
              <!--Platina1-->
              <div class="product-item">
                <img src="assets/img/product/torres/accesorios/PLATINA DE ACERO GALVANIZADA.png" alt="Antena Yagi" style="width: 250px; height: 200px" class="product-image" href="DetalleProduct.php#produc30" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px" href="DetalleProduct.php#product1">PLATINA DE ACERO GALVANIZADA DE ¼”</h3>
                  </a>
                  <p>TR-ST-HG-4-0.25</p>
                </div>
                <a href="DetalleProduct.php#product30" class="btnInfo">Mostrar Detalles</a>

              </div>
              <!--Nema2-->
              <div class="product-item">
                <img src="assets/img/product/torres/accesorios/PLATINA DE cobre.PNG" alt="Antena Yagi" style="width: 200px; height: 200px" class="product-image" />
                <div>
                  <a class="product-title">
                    <h3 style="font-size: 15px">PLATINA DE COBRE DE ¼”</h3>
                  </a>
                  <p>TR-ST-CU-0.25</p>
                </div>
                <a href="DetalleProduct.php#product31" class="btnInfo">Mostrar Detalles</a>
              </div>

              <!--Nema3-->


            </div>
          </div>

        </div>
      </section>

    </section>
    <!--Fin de secction platinas-->



    <!--FIn section de torres inicio en general-->
  </Section>
  <!--Seccion de torres fin-->

  <div id="loader">
  </div>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/menu.js"></script>

  <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>