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
      <title>Ventas: Konecta Coffee | Prueba técnica PHP de Sebastian Henao</title>
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
                  <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100" href="panel.php">
                     <i class="dt-fsize-1_5 fas fa-home"></i>
                     <span class="dt-fsize-0_75 dt-mtop-10p">Panel</span>
                  </a>
                  <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100" href="inventario.php">
                     <i class="dt-fsize-1_5 fas fa-box-archive"></i>
                     <span class="dt-fsize-0_75 dt-mtop-10p">Inventario</span>
                  </a>
                  <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100 focus" href="ventas.php">
                     <i class="dt-fsize-1_5 fas fa-cash-register"></i>
                     <span class="dt-fsize-0_75 dt-mtop-10p">Ventas</span>
                  </a>
               </div>
               <a class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-10p dt-talign-center dt-transition-all dt-width-100" href="index.php">
                  <i class="dt-fsize-1_5 fas fa-power-off"></i>
                  <span class="dt-fsize-0_75 dt-mtop-10p">Salir</span>
               </a>
            </div>
            <div class="black-light-c dt-aitems-fstart dt-display-flex dt-fdirection-column dt-jcontent-center dt-padding-30p dt-pleft-45p dt-position-relative dt-pright-45p dt-width-100 white-light-b">
               <!-- Form modal. -->
               <div id="frm-modal" class="dt-aitems-center dt-display-flex dt-height-100 dt-jcontent-center dt-position-absolute dt-width-100 dt-zindex-999 float-modal">
                  <div class="dt-aitems-center dt-display-flex dt-fdirection-column dt-jcontent-center ldr-modal white-light-c">
                     <i class="dt-fsize-3 fas fa-spinner fa-spin"></i>
                     <p class="dt-mtop-5p">Cargando formulario...</p>
                  </div>
               </div>
               <div class="dt-aitems-center dt-fbasis-0 dt-display-flex dt-fgrow-0 dt-jcontent-sbetween dt-width-100">
                  <div class="dt-aitems-center dt-display-flex dt-jcontent-fstart">
                     <h1 class="body dt-fsize-1_5"><span class="dt-fweight-700 gradient-c">Konecta Coffee</span> <span class="black-dark-c dt-fweight-400">Ventas</span></h1>
                     <button id="btn-add" class="btn-7 dt-aitems-center dt-button dt-display-iflex dt-fdirection-column dt-fweight-600 dt-jcontent-center dt-mleft-20p dt-transition-all">
                        <i class="fas fa-plus"></i>
                     </button>
                  </div>
                  <div class="dt-aitems-center dt-display-flex">
                     <a class="btn-5 dt-transition-all" href="{{ url('/configuracion') }}"><i class="dt-fsize-1_25 fas fa-cog"></i></a>
                     <i class="dt-fsize-2_5 dt-mleft-20p fas fa-circle-user gradient-c"></i>
                     <span class="dt-fweight-700 dt-mleft-15p">Sebastian Henao</span>
                  </div>
               </div>
               <div class="dt-height-1p dt-mbottom-20p dt-mtop-20p dt-width-100 white-dark-b"></div>
               <div class="cnt-scroll dt-aitems-center dt-fbasis-0 dt-display-flex dt-fdirection-column dt-fgrow-1 dt-pright-10p dt-width-100">
                  <table class="dt-width-100 table">
                     <thead>
                        <th></th>
                        <th>Factura</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th></th>
                     </thead>
                     <tbody>
                        <tr>
                           <td><i class="fas fa-check-circle gradient-c"></i></td>
                           <td>0001</td>
                           <td>Mouse inhalambrico</td>
                           <td>20</td>
                           <td>
                              <div class="dt-aitems-center dt-display-flex dt-jcontent-fstart">
                                 <button class="btn-5 dt-button dt-transition-all"><i class="fas fa-pen"></i></button>
                                 <button class="btn-5 dt-button dt-mleft-15p dt-transition-all"><i class="fas fa-trash"></i></button>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="dt-height-1p dt-mbottom-20p dt-mtop-20p dt-width-100 white-dark-b"></div>
               <div class="dt-aitems-center dt-fbasis-0 dt-display-flex dt-fgrow-0 dt-jcontent-sbetween dt-width-100">
                  <div>
                     <a href="panel.php"><i class="fas fa-home gradient-c"></i> <span class="black-dark-c dt-fweight-700">Panel</span></a>
                     <i class="fas fa-caret-right dt-mleft-15p dt-mright-15p gray-light-c"></i>
                     <a href="ventas.php"><i class="fas fa-cash-register gradient-c"></i> <span class="black-dark-c dt-fweight-700">Ventas</span></a>
                  </div>
                  <div>
                     <span class="black-dark-c dt-fweight-700">Accesos rápidos</span>
                     <a class="btn-5 dt-mleft-20p dt-transition-all" href="panel.php"><i class="dt-fsize-1_25 fas fa-house"></i></a>
                     <a class="btn-5 dt-mleft-15p dt-transition-all" href="inventario.php"><i class="dt-fsize-1_25 fas fa-box-archive"></i></a>
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
      <script>
         // Declaración de variables.
         let btn_add = document.querySelector('#btn-add');
         let frm_add = document.querySelector('#frm-modal');
         let opn_scl = false;
         let xhr = new XMLHttpRequest();

         // Mostrar listado.
         xhr.onload = function() {
            if(xhr.status >= 200 && xhr.status < 300) {
               let resp = JSON.parse(xhr.response);

               if(resp.message){
                  console.log(resp);
               } else {
                  let html = '';
                  let table = document.querySelector('.table tbody');
                  table.innerHTML = '';

                  for(let i = 0; i < resp.body.length; i++) {
                     console.log(resp);

                     html += `<tr>`;
                        html += `<td><i class="fas fa-check-circle gradient-c"></i></td>`;
                        html += `<td>${ resp.body[i].invoice }</td>`;
                        html += `<td>${ resp.body[i].name }</td>`;
                        html += `<td>${ resp.body[i].quantity }</td>`;
                        html += `<td>
                           <div class="dt-aitems-center dt-display-flex dt-jcontent-fstart">
                              <button id="${ resp.body[i].id }" class="btn-5 dt-button dt-transition-all"><i class="fas fa-pen"></i></button>
                              <button id="${ resp.body[i].id }" class="btn-5 dt-button dt-mleft-15p dt-transition-all"><i class="fas fa-trash"></i></button>
                           </div>
                        </td>`;
                     html += `</tr>`;
                  }

                  table.insertAdjacentHTML('beforeend', html);
               }
            } else {
               console.log('¡Error en listado de productos!');
            }
         }
         
         xhr.open('GET', './php/api/sales/read.php');
         xhr.send();

         // Abrir ventana de formulario.
         btn_add.addEventListener('click', () => {
            frm_add.style.display = 'flex';
         });

         // Cerrar ventana de formulario.
         frm_add.addEventListener('click', (e) => {
            if(!e.target.matches('#btn-cls')) return;
            
            frm_add.style.display = 'none';
            
            opn_scl = false;
         });
      </script>
   </body>
</html>