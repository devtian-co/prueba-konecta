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
      <title>Konecta Coffee | Prueba técnica PHP de Sebastian Henao</title>
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
         <div id="cnt-login" class="dt-aitems-stretch dt-bshadow dt-display-flex dt-jcontent-sbetween dt-width-65">
            <div class="dt-padding-45p dt-width-50">
               <div class="aitems-center dt-display-flex dt-jcontent-fstart">
                  <img class="logo-min" src="img/logo_konecta.png" alt="Konecta Coffee | Logo" />
               </div>
               <img class="dt-margin-0-auto dt-mtop-45p" src="img/img_login.png" alt="Konecta Coffee | Aplicación" />
               <p class="dt-fsize-1_25 dt-fweight-600 dt-mtop-20p dt-talign-center">Software para la<br/>gestión de tu cafetería.</p>
            </div>
            <div class="black-light-c dt-aitems-fstart dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-45p dt-pleft-60p dt-pright-60p dt-width-50 white-light-b">
               <div class="dt-aitems-center dt-display-flex dt-jcontent-fstart">
                  <i class="dt-fsize-3 fa-solid fa-arrow-right-to-bracket gradient-c"></i>
                  <h1 class="body dt-fsize-1_5 dt-fweight-700 dt-mleft-15p">Bienvenido,<br />inicia sesión</h1>
               </div>
               <form class="dt-width-100" action="panel.php" method="POST">
                  <div class="dt-aitems-fstart dt-display-flex dt-fdirection-column dt-mtop-30p dt-padding-10p dt-pleft-20p dt-pright-20p dt-transition-all dt-width-100 field">
                     <label class="dt-fsize-0_75 dt-ttransform-uppercase gradient-c" for="email"><i class="fas fa-at"></i> Correo electrónico</label>
                     <input class="dt-mtop-5p dt-width-100" type="email" name="email" placeholder="shenao@email.com" required />
                  </div>
                  <div class="dt-aitems-fstart dt-display-flex dt-fdirection-column dt-padding-10p dt-pleft-20p dt-pright-20p dt-transition-all dt-width-100 field">
                     <label class="dt-fsize-0_75 dt-ttransform-uppercase gradient-c" for="password"><i class="fas fa-lock"></i> Contraseña</label>
                     <input class="dt-mtop-5p dt-width-100" type="password" name="password" placeholder="PIN de acceso" required />
                  </div>
                  <button class="btn-4 dt-aitems-center dt-button dt-display-iflex dt-fdirection-column dt-fweight-600 dt-jcontent-center dt-mtop-20p dt-pleft-45p dt-pright-45p dt-transition-all dt-ttransform-uppercase dt-width-100" type="submit">
                     <span>Acceder<i class="dt-mleft-10p fas fa-paper-plane"></i></span>
                  </button>
               </form>
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