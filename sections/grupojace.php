<?php $template_uri = get_template_directory_uri(); ?>

<div class="seccion" id="grupo-jace">
  <div class="blur">
  <div class="panel-negro-tope-derecho"></div><!-- decorativo -->
  <div class="circulo-naranja">
    <img src="<?php echo $template_uri; ?>/imagenes/circulo_naranja.svg" />
  </div><!-- decorativo -->
    <style>
      #grupo-jace
      {
        background: url('<?php echo $template_uri; ?>/imagenes/fondo_grupo_jace.png');
        background-size: cover;
        background-position: center;
      }
    </style>
    <h1 class="titulo-seccion">Conoce nuestro equipo de trabajo</h1>
    <div class="contenedor-grupo">
      <!-- preload de imagenes hover -->
      <?php
        $loop = new WP_Query( array(
          'post_type' => 'grupo-jace'
        ) );
        if ( $loop->have_posts() ) : ?>
          <div id="contenedor-equipo">
          <?php $integrante = 1; ?>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="integrante" style="position:relative">
              <?php
                $img = '<img style="display:none;" src="'.get_field('imagen_hover').'" />';
                $img = wp_kses( $img, array( 'img' => array( 'style' => array(), 'src' => array() ) ) );
                $img = strip_tags( $img, '<img>' );
                echo $img;
              ?>
              <div class="foto">
                <style>
                  .integrante:nth-child(<?php echo $integrante ?>) .foto
                  {
                    background: url("<?php the_post_thumbnail_url() ?>") no-repeat center !important;
                  }

                  .integrante:nth-child(<?php echo $integrante ?>) .foto-hover
                  {
                    background: url("<?php the_field('imagen_hover') ?>") no-repeat center !important;
                  }
                </style>
              </div>
              <div class="foto-hover">

              </div>
              <div class="texto">
                <h2><?php the_title() ?></h2><br />
                <h3><?php the_field( 'profesion' ) ?></h3><br />
                <h2><?php the_field( 'pais' ) ?></h2>
              </div>
              <?php if( get_field( 'linkedin' ) ) :
                $red = '<a href="'.get_field( 'linkedin' ).'" class="lred" target="_blank"></a>';
                $red = wp_kses( $red, array(
                            'a' => array(
                              'href' => array(),
                              'class' => array(),
                              'target' => array()
                            )
                          )
                        );
                echo $red;
              endif; ?>
            </div>
            <?php $integrante = $integrante + 1; ?>
          <?php endwhile; wp_reset_postdata(); ?>
          </div>
      <?php else : ?>
        <img style="display:none;" src="<?php echo $template_uri ?>/imagenes/equipo/yuly_cardenas_color.png" />
        <img style="display:none;" src="<?php echo $template_uri ?>/imagenes/equipo/carlos_garcia_color.png" />
        <img style="display:none;" src="<?php echo $template_uri ?>/imagenes/equipo/tomas_lorenzo_color.png" />
        <img style="display:none;" src="<?php echo $template_uri ?>/imagenes/equipo/carlos_montiel_color.png" />
        <img style="display:none;" src="<?php echo $template_uri ?>/imagenes/equipo/jorge_flores_color.png" />
        <img style="display:none;" src="<?php echo $template_uri ?>/imagenes/lhover.svg" />

      <div id="contenedor-equipo">
        <div class="integrante">
          <div class="foto">
          </div>
          <div class="texto">
            <h2>YULY CÁRDENAS</h2><br />
            <h3>Psicólogo</h3><br />
            <h2>ARGENTINA</h2>
          </div>
        </div>
        <div class="integrante">
          <div class="foto">
          </div>
          <div class="texto">
            <h2>CARLOS GARCÍA</h2><br />
            <h3>Abogado</h3><br />
            <h2>ARGENTINA</h2>
          </div>
          <a href="https://ar.linkedin.com/pub/rafael-carlos-garcia-fassolo/86/944/614" class="lred" target="_blank">
          </a>
        </div>
        <div class="integrante">
          <div class="foto">
          </div>
          <div class="texto">
            <h2>TOMAS LORENZO</h2><br />
            <h3>Administrador</h3><br />
            <h2>VENEZUELA</h2>
          </div>
          <a href="https://www.linkedin.com/pub/tomas-lorenzo/21/760/532/es" class="lred" target="_blank">
          </a>
        </div>
        <div class="integrante">
          <div class="foto">
          </div>
          <div class="texto">
            <h2>CARLOS MONTIEL</h2><br />
            <h3>Industriólogo</h3><br />
            <h2>VENEZUELA</h2>
          </div>
          <a href="https://ve.linkedin.com/pub/carlos-rafael-montiel-matheus/49/529/62" class="lred" target="_blank">
          </a>
        </div>
        <div class="integrante">
          <div class="foto">
          </div>
          <div class="texto">
            <h2>JORGE FLORES</h2><br />
            <h3>Administrador</h3><br />
            <h2>GUATEMALA</h2>
          </div>
          <a href="https://gt.linkedin.com/pub/jorge-alejandro-flores-gonz%C3%A1lez/64/420/580" class="lred" target="_blank">
          </a>
        </div>
        <div class="integrante">
          <div class="foto">
          </div>
          <div class="texto">
            <h2>JAIME CÁRDENAS</h2><br />
            <h3>Ingeniero Indrustrial</h3><br />
            <h2>ARGENTINA</h2>
          </div>
          <a href="https://ar.linkedin.com/pub/jaime-alfonso-cardenas/33/942/57a" class="lred" target="_blank">
          </a>
        </div>
      </div>
    <?php endif; ?>
    </div><!-- final .contenedor-grupo -->
    <div id="fill-grupo"></div><!-- decorativo -->
    <div id="relleno-grupo"></div><!-- decorativo -->

  </div><!-- final .blur -->
  <div id="footer-grupo">
    <?php
      $texto_footer_grupo = false;
      if ( $texto_footer_grupo ) :
        // Sacar info base de datos
      else :
    ?>
      <p>
        Amplia experiencia en empresas de consumo Masivo tales como Unilever, Clorox, Quaker, Mavesa,
        J&J, S.C. Johnson, Loreal; en funciones diversas como Trade Marketing, Customer Service, Category
        Managment, Key Account MT, Distribución TT, y Project Lead.
      </p>
    <?php endif; ?>
  </div>
</div><!-- final #grupo-jace -->