<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TRANSFORMETAL</title>
  <link rel="stylesheet" href="assets/css/StylePorductosDetal.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" />
  <link rel="icon" type="image/png" href="assets/img/logo.png" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" />
</head>
<style>
  body.scroll-ini {
    overflow: hidden;
    position: fixed;
    width: 100%;
  }
</style>

<body onload="checkHash()" class="scroll-ini">

		<!--Header Inicio-->
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
							<i><img src="assets/img/icon/logo.png" alt="100px" style="width: 70px; height: 70px; "></i>
							<h1 class="logo"><a href="./" class="load-link">TRANSFORMETAL</a></h1>
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
							<a href="#" id="industrias-link" class="TituloMenu">Industrias</a>
							<ul class="nav-menu" id="industrias-submenu">
								<li><a href="industrias.php#telecom">Telecomunicaciones</a></li>
								<li><a href="industrias.php#ele">Electricidad</a></li>
								<li><a href="industrias.php#auto">Automatización</a></li>
								<li><a href="industrias.php#urba">Urbanismo</a></li>
								<li><a href="industrias.php#banca">Banca</a></li>
								<li><a href="industrias.php#comercio">Comercio</a></li>
								<li><a href="industrias.php#almace">Almacenamiento Industrial</a></li>
								<li><a href="industrias.php#desarrollo">Desarrollo Inmobiliario</a></li>
								<li><a href="industrias.php#aero">Aeroportuaria</a></li>
								<li><a href="industrias.php#hospital">Hospitales</a></li>
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
		<!--Header Fin-->

  <section id="Telecomunicaciones">
    <div class="gabi">


      <!--- 001-GABINETE OUTDOOR DE PARED-0.76m InIcio-->
      <section id="product1" class="product">
        <!--NEMA1 Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section6"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()  "></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/nema1-1.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema1-2.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema1-3.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema1-4.png"
                    alt="Product Image 4" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  Gabinete outdoor de pared -0.76m <br> Modelo: GBO-PD-VV-0.76-21-01-RM
                </h2>
                <p>
                  Gabinete de acero para exteriores está diseñado para proteger equipos
                  electrónicos en ambientes difíciles. Con sistema de enfriamiento por ventilación y filtro,
                  iluminación LED, y seguro con doble cerradura, es ideal para
                  instalaciones robustas al aire libre. Resistente y funcional, garantiza la seguridad y
                  durabilidad de sus equipos en cualquier entorno.
                </p>

                <div class="ficha">
                  <a href="https://drive.google.com/file/d/1zD5dAkAwMYRueqnGLs4jyt-vLZOyCr1f/view?usp=sharing" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento:</td>
                    <td>Reduce la temperatura en 4°C con ventiladores.</td>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Resistente con pintura de poliéster electrostática.</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Cerraduras tipo locker para mayor seguridad.</td>
                  </tr>
                  <tr>
                    <td>Montaje y manejo:</td>
                    <td>Incluye orejas para montaje fácil y seguro.</td>
                  </tr>
                  <tr>
                    <td>Iluminación y energía:</td>
                    <td>Iluminación LED frontal ajustable en voltaje.</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Material de construcción:</td>
                    <td>Lamina rolada en frío #18</td>
                  </tr>
                  <tr>
                    <td>Tipo de enfriamiento:</td>
                    <td>Ventilación con filtro + 4 Ventiladores 12X12 cm</td>
                  </tr>
                  <tr>
                    <td>Voltaje ajustable:</td>
                    <td>120-240 VAC.</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>W 600mm, D 526mm, H 650mm</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>75 Lbs</td>
                  </tr>
                  <tr>
                    <td>Tipo de pintura:</td>
                    <td>Poliéster Electrostática</td>
                  </tr>
                  <tr>
                    <td>Iluminación:</td>
                    <td>LED 5W, 120-240 VAC</td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!---001-GABINETE OUTDOOR DE PARED-0.76m Fin-->

      <!---002-Caja outdoor  con bandejas montaje en poste 22/40/50 InIcio-->
      <section id="product2" class="product">
        <!--NEMA1 Inicio-->
        <section id="productos-nema2">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section6"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/nema2-1.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema2-2.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema2-2.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema2-4.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  Caja outdoor con bandejas montaje en poste 22/40/50 <br> Modelo: CJO-BJ-VV-40/22/50/C-21-01-RM
                </h2>
                <p>
                  Gabinete galvanizado diseñado para proteger equipos de telecomunicaciones en exteriores.
                  Compacto y ligero, con ventilación y filtro integrados para mantener los equipos en óptimas condiciones.
                  Este producto incluye cerradura segura y pintura resistente, ideal para montaje en postes. Garantiza
                  la protección y durabilidad necesarias para las instalaciones al aire libre.
                </p>

                <div class="ficha">
                  <a href="https://drive.google.com/file/d/1u_pmLuRxk9g68jzD5kr5PVN6kjgC4gDD/view?usp=sharing" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Uso del producto:</td>
                    <td>Para instalación de equipos de Telecom.</td>
                  </tr>
                  <tr>
                    <td>Montaje:</td>
                    <td>Montaje para Poste.</td>
                  </tr>
                  <tr>
                    <td>Incluye:</td>
                    <td>2 Bandejas, Opcional: Ventilador de 12X12 cm. 120VAC, Filtro para ventilas.</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones generales</th>
                  </tr>
                  <tr>
                    <td>Producto para instalación:</td>
                    <td>outdoor</td>
                  </tr>
                  <tr>
                    <td>Construcción:</td>
                    <td>Lamina galvanizada #20</td>
                  </tr>
                  <tr>
                    <td>Tipo de enfriamiento:</td>
                    <td>Ventilas con filtro y opcional con ventilador.</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>W 400mm, D 220mm, H 500mm</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>25 Lbs</td>
                  </tr>
                  <tr>
                    <td>Bandeja:</td>
                    <td>Bandeja doble fondo</td>
                  </tr>
                  <tr>
                    <td>Iluminación:</td>
                    <td>LED 5W, 120-240 VAC</td>
                  </tr>
                  <tr>
                    <td>Montaje:</td>
                    <td>4 Orejas para anclaje a pared</td>
                  </tr>
                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!---002-GABINETE OUTDOOR DE PARED-0.76m Fin-->

      <!--- 003-GABINETE OUTDOOR DE PARED-0.76m InIcio-->
      <section id="product3" class="product">
        <!--NEMA3 Inicio-->
        <section id="productos-nema3">
          <main id="productos-nema3" class="section">
            <a
              href="productos.php#section6"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/nema3-1.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema3-2.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema3-4.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/nema3-3.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  GABINETE NEMA OUTDOOR DE PARED -0.76M
                </h2>
                <p>
                  Gabinete de acero para exteriores está diseñado para proteger equipos electrónicos en ambientes
                  difíciles. Construido en lámina galvanizada #18, ofrece durabilidad excepcional. Su sistema de
                  enfriamiento incluye ventilas con filtro y la opción de añadir un ventilador, asegurando que los
                  equipos se mantengan en la temperatura óptima. El acabado en pintura de poliéster electrostática
                  garantiza resistencia a la intemperie, mientras que la cerradura tipo locker proporciona seguridad
                  confiable. Con dos bandejas tipo parrilla ajustables y un casco con sistema de sifón para
                  enfriamiento natural, este gabinete es versátil y eficiente.
                </p>

                <div class="ficha">
                  <a href="https://drive.google.com/file/d/1ZdeyI_Br2ryho8IrDmPqzdkb3m5rJPBv/view?usp=sharing" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento:</td>
                    <td>Reduce la temperatura en 3°C con ventiladores.</td>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Resistente con pintura de poliéster electrostática.</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Cerraduras tipo locker para mayor seguridad.</td>
                  </tr>
                  <tr>
                    <td>Montaje y manejo:</td>
                    <td>Incluye orejas para montaje fácil y seguro.</td>
                  </tr>
                  <tr>
                    <td>Iluminación y energía:</td>
                    <td>Iluminación LED frontal ajustable en voltaje.</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Material de construcción:</td>
                    <td>Lamina rolada en frío #18</td>
                  </tr>
                  <tr>
                    <td>Tipo de enfriamiento:</td>
                    <td>Ventilación con filtro + 4 Ventiladores 12X12 cm</td>
                  </tr>
                  <tr>
                    <td>Voltaje ajustable:</td>
                    <td>120-240 VAC.</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>W 600mm, D 526mm, H 650mm</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>75 Lbs</td>
                  </tr>
                  <tr>
                    <td>Tipo de pintura:</td>
                    <td>Poliéster Electrostática</td>
                  </tr>
                  <tr>
                    <td>Iluminación:</td>
                    <td>LED 5W, 120-240 VAC</td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!---001-GABINETE OUTDOOR DE PARED-0.76m Fin-->


      <!--- CASETA PARA TRANSFORMADORES inicio-->
      <section id="product4" class="product">
        <!--NEMA3 Inicio-->
        <section id="productos-nema3">
          <main id="productos-nema3" class="section">
            <a
              href="productos.php#section6"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 2.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 3.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 1.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 8.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  CASETA PARA TRANSFORMADORES O MOTO GENERADORES <br><br> Modelo: TI-GI-210210117-DES-2P <br><br> SKU: TIGI001

                </h2>
                <p>
                  Caseta para transformadores o moto-generadores desarmable para la facilidad de instalación
                  y transporte, diseñada principalmente para el resguardo de equipo de alta potencia y la prohibición
                  de paso a personas particulares, construidos a medida o conveniencia del equipo utilizando la
                  ventilación natural y el anclaje según los requerimientos.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/Torres/ST/031-CASETA PARA TRANSFORMADOR.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento:</td>
                    <td>Ventilación 360° ajustada a la necesidad del equipo.</td>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Resistente con pintura poliéster electrostática</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Chapa de 3 puntos handling.</td>
                  </tr>
                  <tr>
                    <td>Montaje y manejo:</td>
                    <td>Zócalo para anclaje a piso o al equipo.</td>
                  </tr>
                  <tr>
                    <td>Desmontable:</td>
                    <td>Si</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Material de construcción:</td>
                    <td>Lamina rolada en frío galvanizada calibre #16</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>2100mmX2100mmX1170mm</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>350 Lbs</td>
                  </tr>
                  <tr>
                    <td>Tipo de pintura:</td>
                    <td>Poliéster electrostático</td>
                  </tr>
                  <tr>
                    <td>Ensamble:</td>
                    <td>Armable mediante tornillería</td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!--- CASETA PARA TRANSFORMADORES FIN-->

      <!--- CASETA PARA TRANSFORMADORES inicio-->
      <section id="product4-1" class="product">
        <!--NEMA3 Inicio-->
        <section id="productos-nema3">
          <main id="productos-nema3" class="section">
            <a
              href="productos.php#section6"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 2.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 3.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 1.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/GABINETE PARA GENERADOR 8.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  CASETA PARA TRANSFORMADORES O MOTO GENERADORES <br><br> Modelo: TI-GI-210210117-DES-2P <br><br> SKU: TIGI001

                </h2>
                <p>
                  Caseta para transformadores o moto-generadores desarmable para la facilidad de instalación
                  y transporte, diseñada principalmente para el resguardo de equipo de alta potencia y la prohibición
                  de paso a personas particulares, construidos a medida o conveniencia del equipo utilizando la
                  ventilación natural y el anclaje según los requerimientos.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/Torres/ST/031-CASETA PARA TRANSFORMADOR.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento:</td>
                    <td>Ventilación 360° ajustada a la necesidad del equipo.</td>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Resistente con pintura poliéster electrostática</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Chapa de 3 puntos handling.</td>
                  </tr>
                  <tr>
                    <td>Montaje y manejo:</td>
                    <td>Zócalo para anclaje a piso o al equipo.</td>
                  </tr>
                  <tr>
                    <td>Desmontable:</td>
                    <td>Si</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Material de construcción:</td>
                    <td>Lamina rolada en frío galvanizada calibre #16</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>2100mmX2100mmX1170mm</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>350 Lbs</td>
                  </tr>
                  <tr>
                    <td>Tipo de pintura:</td>
                    <td>Poliéster electrostático</td>
                  </tr>
                  <tr>
                    <td>Ensamble:</td>
                    <td>Armable mediante tornillería</td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!--- CASETA PARA TRANSFORMADORES FIN-->

      <!--- RACK DE 7FT PARA EQUIPOS DE TELECOMUNICACIONES inicio-->
      <section id="product5" class="product">
        <!--NEMA3 Inicio-->
        <section id="productos-nema3">
          <main id="productos-nema3" class="section">
            <a
              href="productos.php#section2"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/Racks/rack1-1.jpg"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/Rack1-2.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/Rack1-3.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/Rack1-4.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  RACK DE 7FT PARA EQUIPOS DE TELECOMUNICACIONES <br><br> Modelo: TI-RK-7FT-19-E <br> SKU: TIRK001

                </h2>
                <p>
                  Un rack de equipos de telecomunicaciones es una estructura metálica diseñada y producida en lamina de 1/8”
                  para alojar de manera ordenada y segura una gran variedad de dispositivos electrónicos y de redes. Con
                  separación de agujeros estándar y paso de rosca 12-24 UNC (Estándar tornillería para rack), cubierto con
                  pintura electrostática color negro mate para mejorar la protección del metal y golpes.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/rack/RACK PARA TELCO 7ft.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <br><br><br>
            <section class="additional-info">

              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Dimensión:</td>
                    <td>19” (Entre agujeros) x 7 ft x 6” x 42 UR</td>
                  </tr>
                  <tr>
                    <td>Material:</td>
                    <td>Lámina rolada en caliente 1/8”</td>
                  </tr>
                  <tr>
                    <td>Peso de carga Max:</td>
                    <td>362Kg</td>
                  </tr>
                  <tr>
                    <td>Acabado:</td>
                    <td>Pintura electrostática color negro mate</td>
                  </tr>
                  <tr>
                    <td>Perforación:</td>
                    <td>Estándar (12-24 UNC)</td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!--- RACK DE 7FT PARA EQUIPOS DE TELECOMUNICACIONES FIN-->

      <!--- RACK PARA BATERIAS DE 7FT X 23” inicio-->
      <section id="product6" class="product">
        <!--NEMA3 Inicio-->
        <section id="productos-nema3">
          <main id="productos-nema3" class="section">
            <a
              href="productos.php#section2"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/Racks/Imagen1.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/rack Bat-2.webp"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/rack-Bat-3.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/rack Bat-4.jpg"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  RACK PARA BATERIAS DE 7FT X 23” <br><br> Modelo: TI-RK-7FT-23-B <br> SKU: TIRK002

                </h2>
                <p>
                  Rack diseñado para soportar banco de baterías de 750Kg, elaborado en lamina rolada en caliente de 3/16”
                  y con separación de agujeros estándar para garantizar el anclaje estándar y paso de rosca 12-24 UNC
                  (Estándar tornillería para rack), cubierto con pintura electrostática color negro mate para mejorar la
                  protección del metal y golpes, además con base amplia para garantizar la instalación segura a piso.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/rack/RACK PARA BATERIAS 7ft.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <br><br><br>
            <section class="additional-info">

              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Distancia en rack:</td>
                    <td>23” (Entre agujeros) x 7 ft x 6” x 42 UR</td>
                  </tr>
                  <tr>
                    <td>Material:</td>
                    <td>Lámina rolada en caliente 3/16””</td>
                  </tr>
                  <tr>
                    <td>Acabado:</td>
                    <td>Pintura electrostática color negro mate</td>
                  </tr>
                  <tr>
                    <td>Peso de carga Max:</td>
                    <td>750Kg</td>
                  </tr>
                  <tr>
                    <td>750Kg:</td>
                    <td>Estándar (12-24 UNC)</td>
                  </tr>
                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!--- RACK PARA BATERIAS DE 7FT X 23”-->


      <!--- RACK PARA BATERIAS DE 7FT X 23” inicio-->
      <section id="product7" class="product">
        <!--NEMA3 Inicio-->
        <section id="productos-nema3">
          <main id="productos-nema3" class="section">
            <a
              href="productos.php#section2"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">

                <div>
                  <img
                    src="assets/img/product/Racks/TIRK0032.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/TIRK0033.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/Racks/TIRK0034.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  Racks de 4 postes 45U <br><br> Modelo: TI-RK-4PT-45 <br><br> SKU: TIRK003
                </h2>
                <p>
                  Marco abierto de estante de combinar la seguridad de un clóset de montaje con la accesibilidad
                  de un rack de 4 postes. Uso en aplicaciones de centro de datos de comunicación y sala de telecomunicaciones.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/rack/Rack Abierto de 4 postes.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <br><br><br>
            <section class="additional-info">

              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Material:</td>
                    <td>Acero de Carbono Comercial</td>
                  </tr>
                  <tr>
                    <td>Protección:</td>
                    <td>Acabado pintura Electrostática</td>
                  </tr>
                  <tr>
                    <td>Tornillería Incluida::</td>
                    <td>Si </td>
                  </tr>

                </table>
              </div>

              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Tipo de Anclajes:</td>
                    <td>Perforaciones en la parte baja para mayor soporte</td>
                  </tr>
                  <tr>
                    <td>Capacidad:</td>
                    <td>45UR</td>
                  </tr>
                  <tr>
                    <td>Uso:</td>
                    <td>IT, Cuarto de Equipos Telecomunicaciones</td>
                  </tr>

                </table>
              </div>
            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!--- RACK PARA BATERIAS DE 7FT X 23”-->

      <!--Inicio seccion de Data center-->
      <!---001-date center Caja outdoor  con bandejas montaje en poste 22/40/50 InIcio-->
      <section id="product11" class="product">
        <!--NEMA1 Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a href="productos.php#section7" class="redirigir" style="margin-left: 300px; font-size: 25px">
              <i class="fa-solid fa-xmark"></i>
            </a>

            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/gab1-1.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab1-2.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab1-3.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab1-4.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  Gabinete outdoor individual con HE a -48 v DE 1.6m. <br> Modelo: GBO-HE-SB-14-1.6-1-RM
                </h2>
                <p>
                  Gabinete exterior IP 55 para telecomunicaciones. Fabricado en lámina galvanizada, 1.6m
                  de altura, con rack de 19" y 35 UR. Doble puerta, cerradura de tres puntos, opciones de
                  enfriamiento, iluminación LED y sensores de alarma. Fácil manejo de cables y montaje seguro.
                  Ideal para condiciones adversas.
                </p>

                <div class="ficha">
                  <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Resistente con pintura de <br><br> poliéster electrostática.</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Cerradura con tres puntos de enclave <br><br>para mayor seguridad.</td>
                  </tr>
                  <tr>
                    <td>Iluminación:</td>
                    <td>Lámparas LED frontal y posterior de -48VDC, 5W.</td>
                  </tr>
                  <tr>
                    <td>Uso del producto:</td>
                    <td>Instalación de equipos de telecomunicaciones.</td>
                  </tr>
                  <tr>
                    <td>Montaje:</td>
                    <td>Incluye orejas para montaje fácil y seguro.</td>
                  </tr>
                  <tr>
                    <td>Manejo:</td>
                    <td>Sistema de escalerillas para ordenamiento y <br><br> fijación de cables, y 4 argollas.</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>

                  <tr>
                    <td>Construcción:</td>
                    <td>Lamina galvanizada #16.</td>
                  </tr>
                  <tr>
                    <td>Tipo de Enfriamiento:</td>
                    <td>Intercambiador de calor de 120W/K o aire acondicionado de 1000W.</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>W 724mm, D 825mm, H 1600mm (más un zócalo de 20 cms de altura).</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>420 Lbs.</td>
                  </tr>
                  <tr>
                    <td>Voltaje ajustable:</td>
                    <td>120-240 VAC.</td>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento adicional:</td>
                    <td>Casco con sistema de sifón para disminuir la carga de calor en el tope de rack.</td>
                  </tr>
                  <tr>
                    <td>Tomacorriente:</td>
                    <td>110 volts frontal y trasero.</td>
                  </tr>
                  <tr>
                    <td>Sistema de tierra física (MGB):</td>
                    <td>Barra de tierra física (MGB) y sistema de distribución.</td>
                  </tr>
                </table>
              </div>

            </section>
          </main>
        </section>
        <!--NEMA1 Inicio-->
      </section>
      <!---001- data center GABINETE OUTDOOR DE PARED-0.76m Fin-->
      <!---002-date center Caja outdoor  con bandejas montaje en poste 22/40/50 InIcio-->
      <section id="product12" class="product">
        <!--002 data center  Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section7"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/gab2-2.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab2-1.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab2-3.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab2-4.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  GABINETE OUTDOOR DOBLE CON A/C a -48V DE 1.76 m.<br> Modelo: GBO-D-AC-1.76-21-01-RM
                </h2>
                <p>
                  Gabinete de acero para exteriores, modelo GBO-D-AC-1.76-21-01-RM, está diseñado para instalació
                  en entornos exigentes, proporcionando una solución robusta y segura para proteger sus equipos
                  de telecomunicaciones. Construido con lámina galvanizada #16 y recubierto con pintura de poliéster
                  electrostática, este gabinete asegura resistencia y durabilidad. Ofrece un sistema de enfriamiento
                  mediante dos aires acondicionados de 1500W a -48V, con monitoreo SNMP, garantizando un ambiente óptimo para sus equipos.
                </p>

                <div class="ficha">
                  <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento:</td>
                    <td>2 aires acondicionados de 1500W a -48V, con facilidad de monitoreo SNMP.</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Cerraduras mulTlock específicas y chapa universal en cada puerta.</td>
                  </tr>
                  <tr>
                    <td>Tomacorriente:</td>
                    <td>110 volts frontal y trasero.</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Sistema de enfriamiento:</td>
                    <td>2 aires acondicionados de 1500W a -48V, con facilidad de monitoreo SNMP.</td>
                  </tr>
                  <tr>
                    <td>Construcción:</td>
                    <td>Lamina galvanizada #20</td>
                  </tr>
                  <tr>
                    <td>Tipo de Enfriamiento:</td>
                    <td>Ventilas con filtro y opcional con ventilador.</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>W 400mm, D 220mm, H 500mm</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>25 Lbs</td>
                  </tr>
                  <tr>
                    <td>Bandeja:</td>
                    <td>Bandeja doble fondo</td>
                  </tr>
                  <tr>
                    <td>Iluminación:</td>
                    <td>LED 5W, 120-240 VAC</td>
                  </tr>
                  <tr>
                    <td>Montaje:</td>
                    <td>4 Orejas para anclaje a pared</td>
                  </tr>
                </table>
              </div>

            </section>
          </main>
        </section>
        <!--002 data center  fin-->
      </section>
      <!---002- data center GABINETE OUTDOOR DE PARED-0.76m Fin-->

      <!---003-date center Caja outdoor  con bandejas montaje en poste 22/40/50 InIcio-->
      <section id="product13" class="product">
        <!--002 data center  Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section7"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/gab3-1.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab3-2.png"
                    alt="Product Image 2" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab3-3.png"
                    alt="Product Image 3" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/gab3-4.png"
                    alt="Product Image 3" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  05-PT-GABINETE OUTDOOR 5G A/C-1m<br> Modelo: GBO-5G-AC-1.0-21-01-RM
                </h2>
                <p>
                  Gabinete Outdoor 5G es una solución robusta y confiable diseñada para la instalación
                  en exteriores con una protección IP 55, ideal para equipos de telecomunicaciones y otros usos.
                  Construido en lámina galvanizada #16, garantiza durabilidad y resistencia a las condiciones ambientales.
                </p>

                <div class="ficha">
                  <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Resistente con pintura de poliéster electrostática.</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Cerradura con dos puntos de enclave para mayor seguridad..</td>
                  </tr>
                  <tr>
                    <td>Montaje:</td>
                    <td>Incluye orejas para montaje fácil y seguro.</td>
                  </tr>
                  <tr>
                    <td>Manejo:</td>
                    <td>Sistema de escalerillas para ordenamiento y fijación de cables, y 4 argollas.</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Construcción:</td>
                    <td>Lamina galvanizada #16</td>
                  </tr>
                  <tr>
                    <td>Tipo de Enfriamiento:</td>
                    <td>Aire acondicionado de 300W o opción de ventilas + ventiladores.</td>
                  </tr>
                  <tr>
                    <td>Dimensiones:</td>
                    <td>Gabinete: W 670mm, D 620mm, H 620mm. Soporte a poste: W 733mm, D 680mm, H 463mm. </td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>Gabinete: 200 lbs. Soporte a poste: 95 lbs.</td>
                  </tr>
                  <tr>
                    <td>Tomacorriente:</td>
                    <td>110 volts frontal y trasero.</td>
                  </tr>
                  <tr>
                    <td>Iluminación:</td>
                    <td>Lámpara LED de -48VDC, 5W con switch.</td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--002 data center  fin-->
      </section>
      <!---003- data center GABINETE OUTDOOR DE PARED-0.76m Fin-->

      <!---004-date center Caja outdoor  con bandejas montaje en poste 22/40/50 InIcio-->
      <section id="product14" class="product">
        <!--004 data center  Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section7"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/gabinete/Gab4-2.png"
                    alt="Product Image 1" />
                </div>
                <div>
                  <img
                    src="assets/img/product/gabinete/Gab4-1.png"
                    alt="Product Image 2" />
                </div>

              </div>
              <div class="product-details">
                <h2>
                  ARMARIO ELECTRICO OUTDOOR 1.2X1.2X0.35 MTS DOBLE PUERTA <br><br> Modelo: TI-GO-1.2X1.2X0.35-DP <br><br> SKU: TIGO001
                </h2>
                <p>
                  Armario eléctrico de lámina galvanizada de 1/16” con protección IP55, doble puerta, chapa antirrobo y casco protector solar.
                  Incluye doble fondo para anclaje de equipos y zócalo de 10 cm para fijación al suelo. Pintura electrostática para uso exterior.
                  ¡Ideal para proteger tus componentes eléctricos!
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/gabinetes/ARMARIO ELECTRICO.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <br><br>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Categoría:</td>
                    <td>1.20 x 1.20 x 0.35 MTS.</td>
                  </tr>
                  <tr>
                    <td>Acabado exterior:</td>
                    <td>Pintura electrostática poliéster</td>
                  </tr>
                  <tr>
                    <td>Seguridad:</td>
                    <td>Chapa estilo Handling de 3 puntos</td>
                  </tr>
                  <tr>
                    <td>Anclaje:</td>
                    <td>Zócalo atornillable a armario y a piso</td>
                  </tr>
                  <tr>
                    <td>Protección del ambiente:</td>
                    <td>Casco de un agua</td>
                  </tr>
                </table>
              </div>
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Especificaciones Generales</th>
                  </tr>
                  <tr>
                    <td>Material de construcción:</td>
                    <td>Cuerpo, zócalo y Casco: Lámina Galvanizada 1/16 <br><br>
                      Doble fondo: Lámina rolada en caliente 3/32”
                    </td>
                  </tr>
                  <tr>
                    <td>Hermeticidad:</td>
                    <td>IP55</td>
                  </tr>
                  <tr>
                    <td>Peso:</td>
                    <td>120 lbs </td>
                  </tr>

                </table>
              </div>

            </section>
          </main>
        </section>
        <!--004 data center  fin-->
      </section>
      <!---003- data center GABINETE OUTDOOR DE PARED-0.76m Fin-->

      <!---bandeja de 19x10.5 Inicio-->
      <section id="product15" class="product">
        <!--004 data center  Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section9"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/bandejas/Bandeja de 19 PLG x XUR4.png"
                    alt="Product Image 1"
                    style="width:400px; height:300px;" />/>
                </div>
                <div>
                  <img
                    src="assets/img/product/bandejas/Bandeja de 19 PLG x XUR-2.png"
                    alt="Product Image 2"
                    style="width:350px;" />
                </div>
                <div>
                  <img
                    src="assets/img/product/bandejas/Bandeja de 19 PLG x XUR3.png"
                    alt="Product Image 2"
                    style="width:200px; height:300px;" />
                </div>
                <div>
                  <img
                    src="assets/img/product/bandejas/Bandeja de 19 PLG x XUR-6.png"
                    alt="Product Image 2"
                    style="width:300px; height:250px;" />
                </div>
              </div>
              <div class="product-details">
                <h2>
                  BANDEJA DE 19”X10.5” X 1 UR <br><br> Modelo: TI-BD-19X10.5-1UR <br><br> SKU: TIBD001
                </h2>
                <p>
                  Bandeja de 19” x 10.5” y 1 UR son ideales para la colocación de equipos en rack o gabinete
                  s de telecomunicaciones, es elaborada en lamina de acero rolada en frio de un milímetro
                  conservando la rigidez de la bandeja mediante los dobleces precisos.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/Bandeja/BANDEJAS DE 19PLG x XUR.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <br><br>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Dimensión en rack:</td>
                    <td>19” x 10.5” x 1 UR</td>
                  </tr>
                  <tr>
                    <td>Dimensión para colocación:</td>
                    <td>483 x 266 x 43 mm</td>
                  </tr>
                  <tr>
                    <td>Material:</td>
                    <td>Lámina de acero rolada en frío</td>
                  </tr>
                  <tr>
                    <td>Acabado:</td>
                    <td>Pintura electrostática color negro mate</td>
                  </tr>
                  <tr>
                    <td>Perforación:</td>
                    <td>Ventilas en toda la dimensión de la bandeja</td>
                  </tr>
                </table>
              </div>


            </section>
          </main>
        </section>
        <!--004 data center  fin-->
      </section>
      <!---bandeja de 19x10.5  Fin-->

      <!---BANDEJA PARA BATERÍAS 23”X25”X3UR  Inicio-->
      <section id="product16" class="product">
        <!--004 data center  Inicio-->
        <section id="productos-nema1">
          <main id="productos-nema1" class="section">
            <a
              href="productos.php#section9"
              style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
                onclick="cerrarYRedirigir()"></a>
            <section class="product-section">
              <div class="product-carousel">
                <div>
                  <img
                    src="assets/img/product/bandejas/AW220NXT20-dest-1-600x600-2.jpg"
                    alt="Product Image 1"
                    style="width:400px; height:300px;" />
                </div>
                <div>
                  <img
                    src="assets/img/product/bandejas/AW220NXT20-dest-1-600x600.jpg"
                    alt="Product Image 2"
                    style="width:400px; height:300px;" />
                </div>
                <div>
                  <img
                    src="assets/img/product/bandejas/bandeja baterias2.png"
                    alt="Product Image 2"
                    style="width:400px; height:300px;" />
                </div>

              </div>
              <div class="product-details">
                <h2>
                  BANDEJA PARA BATERÍAS 23”X25”X3UR <br><br> Modelo: TI-BD-23X25-3UR <br><br> SKU: TIBD002
                </h2>
                <p>
                  Bandeja de alta dureza y resistencia para soportar hasta 300Lbs, elaborada en lámina rolada
                  en caliente de 1/8”, sujetadores hacia el rack independientes para mejorar el anclaje e
                  instalación. Acabado con pintura electrostática color negro mate y texturizado arenoso para
                  evitar deslizamiento de las baterías.
                </p>

                <div class="ficha">
                  <a href="assets/FichaTecnica/Bandeja/BANDEJAS PARA BATERIAS.pdf" target="_blank">Ficha Técnica</a>
                </div>
              </div>
            </section>
            <br><br>
            <section class="additional-info">
              <div class="info-block">
                <table>
                  <tr>
                    <th colspan="2">Detalles</th>
                  </tr>
                  <tr>
                    <td>Dimensión en rack:</td>
                    <td>23” x 25” x 3UR</td>
                  </tr>
                  <tr>
                    <td>Dimensión para colocación:</td>
                    <td>580 x 635 x 150 mm</td>
                  </tr>
                  <tr>
                    <td>Material:</td>
                    <td>Lamina de acero rolada en frío de 1/8”</td>
                  </tr>
                  <tr>
                    <td>Acabado:</td>
                    <td>Pintura electrostática color negro mate</td>
                  </tr>
                  <tr>
                    <td>Perforación:</td>
                    <td>Para paso de cableado lateral</td>
                  </tr>
                </table>
              </div>


            </section>
          </main>
        </section>
        <!--004 data center  fin-->
      </section>
      <!---BANDEJA PARA BATERÍAS 23”X25”X3UR Fin-->

    </div>
    <!---Riel  Inicio-->
    <section id="product3-1" class="product">
      <!--004 data center  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section3-1"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()"></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/Riel/RIEL BEIGE 0.125plg -10.PNG"
                  alt="Product Image 1"
                  style="width:400px; height:300px;" />
              </div>
              <div>
                <img
                  src="assets/img/product/Riel/RIEL BEIGE 0.125plg -11.png"
                  alt="Product Image 2"
                  style="width:400px; height:300px;" />
              </div>
              <div>
                <img
                  src="assets/img/product/Riel/RIEL BEIGE 0.125plg 12.PNG"
                  alt="Product Image 2"
                  style="width:400px; height:300px;" />
              </div>

            </div>
            <div class="product-details">
              <h2>
                RIEL CANALETA “BEIGE” DE 2.4 MTS X 1/8” <br><br> Modelo: TI-RL-2.4-1/8-BEIGE <br><br> SKU: TIRL001
              </h2>
              <p>
                Riel Ideal para los soportes, porta cables para la canalización eléctrica o como fijación de
                eléctricos y tubería. Elaborado en lamina rolada en caliente de 1/8” x 2.40 mts y con perforaciones
                de 3/8” a lo largo de todo el riel.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Riel/RIEL BEIGE 0.125plg.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <br><br>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Dimensión:</td>
                  <td>2.40mts x 40mm x 35 mm</td>
                </tr>
                <tr>
                  <td>Material:</td>
                  <td>Lámina rolada en caliente 1/8”</td>
                </tr>
                <tr>
                  <td>Perforación:</td>
                  <td>Agujeros de 3/8 a lo largo de todo el riel</td>
                </tr>
                <tr>
                  <td>Acabado:</td>
                  <td>Pintura electrostática Beige Arenoso</td>
                </tr>
              </table>
            </div>


          </section>
        </main>
      </section>
      <!--004 data center  fin-->
    </section>
    <!---Riel Fin-->

    <!---Riel  Inicio-->
    <section id="product4-1" class="product">
      <!--004 data center  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section4-1"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()"></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/escalerilla/ESCALERILLA-1.png"
                  alt="Product Image 1"
                  style="width:300px; height:100px; top:70px;" />
              </div>
              <div>
                <img
                  src="assets/img/product/escalerilla/ESCALERILLA2-1.png"
                  alt="Product Image 2"
                  style="width:300px; height:250px;" />
              </div>


            </div>
            <div class="product-details">
              <h2>
                ESCALERILLA DE EXTERIOR 3MTS <br><br> Modelo: TI-EC-3M-12.5 <br><br> SKU: TIEC001
              </h2>
              <p>
                La escalerilla outdoor o exterior permite transportar el cableado a través de las instalaciones
                de sitios o de torres. Por su construcción puede transportar una cantidad de cables considerable
                y de gran calibre, la unión permite un acople rápido en los tramos rectos.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Escalerilla/ESCALERILLA DE EXTERIOR.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <br><br>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Material:</td>
                  <td>Angular de 1 ½” x 1/8”</td>
                </tr>
                <tr>
                  <td>Tipo de carga:</td>
                  <td>Semipesada y Pesada</td>
                </tr>
                <tr>
                  <td>Peldaños:</td>
                  <td>6-9 peldaños de 12.25”</td>
                </tr>
                <tr>
                  <td>Unión:</td>
                  <td>Mediante angular con perforaciones y tornillería</td>
                </tr>
                <tr>
                  <td>Acabado:</td>
                  <td>Pintura anticorrosiva color ROJO ÓXIDO</td>
                </tr>
              </table>
            </div>


          </section>
        </main>
      </section>
      <!--004 data center  fin-->
    </section>
    <!---Riel Fin-->

  </section>
  <!-- TI-->
  <!-- Section de torres -->
  <section id="torres">
    <!-- Sección de Torre Arriostrada de 12”x20’ -->
    <section id="product23" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema23">
        <main class="section">
          <a href="productos.php#section25" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion2.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion3.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion4.png" alt="Product Image 2" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                TORRE ARRIOSTRADA Sección de torre de 6 Metros <br><br> Modelo: TR-TAA-STA-24 <br><br> SKU: TRTAASTA003
              </h2>
              <p>
                Las torres arriostradas son una solución ya que su estructura liviana permite elevar equipo de comunicación hasta 60 metros de altura y de seguridad tales como: enlaces inalámbricos, repetidores de radio, videocámaras, sistema de pararrayos, sistema de señalización nocturna.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/Seccion de Torre Arriostrada de 24.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Sección de torre arriostrada:</td>
                  <td>6 metros de altura o 20 pies.</td>
                </tr>
                <tr>
                  <td>Cara triangular:</td>
                  <td>24”.</td>
                </tr>
                <tr>
                  <td>Sistema de construcción:</td>
                  <td>Tabular con 3 tubos verticales.</td>
                </tr>
                <tr>
                  <td>Sistema Branhcing:</td>
                  <td>Zig Zag.</td>
                </tr>
                <tr>
                  <td>Aplicación:</td>
                  <td>Intemperie suelo o terraza.</td>
                </tr>
              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Construcción:</td>
                  <td>Tubo proceso liviano de 3/4</td>
                </tr>
                <tr>
                  <td>Zig Zag:</td>
                  <td>Varilla corrugada de 3/8”</td>
                </tr>
                <tr>
                  <td>Niple:</td>
                  <td>10 cm.</td>
                </tr>
                <tr>
                  <td>Tornillería para unión:</td>
                  <td>7/16x3 G.5.</td>
                </tr>
                <tr>
                  <td>Tipo de pintura:</td>
                  <td>Protección anticorrosiva <br><br>Blanco y Naranja según normas.</td>
                </tr>
                <tr>
                  <td>Carga máxima:</td>
                  <td>200 kg.</td>
                </tr>
                <tr>
                  <td>Altura máxima:</td>
                  <td>60 metros.</td>
                </tr>
                <tr>
                  <td>Resistencia al viento:</td>
                  <td>200 km/h.</td>
                </tr>
                <tr>
                  <td>Peso unitario:</td>
                  <td>12.5kg.</td>
                </tr>
              </table>
            </div>
          </section>
        </main>
      </section>
    </section>

    <!-- Sección de Torre Arriostrada de 18 inicio -->
    <section id="product22" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema22">
        <main class="section">
          <a href="productos.php#section25" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion2.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion3.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion4.png" alt="Product Image 2" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                TORRE ARRIOSTRADA Sección de torre de 6 Metros <br><br> Modelo: TR-TAA-STA-18 <br><br> SKU: TRTAASTA002
              </h2>
              <p>
                Las torres arriostradas son una solución ya que su estructura liviana permite elevar equipo de comunicación hasta 60 metros de altura y de seguridad tales como: enlaces inalámbricos, repetidores de radio, videocámaras, sistema de pararrayos, sistema de señalización nocturna.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/Seccion de Torre Arriostrada de 18.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Sección de torre arriostrada:</td>
                  <td>6 metros de altura o 20 pies.</td>
                </tr>
                <tr>
                  <td>Cara triangular:</td>
                  <td>18”.</td>
                </tr>
                <tr>
                  <td>Sistema de construcción:</td>
                  <td>Tabular con 3 tubos verticales.</td>
                </tr>
                <tr>
                  <td>Sistema Branhcing:</td>
                  <td>Zig Zag.</td>
                </tr>
                <tr>
                  <td>Aplicación:</td>
                  <td>Intemperie suelo o terraza.</td>
                </tr>
              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Construcción:</td>
                  <td>Tubo proceso liviano de 3/4</td>
                </tr>
                <tr>
                  <td>Zig Zag:</td>
                  <td>Varilla corrugada de 3/8”</td>
                </tr>
                <tr>
                  <td>Niple:</td>
                  <td>10 cm.</td>
                </tr>
                <tr>
                  <td>Tornillería para unión:</td>
                  <td>7/16x3 G.5.</td>
                </tr>
                <tr>
                  <td>Tipo de pintura:</td>
                  <td>Protección anticorrosiva <br><br>Blanco y Naranja según normas.</td>
                </tr>
                <tr>
                  <td>Carga máxima:</td>
                  <td>200 kg.</td>
                </tr>
                <tr>
                  <td>Altura máxima:</td>
                  <td>60 metros.</td>
                </tr>
                <tr>
                  <td>Resistencia al viento:</td>
                  <td>200 km/h.</td>
                </tr>
                <tr>
                  <td>Peso unitario:</td>
                  <td>12.5kg.</td>
                </tr>
              </table>
            </div>
          </section>
        </main>
      </section>
    </section>

    <!-- Sección de Torre Arriostrada de 12”x20’ inicio -->
    <section id="product21" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema21">
        <main class="section">
          <a href="productos.php#section25" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion2.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion3.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/torre/torreSeccion4.png" alt="Product Image 2" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                TORRE ARRIOSTRADA Sección de torre de 6 Metros <br><br> Modelo: TR-TAA-STA-12 <br><br> SKU: TRTAASTA001
              </h2>
              <p>
                Las torres arriostradas son una solución ya que su estructura liviana permite elevar equipo de comunicación hasta 60 metros de altura y de seguridad tales como: enlaces inalámbricos, repetidores de radio, videocámaras, sistema de pararrayos, sistema de señalización nocturna.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/Seccion de Torre Arriostrada de 12.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Sección de torre arriostrada:</td>
                  <td>6 metros de altura o 20 pies.</td>
                </tr>
                <tr>
                  <td>Cara triangular:</td>
                  <td>12”.</td>
                </tr>
                <tr>
                  <td>Sistema de construcción:</td>
                  <td>Tabular con 3 tubos verticales.</td>
                </tr>
                <tr>
                  <td>Sistema Branhcing:</td>
                  <td>Zig Zag.</td>
                </tr>
                <tr>
                  <td>Aplicación:</td>
                  <td>Intemperie suelo o terraza.</td>
                </tr>
              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Construcción:</td>
                  <td>Tubo proceso liviano de 3/4</td>
                </tr>
                <tr>
                  <td>Zig Zag:</td>
                  <td>Varilla corrugada de 3/8”</td>
                </tr>
                <tr>
                  <td>Niple:</td>
                  <td>10 cm.</td>
                </tr>
                <tr>
                  <td>Tornillería para unión:</td>
                  <td>7/16x3 G.5.</td>
                </tr>
                <tr>
                  <td>Tipo de pintura:</td>
                  <td>Protección anticorrosiva <br><br>Blanco y Naranja según normas.</td>
                </tr>
                <tr>
                  <td>Carga máxima:</td>
                  <td>200 kg.</td>
                </tr>
                <tr>
                  <td>Altura máxima:</td>
                  <td>60 metros.</td>
                </tr>
                <tr>
                  <td>Resistencia al viento:</td>
                  <td>200 km/h.</td>
                </tr>
                <tr>
                  <td>Peso unitario:</td>
                  <td>12.5kg.</td>
                </tr>
              </table>
            </div>
          </section>
        </main>
      </section>
    </section>

    <!-- Sección de anclas  inicio -->
    <section id="product24" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema23">
        <main class="section">
          <a href="productos.php#section26" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/acces/anclas-torre1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/acces/anclas-torre2.png" alt="Product Image 2" style="height: 150px; width:300px; " />
              </div>
            </div>
            <div class="product-details">
              <h2>
                ANCLA PARA SUJECIÓN DE TORRE ARRIOSTRADAS <br><br> Modelo: TR-TAA-AN-7 <br><br> SKU: TRTAAAN001
              </h2>
              <p>
                Ancla para la torre arriostrada de tipo expansiva para suelo y de fijación en terraza, fabricada con
                lamina de ¼” para soporte de tensores, varilla lisa de 5/8” x 4’. <br>
                Para torre de 5 secciones o más se necesitan 2 juegos de 3 anclas.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/Ancla para torre arriostrada.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Construcción:</td>
                  <td>Ancla expansiva</td>
                </tr>
                <tr>
                  <td>Platina para soporte de tensores:</td>
                  <td>Lamina de ¼” <br><br> Varilla lisa de 5/8” x 4 pies, con rosca rustica </td>
                </tr>
              </table>
            </div>
          </section>
        </main>
      </section>
    </section>
    <!-- Sección de anclas Fin -->

    <!-- Sección de Base   inicio -->
    <section id="product25" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema23">
        <main class="section">
          <a href="productos.php#section26" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/acces/baseParaTorres1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/acces/baseParaTorres2.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/acces/baseParaTorres3.png" alt="Product Image 2" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                BASE PARA TORRES ARRIOSTRADA <br><br> Modelo: TR-TAA-BTA <br><br> SKU: TRTAABTN001
              </h2>
              <p>
                Base para torre arriostrada, fabricada para ser instalada sobre una preparación de
                concreto especialmente diseñada para la carga de la torre a edificar.Base de la torre
                a ser instalada en la parte inferior de la primera sección de la torre, los ejes cuentan
                con la misma proporción de ensamble que las secciones de la torre.


              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/BASE PARA TORRE ARRIOSTRADA.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Construcción:</td>
                  <td>Planita de 35 X 35 cms de 1/4.</td>
                </tr>
                <td>Planita de 35 X 35 cms de 1/4.</td>
                </tr>
                <tr>
                  <td>Platina para soporte de tensores:</td>
                  <td>Lamina de ¼” <br><br> Varilla lisa de 5/8” x 4 pies, con rosca rustica </td>
                </tr>
              </table>
            </div>
          </section>
        </main>
      </section>
    </section>
    <!-- Sección de Base Fin -->

    <!-- Sección de remate de torre ariostrada   inicio -->
    <section id="product26" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema23">
        <main class="section">
          <a href="productos.php#section26" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/acces/remateTorres1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/acces/remateTorres2.png" alt="Product Image 2" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                REMATE PARA TORRE<br><br> Modelo: TR-TAA-RSTA <br><br> SKU: TRTAARSTA001
              </h2>
              <p>
                Remate superior de torre arriostrada, de alta precisión por lo cual la torre queda perfectamente recta y
                vertical, la función de la estructura metálica es proteger la torre del agua y de la lluvia en el interior,
                fabricada con tubo de ¾”. En el extremo superior encontraremos el copete que es la terminación de la torre
                donde se instalara un pararrayos que bajara al sistema de tierras
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/Remate de torre arriostrada  de 12.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Función Principal:</td>
                  <td>Protejer la torre del agua y la lluvia</td>
                </tr>
                <tr>
                  <td>Fabricado con:</td>
                  <td>tuvo de 3/4” </td>
                </tr>
                <tr>
                  <td></td>
                  <td>12 pulgadas entre ejes</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Platina 8cm x 5 cm grosor de 3/16”</td>
                </tr>
                <tr>
                  <td>Altura:</td>
                  <td>1.72M</td>
                </tr>
              </table>
            </div>
          </section>
        </main>
      </section>
    </section>
    <!-- Sección de remate de torre ariostrada Fin -->

    <!-- Sección de remate de torre ariostrada   inicio -->
    <section id="product27" class="product">
      <!-- 004 data center Inicio -->
      <section id="productos-nema23">
        <main class="section">
          <a href="productos.php#section26" style="margin-left: 300px; font-size: 25px" onclick="cerrarYRedirigir()">
            <i class="fa-solid fa-xmark"></i>
          </a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img src="assets/img/product/torres/acces/BaseDeComentacion1.png" alt="Product torre 1" />
              </div>
              <div>
                <img src="assets/img/product/torres/acces/BaseDeComentacion2.png" alt="Product Image 2" />
              </div>
              <div>
                <img src="assets/img/product/torres/acces/BaseDeComentacion3.png" alt="Product Image 2" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                BASE DE CIMENTACIÓN<br><br> Modelo: TR-TAA-BC<br><br> SKU: TRTAABC001
              </h2>
              <p>
                Base para cimentación de torre arriostrada. El propósito es proporcionar el medio para que
                la carga de la estructura (torre arriostrada), concentradas en columnas o en muros, se transmitan
                al terreno produciendo en este un sistema de esfuerzos que puedan ser resistidos con seguridad
                sin producir asentamientos o con asentamientos tolerables.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/BASE DE CIMENTACION TORRE ARRIOSTRADA.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Fabricada con:</td>
                  <td>Varrilla corrugada de 3/8" Y 3/4" <br><br>Varilla roscada de 3/4 <br><br>Tuercas de 3/4"<br><br>Hierro de 60cm.</td>
                </tr>
                <tr>
                  <td>Dimensiones:</td>
                  <td>Altura 1.05M, ancho 0.51M y largo 0.51M </td>
                </tr>

              </table>
            </div>
          </section>
        </main>
      </section>
    </section>
    <!-- Sección de remate de torre ariostrada Fin -->
    <!--Sección de sitemas de tierras  INICIO -->
    <!--Sección de sitemas de tierras pltina galvazada1/4 inicio--->
    <section id="product30" class="product">
      <!--NEMA1 Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section14"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()"></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/torres/accesorios/PLATINA DE ACERO GALVANIZADA.png"
                  alt="Product Image 1"
                  style="width: 300px;" />
              </div>
              <div>
                <img
                  src="assets/img/product/torres/accesorios/PLATINA DE ACERO GALVANIZADA-img3.png"
                  alt="Product Image 2"

                  style="width: 300px; height: 200px;" />
              </div>

            </div>
            <div class="product-details">
              <h2>
                PLATINA DE ACERO GALVANIZADA DE ¼” <br> <br> Modelo: TR-ST-HG-4-0.25 <br> <br>SKU: TRST001
              </h2>
              <p>
                Platina de acero negro de ¼” galvanizada (HG), su función es derivar y/o
                distribuir los hilos/cables de tierra de las diferentes aplicaciones o equipos
                a proteger, estos pueden ser tanto de manera directa o mediante la utilización
                de conectores o acopladores secundarios.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/030-PLATINA GALVANIZADA 0.25plg.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block" style="left:-50px;">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Material de construcción:</td>
                  <td>Acero negro de ¼”</td>
                </tr>
                <tr>
                  <td>Material de construcción:</td>
                  <td>Acero negro de ¼”</td>
                </tr>
                <tr>
                  <td>Recubrimiento:</td>
                  <td>Galvanizado en Caliente (HG)</td>
                </tr>
                <tr>
                  <td>Dimensiones:</td>
                  <td>50cm x 4” x 0.25”</td>
                </tr>
                <tr>
                  <td>Agujeros:</td>
                  <td>30 x 12mm 36 x 8mm 2 x 10mm</td>
                </tr>
                <tr>
                  <td>Peso:</td>
                  <td>5 Lbs</td>
                </tr>
                <tr>
                  <td>Certificación:</td>
                  <td>ASTM 123
                  <td>
                </tr>
                <tr>
                  <td>Iluminación:</td>
                  <td>LED 5W, 120-240 VAC</td>
                </tr>

              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--Sección de sitemas de tierras pltina galvazada1/4 fin--->
    <!--Sección de sitemas de tierras pltina cobre inicio--->
    <section id="product31" class="product">
      <!--NEMA1 Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section14"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()"></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/torres/accesorios/PLATINA DE cobre.PNG"
                  alt="Product Image 1"
                  style="width: 400px;" />
              </div>


            </div>
            <div class="product-details">
              <h2>
                PLATINA DE COBRE DE ¼” <br> <br> Modelo: TR-ST-CU-0.25 <br> <br>SKU: TRST002
              </h2>
              <p>
                Platina de cobre, su función es derivar y/o distribuir los
                hilos/cables de tierra de las diferentes aplicaciones o equipos a
                proteger, estos pueden ser tanto de manera directa o mediante la
                utilización de conectores o acopladores secundarios, mejorando la
                impedancia dentro de sistemas indoor.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/032-PLATINA DE COBRE.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block" style="left:-50px;">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Material:</td>
                  <td>Hembra de cobre de ¼”</td>
                </tr>
                <tr>
                  <td>Dimensiones:</td>
                  <td>D5 cm x 2”</td>
                </tr>
                <tr>
                  <td>Agujeros:</td>
                  <td>45 x ¼” 2 x 5/16”</td>
                </tr>
                <tr>
                  <td>Peso::</td>
                  <td>2.5 lbs.</td>
                </tr>
                <tr>
                  <td>Impedancia:</td>
                  <td>0.4 Ohms.</td>
                </tr>


              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--Sección de sitemas de tierras pltina cobre fin--->
    <section id="product32-1" class="product">
      <!--NEMA1 Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section14"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()"></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/torres/accesorios/PLATINA DE cobre.PNG"
                  alt="Product Image 1"
                  style="width: 400px;" />
              </div>


            </div>
            <div class="product-details">
              <h2>
                PLATINA DE COBRE DE ¼” <br> <br> Modelo: TR-ST-CU-0.25 <br> <br>SKU: TRST002
              </h2>
              <p>
                Platina de cobre, su función es derivar y/o distribuir los
                hilos/cables de tierra de las diferentes aplicaciones o equipos a
                proteger, estos pueden ser tanto de manera directa o mediante la
                utilización de conectores o acopladores secundarios, mejorando la
                impedancia dentro de sistemas indoor.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Torres/ST/032-PLATINA DE COBRE.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">

            <div class="info-block" style="left:-50px;">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Material:</td>
                  <td>Hembra de cobre de ¼”</td>
                </tr>
                <tr>
                  <td>Dimensiones:</td>
                  <td>D5 cm x 2”</td>
                </tr>
                <tr>
                  <td>Agujeros:</td>
                  <td>45 x ¼” 2 x 5/16”</td>
                </tr>
                <tr>
                  <td>Peso::</td>
                  <td>2.5 lbs.</td>
                </tr>
                <tr>
                  <td>Impedancia:</td>
                  <td>0.4 Ohms.</td>
                </tr>


              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--Sección de sitemas de tierras pltina cobre fin--->

    <!--Sección de sitemas de tierras  FIN -->
    <!---torres fin-->
  </section>
  </section>

  <!--- Planta InIcio-->
  <section id="planta">
    <!--- CAJA INDOOR Inicio -->
    <section id="product50" class="product">
      <!--Caja1  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section50"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()  "></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/caja/caja para fuente1.png"
                  alt="Product Image 1" />
              </div>
              <div>
                <img
                  src="assets/img/product/caja/caja para fuente2.png"
                  alt="Product Image 2" />
              </div>
              <div>
                <img
                  src="assets/img/product/caja/caja para fuente3.png"
                  alt="Product Image 3" />
              </div>
              <div>
                <img
                  src="assets/img/product/caja/caja para fuente4.png"
                  alt="Product Image 4" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                CAJA PARA FUENTE ENERGIA CAJA DE 20.5*23.5*7.5 <br><br> Modelo: IE-CI-FE-20.5-23.5 <br><br>SKU: IEICI001
              </h2>
              <p>
                Caja metálica diseñado para la protección e instalación de fuente y
                accesorios para controles de acceso, garantizando la protección de los
                accesorios a instalar, con perforaciones adecuadas al diseño.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Electrico/Caja para Fuente de Energia.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Acabado exterior:</td>
                  <td>Resistente con pintura de poliéster electrostática.</td>
                </tr>
                <tr>
                  <td>Seguridad:</td>
                  <td>Aberturas para instalación de chapas.</td>
                </tr>
                <tr>
                  <td>Montaje y manejo:</td>
                  <td>Perforaciones para fácil manejo de anclaje de equipos.</td>
                </tr>

              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Material de construcción:</td>
                  <td>Lámina rolada en frío #0.70</td>
                </tr>
                <tr>
                  <td>Dimensiones:</td>
                  <td>W 205mm, D 75mm, H 235mm</td>
                </tr>
                <tr>
                  <td>Peso:</td>
                  <td>3 libras.</td>
                </tr>
                <tr>
                  <td>Tipo de pintura::</td>
                  <td>Poliéster electrostático</td>
                </tr>


              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--- CAJA INDOOR Fin -->

    <!--- Herrajes Uno Inicio -->
    <section id="product70" class="product">
      <!--Caja1  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section70"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()  "></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/herrajes/Bandeja porta cables1.png"
                  alt="Product Image 1" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/Bandeja porta cables2.png"
                  alt="Product Image 2" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/Bandeja porta cables3.png"
                  alt="Product Image 3" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/Bandeja porta cables4.png"
                  alt="Product Image 4" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                BANDEJA PORTA CABLES BANDEJA TIPO ESCALERA <br><br> Modelo: IE-HR-BPC-HG-001 <br><br>SKU: IEHR001
              </h2>
              <p>
                Construcción e infraestructura, pueden ser usados para tender cables de corriente, fuerza, señalización,
                control, alumbrado; todos estos deben tener su respectivo aislamiento para su óptimo funcionamiento. Además,
                facilitan la reparación, corrección, incremento de vías eléctricas, ubicación de fallas; dado que su exposición a
                l aire libre facilita su supervisión y modificación, así como una constante ventilación de los cables.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/Electrico/Portacable tipo Escaleria.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Largo:</td>
                  <td>2440MM.</td>
                </tr>
                <tr>
                  <td>Altura:</td>
                  <td>30MM.</td>
                </tr>
                <tr>
                  <td>Espesro material:</td>
                  <td>1/16” (1.5MM).</td>
                </tr>

              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Acabado:</td>
                  <td>Galvanizado en caliente.</td>
                </tr>
                <tr>
                  <td>Norma de Fabricación:</td>
                  <td>Norma Nema VE-1</td>
                </tr>
                <tr>
                  <td>Tipo de Pestaña:</td>
                  <td>En "CI" C Interna.</td>
                </tr>
              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--- Herrajes uno Fin -->

    <!--- Herrajes dos Inicio -->
    <section id="product71" class="product">
      <!--Caja1  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section85"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()  "></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/herrajes/CRUCETA DE RESERVA PARA CABLEADO2.png"
                  alt="Product Image 1" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/CRUCETA DE RESERVA PARA CABLEADO1.png"
                  alt="Product Image 2" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/CRUCETA DE RESERVA PARA CABLEADO3.png"
                  alt="Product Image 3" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/CRUCETA DE RESERVA PARA CABLEADO4.png"
                  alt="Product Image 4" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                CRUCETA DE RESERVA CRUCETA DE RESERVA PARA CABLEADO <br><br> Modelo: TI-PEO-CR-CRC-001 <br><br>SKU: TIPEO001
              </h2>
              <p>
                La Cruceta fue proyectada para el almacenamiento de la reserva técnica del cable de fibra óptica a lo largo
                de la línea de transmisión, de forma que la acomodación de la red protege al cable de fibra óptica. Su
                osicionamiento en la torre o poste se realiza a través del soporte de fijación, que tiene como concepto
                adaptarse a las diversas situaciones que se presentan en las torres o postes durante la instalación.
              </p>

              <div class="ficha">
                <a href="assets/FichaTecnica/planta/Cruceta para Reserva de Fibra.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Diámetro:</td>
                  <td>74cm.</td>
                </tr>
                <tr>
                  <td>Material:</td>
                  <td>Acero al carbono comercial.</td>
                </tr>
                <tr>
                  <td>Acabado:</td>
                  <td>Pintura electrostática.</td>
                </tr>

              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Tipo de Anclajes:</td>
                  <td>Fleje metálico.</td>
                </tr>
                <tr>
                  <td>Montaje:</td>
                  <td>Columnas, postes o Pared en exterior.</td>
                </tr>
                <tr>
                  <td>Uso:</td>
                  <td>FTTx Planta externa</td>
                </tr>
              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--- Herrajes dos Fin -->

    <!--- Herrajes dos Inicio -->
    <section id="product72" class="product">
      <!--Caja1  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section70"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()  "></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/herrajes/SoporteTerminacionTrifisica1.png"
                  alt="Product Image 1" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/SoporteTerminacionTrifisica2.png"
                  alt="Product Image 2" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/SoporteTerminacionTrifisica3.png"
                  alt="Product Image 3" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/SoporteTerminacionTrifisica4.png"
                  alt="Product Image 4" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                SOPORTE TERMINACION TRIFASICA <br><br> Modelo: IE-HR-STT-001 <br><br>SKU: IEHR002
              </h2>
              <p>
                El soporte para montaje trifásico de terminadores o descargadores es liviano para un fácil
                manejo. Se monta en el poste con un perno pasante de 5/8" y un tirafondo de 1/2”. Los soportes
                están diseñados para el montaje en postes y crucetas de componentes que incluyen cortacircuitos,
                descargadores, terminadores de cables, transformadores, interruptores, condensadores y reguladores.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Herrajes/Soporte terminacion Trifasica.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Materia:</td>
                  <td>Acero de Carbono Comercial.</td>
                </tr>
                <tr>
                  <td>Protección:</td>
                  <td>Galvanizado HG.</td>
                </tr>
                <tr>
                  <td>Tornillería Incluida:</td>
                  <td>Si.</td>
                </tr>

              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Tipo de Anclajes:</td>
                  <td>Perno 5/8 recomendado.</td>
                </tr>
                <tr>
                  <td>Montaje:</td>
                  <td>Poste.</td>
                </tr>
                <tr>
                  <td>Uso:</td>
                  <td>Perno 5/8 recomendado.</td>
                </tr>
              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--- Herrajes dos Fin -->

    <!--- Herrajes dos Inicio -->
    <section id="product73" class="product">
      <!--Caja1  Inicio-->
      <section id="productos-nema1">
        <main id="productos-nema1" class="section">
          <a
            href="productos.php#section70"
            style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
              onclick="cerrarYRedirigir()  "></a>
          <section class="product-section">
            <div class="product-carousel">
              <div>
                <img
                  src="assets/img/product/herrajes/BASEANTISISMICA1.png"
                  alt="Product Image 1" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/BASEANTISISMICA2.png"
                  alt="Product Image 2" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/BASEANTISISMICA3.png"
                  alt="Product Image 3" />
              </div>
              <div>
                <img
                  src="assets/img/product/herrajes/BASEANTISISMICA4.png"
                  alt="Product Image 4" />
              </div>
            </div>
            <div class="product-details">
              <h2>
                HERRAJE BASE ANTESISMICA <br><br> Modelo: IE-HR-BA-001 <br><br>SKU: IEHR003
              </h2>
              <p>
                ELa protección y seguridad de los datos críticos es una prioridad en cualquier empresa,
                sobre todo cuando están ubicadas en zonas sísmicas. Por fortuna, existen diferentes tipos
                de bases antisísmicas, que son soluciones integrales especialmente diseñadas para proteger
                equipos, sistemas y procesos de daños causados por movimientos telúricos.
              </p>
              <div class="ficha">
                <a href="assets/FichaTecnica/Herrajes/Base Antisismica.pdf" target="_blank">Ficha Técnica</a>
              </div>
            </div>
          </section>
          <section class="additional-info">
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Detalles</th>
                </tr>
                <tr>
                  <td>Materia:</td>
                  <td>Acero de Carbono Comercial.</td>
                </tr>
                <tr>
                  <td>Protección:</td>
                  <td>Acabado pintura Electrostática</td>
                </tr>
                <tr>
                  <td>Tornillería Incluida:</td>
                  <td>Si.</td>
                </tr>

              </table>
            </div>
            <div class="info-block">
              <table>
                <tr>
                  <th colspan="2">Especificaciones Generales</th>
                </tr>
                <tr>
                  <td>Tipo de Anclajes:</td>
                  <td>Perforaciones en la parte baja para mayor soporte</td>
                </tr>
                <tr>
                  <td>Medidas:</td>
                  <td>Ajustable a gabinete a sujetar.</td>
                </tr>
                <tr>
                  <td>Uso:</td>
                  <td>IT, Cuarto de Equipos Telecomunicaciones</td>
                </tr>
              </table>
            </div>

          </section>
        </main>
      </section>
      <!--NEMA1 Inicio-->
    </section>
    <!--- Herrajes dos Fin -->

  </section>

  <!--- Herrajes dos Inicio -->
  <section id="product50-1" class="product">
    <!--Caja1  Inicio-->
    <section id="productos-nema1">
      <main id="productos-nema1" class="section">
        <a
          href="productos.php#section85"
          style="margin-left: 300px; font-size: 25px"><i class="fa-solid fa-xmark"></i
            onclick="cerrarYRedirigir()  "></a>
        <section class="product-section">
          <div class="product-carousel">
            <div>
              <img
                src="assets/img/product/planta/ChapaDeRemateTipoD.png"
                alt="Product Image 1" />
            </div>
            <div>
              <img
                src="assets/img/product/planta/ChapaDeRemateTipo2.png"
                alt="Product Image 2" />
            </div>
            <div>
              <img
                src="assets/img/product/planta/ChapaDeRemateTipo3.png"
                alt="Product Image 3" />
            </div>
            <div>
              <img
                src="assets/img/product/planta/ChapaDeRemateTipo4.png"
                alt="Product Image 4" />
            </div>
          </div>
          <div class="product-details">
            <h2>
              CRUCETA DE RESERVA CRUCETA DE RESERVA PARA CABLEADO <br><br> Modelo: IE-HR-CRC-002 <br><br>SKU: IEHR002
            </h2>
            <p>
              Es un herraje de sujeción a poste que garantiza total inmovilidad, gracias a su doble ranura para inserción
              de flejes de acero que proporciona una mejor sujeción. Con su sistema de “ojo”, es capaz de sostener tanto los
              remates (lite tensión / médium tensión) como las suspensiones.
            </p>

            <div class="ficha">
              <a href="assets/FichaTecnica/planta/Chapa de Remate tipo D.pdf" target="_blank">Ficha Técnica</a>
            </div>
          </div>
        </section>
        <section class="additional-info">
          <div class="info-block">
            <table>
              <tr>
                <th colspan="2">Detalles</th>
              </tr>
              <tr>
                <td>Diámetro:</td>
                <td>7.5cm x 10.5cm.</td>
              </tr>
              <tr>
                <td>Material:</td>
                <td>Acero al carbono comercial.</td>
              </tr>
              <tr>
                <td>Acabado:</td>
                <td>Pintura electrostática.</td>
              </tr>

            </table>
          </div>
          <div class="info-block">
            <table>
              <tr>
                <th colspan="2">Especificaciones Generales</th>
              </tr>
              <tr>
                <td>Tipo de Anclajes:</td>
                <td>Fleje metálico.</td>
              </tr>
              <tr>
                <td>Montaje:</td>
                <td>Columnas, postes.</td>
              </tr>
              <tr>
                <td>Uso:</td>
                <td>FTTx Planta externa.</td>
              </tr>
            </table>
          </div>

        </section>
      </main>
    </section>
    <!--NEMA1 Inicio-->
  </section>
  <!--- Herrajes dos Fin -->
  <!--- Planta Fin-->

  <div id="loader">
    <div class="spinner"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const productosLink = document.getElementById('productos-link');
      const productosSubmenu = document.getElementById('productos-submenu');

      productosLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
        productosSubmenu.classList.toggle('show'); // Alternar la clase 'show' para mostrar u ocultar el menú
      });

      document.addEventListener('click', function(event) {
        // Verificar si el clic fue fuera del enlace "Productos" y su menú desplegable
        if (!event.target.closest('#productos-link') && !event.target.closest('#productos-submenu')) {
          productosSubmenu.classList.remove('show'); // Ocultar el menú si se hace clic fuera de él
        }
      });
    });
    /*parte productos  */


    document.addEventListener("DOMContentLoaded", function() {
      const mainCategories = document.querySelectorAll('.main-category');

      mainCategories.forEach(mainCategory => {
        mainCategory.addEventListener('click', function(event) {
          event.preventDefault(); // Prevenir comportamiento por defecto si es un enlace
          const submenu = mainCategory.nextElementSibling;

          // Toggle la visibilidad del submenú al hacer clic
          if (submenu.classList.contains('nav-submenu')) {
            submenu.classList.toggle('show');
          }
        });
      });

      // Cierra el submenú si se hace clic fuera de él
      document.addEventListener('click', function(event) {
        if (!event.target.closest('.main-category') && !event.target.closest('.nav-submenu')) {
          document.querySelectorAll('.nav-submenu.show').forEach(openSubmenu => {
            openSubmenu.classList.remove('show'); // Oculta el submenú si se hace clic fuera de él
          });
        }
      });
    });
    /**industrias  */
    document.addEventListener('DOMContentLoaded', function() {
      const industriasLink = document.getElementById('industrias-link');
      const industriasSubmenu = document.getElementById('industrias-submenu');

      industriasLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
        industriasSubmenu.classList.toggle('show'); // Alternar la clase 'show' para mostrar u ocultar el menú
      });

      document.addEventListener('click', function(event) {
        // Verificar si el clic fue fuera del enlace "Industrias" y su menú desplegable
        if (!event.target.closest('#industrias-link') && !event.target.closest('#industrias-submenu')) {
          industriasSubmenu.classList.remove('show'); // Ocultar el menú si se hace clic fuera de él
        }
      });
    });

    /*servicios */
    document.addEventListener("DOMContentLoaded", function() {
      const serviciosLink = document.getElementById('servicios-link');
      const serviciosSubmenu = document.getElementById('servicios-submenu');

      serviciosLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto del enlace
        serviciosSubmenu.classList.toggle('show'); // Alternar la visibilidad del submenú
      });

      // Cierra el submenú si se hace clic fuera de él
      document.addEventListener('click', function(event) {
        if (!event.target.closest('#servicios-link') && !event.target.closest('#servicios-submenu')) {
          serviciosSubmenu.classList.remove('show'); // Oculta el submenú si se hace clic fuera de él
        }
      });
    });

    /*Nosotros*/
    document.addEventListener("DOMContentLoaded", function() {
      const nosotrosLink = document.getElementById('nosotros-link');
      const nosotrosSubmenu = document.getElementById('nosotros-submenu');

      nosotrosLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto del enlace
        nosotrosSubmenu.classList.toggle('show'); // Alternar la visibilidad del submenú
      });

      document.addEventListener('click', function(event) {
        if (!event.target.closest('#nosotros-link') && !event.target.closest('#nosotros-submenu')) {
          nosotrosSubmenu.classList.remove('show'); // Oculta el submenú si se hace clic fuera de él
        }
      });
    });

    /*Menu de modo responsiv*/

    function showSection(sectionId) {
      var sections = document.getElementsByClassName("section");
      for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove("active");
        sections[i].style.display = "none"; // Mantener el estilo "display" para ocultar secciones
      }

      var sectionToShow = document.getElementById(sectionId);
      if (sectionToShow) {
        sectionToShow.style.display = "block"; // Mostrar la sección antes de aplicar la clase
        setTimeout(function() {
          sectionToShow.classList.add("active");
        }, 10); // Retraso pequeño para permitir que la transición ocurra
      }
    }


    $(document).ready(function() {
      $(".product-carousel").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
      });
    });

    /*secciones */
    function showProduct(productId) {
      var products = document.getElementsByClassName("product");
      for (var i = 0; i < products.length; i++) {
        products[i].style.display = "none";
      }
      var productToShow = document.getElementById(productId);
      if (productToShow) {
        productToShow.style.display = "block";
      }
    }

    function checkHash() {
      var hash = window.location.hash;
      if (hash) {
        showProduct(hash.substring(1));
      } else {
        showProduct("product1");
      }
    }

    window.onhashchange = function() {
      checkHash();
    };

    function cerrarYRedirigir(event) {
      event.preventDefault(); // Evita el comportamiento predeterminado
      // Guarda la posición de scroll actual
      const scrollPosition = window.scrollY;

      // Cambia el hash sin mover el scroll
      window.history.pushState(null, null, "productos.php#section6");

      // Restablece el scroll a la posición guardada
      setTimeout(() => {
        window.scrollTo(0, scrollPosition);
      }, 0);
    }

    function habilitarScroll() {
      document.body.classList.remove('scroll-ini'); // Quita la clase que bloquea el scroll

      // Remueve el evento de escucha después de la primera interacción
      window.removeEventListener('scroll', habilitarScroll);
      window.removeEventListener('wheel', habilitarScroll);
      window.removeEventListener('touchmove', habilitarScroll);
    }

    // Detecta la primera interacción del usuario para habilitar el scroll
    window.addEventListener('scroll', habilitarScroll, {
      once: true
    });
    window.addEventListener('wheel', habilitarScroll, {
      once: true
    });
    window.addEventListener('touchmove', habilitarScroll, {
      once: true
    });
  </script>
  <script src="assets/js/carga.js"></script>
  <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>