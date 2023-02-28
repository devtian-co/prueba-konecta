/*-------------------------------------------------------------------------------------------------------------------
   DECLARATIONS AND DEFINITIONS.
-------------------------------------------------------------------------------------------------------------------*/

   /*-- (D) -> Declaración de variables. --*/

/*-------------------------------------------------------------------------------------------------------------------
   FUNCTIONS.
-------------------------------------------------------------------------------------------------------------------*/

   /** 
   * init
   * (D) -> Función de inicialización.
   */
   function init(){
      /*-- Preloader. --*/
      $('#preloader').fadeOut();
      $('#cnt-preloader').delay(500).fadeOut('slow');
      $('body').css({'overflow-y': 'visible'}); 
   };

/*-------------------------------------------------------------------------------------------------------------------
   INITIALS
-------------------------------------------------------------------------------------------------------------------*/

   $(window).on('load', init); // Llamada a función.