<div class="seccion" id="contacto">
  <style>
    #contacto
    {
      background: url('<?php echo get_template_directory_uri(); ?>/imagenes/fondo_contacto.png');
      background-size: cover;
      background-position: center;
    }
  </style>
  <div class="blur">
    <h1>Conócenos</h1>
    <p>Queremos saber de tus ideas y proyectos, escríbenos y hagámoslo realidad</p>
    <div id="formulario-conozcanos">
      <?php
        if( function_exists( 'ninja_forms_display_form' ) )
          ninja_forms_display_form( 1 );
      ?>
    </div>
  </div>
  <div id="footer-formulario">
    <!-- redes jace -->
  </div>
</div> <!-- final #contacto -->