<!DOCTYPE html>
<html lang="es-CO">
   <head>
      <!-- Overall sets. -->
      <meta charset="UTF-8" />
      <meta name="author" type="text/pain" href="humans.txt" />
      <meta name="description" content="Desarrollo de prueba técnica PHP de Sebastian Henao." />
      <meta name="keywords" content="konecta, prueba, tecnica, php, sebastian, henao" />
      <meta name="robots" content="index, follow" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
      <link rel="shortcut icon" type="image/x-icon" href="img/ico_favicon.ico" />
      <title>Panel: Konecta Coffee | Prueba técnica PHP de Sebastian Henao</title>
      <!-- Internal styles. -->
      <link rel="stylesheet" href="css/normalize.min.css" />
      <link rel="stylesheet" href="css/animate.min.css" />
      <link rel="stylesheet" href="css/devtian.min.css" />
      <link rel="stylesheet" href="css/styles.min.css" />
      <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Preloader. -->
      <div id="cnt-preloader">
         <div id="preloader">
            <img class="animated infinite pulse" src="img/logo_konecta.png" alt="Konecta Coffee | Cargando contenido del sitio..." />
         </div>
      </div>
      <!-- Contenedor. -->
      <main class="body dt-aitems-center dt-display-flex dt-fdirection-column dt-height-100v dt-jcontent-center dt-width-100 gradient-b">
         <div id="cnt-panel" class="dt-aitems-stretch dt-bshadow dt-display-flex dt-jcontent-sbetween dt-width-70">
            <div id="nav" class="black-dark-b dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-sbetween dt-padding-30p dt-pleft-0 dt-pright-0">
               <div class="dt-pleft-15p dt-pright-15p">
                  <img class="dt-width-100" src="img/logo_konecta-i.png" alt="Konecta Coffee | Logo" />
               </div>
               <div class="dt-width-100">
                  <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100 focus" href="panel.php">
                     <i class="dt-fsize-1_5 fas fa-home"></i>
                     <span class="dt-fsize-0_75 dt-mtop-10p">Panel</span>
                  </a>
                  <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100" href="inventario.php">
                     <i class="dt-fsize-1_5 fas fa-box-archive"></i>
                     <span class="dt-fsize-0_75 dt-mtop-10p">Inventario</span>
                  </a>
                  <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100" href="ventas.php">
                     <i class="dt-fsize-1_5 fas fa-cash-register"></i>
                     <span class="dt-fsize-0_75 dt-mtop-10p">Ventas</span>
                  </a>
               </div>
               <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100" href="index.php">
                  <i class="dt-fsize-1_5 fas fa-power-off"></i>
                  <span class="dt-fsize-0_75 dt-mtop-10p">Salir</span>
               </a>
            </div>
            <div class="black-light-c dt-aitems-fstart dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-30p dt-pleft-45p dt-pright-45p dt-width-100 white-light-b">
               <div class="dt-aitems-center dt-fbasis-0 dt-display-flex dt-fgrow-0 dt-jcontent-sbetween dt-width-100">
                  <h1 class="body dt-fsize-1_5 dt-fweight-700 gradient-c">Konecta Coffee</h1>
                  <div class="dt-aitems-center dt-display-flex">
                     <a class="btn-5 dt-transition-all" href="#"><i class="dt-fsize-1_25 fas fa-cog"></i></a>
                     <i class="dt-fsize-2_5 dt-mleft-20p fas fa-circle-user gradient-c"></i>
                     <span class="dt-fweight-700 dt-mleft-15p">Sebastian Henao</span>
                  </div>
               </div>
               <div class="dt-aitems-center dt-fbasis-0 dt-display-flex dt-fdirection-column dt-fgrow-1 dt-jcontent-center dt-width-100">
                  <h2 class="black-dark-c body dt-fsize-1_25 dt-fweight-700">¿Qué necesitas hacer hoy?</h2>
                  <p class="dt-mtop-15p dt-taling-center">Elige entre las opciones para que podamos ayudarte:</p>
                  <div class="dt-aitems-center dt-display-flex dt-jcontent-center dt-mtop-45p dt-width-100">
                     <a class="btn-6 dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-position-relative dt-transition-all" href="inventario.php">
                        <i class="dt-position-absolute fas fa-check-circle"></i>
                        <i class="dt-fsize-3_25 fas fa-box-archive"></i>
                        <p class="dt-fweight-600 dt-mtop-15p">Inventario</p>
                     </a>
                     <a class="btn-6 dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-mleft-20p dt-position-relative dt-transition-all" href="ventas.php">
                        <i class="dt-position-absolute fas fa-check-circle"></i>
                        <i class="dt-fsize-3_25 fas fa-cash-register"></i>
                        <p class="dt-fweight-600 dt-mtop-15p">Ventas</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <p class="dt-mtop-20p">2023 &copy; <strong>Sebastian Henao</strong>. Todos los derechos reservados.</p>
      </main>
      <!-- Scripts. -->
      <script src="https://kit.fontawesome.com/d198b04909.js" crossorigin="anonymous"></script>
      <script src="plugins/jquery/jquery.min.js"></script>
      <script src="js/scripts.min.js"></script>
   </body>
</html>